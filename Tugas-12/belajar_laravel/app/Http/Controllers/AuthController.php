<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('page.register');
    }

    public function showForm()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        return view('page.welcome', compact('firstName', 'lastName'));
    }
}
