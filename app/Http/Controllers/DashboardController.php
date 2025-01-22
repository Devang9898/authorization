<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //


    public function __invoke()
    {
        // Use the Auth facade to get the authenticated user
        $user = Auth::user();

        // Check if a user is authenticated
        if (!$user) {
            // Handle the case where no user is authenticated
            return redirect()->route('login'); // Redirect to login or handle as needed
        }

        return view('index', [
            'user' => $user
        ]);
    }
}