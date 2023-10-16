<?php

namespace App\Http\Resources\Doctor\Patient;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id'  => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'image' => $this->image,
            'phone'  => $this->phone
        ];
    }
}
