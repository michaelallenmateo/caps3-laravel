<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
	    function product() {
	    	return $this->BelongsTo('\App\Products','product_id');
	}

		function user() {
	    	return $this->BelongsTo('\App\Users','user_id');
	}


	protected $fillable = [
        'product_id','user_id','rating','title','content',
    ];


}
