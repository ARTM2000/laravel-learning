<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
//     // return view('welcome');
//     // return "Hello world";
// });

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/services', 'PageController@services');

Route::get("/user/{id}/{name}", function($id, $name) {
    return $id." ".$name;
});

Route::resource('posts', 'PostController');