<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
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
        try {
            return view('pages.movies.show', [
                'movie' => $movie,
                'shows' => $movie->shows()->with('cinemaHall')->get()
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create() {
        return view('pages.movies.create');
    }

    public function store(StoreMovieRequest $request) {
        try {
            $movie = Movie::create($request->validated());
            return back()->with('success', 'Movie ' . $movie->title.' Added');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
