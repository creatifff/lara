<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(Request $request) {
        $products = Product::query()->where('is_published', '=', true);

        if($request->get('query')) {
            $query = $request->get('query');

            $products = $products->where('title', 'LIKE', "%$query%")
                ->orWhere('description', 'LIKE', "%$query%");
        }

        $products = $products->paginate(9)->withQueryString();

        return view('home', [
            'products' => $products
        ]);
    }

    public function signup() {
        return view('signup');
    }

    public function signin() {
        return view('signin');
    }
}
