<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DailyController;
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
    return view('layouts.master');
});

// control dailybook
Route::get('/Daily', [DailyController::class, "index"])->name('Daily');
Route::resource('Daily', DailyController::class);

// control agenda
Route::get('/agenda', [AgendaController::class, "index"])->name('agenda');
// Route::patch('/agenda/{agenda}', [AgendaController::class, "update"])->name('agenda.update');
Route::resource('/agenda', AgendaController::class);