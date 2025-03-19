<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    function detail(){
        return view('details',['nm' => 'shahil']);
    }
}
