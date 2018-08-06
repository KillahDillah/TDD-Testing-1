<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{

    public function index() {
        $item = Item::all();
        return response()->json($item); 
        // return view('welcome', $item);
    }

    // public function show($item)
    // {
    //     $item = Item::getSingleItem($item_id);
    //     return response()->json($item);
    // }
    public function show()
    {
        // $item = Item::getSingleItem($item_id);
        return view('welcome');
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
}
