<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', 'ItemsController@index');

Route::get('/items/{item}', 'ItemsController@show');


// function($id) {
//     $tasks = App\Task::find($id);
//     return view('tasks.show', compact('task'));
// });