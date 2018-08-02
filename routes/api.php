<?php

use Illuminate\Http\Request;

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

Route::get('/items', 'ItemsController@index');

Route::get('/items/{item}', 'ItemsController@show');

Route::get('/items/{item}', 'ItemsController@update');

Route::put('/items/{item}', 'ItemsController@update');

Route::get('/items/{item}', 'ItemsController@post');

Route::delete('/items/{item}', 'ItemsController@post');
