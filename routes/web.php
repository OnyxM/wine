<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AppController::class, "index"])->name('index');
Route::get('/shop', [AppController::class, "shop"])->name('shop');
Route::get('/shop/{id}-{slug}', [AppController::class, "shop_details"])->name('shop_details');
Route::get('/cart', [AppController::class, "cart"])->name('cart');
Route::get('/checkout', [AppController::class, "checkout"])->name('checkout');
Route::get('/contact', [AppController::class, "contact"])->name('contact');


Route::group(['prefix' => 'api'], function(){
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
});
Route::get('cart/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
