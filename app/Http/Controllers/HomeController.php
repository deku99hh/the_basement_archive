<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Work;
use App\Models\Artist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::with('works')->latest()->take(4)->get();
        $works = Work::with('artist')->latest()->take(8)->get();
        $artists = Artist::latest()->take(6)->get();

        // dd(compact('events', 'works', 'artists'));
        return view('home', compact('events', 'works', 'artists'));
    }
}
