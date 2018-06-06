<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/product_details.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		h3 {
			text-align: center;
		}
		img {
			height: 200px;
		}
		.item {
			margin-bottom: 50px;
		}
		.category {
			text-align: center;
			margin-bottom: 50px;
		}
		form {
			display: inline;
		}

		nav.navbar-default {
			background-color: black;
			color: white;
		}

		ul.ml-auto {
			font-size: 18px;
			font-weight: bold;
		}
		li a:hover {
			color: white!important;
			text-decoration: none;
		}


		/* STYLES SPECIFIC TO FOOTER  */
		.footer {
		  width: 100%;
		  position: relative;
		  height: auto;
		  background-color: black!important;
		}
		.footer .col {
		  width: 280px;
		  height: auto;
		  float: left;
		  box-sizing: border-box;
		  /*  -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;*/
		  padding: 0px 20px 20px 20px;
		}
		.footer .col h1 {
		  margin: 0;
		  padding: 0;
		  font-family: inherit;
		  font-size: 12px;
		  line-height: 17px;
		  padding: 20px 0px 5px 0px;
		  color: white;
		  font-weight: normal;
		  text-transform: uppercase;
		  letter-spacing: 0.250em;
		}
		.footer .col ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		}
		.footer .col ul li {
		  color: white;
		  font-size: 14px;
		  font-family: inherit;
		  font-weight: bold;
		  padding: 5px 0px 5px 0px;
		  cursor: pointer;
		
		}

		.col.social h1{
		margin-left: 8px;
		}

		.social ul li {
		  display: inline-block;
		  padding-right: 5px !important;
		}

		.social ul li img {
		  width: 40px;
		  height: 40px;
		}

		
		.clearfix {
		  clear: both;
		}
		@media only screen and (min-width: 1280px) {
		  .contain {
		    width: 1200px;
		    margin: 0 auto;
		  }
		}
		@media only screen and (max-width: 1139px) {
		  .contain .social {
		    width: 1000px;
		    display: block;
		  }
		  .social h1 {
		    margin: 0px;
		  }
		}
		@media only screen and (max-width: 950px) {
		  .footer .col {
		    width: 33%;
		  }
		  .footer .col h1 {
		    font-size: 14px;
		  }
		  .footer .col ul li {
		    font-size: 13px;
		  }
		}
		@media only screen and (max-width: 500px) {
		    .footer .col {
		      width: 50%;
		    }
		    .footer .col h1 {
		      font-size: 14px;
		    }
		    .footer .col ul li {
		      font-size: 13px;
		    }
		}
		@media only screen and (max-width: 340px) {
		  .footer .col {
		    margin-left: 25px;
		    width: 33.33%;
		  }
		}


	</style>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">BeautyTalk</a>
	    </div>
	    <ul class="navbar-nav ml-auto" style="list-style: none;display: inline-block;margin-top:15px;">
	    		@foreach(\App\Categories::all() as $category)
	    	<li style="padding-top: 15px;">
				<a href="/{{$category->title}}" style="margin-right:40px;">
					<li>{{$category->title}}</li>
				</a>
		 	<li>	
		 		@endforeach
	    </ul>
	    <ul class="nav navbar-nav {{-- navbar-right --}}">
	      @guest
	          <li><a href="{{ route('login') }}">Login</a></li>
	          <li><a href="{{ route('register') }}">Register</a></li>
         @else
	      	<li><a href="{{-- routes --}}">My Reviews </a></li>
	      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->firstname }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li class="active"><a href="{{-- routes --}}">My Account</a></li>
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
            </ul>
          </li>
        </ul>
        @endguest
	    </ul>
	  </div>
	</nav>
	@yield('content')

	{{-- footer --}}
	  <!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>
      <li>Corporate Responsibility</li>
      <li>Lets do business</li>
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
    <h1>Social</h1>
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