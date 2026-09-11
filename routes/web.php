<?php

use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
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

