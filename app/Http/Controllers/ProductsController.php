<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;


class ProductsController extends Controller
{
    function productDetails($id) {
    	$products = Products::find($id); //SELECT * FROM items;

    	$reviews = $products->reviews()->paginate(20);


    	return view('pages.product_details', compact('products','reviews'));
    }
}


