<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
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
//     return view('welcome', ['name' => 'Shahil', 'nm' => 'Apple iPhone', 'price' => 150000 ]);
// });

Route::get('display',[ContactController::class, 'display']);
Route::get('detail',[DetailsController::class,'detail']);
Route::get('product',[ProductController::class,'product']);
Route::get('/',[WelcomeController::class,'welcome']);
