<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>BeautyTalk | Latest Reviews and Trends on beauty products</title>
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
/*.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #010800;
  background-color: #689a9b;
}
.navbar-default .navbar-toggle {
  border-color: #689a9b;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #689a9b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #efee24;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #efee24;
}
.navbar-default .navbar-link {
  color: #efee24;
}
.navbar-default .navbar-link:hover {
  color: #010800;
}*/

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


    
<br>

  {{-- <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </section> --}}


<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
		      <a href="#" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		        Dashboard
		      </a>
		      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">{{count($userCount)}}</span></a>
		      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Products<span class="badge">{{count($productsCount)}}</span></a>
		      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Reviews<span class="badge">{{count($reviewsCount)}}</span></a>
    	</div>

        <div class="well">
          <h4>Products Management</h4>
		  	<a href="/admin/product_add" class="btn btn-success btn-md" style="width: 60%;">Add</a>
			<a href="/admin/product_edit" class="btn btn-primary btn-md" style="width: 60%;">Edit / Delete</a>
		        </div>

		        <div class="well">
          <h4>Reviews Management</h4>
		  	<a href="/admin/review_approval" class="btn btn-success btn-md" style="width: 60%;">Approve Reviews</a>
		        </div>

            <div class="well">
          <h4>Users Management</h4>
        <a href="/admin/userAccountList" class="btn btn-success btn-md" style="width: 60%;">Manage Users</a>
            </div>
      </div>







      <div class="col-md-9">
          <div class="panel panel-default">
  <div class="panel-heading" style="background-color:  black;color:white;">
    <h3 class="panel-title">Website Overview</h3>
  </div>
  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{count($userCount)}}</h2>
       <h4>Users</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{count($productsCount)}}</h2>
       <h4>Products</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>{{count($reviewsCount->where('approved',true))}}</h2>
       <h4>Reviews Approved</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>{{count($reviewsCount->where('approved',false))}}</h2>
       <h4>Reviews Pending Approval</h4>
     </div>
   </div>
</div>
<!--Latest User-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  black;color:white;">
    <h3 class="panel-title">Latest Account Created</h3>
  </div>
  <div class="panel-body table-responsive">
    <table class="table table-striped table-hover">
      <tr>
        <th>Date Joined</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </tr>

    @foreach($users as $user)
    <tr>
      <td>{{$user->created_at}}</td>
      <td>{{$user->firstname}}</td>
      <td>{{$user->lastname}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
    </table>

  </div>
</div>


{{-- latest product addes --}}
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  black;color:white;">
    <h3 class="panel-title">Latest Product Added</h3>
  </div>
  <div class="panel-body table-responsive">
    <table class="table table-striped table-hover">
      <tr>
        <th>Date Added</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Price(&#8369)</th>
        <th>Description</th>
        <th>Image</th>
      </tr>

    @foreach($products as $product)
    <tr>
      <td>{{$product->created_at}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->category->title}}</td> 
      <td>{{$product->brand}}</td>
      <td>{{ number_format($product->price, 2)}}</td>
      <td>{{$product->description}}</td>
      <td><img src="image/{{$product->image}}" style="width: 80px; height: 80px;"></td>
    </tr>
    @endforeach
    </table>

  </div>
</div>


{{-- latest reviews --}}
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  black;color:white;">
    <h3 class="panel-title">Latest Reviews Created / Updated</h3>
  </div>
  <div class="panel-body table-responsive">
    <table class="table table-striped table-hover">
      <tr>
        <th>Date of Review</th>
        <th>Product Name</th>
        <th>Star Rating</th>
        <th>Review</th>
        <th>Reviewed by:</th>
        <th>Review Approved?</th>
      </tr>

    @foreach($reviews as $review)
    <tr>
      <td>{{$review->created_at}}</td>
      <td>{{$review->product->name}}</td>
      <td>{{$review->rating}}</td>
      <td>{{$review->content}}</td>
      <td>{{$review->user->firstname." ".$review->user->lastname}}</td>
      <td>{{$review->approved ? 'Approved' : 'Pending'}}</td>
    </tr>
    @endforeach
    </table>

  </div>
</div>

      </div>
    </div>
  </div>
</section>

@endif


</body>
</html>
