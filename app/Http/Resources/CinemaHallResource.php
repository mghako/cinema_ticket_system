<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CinemaHallResource extends JsonResource
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
            'name' => $this->name,
            'cinema' => $this->cinema->name
        ];
    }
}
