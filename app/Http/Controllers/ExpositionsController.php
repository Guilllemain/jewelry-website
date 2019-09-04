<?php

namespace App\Http\Controllers;

use App\Exposition;

class ExpositionsController extends Controller
{
    public function index()
    {
        $expositions = Exposition::all();
        
        return view('expositions.index', compact('expositions'));
    }
}
