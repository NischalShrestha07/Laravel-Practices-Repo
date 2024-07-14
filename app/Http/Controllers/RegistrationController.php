<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('managePage.form');
    }
    public function register(Request $request)
    {
        // return view('managePage.register');
    }
}
