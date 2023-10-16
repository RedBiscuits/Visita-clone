<?php

namespace App\Http\Resources\Doctor\Profile;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorProfileResource extends JsonResource
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
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'phone'           => $this->phone,
            'status'          => $this->status,
            'department_id'   => $this->department_id,
            'hospital_id'     => $this->hospital_id,
            'image'           => $this->image,
            'lat'             => $this->lat,
            'lng'             => $this->lng,
            'facebook'        => $this->facebook,
            'twitter'         => $this->twitter,
            'linkedin'        => $this->linkedin,
            'youtube'         => $this->youtube,
            'national_id'     => $this->national_id,
            'national_number' => $this->national_number,
            'access_token'    => $this->access_token,
            'address'         => $this->address,
            'created_at'      => $this->created_at,

            'profit'          => docotrProfit($this->id),
            'orders'          => 0,

            'has_package'     => doctorPackage($this->id),

            'about'           => $this->about,
            'phone_confirmed' => $this->phone_confirmed,
            'clinic'          => $this->clinic,
            'home'            => $this->home,
            'video'           => $this->video,
            'active'          => $this->active,


        ];


    }
}
