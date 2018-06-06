<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    function products() {
    	return $this->hasMany('\App\Products','product_category_id');
    }
}
