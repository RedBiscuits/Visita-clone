<?php

namespace App\Http\Resources\Doctor\Appoinment;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Doctor\Patient\PatientResource;

class ApoinmentResource extends JsonResource
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
            'id'          => $this->id,
            'patient'     => new PatientResource($this->patient),
            'address'     => $this->address,
            'lat'         => $this->lat,
            'lng'         => $this->lng,

            'date'        => $this->date,
            'time'        => $this->time,
            'status'      => $this->status,

            'price'          => $this->price,
            'payment_method' => $this->payment_method,
            'payment_status' => $this->payment_status,
            'insurance'      => ($this->insurance) ? $this->insurance : null,

            'type'           => $this->type,

            'created_at'     => $this->created_at,

        ];
    }
}
