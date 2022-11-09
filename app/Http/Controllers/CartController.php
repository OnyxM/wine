<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'id' => "required|exists:products,id|integer",
            'qty' => 'required|integer',
        ]); if ($validatedData->fails()) {
            $errors = json_decode(json_encode($validatedData->errors()), true);

            return response()->json([
                'error' => $errors,
            ],400);
        }

        $product = Product::find($request->id);

        \Cart::add([
            'id' => $request->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty,
            'attributes' => array(
                'image' => $product->photo,
            )
        ]);

        return response()->json([
            'message' => "Product is Added to Cart Successfully !",
            'cart' => \Cart::getContent()
        ]);
    }

    public function updateCart(Request $request)
    {
        foreach ($request->id as $key => $id){
            \Cart::update(
                $id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->qte[$key]
                    ],
                ]
            );
        }

        return redirect()->back();
    }

    public function removeCart(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'id' => "required|exists:products,id|integer",
        ]); if ($validatedData->fails()) {
            $errors = json_decode(json_encode($validatedData->errors()), true);

            return response()->json([
                'error' => $errors,
            ],400);
        }

        \Cart::remove($request->id);

        return response()->json([
            'message' => "Item Cart Remove Successfully !"
        ]);
    }

    public function clearAllCart()
    {
        \Cart::clear();

        return redirect()->route('shop');
    }

    public function placeOrder(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        dd($request->all());
    }
}
