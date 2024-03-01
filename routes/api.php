<?php
namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('/v1')->group(function () {
    Route::get('candidates', [CandidateController::class, 'index'])->name('candidate.data');
    Route::post('candidates', [CandidateController::class, 'store'])->name('candidate.store');
    Route::delete('candidates/{id}', [CandidateController::class, 'destroy'])->name('candidate.destroy');

    Route::get('jobs', [JobsController::class, 'index'])->name('jobs.data');
    Route::get('skills', [SkillsController::class, 'index'])->name('skills.data');

});
