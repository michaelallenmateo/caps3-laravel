@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')

<style>

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

    }


</style>

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

							<a href="/myaccount/{{Auth::user()->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
							<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteConfirmation">Delete</button>
						</td>
				</tr>
				
		{{-- @endforeach	 --}}
		


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
				        <form method="POST" action="/myaccount/{{Auth::user()->id}}/delete">
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
					





@endsection