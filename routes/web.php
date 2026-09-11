<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/artests', function () {
    return view('artests');
});
Route::get('/artest/{artest_id}', function ($artest_id) {
    return view('artests');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/event/{events_id}', function ($events_id) {
    return view('artests');
});

