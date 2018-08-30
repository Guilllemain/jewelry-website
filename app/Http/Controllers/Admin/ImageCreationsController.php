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
        Storage::disk('public')->delete($image->img_url);
        $image->delete();
    }
}
