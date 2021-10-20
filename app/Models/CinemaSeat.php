<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaSeat extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat_number', 'type', 'cinema_hall_id'
    ];
}
