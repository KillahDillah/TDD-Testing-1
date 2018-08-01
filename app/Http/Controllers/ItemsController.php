<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
       return view('item.list'); 
    }
    public function show($id) {
        $tasks = App\Task::find($id);
        return view('item.show');
    }

}
