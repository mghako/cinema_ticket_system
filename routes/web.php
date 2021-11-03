<?php

use App\Http\Controllers\Backend\CinemaController;
use App\Http\Controllers\Backend\CinemaHallController;
use App\Http\Controllers\Backend\CinemaSeatController;
use App\Http\Controllers\Backend\MovieController;
use App\Http\Controllers\Backend\ShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// cinema
Route::get('cinemas', [CinemaController::class, 'index'])->name('cinemas.index');
Route::get('cinemas/create', [CinemaController::class, 'create'])->name('cinemas.create');
Route::post('cinemas', [CinemaController::class, 'store'])->name('cinemas.store');
Route::get('cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinemas.show');

// cinema hall
Route::get('cinemas/{cinema}/cinema-halls/create', [CinemaHallController::class, 'create'])->name('cinemas.cinema-halls.create');
Route::get('cinemas/{cinema}/cinema-halls/{cinemaHall}', [CinemaHallController::class, 'show'])->name('cinemas.cinema-halls.show');
Route::post('cinemas/{cinema}/cinema-halls', [CinemaHallController::class, 'store'])->name('cinemas.cinema-halls.store');

// cinema seat
Route::get('cinemas/{cinema}/cinema-halls/{cinemaHall}/cinema-seats/create', [CinemaSeatController::class, 'create'])->name('cinemas.cinema-halls.cinema-seats.create');
Route::post('cinemas/{cinema}/cinema-halls/{cinemaHall}/cinema-seats', [CinemaSeatController::class, 'store'])->name('cinemas.cinema-halls.cinema-seats.store');

// movie
Route::get('movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

// shows
Route::get('movies/{movie}/shows', [ShowController::class, 'index'])->name('movies.shows.index');
Route::get('movies/{movie}/shows/create', [ShowController::class, 'create'])->name('movies.shows.create');
Route::post('movies/{movie}/shows', [ShowController::class, 'store'])->name('movies.shows.store');