<?php

use Illuminate\Http\Request;
// use App\Item;
// use App\Http\Controllers;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/items', 'ItemsController@index');

Route::get('/items/create', 'ItemsController@create');

Route::post('/items', 'ItemsController@store');

Route::put('/items/{item}', 'ItemsController@show');

// Route::get('/items/{item}/edit', 'ItemsController@edit');

Route::delete('/items/{item}', 'ItemsController@update');

Route::delete('/items/{item}', 'ItemsController@delete');
