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

    public function create(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 200);
    }

    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function delete(Item $item)
    {
        $item = Item::inactiveItem($item_id);
        return response()->json(null, 204);
    }
}
