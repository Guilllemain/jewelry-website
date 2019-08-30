<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Profile $profile)
    {
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'bio' => 'required|min:50'
        ]);
        
        $profile->update([
            'bio' => $request->bio
        ]);

        if ($request->image) {
            delete_file_from_disk($profile->image);
            $profile->update([
                'image' => 'storage/' . $request->image->store('portrait', 'public')
            ]);
        }

        return redirect('/admin')->with('message', 'Ton portrait a bien été mis à jour');
    }
}
