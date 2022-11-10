<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'notes',
        'products',
        'tracking_code',
        'status',
    ];

    public static function random(){
        do{
            $string = "";
            $chaine = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
//            $chaine = "0123456789abcdefghijklmnopqrstuvwxyz";

            srand((double)microtime()*1000000);

            for($i=0; $i<=5; $i++) {
                $string .= $chaine[rand()%strlen($chaine)];
            }
        }while(Order::where('tracking_code', $string)->first());

        return $string;
    }
}
