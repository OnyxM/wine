<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'price',
        'description',
        'photo',
        'brand',
        'color',
        'size',
        'weight',
        'dimensions',
        'isFeatured',
    ];

    public function getPhotoAttribute()
    {
        return asset('uploads/products/'.$this->attributes['photo']);
    }

    public function setPhotoAttribute($photo)
    {
        $ext = explode(".", $photo->getClientOriginalName());

        $photo_name = Str::uuid().".".end($ext);
        $photo->move("uploads/products/", $photo_name);

        $this->attributes['photo'] = $photo_name;
    }

//    public static function addToCart($product_id, $qty)
//    {
//        $cart = json_decode(session('cart'));
//
//        array_push($cart, [
//            'product_id' => $product_id,
//            'qty' => $qty,
//            'product' => Product::find($product_id),
//        ]);
//
//        session('cart', json_encode($cart));
//        dd(session('cart'));
//    }
}
