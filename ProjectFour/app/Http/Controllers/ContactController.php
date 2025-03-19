<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function display(){
        $name = 'Shahil';
        $students = ['Rahul', 'Sumit', 'Raj', 'Kunal'];
        return view('contacts',['nm' => $name , 'students'=>$students]);
        // return view('contacts', ['nm' => 'Shahil']);

    }
}
