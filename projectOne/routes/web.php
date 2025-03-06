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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return "Home Page";
});
Route::get('/about', function () {
    return "About Page";
});
Route::get('/contact', function () {
    return "Contact Page";
});
Route::get('/service', function () {
    return "Service Page";
});
Route::get('/portfolio', function () {
    return "Portfolio Page";
});

Route::get('/user/{id}', function ($id) {
    return $id;
});

Route::get('post/{post_id}/comment/{comment_id}', function($post_id, $comment_id){
    return "Post ID :" . $post_id . "Comment ID :" . $comment_id;
});

Route::get('student/{name?}', function($name ="Shahil"){
    return "Hello " .$name ;
});

Route::get('product/{p_name}', function($name){
    return "Product Name: " . $name;
})->where('p_name', '[A-Za-z]+');

Route::get('manager/{id}/{name}', function($id, $name){
    return "Manager ID: " . $id . " Manager Name: " . $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);

Route::get('employee/{id}/{name}', function($id, $name){
    return "Employee ID: " . $id . " Employee Name: " . $name;
})->whereNumber('id')->whereAlpha('name');

Route::fallback(function(){
    return "Defualt Message";
});
