<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function delete(Product $product) {
        $product->delete();
        return redirect()->route('home');
    }

    public function store(Product $request) {
        $validated = $request->validated();

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $validated['author_id'] = Auth::user()->getAuthIdentifier();

        $product = Product::query()->create($validated);
        return redirect()->route('product.single', $product->id);
    }
}
