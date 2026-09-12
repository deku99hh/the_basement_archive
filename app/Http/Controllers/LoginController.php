<?php

namespace App\Http\Controllers;

use App\Models\Work;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
