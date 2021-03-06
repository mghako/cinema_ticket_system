<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCinemaRequest;
use App\Models\Cinema;
use App\Models\City;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function index() {
        return view('pages.cinemas.index',[
            'cinemas' => Cinema::withCount('cinemaHalls')->with('city')->get()
        ]);
    }
    public function create() {
        return view('pages.cinemas.create',[
            'cities' => City::all()
        ]);
    }
    public function store(StoreCinemaRequest $request) {
        $cinema = Cinema::create($request->validated());
        return back()->with('success', $cinema->name.' Added !');
    }
    public function show(Cinema $cinema) {
        return view('pages.cinemas.show', [
            'cinema' => $cinema,
            'cinemaHalls' => $cinema->cinemaHalls()->withCount('cinemaSeats')->get()
        ]);
    }
}
