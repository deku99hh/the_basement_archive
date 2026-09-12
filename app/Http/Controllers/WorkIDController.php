<?php

namespace App\Http\Controllers;

use App\Models\Work;

class WorkIDController extends Controller
{
    public function index($work_id)
    {

        $work = Work::findOrFail($work_id);

        // if (filter_var($work->poster_path, FILTER_VALIDATE_URL)) {
        //     return redirect()->away($work->poster_path);
        // }

        // $path = public_path($work->poster_path);
        // if (! file_exists($path)) {
        //     abort(404);
        // }
        // return response()->file($path);
// dd($work->poster_path);
        
        return view('work_by_id', compact('work'));

    }
}
