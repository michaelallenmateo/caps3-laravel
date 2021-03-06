<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="icon" type="image/gif/png" href="/image/tablogo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/template.css">
	<link rel="stylesheet" type="text/css" href="/css/product_details.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"> --}}

	
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	      <a class="navbar-brand" href="/"><img src="/image/mainlogo.png" id="mainlogo"></a>
	    </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="navbar-nav ml-auto">
	    		@foreach(\App\Categories::all() as $category)
    	    	  <li class="categories">
    				    <a href="/products/category/{{$category->id}}">
    					     <li>{{$category->title}}</li>
    				    </a>
    		 	    </li>
		 		  @endforeach
          <li class="categories">
            <a href="/">
              <li>ALL PRODUCTS</li>
            </a>
          <li>  
          {{-- search bar --}}
          <form action="/search_result" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group search">
              <input type="text" class="form-control search" name="search"
                placeholder="Search products"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
          {{-- end of search bar --}}
      </ul>


	     <ul class="nav navbar-nav navbar-right">
	       @guest
	          <li><a href="{{ route('login') }}">Login</a></li>
	          <li><a href="{{ route('register') }}">Register</a></li>
         @else
	      	
	     </ul>
       <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <span class="profile_img"><img src="/image/{{ Auth::user()->profile_image }}" id="profile_image"></span>
            <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->firstname }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li class=""><a href="/myaccount">My Account</a></li>
                <li><a href="/myreviews">My Reviews </a></li>
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
        @endguest
	    </li>
	  </div>
  </div>
</nav>
	@yield('content')

	{{-- footer --}}
	  <!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Our Company</h1>
    <ul>
      <li>About</li>
      <li>Corporate Responsibility</li>
      <li>Careers</li>
    </ul>
  </div>
  <div class="col">
    <h1>Privacy Notice</h1>
    <ul>
      <li>Privacy Policy</li>
      <li>Terms and Condition</li>
    </ul>
  </div>
  <div class="col">
    <h1>SUPPORT</h1>
    <ul>
      <li>Contact Us</li>
      <li>Customer Support</li>

    </ul>
  </div>  

  <div class="col social">
    <h1>Social Accounts</h1>
    <ul>
      <li><img src="/image/instagram.png"></li>
      <li><img src="/image/fb.png"></li>
      <li><img src="/image/twitter.png"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
</body>
</html>