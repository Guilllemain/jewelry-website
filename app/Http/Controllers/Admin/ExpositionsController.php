<?php

namespace App\Http\Controllers\Admin;

use App\Exposition;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExpositionRequest;
use App\ImageNews;

class ExpositionsController extends Controller
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
        $exposition = Exposition::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);
        
        if ($request->images) {
            $this->save_images($request->images, $exposition->id);
        }

        return redirect('/admin/expositions')->with('message', 'Ta nouvelle exposition est en ligne');
    }

    public function edit(Exposition $exposition)
    {
        return view('admin.expositions.edit', compact('exposition'));
    }

    public function update(Exposition $exposition, ExpositionRequest $request)
    {
        $exposition->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        if ($request->images) {
            $this->save_images($request->images, $exposition->id);
        }

        return redirect('/admin/expositions')->with('message', 'Ton exposition a bien été modifiée');
    }

    public function destroy(Exposition $exposition)
    {
        delete_file_from_disk($exposition->image);
        $exposition->delete();

        return redirect('/admin/expositions')->with('message', 'Ton exposition a bien été supprimée');
    }

    public function save_images($images, $id)
    {
        foreach ($images as $image) {
            ImageNews::create([
                'exposition_id' => $id,
                'img_url' => resize_file($image, 'expositions/' . $id, 500, 500),
            ]);
        }
    }
}
