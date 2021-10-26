<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowSeat extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'cinema_seat_id', 'show_id', 'booking_id', 'price'
    ];
}
