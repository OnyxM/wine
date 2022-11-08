<?php

use App\Http\Controllers\AppController;
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
