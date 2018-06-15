<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/products/category/{id}', 'PagesController@showByCategory');

// Route::get('/login', function (){
//     return view('auth.login');
// });
Route::get('/products/{id}', 'ProductsController@productDetails');


// route search bar
Route::post ( '/search_result', 'PagesController@search');


Route::middleware('auth')->group( function() {
	Route::get('/writereview/{id}', 'PagesController@writeReview');
	Route::post('/writereview/{id}', 'ReviewsController@postReview');
	Route::get('/myreviews', 'PagesController@showReviews');
	Route::delete('/myreviews/{id}/delete', 'ReviewsController@delete');
	Route::get('/myreviews/{id}/edit', 'ReviewsController@editReview');
	Route::patch('/myreviews/{id}/edit', 'ReviewsController@updateReview');
	Route::get('/myaccount', 'PagesController@showAccountDetails');
	Route::get('/myaccount/{id}/edit', 'UsersController@editAccount');
	Route::delete('/myaccount/{id}/delete', 'UsersController@deleteAccount');
	Route::patch('/myaccount/{id}/edit', 'UsersController@updateAccount');
	Route::get('/admin', 'PagesController@admin');

	//admin add products
	Route::get('/admin/product_add', 'PagesController@adminAddProducts');
	Route::post('/admin/product_add', 'ProductsController@adminAddProducts');
	//admin edit product
	Route::get('/admin/product_edit', 'PagesController@adminEditProducts');
	Route::get('/admineditprod/{id}', 'PagesController@adminEditProductsForm');
	Route::patch('/admineditprod/{id}', 'ProductsController@adminEditProductsUpdate');
	//admin delete product
	Route::delete('/admineditprodDelete/{id}', 'ProductsController@adminDeleteProduct');

});	


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
