<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function shipment()
    {
        return $this->hasOne('App\Models\Shipment');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }
}
