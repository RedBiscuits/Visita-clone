<?php

namespace App\Http\Resources\Patient\Rays;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patient\Lab\LabResource;

class RaysResource extends JsonResource
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
            'title'       => $this->title,
            'price'       => $this->price,
            'lab'         => new LabResource($this->lab),
            'lab_id'      => $this->lab_id,
            'category'    => new RaysCategoryResource($this->category),
            'category_id' => $this->category_id,
            'status'      => $this->status,
            'created_at'  => $this->created_at,
        ];
    }
}
