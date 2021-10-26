<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowStoreRequest;
use App\Models\CinemaHall;
use App\Models\CinemaSeat;
use App\Models\Movie;
use App\Models\ShowSeat;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Movie $movie) {
        return view('pages.shows.index');
    }

    public function create(Movie $movie) {
        return view('pages.shows.create',[
            'movie' => $movie,
            'cinema_halls' => CinemaHall::all()
        ]);
    }

    public function store(ShowStoreRequest $request, Movie $movie) {
        // add show to movie
        $created_show = $movie->shows()->firstOrCreate($request->validated());
        // create show seat from cinema_hall`s seat
        $cinemaSeats = CinemaSeat::whereCinemaHallId($created_show->cinema_hall_id)->get();
        // ddd($cinemaSeats);
        foreach ($cinemaSeats as $cinemaSeat) {
            ShowSeat::create([
                'cinema_seat_id' => $cinemaSeat->id,
                'show_id' => $created_show->id,
                'price' => $cinemaSeat->type == 'regular' ? '3500' : '5500'
            ]);
        };
        
        return back();
    }
}
