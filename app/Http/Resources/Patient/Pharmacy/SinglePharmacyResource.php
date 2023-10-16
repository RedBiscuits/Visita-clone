<?php

namespace App\Http\Resources\Patient\Pharmacy;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patient\Product\ProductResource;

class SinglePharmacyResource extends JsonResource
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
        'image'         => $this->image,
        'address'       => $this->address,
        'phone'         => $this->phone,
        'email'         => $this->email,
        'status'        => $this->status,
        'lat'           => $this->lat,
        'lng'           => $this->lng,
        'created_at'    => $this->created_at,
        'products'     => PharmacyProductResource::collection($this->products),
        ];


    }
}
