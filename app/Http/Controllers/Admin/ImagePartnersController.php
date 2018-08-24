<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImagePartner;
use Illuminate\Http\Request;

class ImagePartnersController extends Controller
{
    public function destroy(ImagePartner $image)
    {
        // $image = ImagePartner::where('id', $id)->first();
        $image->delete();
    }
}
