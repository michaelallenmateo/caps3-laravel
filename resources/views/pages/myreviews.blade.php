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
    width: auto;
    padding: 5px;
}



tr {
	width: auto;
}


</style>

@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif


<div class="container">
		@if(count(Auth::user()->reviews)>0)		
	<h1>Your review details are as follows:</h1>

		



<table>
				<tr>
					<th>Date</th>
					<th>Prduct Name</th>
					<th>Brand Name</th>
					{{-- <th>Description</th> --}}
					<th>Your review</th>
					<th>Your rating</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
		@foreach(Auth::user()->reviews as $review)
		{{-- <strong>{{$review->user->firstname}}</strong> --}}
				
				{{-- @foreach($review->products as $product) --}}
				<tr>
						{{-- based on review.php --}}
						{{-- $review is used since it is singular already in the initial foreach --}}
						<td>{{$review->created_at}}</td> 
						<td>{{$review->product->name}}</td> 
						<td>{{$review->product->brand}}</td> 
						{{-- <td>{{$review->product->description}}</td>  --}}
						<td>{{$review->content}}</td> 
						<td>{{$review->rating}} stars</td> 
						<td>Status here</td> 
						{{-- <td>
							@if($item->trashed())
								<small>(already unavailable)</small>
								<a href="/restore/{{$item->id}}">Restore this item</a>
							@endif
						</td> --}}
						<td>	

							<a href="/myreviews/{{$review->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
							<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteConfirmation">Delete</button>
						</td>
				</tr>
				{{-- @endforeach --}}
				
		@endforeach	
		@else
		<h4>You dont have any reviews made.</h4>
		@endif


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
			      	Are you sure you want to delete this review?
			      </div>
			      <div class="modal-footer">
			      	@if(count(Auth::user()->reviews)>0)		
				        <form method="POST" action="/myreviews/{{$review->id}}/delete">
		        			{{ csrf_field() }}
		        			{{ method_field('DELETE') }}
		        			<button class="btn btn-danger">Proceed</button>
		        			<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		        		</form>
		        	@else
		        		<form method="POST" action="">
		        			{{ csrf_field() }}
		        			{{ method_field('DELETE') }}
		        			<button class="btn btn-danger">Proceed</button>
		        			<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		        		</form>
		        	@endif	
		        			
			      </div>
			    </div>

			  </div>
			</div>


			</table>

</div>
					





@endsection