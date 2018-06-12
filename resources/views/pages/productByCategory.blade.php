@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')
 

    <div class="container index">
        <div class="row">
            
            @if(count($products)>0)
                @foreach($products as $product)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="/products/{{$product->id}}" style="list-style:none;">
                        <div class="col-xs-12">
                            <img src="/image/{{$product->image}}" class="img-responsive">
                        </div>
                        </a>
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->brand }}</p>
                        <p>&#8369 {{ number_format($product->price, 2)}}</p>
                        {{$product->category->title}}
                        <div class="ratings">
                            <strong>Rating:</strong>
                            @for ($i=1; $i <= 5 ; $i++)
                              <span class="glyphicon glyphicon-star{{ ($i <= $product->reviews->avg('rating')) ? '' : '-empty'}}"></span>
                            @endfor
                            {{-- {{ number_format($product->reviews->avg('rating'), 1)}} stars --}}
                            <p><strong>{{count($product->reviews)}} Reviews</strong></p>
                        </div>
                    </div> {{-- end of div thumbnail --}}
                    
                </div>
                @endforeach
            @else
                <h3>No listed products yet under this category</h3>
            @endif    
        </div>
    </div>

@endsection