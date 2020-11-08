<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->hasOne('App\Models\Category');
    }

    public function size()
    {
        return $this->hasOne('App\Models\ProductSize');
    }

    public function color()
    {
        return $this->hasOne('App\Models\ProductColor');
    }

}
