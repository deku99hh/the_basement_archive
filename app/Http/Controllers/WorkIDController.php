<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkIDController extends Controller
{
    public function index($work_id)
    {

        $work = Work::findOrFail($work_id);
        
        return view('work_by_id', compact('work'));

    }

}
