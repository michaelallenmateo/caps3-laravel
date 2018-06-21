@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')

    
        <div class="container index">
        <div class="row">
                @if(isset($details))
                    <p> Matching results for your query <b> " {{ $query }} " </b> are :</p>
                @foreach($details as $product)
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
                    
                            @for ($i=1; $i <= 5 ; $i++)
                              <span class="glyphicon glyphicon-star{{ ($i <= $product->reviews->where('approved',true)->avg('rating')) ? '' : '-empty'}}"></span>
                            @endfor
                            {{-- {{ number_format($product->reviews->avg('rating'), 1)}} stars --}}
                            <p><strong>{{count($product->reviews->where('approved',true))}} Reviews</strong></p>
                        </div>
                    </div> {{-- end of div thumbnail --}}
                    
                </div>
                @endforeach
                 @elseif(isset($message))
                    <p>{{ $message }}</p>
                @endif
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
             if($(window).scrollTop() > 300) {
              $('.prodReview').fadeIn();
              } else {
              $('.prodReview').fadeOut();
             }
        });
          });


    </script>


@endsection    


