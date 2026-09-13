<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function addwork(Request $request)
    {
        $usr = auth()->user();

        $credentials = $request->validate([
            'work_name' => 'required|string',
            'work_about_text' => 'required|string',
            'poster_path' => 'required|string',
            'image' => 'nullable',
            'video' => 'nullable',
        ]);
        $type = $request->has('video') ? 'video' : 'image';

        $info = [
            'work_name' => $credentials['work_name'],
            'work_about_text' => $credentials['work_about_text'] ?: '',
            'poster_path' => $credentials['poster_path'],
            'type' => $type,
            'author_id' => $usr->id,
            'event_id' => ($request->event_id ?: null),
        ];

        // dd($info);

        $usr->works()->create($info);

        return redirect('/')->withSuccess('success');

    }

    public function deletework($id)
    {
        $usr = auth()->user();
        $work = Work::findOrFail($id);

        if ($usr->id === $work->artist_id) {

            $work->delete();
            return redirect('/')->withSuccess('Work deleted successfully.');
        }
        return redirect('/')->withErrors('You are not authorized to delete this work.');

    }
}
