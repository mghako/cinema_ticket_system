<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'duration', 'released_date'
    ];

    public function shows() {
        return $this->hasMany(Show::class);
    }
    public function showsByToday() {
        return $this->shows()->where('show_date', '2021-11-09');
    }
    public function showsAvailable() {
        // return $this->shows()->where('')
    }
}
