<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WelcomeImage;

class WelcomeController extends Controller
{
    public function edit(WelcomeImage $welcomeImage)
    {
        return view('admin.welcome.edit', compact('welcomeImage'));
    }

    public function update(Request $request, WelcomeImage $welcomeImage)
    {
        if (!$request->image) {
            return back()->with('danger', 'Tu dois fournir une image');
        }

        delete_file_from_disk($welcomeImage->image_url);
        $welcomeImage->update([
            'image_url' => 'storage/' . $request->image->store('background_image', 'public')
        ]);
        return redirect('/admin')->with('message', "L'image d'accueil a été modifiée");
    }
}
