<?php

namespace App\Http\Controllers\Admin;

use App\Exposition;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExpositionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminExpositionsController extends Controller
{
    public function index()
    {
        $expositions = Exposition::all();
        return view('admin.expositions.index', compact('expositions'));
    }

    public function create()
    {
        return view('admin.expositions.create');
    }

    public function store(ExpositionRequest $request)
    {
        Exposition::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link ?: '',
            'image' => $request->image->store('expositions/', 'public'),
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        return redirect('/admin/expositions')->with('message', 'Ta nouvelle exposition est en ligne');
    }

    public function edit(Exposition $exposition)
    {
        return view('admin.expositions.edit', compact('exposition'));
    }

    public function update(Exposition $exposition, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
        ]);

        $exposition->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link ?: '',
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        if ($request->image) {
            Storage::disk('public')->delete($exposition->image);
            $exposition->update([
                'image' => $request->image->store('expositions', 'public')
            ]);
        }

        return redirect('/admin/expositions')->with('message', 'Ton exposition a bien été modifiée');
    }

    public function destroy(Exposition $exposition)
    {
        Storage::disk('public')->delete($exposition->image);
        $exposition->delete();

        return redirect('/admin/expositions')->with('message', 'Ton exposition a bien été supprimée');
    }
}
