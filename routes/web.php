<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WebFrontend\AboutController;
use App\Http\Controllers\WebFrontend\ProductController;
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

Route::get('/about', [AboutController::class, 'aboutPage'])->middleware('testMW');
// Route::get('about', 'AboutController@aboutPage');format of laravel 7

Route::get('contact', [ContactController::class, 'contactPage'])->middleware('testMW');

Route::get('products', [ProductController::class, 'productList']);

Route::get('shop', function () {
    return view('shop.shop');
});

Route::get('products/{product_id}/shop/{shop_id}', [ProductController::class, 'productsPage']);

Route::post('api/promotion',[Controller::class, 'showPromotions']);
