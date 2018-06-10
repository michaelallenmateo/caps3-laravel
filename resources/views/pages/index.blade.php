@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')
            
        <div class="container">
       
        

        {{-- <h2>RECENT ADDED:</h2> --}}
        {{-- <div class="row">
            <ul>
            @foreach(\App\Category::all() as $category)
                <a href="/menu/categories/{{$category->id}}">
                    <li>{{$category->name}}</li>
                </a>
            @endforeach
            </ul>
        </div> --}}
        <div class="row">
        @foreach($products as $product)
            <div class="col-xs-3 item">
            <a href="/products/{{$product->id}}" style="list-style:none;">
                <div class="col-xs-12">
                    <img src="/image/{{$product->image}}">
                </div>
            </a>
                <p>{{ $product->name }}</p>
                <p>{{ $product->brand }}</p>
                <p>&#8369 {{ number_format($product->price, 2)}}</p>
                {{$product->category->title}}
                
            {{-- <form method="POST" action="/addtocart/{{$item->id}}"> --}}
                {{-- csrf_field() --}}
                {{-- <input type="number" id="input_{{$item->id}}" min=1 name="quantity" class="form-control">
                <button class="btn btn-primary btn-sm col-xs-12 addToCartBtn" onclick="addToCart({{$item->id}})">Add to Cart</button> --}}
            {{-- </form> --}}
            <div class="ratings">
            
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $product->reviews->avg('rating')) ? '' : '-empty'}}"></span>
                    @endfor
                    {{-- {{ number_format($product->reviews->avg('rating'), 1)}} stars --}}
              </div>


            <p><strong>{{count($product->reviews)}} Reviews</strong></p>
            </div>
        @endforeach
        </div>
    </div>

@endsection