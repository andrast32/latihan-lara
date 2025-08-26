<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $semua_product = Product::getAllProducts();

        return view('produk', [
            'products' => $semua_product
        ]);

    }
}
