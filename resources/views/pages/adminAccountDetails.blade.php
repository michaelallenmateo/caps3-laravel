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

@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif


<div class="container">
  <h1>Your account details are as follows:</h1>

    

{{-- {{{{ Auth::user()->firstname }}firstname }} --}}

<table>
        <tr>
          <th>Account created</th>
          <th>First Name</th>
          <th>Last Name</th>
          {{-- <th>Description</th> --}}
          <th>Username</th>
          <th>Email</th>
          <th>Profile image</th>
          <th>Actions</th>
        </tr>
    {{-- @foreach(Auth::user()->users as $user) --}}
        <tr>
            <td>{{Auth::user()->created_at}}</td> 
            <td>{{Auth::user()->firstname}}</td> 
            <td>{{Auth::user()->lastname}}</td> 
            <td>{{Auth::user()->username}}</td> 
            <td>{{Auth::user()->email}}</td> 
            <td><img src="/image/{{Auth::user()->profile_image}}" class="profile"></td> 
            
            <td>  

              <a href="/myaccount/{{Auth::user()->id}}/adminEditAccountForm" class="btn btn-primary btn-xs">Edit</a>
              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteConfirmation">Delete</button>
            </td>
        </tr>
        
    {{-- @endforeach   --}}
    


    <!-- Modal for delete-->
      <div id="deleteConfirmation" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Warning: This action is irreversible !</h4>
            </div>
            <div class="modal-body">
              This action will delete all your reviews. Are you sure you want to delete this account?
            </div>
            <div class="modal-footer">
                <form method="POST" action="/myaccount/{{Auth::user()->id}}/adminDeleteAccount">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-danger">Proceed</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </form>
                  
            </div>
          </div>

        </div>
      </div>


      </table>

</div>
          


@endif


{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
</body>
</html>