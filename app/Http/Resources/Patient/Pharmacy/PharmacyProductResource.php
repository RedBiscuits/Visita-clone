<?php

namespace App\Http\Resources\Patient\Pharmacy;

use Illuminate\Http\Resources\Json\JsonResource;

class PharmacyProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'            => $this->id,
            'title'         => $this->title,
            'content'       => $this->content,
            'price'         => $this->price,
            'image'         => $this->image,
            'created_at'    => $this->created_at,

        ];
    }
}
