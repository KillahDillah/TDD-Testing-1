<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        // $items = Item::find($id);
        // Item::active();
        return view('item.show'); 
    }
    public function create(){

    }
    // public function store() {

    // }
    public function show($id) {
        // $items = \App\Item::find($id);
        return view('item.show');
    }
    // public function edit() {

    // }

    // public function update() {
       
    // }

    // public function destroy() {

    // }

    // public function store(CreateArticleRequest $request) {
    //     return Article::create($request->all());
    // }
}
