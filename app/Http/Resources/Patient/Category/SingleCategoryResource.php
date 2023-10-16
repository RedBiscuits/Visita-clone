<?php

namespace App\Http\Resources\Patient\Category;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Patient\Doctor\DoctorResource;

class SingleCategoryResource extends JsonResource
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
            'doctors'       => DoctorResource::collection($this->doctors),

        ];
    }
}
