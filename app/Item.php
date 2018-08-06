<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
        protected $fillable = [
        'name',
        'id',
        'description',
        'code',
        'status'
    ];

    public function allItems($item){
        return $item->where('status', 'active')->get();
    }
    public function getSingleItem($item_id){
        return $item->where('id', $item_id)->get();
    }
}
