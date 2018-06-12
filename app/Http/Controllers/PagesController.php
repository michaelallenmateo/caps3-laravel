<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use \App\Categories;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    function index (){
    	$products = Products::paginate(6); //SELECT * FROM items;

    	return view('pages.index', compact('products'));

    }


    function showByCategory($id) {
		$category = Categories::find($id);
		$products = $category->products;

		return view('pages.productByCategory', compact('products'));
	}

	function writeReview($id) {
		$products = Products::find($id); //SELECT * FROM items;
    	return view('pages.product_details', compact('products'));
		}


	function showReviews () {
		return view('pages.myreviews');
	}



	function search () {
	$search = Input::get ( 'search' );
	$product = Products::where ( 'name', 'LIKE', '%' . $search . '%' )->orWhere ( 'brand', 'LIKE', '%' . $search . '%' )->get ();
	if (count ( $product ) > 0)
		return view ( 'pages.searchResult' )->withDetails ( $product )->withQuery ( $search );
	else
		return view ( 'pages.searchResult' )->withMessage ( 'No match found. Try again!' );
	} 

	function admin () {
		return view('pages.admin');
	}


}
