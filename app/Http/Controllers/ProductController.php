<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('products.index', [
            'products' => $products
        ]);
    }

        public function show(int $id)
    {
        $product = Products::find($id);

        return view('products.show', [
            'product' => $product
        ]);
    }
}
