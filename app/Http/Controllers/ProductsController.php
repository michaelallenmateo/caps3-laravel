<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use Session;



class ProductsController extends Controller
{
    function productDetails($id) {
    	$products = Products::find($id); //SELECT * FROM items;

    	$reviews = $products->reviews()->paginate(20);

        $approved = $products->reviews->where('approved',true);


    	return view('pages.product_details', compact('products','reviews','approved'));
    }

    function adminAddProducts (Request $request){
    	$rules = array(
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        );
        $this->validate($request, $rules);

 		$products = new Products;
 		$products->name = $request->name;
 		$products->brand = $request->brand;
 		$products->description = $request->description;
 		$products->price = $request->price;
 		// $item->image = 'image/item/default.jpg';
        $products->product_category_id = $request->category;

        $image = $request->file('image'); //gets the image from form
        $image_name = time().'.'.$image->getClientOriginalExtension();
        //ex. 12312356.jpg
        $destination = "image"; //ex "images/" -> file destination
        $image->move($destination, $image_name);

        $products->image = $image_name;

 		$products->save();

        Session::flash('success_message', 'Product Added Successfully');

 		return redirect("/admin/product_add");
    }


    function adminEditProductsUpdate (Request $request, $id) {
        $rules = array(
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );
        $this->validate($request, $rules);

        $products = Products::find($id);
        $products->name = $request->name;
        $products->brand = $request->brand;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->product_category_id = $request->category;

        //if condition(if file is uploaded that will replace the old profile image. If no file is uploaded the old image will be used)
            if($request->file('image')!=null) {

                $image = $request->file('image'); //gets the image from form
                $image_name = time().'.'.$image->getClientOriginalExtension();
                //ex. 12312356.jpg
                $destination = "image"; //ex "images/" -> file destination
                $image->move($destination, $image_name);

                $products->image = $image_name;

            }


        $products->save();

        Session::flash('success_message', 'Product was successfully updated.');

        return redirect()->back();
    }

    function adminDeleteProduct($id) {
        $product = Products::find($id);
        $product->delete();

        Session::flash('success_message', 'Product Deleted Successfully');

        return redirect('/admin/product_edit');
    }
}


