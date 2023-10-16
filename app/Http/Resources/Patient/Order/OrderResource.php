<?php

namespace App\Http\Resources\Patient\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'id'         => $this->id,
            'pharmacy'   => $this->pharmacy->name,
            'total'      => $this->total_price,
            'status'     => $this->status,
            'created_at' => $this->created_at->format('Y-m-d'),
            'items'      => OrderItemsResource::collection($this->items),
            'time'       => $this->created_at,

        ];

    }
}
