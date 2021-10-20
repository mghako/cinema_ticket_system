<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCinemaHallRequest;
use App\Models\Cinema;
use App\Models\CinemaHall;
use Illuminate\Http\Request;

class CinemaHallController extends Controller
{
    public function show(Cinema $cinema, CinemaHall $cinemaHall) {
        
        return view('pages.cinemaHalls.show', [
            'cinema' => $cinema,
            'cinemaHall' => $cinemaHall->load('cinemaSeats')
        ]);
    }

    public function create(Cinema $cinema) {
        return view('pages.cinemaHalls.create', [
            'cinema' => $cinema
        ]);
    }

    public function store(StoreCinemaHallRequest $request, Cinema $cinema) {
        $cinemaHall = $cinema->CinemaHalls()->create($request->validated());

        return back()->with('success', $cinemaHall->name . ' added !');
    }
}
