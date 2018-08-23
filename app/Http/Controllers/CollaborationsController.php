<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class CollaborationsController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('partners.index', compact('partners'));
    }

    public function show(Partner $partner)
    {
        return view('partners.show', compact('partner'));
    }
}
