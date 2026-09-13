<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Artist;
use App\Models\Event;


class MakeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        $usr = Auth::user();


        return view('make', compact('events', 'usr'));
    }
}
