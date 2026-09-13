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
        $usr = auth()->user();

        // var_dump(compact('events'));
        return view('events', compact('events', 'usr'));
    }

    public function event($events_id)
    {
        $event = Event::with('works')->findOrFail($events_id);
        $usr = auth()->user();


        return view('event_by_id', compact('event', 'usr'));
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

    public function changestatus($id)
    {
        $usr = auth()->user();

        if ( $usr->role == 'admin' ) {
            Event::findOrFail($id)->togglestatus();
            return redirect('/event/' . $id)->withSuccess('success');
        }
        return redirect('/event/' . $id)->withErrors('not athorized');

    }
}
