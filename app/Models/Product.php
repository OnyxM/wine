<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
}
