<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    public function parent()
    {
        return $this->hasOne('App\Models\Shipment');
    }
}
