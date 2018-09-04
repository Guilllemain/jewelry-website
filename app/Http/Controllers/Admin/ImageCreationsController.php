<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageCreationsController extends Controller
{
    public function destroy(ImageProduct $image)
    {
        delete_file_from_disk($image->img_url);
        delete_file_from_disk($image->img_thumbnail);
        $image->delete();
    }
}
