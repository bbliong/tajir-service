<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function product()
    {
        return $this->morphedByMany('App\Models\Product', 'imageable');
    }

    public function testimonial()
    {
        return $this->morphedByMany('App\Models\Testimonial', 'imageable');
    }

}
