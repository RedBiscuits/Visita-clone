<?php

namespace App\Http\Resources\Patient\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemsResource extends JsonResource
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
            'product_id'    => $this->product_id,
            'product'       => $this->product->title,
            'image'         => $this->product->image,
            'quantity'      => $this->quantity,
            'price'         => $this->price,
            'total_price'   => $this->total,
            'time'          => $this->created_at,
         ];

    }
}
