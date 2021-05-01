<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BuyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class, 'getProducts'])->name('products.get');
Route::GET('/checkout',[CartController::class, 'getCart'])->name('cart.get');
Route::post('/checkout/add',[CartController::class, 'addToCart'])->name('cart.add');
Route::post('/checkout/delete',[CartController::class, 'deleteCart'])->name('cart.delete');
Route::get('/checkout/buy',[CartController::class, 'buyCart'])->name('buy');
Route::get('/checkout/buy/now',[BuyController::class, 'buyNow'])->name('buy.now');
Route::post('/payment',[BuyController::class, 'payment'])->name('buy.payment');
Route::post('/add',[BuyController::class, 'addOrder'])->name('order');
