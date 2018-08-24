<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ImagePartner;
use App\Partner;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        // . '.' . $request->partner_video->getClientOriginalExtension()
        $partner = Partner::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'video_embed' => $request->video_embed ?: '',
            'logo' => $request->logo->store('partners/' . str_replace(' ', '_', strtolower($request->name)) . '/logo', 'public'),
            'video_local' => $request->partner_video ? $request->partner_video->storeAs(
            'partners/' . str_replace(' ', '_', strtolower($request->name)) . '/video',
            $request->file('partner_video')->getClientOriginalName(),
                'public'
        ) : ''
        ]);

        $this->partner_images($request, $partner);

        return redirect('/admin/partners')->with('message', 'Ta nouvelle collaboration a bien été enregistrée');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Partner $partner, Request $request)
    {
        $partner->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'video_embed' => $request->video_embed ?: '',
            'logo' => $request->logo ? $request->logo->store('partners/' . str_replace(' ', '_', strtolower($request->name)) . '/logo', 'public') : $partner->logo,
        ]);

        if ($request->partner_video) {
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
                $image->delete();
            }
            $this->partner_images($request, $partner);
        }

        return redirect('/admin/partners')->with('message', 'Ta collaboration a bien été modifiée');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect('/admin/partners')->with('message', 'Cette collaboration a bien été effacée');
    }

    public function partner_images($request, $partner)
    {
        foreach ($request->partner_img as $image) {
            ImagePartner::create([
                'partner_id' => $partner->id,
                'img_url' => $image->store('partners/' . str_replace(' ', '_', strtolower($request->name)) . '/images', 'public')
            ]);
        }
    }
}
