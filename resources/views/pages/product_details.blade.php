@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')


<style type="text/css">
  /*profile-picture -others*/
    

    span.profile_img_pd img {
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

    @if(Session::get('errors'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5>There were errors while submitting your review:</h5>
         @foreach($errors->all() as $message)
            <p>{{$message}}</p>
         @endforeach
      </div>
    @endif


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel" style="color: red;">Important Reminder: All fields are required to be filled in for your review to be posted! If this is your second time to review the same product, your initial review will be updated.</h5>
      </div>

      @guest
      <form class="form-horizontal" method="POST" action="{{ URL('/writereview/{id}') }}">
      {{ csrf_field() }}
      {{-- {{ method_field('PATCH') }} --}}
      <input type="hidden" name="product_id" value="{{$products->id}}">
      <input type="hidden" name="user_id" value="">
      <div class="modal-body">
        <h5>Give a title for this review</h5>
        <input type="text" class="form-control" style="min-width: 100%" placeholder="" name="title" required></input>
        <h5>Share to others your experience with this product</h5>
        <input class="form-control" style="min-width: 100%" placeholder="" name="content" required></input>
        <input name="approved" value="0" readonly></input>
        <h5>How would you rate this product?</h5>
         <div class='starrr' id='star1'></div>
        <div>&nbsp;
        <span class='your-choice-was' style='display: none;'>
        You rate it as <span class='choice'></span> star.
      </span>
      {{-- <input type="hidden" name="rating" value="3"> --}}
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit this review</button>
      </div>
    </form>


      @else

      <form class="form-horizontal" method="POST" action="{{ URL('/writereview/{id}') }}">
      {{ csrf_field() }}
      {{-- {{ method_field('PATCH') }} --}}
      <input type="hidden" name="product_id" value="{{$products->id}}">
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <div class="modal-body">
        <h5>Give a title for this review</h5>
        <textarea class="form-control" style="min-width: 100%" placeholder="" name="title"></textarea>
        <h5>Share to others your experience with this product</h5>
        <textarea class="form-control" style="min-width: 100%" placeholder="" name="content"></textarea>
        <h5>How would you rate this product?</h5>
         <div class='starrr' id='star1'></div>
        <div>&nbsp;
        <span class='your-choice-was' style='display: none;'>
        You rate it as <span class='choice'></span> star.
      </span>
      <input type="hidden" name="rating" value="" class="rating">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit this review</button>
      </div>
    </form>

    @endguest
    
    </div>
  </div>
</div>


<div class="demo-preview">
<div class="product-detail-section">
<div class="container">
  <div class="row">
     <div class="product-image-section col-xs-6">
    <div class="img-product-wrapper">
      <div class="img-thumbs">
        <div class="slim-scroll">
          <div class="item active">
            <img src="/storage/image/{{$products->image}}" class="img-responsive details">
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
        <div class="rate-point"><strong>
                    <p>
                    Average Rating:
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $approved->avg('rating')) ? '' : '-empty'}}"></span>
                    @endfor
                    {{ number_format($products->reviews->where('approved',true)->avg('rating'), 1)}} stars
                  </p></strong></div>
        <div class="rate-point"><strong>{{count($products->reviews->where('approved',true))}} Reviews</strong></div>
        <div class="order-count"><strong>3472 </strong><span>likes</span></div>
      </div>
      <div class="price">
        <div class="price-div"><strong class="price">Price:</strong>&#8369 {{ number_format($products->price, 2)}}</div>
        {{-- <div class="clearfix"></div> --}}
      </div>
      <div class="prd_category">
        <div class="prod_category"><strong class="category">Category:</strong>{{$products->category->title}}
        </div>
      </div> 
      <div class="brand">
        <div class="brand-div"><strong class="brand">Brand:</strong>{{$products->brand}}</div>
        {{-- <div class="clearfix"></div> --}}
      </div>
      <div class="description">
        <div class="left-col">
            <h5><strong>Product Details:</strong></h5>
            {{-- <ul class="list"> --}}
              <p><span>{{$products->description}}</span></p>
              
          {{-- </ul> --}}
        </div>
        <div class="right-col"></div>
        <div class="clearfix"></div>
      </div>
      <div class="form-group">
        <a href="#" style="text-decoration: none;"><i class="far fa-heart fa-2x"></i> I Like it!</a>
        {{-- <a href="#section" class="btn btn-primary btn-see-reviews">See Reviews</a> --}}
        {{-- <a href="/menu/{{$products->id}}/writereview" class="btn btn-primary btn-write-review">Write a Review</a> --}}
      </div>
     
    </div>
  </div>
  </div>
  </div>
 
</div>
  
</div>


<div class="container" style="border:1px solid #D0D3D4;min-height: 550px;margin-bottom: 250px;">
    

    {{-- <h5>Click to rate:</h5>
    <div class='starrr' id='star1'></div>
    <div>&nbsp;
      <span class='your-choice-was' style='display: none;'>
        Your rating was <span class='choice'></span>.
      </span>
    </div> --}}

    <div>

      {{-- show the avarage rating --}}
              <div class="ratings">
                  <p class="pull-right">{{count($products->reviews->where('approved',true))}} Reviews 
                    {{-- {{ Str_plural('review', $products->rating_count)}} --}}</p>
                  <p>
                    @for ($i=1; $i <= 5 ; $i++)
                      <span class="glyphicon glyphicon-star{{ ($i <= $approved->avg('rating')) ? '' : '-empty'}}"></span>
                    @endfor
                    {{ number_format($products->reviews->where('approved',true)->avg('rating'), 1)}} stars
                  </p>
              </div>


      {{-- end of show the average rating --}}




      @guest
      <a href="/writereview/{{$products->id}}" class="btn btn-success review">Write a Review</a>
      @else
      <a href="#" class="btn btn-success review" data-toggle="modal" data-target="#exampleModal">Write a Review</a>
        @endguest
    <br>
    </div>
              @if(count($products->reviews->where('approved',true)) > 0) 

              {{-- if statement if review is approved first prior to posting --}}
              {{-- @if(count($products->reviews)>0) --}}{{-- if statement no checking of approval--}}
              {{-- direct $reviews is used sinced we set up ($products->reviews relationship in productsController) --}}
              {{-- @foreach($products->reviews->sortByDesc('updated_at') as $review) --}}
              @foreach($reviews->sortByDesc('updated_at')->where('approved',true) as $review)
              <hr>
                <div class="row">
                    <div class="col-md-3">
                        @for ($i=1; $i <= 5 ; $i++)
                          <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                        @endfor
                        <br>

                        <span class="profile_img_pd"><img src="/storage/image/{{ $review->user->profile_image }}" id="profile_image"></span> <br>

                        <strong>{{ $review->user ? $review->user->firstname." ".$review->user->lastname : 'User account deleted'}} </strong>

                        <br>
                        <span class=""><strong>Member since:</strong>
                      {{$review->user->created_at->format('m-d-Y')}}</span> <br>
                      <span class=""><strong>Contributed Reviews:</strong>
                      {{count($review->user->reviews)}}</span> <br>
                      <span class=""><strong>Review Updated:</strong>
                      {{$review->updated_at->diffForHumans()}}</span> <br>
                        <span class=""><strong>Review Posted:</strong>
                      {{$review->created_at->diffForHumans()}}</span> 
                    </div>

                    <div class="col-md-9">
                    <p><strong>{{{$review->title}}}</strong></p>
                    <p>{{{$review->content}}}</p>

                    @guest
                    <a href="#"></a>
                    @else
                      @if(Auth::user()->id == $review->user_id)
                      <a href="/myreviews/{{$review->id}}/edit" class="btn btn-primary btn-xs">Edit My Review</a>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteConfirmation{{$review->id}}">Delete</button>
                      @else
                      <a href="#"></a>
                      @endif
                    @endguest
                  </div>
                </div>

                <!-- Modal for delete-->
      <div id="deleteConfirmation{{$review->id}}" class="modal fade" role="dialog">
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
              @guest
                <form method="POST" action="">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-danger">Proceed</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </form>
              @else
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
              @endguest 
                  
            </div>
          </div>

        </div>
      </div> {{-- end of modal delete --}}
                
              @endforeach
                @else
                <h4>No reviews yet on this product</h4>
                <p>Be the first to write.</p>
                @endif


        <div class="text-center">
                  {{$reviews->links()}}
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
          $('.rating').val(value);
        } else {
          $('.your-choice-was').hide();
        }
      }
    });
  </script>




@endsection