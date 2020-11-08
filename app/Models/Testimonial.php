<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    
    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

}
