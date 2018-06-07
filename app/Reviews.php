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


	// Validation rules for the ratings
    public function getCreateRules()
    {
        return array(
            'rating'=>'required|integer|between:1,5'
            'title'=>'required|min:10',
            'content'=>'required|min:10',
        );
    }



	// Attribute presenters
    public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }

    // this function takes in product ID, comment and the rating and attaches the review to the product by its ID, then the average rating for the product is recalculated
    public function storeReviewForProduct($productID, $comment, $rating)
    {
        $product = Product::find($productID);

        //$this->user_id = Auth::user()->id;
        $this->comment = $comment;
        $this->rating = $rating;
        $product->reviews()->save($this);

        // recalculate ratings for the specified product
        $product->recalculateRating($rating);
    }


}
