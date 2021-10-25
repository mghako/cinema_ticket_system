<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'show_date', 'start_time', 'end_time', 'cinema_hall_id', 'movie_id'
    ];
    public function cinemaHall() {
        return $this->belongsTo(CinemaHall::class);
    }
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
