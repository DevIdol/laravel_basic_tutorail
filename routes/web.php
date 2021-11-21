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
    return 'This is about page.';
});
Route::get('contact', function () {
    return 'This is contact page.';
});

Route::get('products', function () {
    return 'This is product page.';
});

Route::get('products/{product_id}/shop/{shop_id}', function ($product_id, $shop_id) {
    return 'This is product id=>' . $product_id . ' page in shop id=>' . $shop_id;
});