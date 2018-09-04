<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImagePartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagePartnersController extends Controller
{
    public function destroy(ImagePartner $image)
    {
        delete_file_from_disk($image->img_url);
        $image->delete();
    }
}
