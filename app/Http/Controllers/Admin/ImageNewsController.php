<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImageNews;

class ImageNewsController extends Controller
{
    public function destroy(ImageNews $image)
    {
        delete_file_from_disk($image->img_url);
        $image->delete();
    }
}
