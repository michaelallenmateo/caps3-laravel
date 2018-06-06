@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')







		<div class="container" style="min-height: 900px;">
			<h1>{{$products->name}}</h1>

			{{-- ID: {{$products->id}} <br> --}}
			Name: {{$products->brand}} <br>
			Description: {{$products->description}} <br>
			Price: Php{{$products->price}}.00 <br>

			<a href="/menu/{{$products->id}}/edit" class="btn btn-primary btn-md">Write a Review</a>


			  </div>
			</div>
		</div>
	@endsection