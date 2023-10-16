<?php

namespace App\Http\Resources\Doctor\Payment;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'id'              => $this->id,
            'package'         => $this->package->name,
            'amount'          => $this->amount,
            'status'          => ($this->is_success) ? 'success' : 'failed',
            'payment_method'  => $this->payment_method,
            'created_at'     => $this->created_at->format('Y-m-d'),
        ];

    }
}
