@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')

<style type="text/css">
  
  div.profile {
    margin-bottom: 15px;
  }


  img.profile_image {
      width: 75px;
      height: 75px;
      border-radius: 50%;
  }
</style>

@if ($user->id == Auth::user()->id)

<div class="container">
@if(Session::get('errors'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5>There were errors while submitting your profile update:</h5>
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
	
	<h1>Edit account page</h1>

	<div>
	      {{-- <img type="image"  id="image" name="image" src="/image/{{$review->product->image}}" style="width: 200px;height: 200px;" > --}}
	    
<form class="form-horizontal" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <div class="profile">
    <label class="control-label col-sm-2" for="profile_image">Profile Image:</label>
    {{-- <div class="col-sm-10">  --}}
      <img  class="profile_image" id="profile_image" name="profile_image" src="/storage/image/{{Auth::user()->profile_image}}">
    {{-- </div> --}}
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
<h4>Unable to process this request</h4>
</div>
@endif

@endsection