<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Auth;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|unique:users',
            'artist_name' => 'required',
            'email' => 'required|email|unique:users',
            'artist_about_text' => 'required',
            'avatar' => 'required',
            'password' => 'required|min:8',
            'instagram' => 'string',
            'twitter' => 'string',
            'youtube' => 'string',
            'buy_me_a_coffee' => 'string',

        ]);

        $credentials['password'] = Hash::make($credentials['password']);

        $artest = Artist::Create($credentials);

        Auth::login($artest);

        return redirect()->intended('/');

    }

    public function index()
    {
        return view('Signup');
    }
}
