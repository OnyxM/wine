<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use App\Traits\SendMailTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CartController extends Controller
{
    use SendMailTrait;

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
            'address' => 'required',
            'phone' => 'required',
        ]);

        if(isset($request->new_user)) {
            $this->validate($request, [
                'email' => 'required|unique:users',
                'firstname' => 'required',
                'lastname' => 'required',
            ]);
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => bcrypt($request->phone),
                'address' => $request->address,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'phone' => $request->phone,
            ]);
        }else{
            $user = User::whereEmail($request->email)->first();
            if(is_null($user)){
                return redirect()->back()->withInput()->withErrors(['email' => ['Email not found! Check the Create Account Button or use an existing email']]);
            }
        }

        if(count(\Cart::getContent()) < 1){
            Log::warning("User tried to create a new order without selecting a product", ['user'=>$user->email]);
            return response()->json([
                'message' => "An error occurred. Please try again later.",
                'continue' => false
            ], 500);
        }

        $products = array();
        foreach(\Cart::getContent() as $product){
            $products[] = [
                'product' => $product->id,
                'quantity' => $product->quantity,
            ];
        }

        $t_code = Order::random();

        $new_order = Order::create([
            'uuid' => Str::uuid(),
            'user_id' => $user->id,
            'address' => $request->address,
            'phone' => $request->phone,
            'notes' => $request->notes,
            'products' => json_encode($products),
            'amount' => \Cart::getTotal() + Setting::getShippingCost(),
            'tracking_code' => $t_code,
            'payment_mode' => $request->payment_mode,
        ]);

        $this->sendMail("mails.init-order", [
            'email' => $request->email,
            'subject' => "Order successfully created - <<< $t_code >>>",
            'code' => $t_code,
        ]);

        \Cart::clear();

        Log::info("New order created.", ['order' => $new_order->id]);

        return response()->json([
            'message' => "Order placed successfully. Your tracking code is: $t_code. Contact the admin with it.",
            'order' => $new_order,
            'customer' => $user,
            'continue' => $request->payment_mode=="Cash on Delivery" ? false : true
        ]);
    }

    public function captureOrder(Request $request)
    {
        $orderId = $request->tx_ref;

        try {
            DB::beginTransaction();
            $order = Order::where([
                'tracking_code'=>$orderId,
                'uuid' => $request->uuid,
                'status' => 'PENDING'
                ])->first();

            if(!is_null($order)){
                ($request->status == "successful")? $order->status="SUCCESS" : $order->status="FAILED";
                $order->infos = json_encode($request->all());
                $order->save();

                Log::info("CallBack received: " . $order);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
