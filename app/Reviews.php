<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
	//added for checking (submission of review if already exist same user)
	protected $fillable = ['product_id'];

	    function product() {
	    	return $this->belongsTo('\App\Products','product_id');
	}

		function user() {
	    	return $this->BelongsTo('\App\User');
	}


	// protected $fillable = [
 //        'product_id','user_id','rating','title','content',
 //    ];


}
