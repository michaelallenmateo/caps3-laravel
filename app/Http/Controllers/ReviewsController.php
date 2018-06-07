<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reviews;
use Session;

class ReviewsController extends Controller
{
    function postReview(Request $request) {
        $rules = array(
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required',
            'title' => 'required',
            'content' => 'required'
        );
        $this->validate($request, $rules);

 		$reviews = new Reviews;
 		$reviews->product_id = $request->product_id;
 		$reviews->user_id = $request->user_id;
 		$reviews->rating = $request->rating;
        $reviews->title = $request->title;
        $reviews->content = $request->content;
 		$reviews->save();

        Session::flash('success_message', 'Review was successfully created');

 		return redirect("/");
    }
}
