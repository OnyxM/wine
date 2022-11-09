<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppController extends Controller
{
    public function index()
    {
        $data =[
            'title' => "",
            'products' => Product::where('isFeatured', 'true')->orderBy('id', 'desc')->limit(8)->get()
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
        $product = Product::findOrFail($id);

        $data = [
            'title' => $product->name . ' | ',
            'product' => $product,
            'products_o' => Product::whereNot('id', $product->id)->orderBy('id','desc')->limit(3)->get()
        ];

        return view("shop_details", $data);
    }

    public function cart()
    {
        $data =[
            'title' => "Cart | ",
            'items' => \Cart::getContent()
        ];

        return view("cart", $data);
    }

    public function contact()
    {
        $data =[
            'title' => "Contact | ",
        ];

        return view("contact", $data);
    }

    public function checkout()
    {
        $data =[
            'title' => "Checkout | ",
            'items' => \Cart::getContent()
        ];

        return view("checkout", $data);
    }
}
