<?php

namespace App\Http\Controllers;

use App\Models\Work;

class WorkIDController extends Controller
{
    public function index($work_id)
    {
        $work = Work::findOrFail($work_id);

        $path = public_path($work->poster_path);

        if (! file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
