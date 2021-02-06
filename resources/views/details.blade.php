@extends('app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img class="detail-img" src="{{asset('productImages')}}/{{$product->gallery}}">
		</div>
		<div class="col-sm-6">
			<a href="/">Go Back</a>
			<h2>{{$product['name']}}</h2>
			<h3>Price: {{ $product['price'] }}</h3>
			<h4>Category: {{$product['category']}}</h4>
			<h4>Description: {{$product['description']}}</h4>
			<br><br>
			<form action="{{ route('product.addToCart') }}" method="POST">
				@csrf
				<input type="hidden" name="product_id" value="{{$product['id']}}">
				<button class="btn btn-primary">Add to Cart</button>
			</form>
			
			<br><br>
			<button class="btn btn-success">Buy Now</button>
			<br><br>
		</div>
	</div>
	
</div>

@endsection