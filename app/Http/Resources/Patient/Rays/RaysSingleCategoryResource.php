<?php

namespace App\Http\Resources\Patient\Rays;

use Illuminate\Http\Resources\Json\JsonResource;

class RaysSingleCategoryResource extends JsonResource
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
            'title'         => $this->title,
            'image'         => $this->image,
            'created_at'    => $this->created_at,
            'rays'          =>  $this->rays,
        ];
    }
}
