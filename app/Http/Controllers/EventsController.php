<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Work;
use App\Models\Artist;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::with('works')->latest()->get();

        // var_dump(compact('events'));
        return view('events', compact('events'));
    }

    public function event($events_id)
    {
        $event = Event::with('works')->findOrFail($events_id);

        return view('event_by_id', compact('event'));
    }
    
}
