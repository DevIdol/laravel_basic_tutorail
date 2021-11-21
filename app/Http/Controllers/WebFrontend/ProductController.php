<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productPage(){
        return view('product');
    }

    function productsPage($product_id, $shop_id){
        return 'This is product id=>' . $product_id . ' page in shop id=>' . $shop_id;
    }
}
