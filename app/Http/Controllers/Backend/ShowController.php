<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Movie $movie) {
        return view('pages.shows.index');
    }
}
