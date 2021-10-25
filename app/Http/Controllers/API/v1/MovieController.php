<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Http\Resources\ShowResource;
use App\Models\Movie;
use App\Models\Show;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        try {
            return MovieResource::collection(Movie::all());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Movie $movie) {
        return new MovieResource($movie);
    }
}
