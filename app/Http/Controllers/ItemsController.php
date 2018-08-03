<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{

    public function index() {
        return view('item.show'); 
    }

    public function show($item)
    {
        return $item;
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 200);
    }

    public function update(Request $request, $item_id)
    {
        $item = Item::findOrFail($item_id);
        $item->update($request->all());

        return $item;
    }

    public function delete(Item $item)
    {
        $item = Item::delete($item);

        return response()->json(null, 204);
    }

    // public function store(CreateArticleRequest $request) {
    //     return Article::create($request->all());
    // }
}
