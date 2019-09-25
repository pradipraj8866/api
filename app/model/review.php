<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function products()
    {
    	return $this->belongsTo('product::class');
    }
}
