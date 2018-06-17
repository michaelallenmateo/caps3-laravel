<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reviews;
use Session;

class ReviewsController extends Controller
{
    function postReview (Request $request) {
        $rules = array(
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required|integer|between:0,5',
            'title' => 'required',
            'content' => 'required'
        );
        $this->validate($request, $rules);

 		// $reviews = new Reviews;
 		// $reviews->product_id = $request->product_id;
 		// $reviews->user_id = $request->user_id;
 		// $reviews->rating = $request->rating;
   //      $reviews->title = $request->title;
   //      $reviews->content = $request->content;
 		// $reviews->save();


        $reviews = Reviews::firstOrNew([
          'product_id' => $request->product_id,
          'user_id' => $request->user_id,
        ]);



        $reviews->product_id = $request->product_id;
        $reviews->user_id = $request->user_id;
        $reviews->rating = $request->rating;
        $reviews->title = $request->title;
        $reviews->content = $request->content;
        $reviews->save();

        Session::flash('success_message', 'Your review was successfully submitted. Thank You!');

 		return redirect()->back();
    }


    function delete($id) {
        $item = Reviews::find($id);
        $item->delete();

        Session::flash('success_message', 'Review deleted successfully');

        return redirect()->back();
    }



    function editReview($id) {
        $review = Reviews::find($id);

        return view('pages.editReview', compact('review'));
    }



    function updateReview (Request $request, $id) {
        $rules = array(
            'product_id' => 'required',
            'user_id' => 'required',
            'review_title' => 'required',
            'review_content' => 'required',
            'review_rating' => 'required|integer|between:1,5'
        );
        $this->validate($request, $rules);

        $reviews = Reviews::find($id);
        $reviews->product_id = $request->product_id;
        $reviews->user_id = $request->user_id;
        $reviews->rating = $request->review_rating;
        $reviews->title = $request->review_title;
        $reviews->content = $request->review_content;
        $reviews->save();

        Session::flash('success_message', 'Your review was successfully updated. Thank You!');

        return redirect()->back();
    }


}
