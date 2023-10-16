<?php

namespace App\Http\Resources\Doctor\Department;

use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource
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
            'id'       => $this->id,
            'title'    => $this->title,
            'image'    => $this->image,
            'lat'      => $this->lat,
            'lng'      => $this->lng,
            'address'  => $this->address,
            'featured' => $this->featured,
        ];
    }
}
