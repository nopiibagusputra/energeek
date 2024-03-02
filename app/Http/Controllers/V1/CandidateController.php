<?php

namespace App\Http\Controllers\V1;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CandidateResources;
use App\Http\Requests\AddCandidateRequest;
use App\Models\Candidates;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Candidates::all();
        return CandidateResources::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AddCandidateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCandidateRequest $request)
    {
        $cekCandidate = Candidates::where('email', $request->email)
                                    ->where('jobs_id', $request->jobsId)
                                    ->first();

        if ($cekCandidate) {
            return response()->json([
                'error' => 'Data sudah ada dengan email dan jabatan yang sama'
            ], 400);
        }

        Candidates::create([
            'jobs_id'   => $request->jobsId,
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'year'      => $request->year,
        ]);

        return response()->json([
        'message' => 'Customer created successfully'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Candidates::findOrFail($id);
            $data->delete();

            return response()->json([
              'message' => 'Candidate deleted successfully'
            ], 204);
        } catch (Exception $e) {
            return response()->json(['message' => 'Candidate not found'], 404);
        }
    }
}
