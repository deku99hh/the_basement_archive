<?php

namespace App\Http\Controllers;

use App\Models\Event;


class MakeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        return view('make', compact('events'));
    }
}
