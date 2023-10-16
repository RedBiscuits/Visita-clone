<?php

namespace App\Http\Resources\Patient\Prescription;

use Illuminate\Http\Resources\Json\JsonResource;

class PrescriptionsResource extends JsonResource
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
            'image'       => $this->image,
            'content'     => $this->content,
            'pharmacy_id' => $this->pharmacy_id,
            'patient_id'  => $this->patient_id,
            'status'      => $this->status,
            'phrmacy'     => $this->pharmacy,
            'created_at'  => $this->created_at,
        ];

    }
}
