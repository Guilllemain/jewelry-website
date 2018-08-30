<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\ImagePartner;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $partner = Partner::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'video_embed' => $request->video_embed ?: '',
            'logo' => $request->logo ? $request->logo->store('partners/' . str_replace(' ', '_', strtolower($request->name)) . '/logo', 'public') : '',
            'video_local' => $request->partner_video ? $request->partner_video->storeAs(
                        'partners/' . str_replace(' ', '_', strtolower($request->name)) . '/video',
                        $request->file('partner_video')->getClientOriginalName(),
                        'public'
                        ) : ''
        ]);

        if ($request->partner_img) {
            $this->partner_images($request, $partner);
        }

        return redirect('/admin/partners')->with('message', 'Ta nouvelle collaboration a bien été enregistrée');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Partner $partner, PartnerRequest $request)
    {
        if ($request->logo) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'video_embed' => $request->video_embed ?: '',
            'logo' => $request->logo ? $request->logo->store('partners/' . str_replace(' ', '_', strtolower($request->name)) . '/logo', 'public') : $partner->logo
        ]);

        if ($request->partner_video) {
            Storage::disk('public')->delete($partner->video_local);
            $partner->update([
                'video_local' => $request->partner_video->storeAs(
                                    'partners/' . str_replace(' ', '_', strtolower($request->name)) . '/video',
                                    $request->file('partner_video')->getClientOriginalName(),
                                    'public'
                )
            ]);
        }

        if ($request->partner_img) {
            foreach ($partner->images as $image) {
                Storage::disk('public')->delete($image->img_url);
                Storage::disk('public')->delete($image->img_thumbnail);
                $image->delete();
            }
            $this->partner_images($request, $partner);
        }

        return redirect('/admin/partners')->with('message', 'Ta collaboration a bien été modifiée');
    }

    public function destroy(Partner $partner)
    {
        Storage::deleteDirectory('public/partners/' . str_replace(' ', '_', strtolower($partner->name)));
        // foreach ($partner->images as $image) {
        //     Storage::disk('public')->delete($image->img_url);
        // }
        // Storage::disk('public')->delete($partner->logo);
        
        // if ($partner->video_local) {
        //     Storage::disk('public')->delete($partner->video_local);
        // }

        $partner->delete();

        return redirect('/admin/partners')->with('message', 'Cette collaboration a bien été effacée');
    }

    public function partner_images($request, $partner)
    {
        foreach ($request->partner_img as $image) {
            ImagePartner::create([
                'partner_id' => $partner->id,
                'img_url' => resize_file($image, 'partners/' . str_replace(' ', '_', strtolower($request->name)) . '/images', 1200, 1200),
                'img_thumbnail' => resize_file($image, 'partners/' . str_replace(' ', '_', strtolower($request->name)) . '/images/thumbnails', 400, 400)
            ]);
        }
    }
}
