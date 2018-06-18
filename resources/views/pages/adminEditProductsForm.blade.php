<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'BeautyTalk | Latest Reviews and Trends on beauty products') }}</title>
  <link rel="icon" type="image/gif/png" href="/image/tablogo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">
		<style type="text/css">
		.navbar{
	min-height: 33px !important;
	margin-bottom: 0;
	border-radius: 0;

}
.navbar-nav> li>a, .navbar-brand{
	padding-top: 6px !important;
	padding-bottom: 0;
	height: 33px;

}

.main-color-bg{
	background-color: #095f59;
	color: #ffffff !important;
}


/*Header */

#header{
	background: #333333;
	color: #ffffff;
	padding-bottom: 10px;
	margin-bottom: : 15px;
}

#header .create{
	padding-top: 20px;
}

.dash-box{
	text-align: center;
}





.navbar-default {
  background-color: black;
  border-color: black;
}
.navbar-default .navbar-brand {
  color: white;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: white;
}
/*.navbar-default .navbar-text {
  color: #efee24;
}*/
.navbar-default .navbar-nav > li > a {
  color: white;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: white;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #010800;
  background-color: lightgrey;
}



div.container-fluid {
  margin-bottom: 75px;
}    
	</style>

@if (Auth::user()->roles_id == 1)

<h2>You are not authorized to access this page</h2>
<button><a href="/">Go to homepage</a></button>

@else



<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BeautyTalk</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          

          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="/admin">Go back to Dashboard</a></li><li class=""><a href="/admin/product_edit">Go back to Product List</a></li>
            <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<div class="container-fluid">
	@if(Session::get('errors'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5>There were errors while submitting your product update:</h5>
         @foreach($errors->all() as $message)
            <p>{{$message}}</p>
         @endforeach
      </div>
    @endif

	@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif
	
	<h1>Edit Products Details Page</h1>

	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
	  {{ csrf_field() }}
	  {{ method_field('PATCH') }}
	  <div class="prod_image">
	    <label class="control-label col-sm-2" for="prod_image">Product Image:</label>
	      <img  class="prod_image" id="prod_image" name="prod_image" src="/image/{{$products->image}}" style="width: 200px;height: 200px;">
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="image">Upload New  Product Image:</label>
	    <div class="col-sm-3">
	      <input type="file" name="image" class="form-control">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Name:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Brand:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="brand" name="brand" value="{{$products->brand}}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="description">Description:</label>
	    <div class="col-sm-10"> 
	    	<textarea class="form-control" rows="5" id="description" name="description">{{$products->description}}</textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="price">Price:</label>
	    <div class="col-sm-10">
	      <input type="number" step=".01" class="form-control" id="price" name="price" value="{{$products->price}}">
	    </div>
	  </div>
	    <div class="form-group">
	    	<label class="control-label col-sm-2" for="category">Category:</label>
	    	<div class="col-sm-10">
	  	  	<select id='category' name='category' class="form-control">
	  	  		@foreach(\App\Categories::all() as $category)
	  	  			<option value='{{$category->id}}'
	  	  				@if($products->product_category_id == $category->id)
	  	  					{{ "selected" }}
	  	  				@endif 
	  	  				{{-- old('category') == $category->id ? "selected" : "" --}}>
	  	  				{{$category->title}}
	  	  			</option>
	  	  		@endforeach
	  	  	</select>
	    	</div>
	    </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	  </div>
	</form> 
</div>

@endif

</body>
</html>