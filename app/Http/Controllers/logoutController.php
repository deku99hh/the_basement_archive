<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'successfully loged out!');

    }
}
