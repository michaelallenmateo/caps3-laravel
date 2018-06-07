@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')






<div class="demo-preview">
<div class="product-detail-section">
<div class="container">
  <div class="row">
     <div class="product-image-section col-xs-6">
    <div class="img-product-wrapper">
      <div class="img-thumbs">
        <div class="slim-scroll">
          <div class="item active">
            <img src="/image/{{$products->image}}" class="img-responsive">
          </div>
          
        </div>
      </div>

      
    </div>
  </div>
  <div class="product-description-section col-xs-6">
    <div class="product-detail-wrapper">
      <h1 class="product-name">{{$products->name}}</h1>
      <div class="group">
        <div data-rating="4.5" class="rate"></div>
        <div class="rate-point"><strong>stars here </strong><span>4.5</span></div>
        <div class="rate-point">(403 user ratings)</div>
        <div class="order-count"><strong>3472 </strong><span>likes</span></div>
      </div>
      <div class="price">
        <div class="price-div"><strong class="price">Price:</strong>&#8369 {{ number_format($products->price, 2)}}</div>
        <div class="clearfix"></div>
      </div>
      <div class="brand">
        <div class="brand-div"><strong class="brand">Brand:</strong>{{$products->brand}}</div>
        <div class="clearfix"></div>
      </div>
      <div class="description">
        <div class="left-col">
            <h5>Product Details:</h5>
            <ul class="list">
              <li><span>{{$products->description}}</span></li>
              
          </ul>
        </div>
        <div class="right-col"></div>
        <div class="clearfix"></div>
      </div>
      <div class="form-group">
        <a href="#"><i class="far fa-heart fa-2x"></i> I Like it!</a>
        {{-- <a href="#section" class="btn btn-primary btn-see-reviews">See Reviews</a> --}}
        {{-- <a href="/menu/{{$products->id}}/writereview" class="btn btn-primary btn-write-review">Write a Review</a> --}}
      </div>
     
    </div>
  </div>
  </div>
  </div>
 
</div>
  
</div>


<div class="container">
    

    <h5>Click to rate:</h5>
    <div class='starrr' id='star1'></div>
    <div>&nbsp;
      <span class='your-choice-was' style='display: none;'>
        Your rating was <span class='choice'></span>.
      </span>
    </div>
  </div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <script src="/js/starrr.js"></script>
  <script>
    $('#star1').starrr({
      change: function(e, value){
        if (value) {
          $('.your-choice-was').show();
          $('.choice').text(value);
        } else {
          $('.your-choice-was').hide();
        }
      }
    });
  </script>
  {{-- <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-39205841-5', 'dobtco.github.io');
    ga('send', 'pageview');
  </script> --}}


{{-- rating --}}

{{-- <div class="col-md-12">
            <div class="thumbnail">
              <img src="/image/{{$products->image}}">
              <div class="caption-full">
                  <h4 class="pull-right">${{ number_format($products->price, 2)}}</h4>
                  <h4><a href="{{url('products/'.$products->id)}}">{{$products->name}}</a></h4>
                  <p>{{$products->description}}</p>
              </div>
              <div class="ratings"> --}}
            {{--       <p class="pull-right">{{$products->rating_count}} {{ Str::plural('review', $product->rating_count);}}</p>
                  <p>
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $product->rating_cache) ? '' : '-empty'}}"></span>
                    @endfor
                    {{ number_format($products->rating_cache, 1);}} stars
                  </p>
              </div>
            </div>
            <div class="well" id="reviews-anchor">
              <div class="row">
                <div class="col-md-12">
                  @if(Session::get('errors'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h5>There were errors while submitting this review:</h5>
                       @foreach($errors->all('<li>:message</li>') as $message)
                          {{$message}}
                       @endforeach
                    </div>
                  @endif
                  @if(Session::has('review_posted'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5>Your review has been posted!</h5>
                    </div>
                  @endif
                  @if(Session::has('review_removed'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5>Your review has been removed!</h5>
                    </div>
                  @endif
                </div>
              </div>
              <div class="text-right">
                <a href="#reviews-anchor" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
              </div>
              <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                  {{Form::open()}}
                  {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                  {{Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control animated','placeholder'=>'Enter your review here...'))}}
                  <div class="text-right">
                    <div class="stars starrr" data-rating="{{Input::old('rating',0)}}"></div>
                    <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;"> <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                    <button class="btn btn-success btn-lg" type="submit">Save</button>
                  </div>
                {{Form::close()}}
                </div>
              </div>

              @foreach($reviews as $review)
              <hr>
                <div class="row">
                  <div class="col-md-12">
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                    @endfor

                    {{ $review->users ? $review->users->firstname : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span> 
                    
                    <p>{{{$review->comment}}}</p>
                  </div>
                </div>
              @endforeach
              {{ $reviews->links(); }} --}}
            </div>
        </div>




{{-- end of rating --}}



@endsection