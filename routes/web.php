<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\PaymentController;
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
    $products = Product::all();
    return view('home',compact('products'));
});
Route::get('home', function () {
    $products = Product::all();
    return view('home',compact('products'));
})->name('home');
Route::get('payment/{id}', function ($id) {
    $item = Product::findOrFail($id);
    return view('payment',compact('item'));
})->name('payment');
Route::get('payment.pay', [PaymentController::class, 'payment'])->name('payment.pay');
Route::post('merchant', [PaymentController::class, 'merchant'])->name('merchant');
