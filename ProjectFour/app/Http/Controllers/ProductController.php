<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product(){
        $name = 'Samsung';
        $price = '67000';
         return view ('product', ['nm' => $name,'price' => $price]);

        // return view ('product', ['nm' => 'Iphone','price' => 67000]);
    }
    
}
