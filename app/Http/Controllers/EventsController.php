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
    

    public function addevent(Request $request)
    {
        $usr = auth()->user();

        $credentials = $request->validate([
            'event_name' => 'required|string',
            'event_about_text' => 'required|string',
            'poster_path' => 'required|string',
            'event_status' => 'required|string',
            'link' => 'nullable',
        ]);

        // dd($info);

        Event::create($credentials);

        return redirect('/')->withSuccess('success');

    }
}
