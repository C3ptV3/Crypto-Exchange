<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function description()
    {
        return view('description');
    }
    public function legal()
    {
        return view('legal');
    }
    public function contact()
    {
        return view('contact-us');
    }
}
