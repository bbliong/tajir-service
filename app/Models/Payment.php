<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function parent()
    {
        return $this->hasOne('App\Models\Payment');
    }
}
