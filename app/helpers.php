<?php

function resize_file($request, $folder, $width, $height)
{
    ini_set('memory_limit', '256M');
    $file = isset($request->files) ? $request->file('thumbnail') : $request;
    $filename = $file->hashName();
    $path = "{$folder}/{$filename}";
    Storage::makeDirectory('public/' . $folder);
    $img = Image::make($file)->resize($width, $height, function ($c) {
        $c->aspectRatio();
        $c->upsize();
    });
    $img->save(public_path('storage/' . $path));
    return $path;
}
