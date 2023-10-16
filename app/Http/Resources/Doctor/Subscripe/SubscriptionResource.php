<?php

namespace App\Http\Resources\Doctor\Subscripe;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
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
            'package'         => $this->package->name,
            'amount'          => $this->package->price,
            'status'          => $this->status,
            'expire_date'     => $this->expire_date,
            'start_date'      => $this->start_date,
            'created_at'      => $this->created_at->format('Y-m-d'),

        ];
    }
}
