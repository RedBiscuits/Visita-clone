<?php

namespace App\Http\Resources\Patient\Offer;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patient\Doctor\DoctorResource;

class OfferResource extends JsonResource
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
                'title'         => $this->title,
                'content'       => $this->content,
                'doctor_id'     => $this->doctor_id,
                'discount'      => $this->discount,
                'image'         => $this->image,
                'created_at'    => $this->created_at,
                'doctor'        => new DoctorResource($this->doctor),

            ];

    }
}
