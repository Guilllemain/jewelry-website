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
        $request->validate([
            'name' => 'required',
            'features' => 'required',
            'description' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'features' => $request->features,
            'description' => $request->description,
            'thumbnail' => resize_file($request, 'products/thumbnails', 600, 600)
        ]);

        $this->save_images($request->product_img, $product->id);

        return redirect('/admin/creation')->with('message', 'Ta nouvelle création est en ligne');
    }

    public function edit(Product $product)
    {
        return view('admin.creation.edit', compact('product'));
    }

    public function update(Product $product, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'features' => 'required',
            'description' => 'required',
        ]);

        $product->update([
            'name' => $request->name,
            'features' => $request->features,
            'description' => $request->description,
        ]);

        if ($request->thumbnail) {
            delete_file_from_disk($product->thumbnail);
            $product->update([
                'thumbnail' => resize_file($request, "products/thumbnails", 600, 600)
            ]);
        }

        if ($request->product_img) {
            $this->save_images($request->product_img, $product->id);
        }

        return redirect('/admin/creation')->with('message', 'Ta création a bien été modifiée');
    }

    public function destroy(Product $product)
    {
        delete_file_from_disk($product->thumbnail);
        foreach ($product->images as $image) {
            delete_file_from_disk($image->img_url);
            delete_file_from_disk($image->img_thumbnail);
        }

        $product->delete();

        return redirect('/admin/creation')->with('message', 'Ta création a bien été supprimée');
    }

    public function save_images($images, $id)
    {
        foreach ($images as $image) {
            ImageProduct::create([
                'product_id' => $id,
                'img_url' => resize_file($image, 'products/images', 1200, 1200),
                'img_thumbnail' => resize_file($image, 'products/images/thumbnails', 200, 200)
            ]);
        }
    }
}
