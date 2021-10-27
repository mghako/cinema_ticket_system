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
    public function cinemaSeat() {
        return $this->belongsTo(CinemaSeat::class);
    }
    public function show() {
        return $this->belongsTo(Show::class);
    }
    public function booking() {
        return $this->belongsTo(Booking::class);
    }
}
