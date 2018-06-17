@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')



@if ($review->user_id == Auth::user()->id)

<div class="container">
	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	@endif


	@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif
	
	<h1>Edit review page</h1>

	<div>
	      <img type="image"  id="image" name="image" src="/image/{{$review->product->image}}" style="width: 200px;height: 200px;" >
	    

	
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="name">Name:</label>
		    <div class="col-sm-12">
		      <input type="text" class="form-control col-sm-6" id="name" name="name" value="{{$review->product->name}}" disabled="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="brand">Brand:</label>
		    <div class="col-sm-12"> 
		    	<input class="form-control col-sm-12" rows="5" id="brand" name="brand" value="{{$review->product->brand}}" disabled="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="price">Price:</label>
		    <div class="col-sm-12">
		      <input type="text"  class="form-control col-sm-6" id="price" name="price" value="&#8369 {{number_format($review->product->price,2)}}" disabled="">
		    </div>
		  </div>
	    <div class="form-group">
	    	<label class="control-label col-sm-2" for="category">Category:</label>
	    	<div class="col-sm-12">
	  			<input type="text"  class="form-control col-sm-6" id="price" name="price" value="{{$review->product->category->title}}" disabled="" >
	    	</div>
	    </div>
	<form class="form-horizontal" method="POST">
	  {{ csrf_field() }}
	  {{ method_field('PATCH') }}
	  <input type="number" name="product_id" value="{{$review->product->id}}" hidden="">
	  <input type="number" name="user_id" value="{{$review->user->id}}" hidden="">
	  <div class="form-group">
	    	<label class="control-label col-sm-6" for="review_title">Your Review title:</label>
	    	<div class="col-sm-12">
	  			<input type="text"  class="form-control col-sm-6" id="review_title" name="review_title" value="{{$review->title}}" >
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-6" for="review_content">Your Review content:</label>
	    	<div class="col-sm-12">
	  			<input type="text"  class="form-control col-sm-6" id="review_content" name="review_content" value="{{$review->content}}" >
	    	</div>
	    </div>

	    <div class="form-group">
	    	<label class="control-label col-sm-6" for="review_rating">Your Review star rating (1-5):</label>
	    	<div class="col-sm-12">
	  			<input type="number"  class="form-control col-sm-6" id="review_rating" name="review_rating" value="{{$review->rating}}" min="1" max="5">
	    	</div>
	    </div>
	    <input name="approved" value="0" readonly hidden></input>


	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	  </div>
	</form>
	</div> 
</div>


@else 
<div class="container">
<h4>You are not allowed to edit this review</h4>
</div>
@endif

@endsection