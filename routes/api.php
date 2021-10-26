<?php

use App\Http\Controllers\API\v1\MovieController;
use App\Http\Controllers\API\v1\ShowSeatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function() {
    // Movies
    Route::get('movies', [MovieController::class, 'index'])->name('api.v1.movies.index');
    Route::get('movies/{movie}', [MovieController::class, 'show'])->name('api.v1.movies.show');

    // Show Seats
    Route::get('shows/{show}/show-seats', [ShowSeatController::class, 'index'])->name('api.v1.shows.show-seats.index');
});