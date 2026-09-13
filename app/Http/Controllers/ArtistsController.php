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
        $usr = auth()->user();

        // var_dump(compact('artists'));
        return view('artists', compact('artists', 'usr'));
    }

    public function artest($artist_id)
    {
        $artist = Artist::with('works')->findOrFail($artist_id);
        $usr = auth()->user();

        $is_user = 0;
        if ($usr && $usr->id == $artist->id) {
            $is_user = 1;
        }

        // var_dump(compact('artists'));
        return view('artist_by_id', compact('artist', 'is_user', 'usr'));
    }
}
