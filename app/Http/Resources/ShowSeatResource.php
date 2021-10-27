<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowSeatResource extends JsonResource
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
            'id' => $this->id,
            'price' => $this->price,
            'status' => $this->status,
            'cinema_seat' => $this->cinemaSeat,
            'show' => $this->show,
            'booking' => $this->booking
        ];
    }
}
