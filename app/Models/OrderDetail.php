<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order()
    {
        return $this->hasOne('App\Models\Order');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }

    public function productSize()
    {
        return $this->hasOne('App\Models\ProductSize');
    }

    public function productColor()
    {
        return $this->hasOne('App\Models\ProductColor');
    }
}
