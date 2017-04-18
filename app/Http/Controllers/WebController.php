<?php

namespace App\Http\Controllers;

use App\About;
use App\Product;

class WebController extends Controller
{

    public function index(Product $product)
    {
        $list = $product->orderBy('id', 'desc')->paginate(15);

        return view('welcome', [ 'products' => $list ]);
    }


    public function product($id, Product $data)
    {
        $product = $data->where('id', $id)->firstOrFail();

        return view('product', [ 'product' => $product ]);
    }


    public function about(About $about)
    {
        return view('about', [ 'about' => $about->first() ]);
    }
}
