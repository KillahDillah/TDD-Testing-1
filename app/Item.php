<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function activeItems($item){
        return $item->where('status', 'active')->get();
    }
}
