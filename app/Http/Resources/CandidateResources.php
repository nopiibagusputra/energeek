<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CandidateResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'jobsId'    => $this->jobs_id,
            'jobsName'  => $this->job->name,
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'year'      => $this->year,
        ];
    }
}
