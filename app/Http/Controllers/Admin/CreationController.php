<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\ImageProduct;
use App\Product;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.creation.index', compact('products'));
    }

    public function create()
    {
        return view('admin.creation.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'features' => $request->features,
            'description' => $request->description,
            'thumbnail' => $request->file('thumbnail')->store('products/thumbnails', 'public')
        ]);

        $this->product_images($request, $product);

        return redirect('/admin/creation')->with('message', 'Ta nouvelle création est en ligne');
    }

    public function edit(Product $product)
    {
        return view('admin.creation.edit', compact('product'));
    }

    public function update(Product $product, Request $request)
    {
        $product->update([
            'name' => $request->name,
            'features' => $request->features,
            'description' => $request->description,
        ]);

        if ($request->thumbnail) {
            $product->update([
                'thumbnail' => $request->file('thumbnail')->store('products/thumbnails', 'public')
            ]);
        }

        if ($request->product_img) {
            foreach ($product->images as $image) {
                $image->delete();
            }
            $this->product_images($request, $product);
        }

        return redirect('/admin/creation')->with('message', 'Ta création a bien été modifiée');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/creation')->with('message', 'Ta création a bien été supprimée');
    }

    public function product_images($request, $product)
    {
        foreach ($request->product_img as $image) {
            ImageProduct::create([
                'product_id' => $product->id,
                'img_url' => $image->store('products/images', 'public')
            ]);
        }
    }
}
