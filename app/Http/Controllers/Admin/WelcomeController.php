<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\WelcomeImage;

class WelcomeController extends Controller
{
    public function edit(WelcomeImage $image)
    {
        return view('admin.welcome.edit', compact('image'));
    }

    public function update(Request $request, WelcomeImage $image)
    {
        if ($request->image) {
            delete_file_from_disk($image->image_url);
            $image->update([
                'image_url' => 'storage/' . $request->image->store('background_image', 'public')
            ]);
        }
        return redirect('/admin')->with('message', "L'image d'accueil a été modifiée");
    }
}
