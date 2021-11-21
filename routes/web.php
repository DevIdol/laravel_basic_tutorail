<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('products', function () {
    return view('product');
});

Route::get('shop', function () {
    return view('shop.shop');
});

Route::get('products/{product_id}/shop/{shop_id}', function ($product_id, $shop_id) {
    return 'This is product id=>' . $product_id . ' page in shop id=>' . $shop_id;
});
