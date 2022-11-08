<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $data =[
            'title' => ""
        ];

        return view("index", $data);
    }

    public function shop()
    {
        $data =[
            'title' => "Shop | ",
            'products' => Product::orderBy('id', 'desc')->simplePaginate(8)
        ];

        return view("shop", $data);
    }

    public function shop_details($id, $slug)
    {
        $data =[
            'title' => "Shop | ",
            'product' => Product::findOrFail($id)
        ];

        return view("shop_details", $data);
    }

    public function cart()
    {
        $data =[
            'title' => "Cart | ",
        ];

        return view("cart", $data);
    }
}
