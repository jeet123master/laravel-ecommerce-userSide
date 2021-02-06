@extends('app')
@section('content')

<div class="custom-product">
  <div class="col-sm-4">
    <a href="">Filter</a>
  </div>
  <div class="col-sm-4">
    <div class="trending-wrapper">
    <h4>Search Products</h4>
     @foreach($products as $item)
        <div class="search-item">
          <a href="{{ route('product.details',$item['id']) }}">
            <img class="trending-img" src="{{asset('productImages')}}/{{$item->gallery}}">
            <div class="">
              <h2>{{$item['name']}}</h2>
              <h5>{{$item['price']}}</h5>
              <h5>{{$item['description']}}</h5>
              </div>
          </a>
         </div>
      @endforeach 
  </div>  
  </div>
</div>

@endsection