<?php

use App\Http\Controllers\Backend\CinemaController;
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

Route::get('cinemas', [CinemaController::class, 'index'])->name('cinemas.index');
Route::get('cinemas/create', [CinemaController::class, 'create'])->name('cinemas.create');
Route::post('cinemas', [CinemaController::class, 'store'])->name('cinemas.store');
Route::get('cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinemas.show');