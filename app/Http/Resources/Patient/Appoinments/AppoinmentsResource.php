<?php

namespace App\Http\Resources\Patient\Appoinments;

use Illuminate\Http\Resources\Json\JsonResource;

class AppoinmentsResource extends JsonResource
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
            'doctor'     => $this->doctor->name,
            'image'      => $this->doctor->image,
            'address'    => $this->doctor->address,
            'doctor_id'  => $this->doctor_id,
            'date'       => $this->date,
            'time'       => $this->time,
            'type'       => $this->type,
            'price'      => $this->price,
            'status'     => $this->status,
            'created_at' => $this->created_at->format('Y-m-d'),
        ];


    }
}
