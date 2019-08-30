<?php

namespace App\Http\Controllers;

use App\Exposition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpositionsController extends Controller
{
    public function index()
    {
        $expositions = Exposition::all();
        
        return view('expositions.index', compact('expositions'));
    }
}
