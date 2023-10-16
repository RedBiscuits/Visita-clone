<?php

namespace App\Http\Resources\Patient\Doctor;

use Illuminate\Http\Resources\Json\JsonResource;

class SingleDocResource extends JsonResource
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
            'name'          => $this->name,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'image'         => $this->image,
            'hospital_id'   => $this->hospital_id,
            'lat'           => $this->lat,
            'lng'           => $this->lng,
            'address'       => $this->address,
            'clinic'        => $this->clinic,
            'video'         => $this->video,
            'home'          => $this->home,
            'about'         => $this->about,
            'created_at'    => $this->created_at,
            'available'     => doctorAvailable($this->id),
            'worktimes'     => WorktimesResource::collection($this->worktimes),
        ];
    }
}
