<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use \App\Categories;

class PagesController extends Controller
{
    function index (){
    	$products = Products::all(); //SELECT * FROM items;

    	return view('pages.index', compact('products'));

    }


    function showByCategory($id) {
		$category = Categories::find($id);
		$products = $category->products;

		return view('pages.index', compact('products'));
	}

	function writeReview($id) {
		$products = Products::find($id); //SELECT * FROM items;
    	return view('pages.product_details', compact('products'));
		}




}
