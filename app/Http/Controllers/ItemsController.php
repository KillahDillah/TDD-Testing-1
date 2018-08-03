<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        // $items = Item::find($id);
        // Item::active();
        return view('item.show', [
            'name',
            'description'
        ]); 
    }
    public function create(){

    }
    public function store() {
        // alert('successfully stored'); 
    }
    public function show($id) {
        $items = \App\Item::find($id);
        return view('item.show');
    }
    public function edit() {

    }

    public function update() {
        // alert('successfully stored'); 
    }

    public function destroy() {
        // alert('successfully stored'); 
    }

    // public function store(CreateArticleRequest $request) {
    //     return Article::create($request->all());
    // }
}
