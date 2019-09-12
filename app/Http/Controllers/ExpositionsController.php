<?php

namespace App\Http\Controllers;

use App\Exposition;

class ExpositionsController extends Controller
{
    public function index()
    {
        $expositions = Exposition::all()->sortByDesc('created_at');
        dd($expositions);
        
        return view('expositions.index', compact('expositions'));
    }
}
