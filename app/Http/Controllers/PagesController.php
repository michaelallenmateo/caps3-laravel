<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Products;
use \App\Categories;
use \App\Reviews;
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


	function showAccountDetails () {
		return view('pages.myAccountDetails');
	}

	// admin page
	function admin () {
		//so that database details can be accessed
		$productsCount = Products::all();
		$products = Products::orderBy('created_at', 'desc')->limit(5)->get();;
		$reviewsCount = Reviews::all();
		$reviews = Reviews::orderBy('created_at', 'desc')->limit(5)->get();;
		$userCount = User::all();
		$users = User::orderBy('created_at', 'desc')->limit(5)->get();
		$categories = Categories::all();

		return view('pages.admin', compact('products','reviews','users','userCount','reviewsCount','productsCount'));
	}

	function adminAddProducts () {
		return view('pages.adminAddProducts');
	}
	

	function adminEditProducts () {

		$products = Products::all();
		return view('pages.adminEditProducts', compact('products'));
	}


	function adminEditProductsForm ($id){
		$products = Products::find($id);
		return view ('pages.adminEditProductsForm', compact('products'));
	}


	function adminReviewsApproval () {
		$reviews = Reviews::all();
		$products = Products::all();
		return view ('pages.adminReviewsApproval', compact('reviews','products'));
	}


	function adminUserList () {
		$users = User::all();
		return view ('pages.adminListUsers',compact('users'));
	}


	function adminMyAccount () {
		return view('pages.adminAccountDetails');
	}

}
