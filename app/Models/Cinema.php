<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cities_id'
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function cinemaHalls() {
        return $this->hasMany(CinemaHall::class);
    }
}
