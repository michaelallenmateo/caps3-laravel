@extends('layouts.template')
@section('title','BeautyTalk | Latest Reviews and Trends on beauty products')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" method="POST">
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
      <input type="hidden" name="rating" value="3">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
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


<div class="container" style="border:1px solid black;height: 750px;">
    

    {{-- <h5>Click to rate:</h5>
    <div class='starrr' id='star1'></div>
    <div>&nbsp;
      <span class='your-choice-was' style='display: none;'>
        Your rating was <span class='choice'></span>.
      </span>
    </div> --}}

    <div>
      @guest
      <a href="/writereview/{{$products->id}}" class="btn btn-success review">Write a Review</a>
      @else
      <a href="#" class="btn btn-success review" data-toggle="modal" data-target="#exampleModal">Write a Review</a>
        @endguest
    <br>
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




@endsection