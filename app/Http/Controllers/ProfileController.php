<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('profile', compact('profile'));
    }
}
