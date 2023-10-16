<?php

namespace App\Http\Resources\Patient\Doctor;

use Illuminate\Http\Resources\Json\JsonResource;

class WorktimesResource extends JsonResource
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
            'id'            => $this->id,
            'day'           => $this->day,
            'from'          => $this->from,
            'to'            => $this->to,
            'created_at'    => $this->created_at,
        ];
    }
}
