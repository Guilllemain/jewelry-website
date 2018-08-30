<?php

namespace App\Http\Controllers;

use App\Exposition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpositionsController extends Controller
{
    public function index()
    {
        $expositions_to_come = Exposition::where('date_start', '>', Carbon::today())->get();
        $expositions_past = Exposition::where('date_end', '<', Carbon::today())->get();
        $expositions_now = Exposition::where([
                                ['date_start', '<=', Carbon::today()],
                                ['date_end', '>=', Carbon::today()],
                            ])->get();
        
        return view('expositions.index', compact('expositions_to_come', 'expositions_past', 'expositions_now'));
    }
}
