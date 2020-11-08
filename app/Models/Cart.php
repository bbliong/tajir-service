<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product');
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
