<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::group(['prefix'=>'payment'], function(){
    Route::get('/order/capture/{uuid}',[CartController::class,'captureOrder'])->name('payment.capture_order');
});
