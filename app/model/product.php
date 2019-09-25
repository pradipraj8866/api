<?php

namespace App\model;

use App\model\review;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

	protected $fillable = [
		'name','details','stock','price','discount',
	];

    public function reviews()
    {
    	return $this->hasMany(review::class);
    }
}
