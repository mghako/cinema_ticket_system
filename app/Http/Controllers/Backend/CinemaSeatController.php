<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCinemaSeatRequest;
use App\Models\Cinema;
use App\Models\CinemaHall;
use Illuminate\Http\Request;

class CinemaSeatController extends Controller
{
    public function create(Cinema $cinema, CinemaHall $cinemaHall) {
        return view('pages.cinemaSeats.create', [
            'types' => ['name' => 'regular', 'name' => 'premium'],
            'cinema' => $cinema,
            'cinemaHall' => $cinemaHall
        ]);
    }

    public function store(StoreCinemaSeatRequest $request, Cinema $cinema, CinemaHall $cinemaHall) {
        $cinemaSeat = $cinemaHall->cinemaSeats()->firstOrCreate($request->validated());
        
        return back()->with('success', 'Cinema Seat ' . $cinemaSeat->seat_number.' Added');
    }
}
