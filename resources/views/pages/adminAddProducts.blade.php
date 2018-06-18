<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>{{ config('app.name', 'BeautyTalk | Latest Reviews and Trends on beauty products') }}</title>
  <link rel="icon" type="image/gif/png" href="/image/tablogo.png">
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
            <li class=""><a href="/admin">Go back to Dashboard</a></li>
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

	<h1>Add Products Page</h1>

	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
	  {{ csrf_field() }}
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Name:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{ old('name') }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Brand:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="brand" name="brand" placeholder="Product Brand" value="{{ old('brand') }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="description">Description:</label>
	    <div class="col-sm-10"> 
	    	<textarea class="form-control" rows="5" id="description" name="description" placeholder="Product Description">{{ old('description') }}</textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="price">Price:</label>
	    <div class="col-sm-10">
	      <input type="number" step=".01" class="form-control" id="price" name="price" placeholder="Item Price" value="{{ old('price') }}" min="0.01">
	    </div>
	  </div>
	  <div class="form-group">
	  	<label class="control-label col-sm-2" for="category">Category:</label>
	  	<div class="col-sm-10">
		  	<select id='category' name='category' class="form-control">
		  		<option>Choose Category</option>
		  		@foreach(\App\Categories::all() as $category)
		  			<option value='{{$category->id}}'
		  				@if(old('category') == $category->id)
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
		<label class="control-label col-sm-2" for="image">Upload image:</label>
		<div class="col-sm-10">
			<input type="file" name="image" class="form-control">
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