<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function() {
    $tasks = App\Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id) {
    $tasks = App\Task::find($id);
    return view('tasks.show', compact('task'));
});