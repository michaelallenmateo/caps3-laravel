<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">TUITT Ecommerce</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li @if(Request::is('menu'))
	  		class="active" @endif><a href="/menu">Home</a></li>
	      @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
        @else
	      	<li @if(Request::is('mycart'))
	  		class="active" @endif><a href="/mycart">My Cart <span id="cartCount"></span></a></li>
	      	<li @if(Request::is('orders'))
	  		class="active" @endif><a href="/orders">My Orders</a></li>
	      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
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
</body>
</html>