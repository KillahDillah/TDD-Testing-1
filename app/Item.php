<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function active($item){
        return $item->find($id);
    }
}
