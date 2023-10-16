<?php

namespace App\Http\Resources\Patient\Profile;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'phone'           => $this->phone,
            'image'           => $this->image,
            'personalid'      => $this->personalid,
            'address'         => $this->address,
            'phone_confirmed' => $this->phone_confirmed,
            'lat'             => $this->lat,
            'lng'             => $this->lng,
        ];
    }
}
