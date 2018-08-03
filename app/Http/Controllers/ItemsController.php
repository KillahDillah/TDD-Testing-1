<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index() {
        // $items = Item::find($id);
        // Item::allItems();
        return view('item.show'); 
    }
    // public function create(){

    // }
    // public function store(Item $item) {
    //     $this = Item::store($id);
    //     return response($this->format($response), 200);
    // }
    public function show(Item $item) {
        // $items = DB::table('items')->find($id);
        Item::activeItems();

        return response($this->format($response), 200);
        // $items = \App\Item::find($id);
        // return view('item.show');
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
