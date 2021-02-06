@extends('app')
@section('content')

<div class="custom-product cart-list">
  <div class="col-sm-10">
    <div class="trending-wrapper">
    <h4>Your Cart Products</h4>
    <a class="btn btn-success" href="{{route('product.orderNow')}}">Order Now</a><br><br>
     @foreach($products as $item)
        <div class="row search-item cart-list-divider">
          <div class="col-sm-3">
            <a href="{{ route('product.details',$item->id) }}">
            <img class="trending-img" src="{{asset('productImages')}}/{{$item->gallery}}">
          </a>
          </div>
          <div class="col-sm-4">
            <div class="">
              <h2>{{$item->name}}</h2>
              <h5>{{$item->price}}</h5>
              <h5>{{$item->description}}</h5>
            </div>
          
          </div>
          <div class="col-sm-3">
            <a href="{{route('cart.remove',$item->cart_id)}}" class="btn btn-warning">Remove From Cart</a>
          </div>
        </div>
      @endforeach 
  </div>  
  <a class="btn btn-success" href="{{route('product.orderNow')}}">Order Now</a><br><br>
  </div>
</div>

@endsection