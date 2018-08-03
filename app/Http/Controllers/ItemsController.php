<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index() {
        return view('item.show'); 
    }
    // public function create(){

    // }
    public function show($item)
    {
        return $item;
    }

    public function store(Item $items)
    {
        $item = Item::create($item->all());

        return response()->json($item, 200);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return $item;
    }

    public function delete(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return 204;
    }

    // public function store(CreateArticleRequest $request) {
    //     return Article::create($request->all());
    // }
}
