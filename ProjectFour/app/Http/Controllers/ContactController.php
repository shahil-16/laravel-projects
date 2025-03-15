<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function display(){
        $name = 'Shahil';
        return view('contacts',['nm' => $name]);
        // return view('contacts', ['nm' => 'Shahil']);

    }
}
