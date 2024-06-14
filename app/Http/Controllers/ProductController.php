<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $products = Product::where('name', 'like', "%$query%")
                ->orWhereHas('category', function ($queryBuilder) use ($query) {
                    $queryBuilder->where('name', 'like', "%$query%");
                })
                ->orWhere('description', 'like', "%$query%")
                ->with('category')
                ->paginate(10);
        } else {
            $products = Product::with('category')->paginate(10);
        }

        return view('products', compact('products'));
    }
}
