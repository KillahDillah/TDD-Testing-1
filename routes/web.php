<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', 'ItemsController@index');

Route::get('/items/{item}', 'ItemsController@show');

Route::get('/items/{item}', 'ItemsController@update');

Route::put('/items/{item}', 'ItemsController@update');

Route::get('/items/{item}', 'ItemsController@post');

Route::delete('/items/{item}', 'ItemsController@post');
