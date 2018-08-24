<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImageProduct;
use Illuminate\Http\Request;

class ImageCreationsController extends Controller
{
    public function destroy(ImageProduct $image)
    {
        $image->delete();
    }
}
