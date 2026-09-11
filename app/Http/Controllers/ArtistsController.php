<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Work;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::latest()->get();

        // var_dump(compact('artists'));
        return view('artists', compact('artists'));
    }

    public function artest($artist_id)
    {
        $artist = Artist::with('works')->findOrFail($artist_id);

        // var_dump(compact('artists'));
        return view('artist_by_id', compact('artist'));
    }
}
