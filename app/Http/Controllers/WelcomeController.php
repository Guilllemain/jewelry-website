<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WelcomeImage;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = WelcomeImage::first();
        return view('welcome', compact('image'));
    }
}
