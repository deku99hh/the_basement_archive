<?php

use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\MakeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkIDController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/artists', [ArtistsController::class, 'index']);

Route::get('/events', [EventsController::class, 'index']);


Route::get('/artist/{artist_id}', [ArtistsController::class, 'artest']);

Route::get('/work/{work_id}', [WorkIDController::class, 'index']);

Route::get('/event/{events_id}', [EventsController::class, 'event']);


Route::get('/make', [MakeController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');


Route::post('/login', LoginController::class)->middleware('guest');

Route::get('/logout', logoutController::class)->middleware('auth');

Route::post('/addwork', [WorkController::class, 'addwork'])->middleware('auth');
Route::post('/addevent', [EventsController::class, 'addevent'])->middleware('auth');

Route::delete('/deletework/{id}', [WorkController::class, 'deletework'])->middleware('auth');
