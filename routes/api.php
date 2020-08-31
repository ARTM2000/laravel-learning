<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get("/v1/me", function() {
//     return "Hello";
// });

Route::prefix('v1')->group(function() {
    //defining the version one api

    //users route
    Route::get('users', 'UserController@getAllUser');
    Route::post('users/add', 'UserController@createUser');

    //posts route
    Route::get('posts', 'PostController@indexAPI');
    Route::post('posts/user', 'PostController@getUserPost');

});
