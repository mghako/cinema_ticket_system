<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        return view('pages.movies.index', [
            'movies' => Movie::oldest()->get()
        ]);
    }
    public function show(Movie $movie) {
        // dd($movie->shows()->with('cinemaHall')->get());
        return view('pages.movies.show', [
            'movie' => $movie,
            'shows' => $movie->shows()->with('cinemaHall')->get()
        ]);
    }
}
