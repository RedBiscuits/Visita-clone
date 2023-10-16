<?php

namespace App\Http\Resources\Patient\Lab;

use Illuminate\Http\Resources\Json\JsonResource;

class LabResource extends JsonResource
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
            'id'         => $this->id,
            'name'       => $this->name,
            'email'      => $this->email,
            'phone'      => $this->phone,
            'address'    => $this->address,
            'image'      => $this->image,
            'lat'        => $this->lat,
            'lng'        => $this->lng,
            'status'     => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}
