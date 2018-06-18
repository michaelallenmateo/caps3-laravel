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

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 18px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    width: 150px;
}



tr {
  width: auto;
}

img {
      margin-top: 10px;
      width: 90px;
      height: 75px;

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

@if(count($reviews->where('approved',false))>0)
  <h1>Product reviews for approval</h1>

    


<table>
        <tr>
          <th>Date of Review</th>
          <th>Product Name</th>
          <th>Posted by</th>
          <th>Star Rating</th>
          <th>Title</th>
          <th>Content</th>
          <th>Actions</th>
        </tr>
        {{-- @if($reviews->where('approved',true)->count() > 0) --}}
        @foreach($reviews->where('approved',false)->sortByDesc('updated_at') as $review)
        <tr>
            <td>{{$review->created_at}}</td> 
            <td>{{$review->product->name}}</td> 
            <td>{{$review->user->firstname." ".$review->user->lastname}}</td> 
            <td>{{$review->rating}}</td> 
            <td>{{$review->title}}</td> 
            <td>{{$review->content}}</td> 
            
            
            <td>  

              <a href="/adminReviewApprove/{{$review->id}}" class="btn btn-primary btn-xs">Approve</a>
              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteProdConfirm">Delete</button>
            </td>
        </tr>
        
     @endforeach
    {{-- @endif	 --}}


    <!-- Modal for delete-->
      <div id="deleteProdConfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Warning: This action is irreversible !</h4>
            </div>
            <div class="modal-body">
             Are you sure you want to delete this product review?
            </div>
            <div class="modal-footer">
                <form method="POST" action="/adminReviewDelete/{{$review->id}}">
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

@else 
<h2>No review for approval</h2>
@endif {{-- endif if count review->not approved --}}


@endif




</body>
</html>