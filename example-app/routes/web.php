<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Auth\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Home
Route::get('/', [HomeController::class, 'homepage'])->name('client.homepage');
//Shop
Route::get('/shoppage', [ShopController::class, 'shoppage'])->name('client.shop');
//Contract
Route::get('/contractpage', [HomeController::class, 'contractpage'])->name('client.contract');
//Cart
Route::get('/cartpage', [CartController::class, 'cartpage'])->name('client.cart');
//Checkout
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('client.checkout');
//Authentication
Route::get('/login', [AuthController::class, 'login'])->name('client.login');
