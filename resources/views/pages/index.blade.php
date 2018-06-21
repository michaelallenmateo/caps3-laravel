@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')
      
      <style type="text/css">
          div.jumbotron {
            padding: 0;
            margin: 0;
            background-image: url(/image/index1.jpg),url(/image/index2.jpg) ;
            background-position: left,right;
            background-repeat: no-repeat, no-repeat;
            background-size: 50% auto;
          }

          div.container.jumbo {
            padding-top: 50px;
            padding-left: 15%;
            background-color: rgba(0,0,0,0.3);
            width: auto;
          }

          h1.display-4,
          p.lead {
            color: rgba(0,0,0,1);
            
          }
          
      </style>  
 
@if(Session::has('success_message'))
    <div class="alert alert-success">
      {{ Session::get('success_message') }}
    </div>
    @endif

    <div class="jumbotron jumbotron-fluid">
  <div class="container jumbo">
    <h1 class="display-4">Let your experience be heard</h1>
    <p class="lead">Be part of BeautyTalk latest reviews and trends on beauty products.</p>
  </div>
</div>


    <div class="container index">
        <div class="row">
            <h2 style="width: auto;text-align: center;">Recently Added</h2>
            @if(count($products)>0)
                @foreach($products->sortByDesc('created_at') as $product)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="/products/{{$product->id}}" style="list-style:none;">
                        <div class="col-xs-12">
                            <img src="/storage/image/{{$product->image}}" class="img-responsive">
                        </div>
                        </a>
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->brand }}</p>
                        <p>&#8369 {{ number_format($product->price, 2)}}</p>
                        {{$product->category->title}}
                        <div class="ratings">
                            <strong>Rating:</strong>
                            @for ($i=1; $i <= 5 ; $i++)
                              <span class="glyphicon glyphicon-star{{ ($i <= $product->reviews->where('approved',true)->avg('rating')) ? '' : '-empty'}}"></span>
                            @endfor
                            {{-- {{ number_format($product->reviews->avg('rating'), 1)}} stars --}}
                            <p><strong>{{count($product->reviews->where('approved',true))}} Reviews</strong></p>
                        </div>
                    </div> {{-- end of div thumbnail --}}
                    
                </div>
                @endforeach
            @else
                <h3>No listed products yet under this category</h3>
            @endif    
        </div>
        <div class="text-center">
                  {{$products->links()}}
        </div>
    </div>

    {{-- submit your products for review --}}
    <div style="border: 1px solid lightgrey;border-radius: 4px; width: 600px; position: fixed;bottom: 170px; top: auto; right:25%; background-color: #f7f7f7; display: inline-block; padding: 10px;" class="prodReview">
      <h4>Didn't find the product your looking? Submit the product you want to be reviewed.</h4>
      <div> <input type="text" name="prod_forReview" placeholder="Enter product name here"> </div>
      <div>  <button type="submit">Submit</button> </div>
    </div>


    <script type="text/javascript">
     



      $(document).ready( function() {
        $(".prodReview").hide(); //hide your div initially
        var y = $(this).scrollTop();
           $(window).scroll(function() {
             if($(window).scrollTop() > 1200) {
              $('.prodReview').fadeIn();
              } else {
              $('.prodReview').fadeOut();
             }
        });
          });


    </script>

@endsection