<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    function category() {
    	return $this->BelongsTo('\App\Categories','product_category_id');
    }

    function reviews() {
    	return $this->hasMany('\App\Reviews','product_id');
    }



  //   public function recalculateRating($rating)
  //   {
  //   	// $reviews = $this->reviews()->notSpam()->approved();
  //   	$reviews = $this->reviews();
	 //    $avgRating = $reviews->avg('rating');
		// $this->ave_rating = round($avgRating,1);
		// $this->rating_count = $reviews->count();
  //   	$this->save();
  //   }



}
