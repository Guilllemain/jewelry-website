<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {
        $image = WelcomeImage::first();

        return view('admin.welcome', compact('image'));
    }

    public function update(Request $request, Profile $profile)
    {

        return redirect('/admin')->with('message', 'Ton portrait a bien été mis à jour');
    }
}
