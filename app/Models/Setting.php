<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'value',
    ];

    public static function getShippingCost()
    {
        return self::where('name', 'shipping_cost')->first()->value;
    }
}
