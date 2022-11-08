<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
    ];

    public function getPhotoAttribute()
    {
        return asset('uploads/products/'.$this->attributes['photo']);
    }
}
