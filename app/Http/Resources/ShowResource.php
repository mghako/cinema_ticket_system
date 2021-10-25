<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
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
            'show_date' => $this->show_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'movie' => $this->movie->name,
            'cinema_hall' => $this->cinemaHall->name
        ];
    }
}
