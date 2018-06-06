<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;

class PagesController extends Controller
{
    function index (){
    	$products = Products::all(); //SELECT * FROM items;

    	return view('pages.index', compact('products'));

    }
}
