<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view('managePage.home');
    }
    public function about()
    {
        return view('managePage.about');
    }
    public function course()
    {
        return view('managePage.course');
    }
}
