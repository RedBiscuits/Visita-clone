<?php

namespace App\Http\Resources\Doctor\Coupon;

use Illuminate\Http\Resources\Json\JsonResource;

class CouponResource extends JsonResource
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
            'id'        => $this->id,
            'name'      => $this->name,
            'discount'  => $this->discount,
            'code'      => $this->code,
            'doctor'    => $this->doctor->name,
        ];

    }
}
