<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
        protected $fillable = [
        'name',
        'id',
    ];

    public function allItems($item){
        return $item->where('status', 'active')->get();
    }
    // public function activeItems($item){
    //     return $item->find($item->id);
    // }
    // public function updateItem($item){
    //     return $item->where('id', $item);
    // }
}
