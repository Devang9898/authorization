<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function show()
    {
        return view('welcome');
    }

    public function login()
    {
        validator(request()->all(),[

            'email'=>'required|email',
            'password'=>'required',

        ])->validate();



        if(Auth::attempt(request()->only(['email','password']))){

            return redirect()->intended('dashboard');
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        }



        public function logout()
        {
            Auth::logout();
            return redirect('/');
        }
    }



