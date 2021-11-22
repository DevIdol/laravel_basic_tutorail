<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    function productPage($product_id, $shop_id)
    {
        return 'This is product id=>' . $product_id . ' page in shop id=>' . $shop_id;
    }
    function productList()
    {
        $product_list = ['iPhone', 'Samsung', 'Mi', 'Sony'];
        return view('product', [
            'products' => $product_list
        ]);
    }
    function productDetail($product_id){
        return "This is product for product id:" .$product_id;
    }
}
