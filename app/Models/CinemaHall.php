<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaHall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cinema_id'
    ];

    public function cinemaSeats() {
        return $this->hasMany(CinemaSeat::class)->orderBy('seat_number');
    }
}
