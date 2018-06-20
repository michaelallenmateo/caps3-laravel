<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>{{ config('app.name', 'BeautyTalk | Latest Reviews and Trends on beauty products') }}</title>
  <link rel="icon" type="image/gif/png" href="/image/tablogo.png">
</head>
<body>

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

span.profile_img img {
      margin-top: 10px;
      width: 35px;
      height: 35px;
      border-radius: 50%;

    }

.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
  background-color: black;
  color: white;
}    

.dropdown-menu>li>a:hover {
  color: white;
  background-color: black;
}    

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 18px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    width: 20%;
}



tr {
  width: auto;
}

img.profile {
      margin-top: 10px;
      width: 75px;
      height: 75px;
      border-radius: 50%;

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #efee24;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #010800;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #010800;
    background-color: #689a9b;
  }
}

/*Breadcrumb*/

.breadcrumb{
	background: #cccccc;
	color: #333333;
}
.breadcrumb a{
	color: #333333;
}
	</style>

@if (Auth::user()->id == Auth::user()->id)

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
          <li class="dropdown">
            <span class="profile_img"><img src="/image/{{ Auth::user()->profile_image }}" id="profile_image"></span>
            <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->firstname }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li class=""><a href="/myaccount/admin">My Account</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li>
                    <a href="/changePassword/{{ Auth::user()->id }}">
                       Change Password
                    </a>
                </li>
            </ul>
          </li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif
<h1>Edit account page</h1>

  <div>
        <!-- {{-- <img type="image"  id="image" name="image" src="/image/{{$review->product->image}}" style="width: 200px;height: 200px;" > --}} -->
      
<form class="form-horizontal" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <div class="profile">
    <label class="control-label col-sm-2" for="profile_image">Profile Image:</label>
    <!-- {{-- <div class="col-sm-10">  --}} -->
      <img  class="profile_image" id="profile_image" name="profile_image" src="/image/{{Auth::user()->profile_image}}" style="height: 200px; width: 200px;">
    <!-- {{-- </div> --}} -->
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="image">Upload image:</label>
    <div class="col-sm-3">
      <input type="file" name="image" class="form-control">
    </div>
    </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="firstname" name="firstname" value="{{Auth::user()->firstname}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="lastname" name="lastname" value="{{Auth::user()->lastname}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
    </div>
  </div>

  

  <input type="number" name="id" value="{{Auth::user()->id}}" hidden="">


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
<h4>You are not allowed to edit this account</h4>
</div>
@endif

</body>
</html>  
