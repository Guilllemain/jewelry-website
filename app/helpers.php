<?php

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

function resize_file($request, $folder, $width, $height)
{
    ini_set('memory_limit', '256M');
    $file = isset($request->files) ? $request->file('thumbnail') : $request;
    $filename = $file->hashName();
    $path = "storage/{$folder}/{$filename}";
    Storage::disk('public')->makeDirectory($folder);
    $img = Image::make($file)->resize($width, $height, function ($c) {
        $c->aspectRatio();
        $c->upsize();
    });
    $img->save($path);
    return $path;
}

function delete_file_from_disk($path)
{
    Storage::disk('public')->delete(str_replace('storage/', '', $path));
}
