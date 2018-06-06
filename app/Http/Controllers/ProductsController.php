<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;


class ProductsController extends Controller
{
    function productDetails($id) {
    	$products = Products::find($id); //SELECT * FROM items;
    	return view('pages.product_details', compact('products'));
    }
}


