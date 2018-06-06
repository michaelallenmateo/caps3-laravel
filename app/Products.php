<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    function category() {
    	return $this->BelongsTo('\App\Categories','product_category_id');
    }}
