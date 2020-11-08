<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }

}
