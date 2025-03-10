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
    return view('home');
});

// Route::get('contact', function(){
//     return view('contact');
// });

Route::get('contact',function(){
    return view('contactme',['name'=>'Shahil']);
});

Route::get('adminprofile',function(){
    return view('admin.profile');
});


Route::get('about', function () {
    return view('about');
});

// Route Returning String
// Route::view('about','about');

// Route::get('admin',function () {
//     return view('profile');
// });