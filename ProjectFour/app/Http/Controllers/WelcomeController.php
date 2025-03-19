<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcome(){
        $name = ' Shahil Ahmed';
        $name = 'Samsung';
        $price = '67000';
        return view('welcome',['fullname' => $name,'nm' => $name,'price' => $price]);
    }
}
