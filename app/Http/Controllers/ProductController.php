<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function single(Product $product)
    {
        return view('single', $product);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('home');
    }

    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $validated['author_id'] = Auth::user()->getAuthIdentifier();

        Product::query()->create($validated);
        return redirect()->route('home');
    }

    public function update(Product $product, ProductUpdateRequest $request)
    {
        $validated = $request->validated();

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $product->update($validated);
        return redirect()->route('home', $product->id);
    }

    public function createForm()
    {
        return view('products.create');
    }

    public function updateForm(Product $product)
    {
        return view('products.update', compact('product'));
    }
}
