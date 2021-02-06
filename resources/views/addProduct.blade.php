@extends('app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			@if(Session::has('product_added'))
			<div class="alert alert-success" role="alert">
				{{Session::get('product_added')}}
			</div>
			@endif
			<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			  	@csrf
			    <label for="nameOfProduct">Product Name</label>
			    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name" required>
			  </div>
			  <div class="form-group">
			    <label for="priceOfProduct">Price</label>
			    <input type="text" name="price" class="form-control" id="priceOfProductInput" placeholder="price" required>
			  </div>
			  <div class="form-group">
			    <label for="categoryOfProduct">Category</label>
			    <input type="text" name="category" class="form-control" id="categoryOfProductInput" placeholder="Category" required>
			  </div>
			  <div class="form-group">
			    <label for="descriptionOfProduct">Description</label>
			    <input type="text" name="description" class="form-control" id="descriptionOfProductInput" placeholder="description">
			  </div>
			  <div class="form-group">
			  	<label for="file">Choose Product Image</label>
			  	<input type="file" name="gallery" class="form-control" onchange="previewFile(this)" / required>
			  	<img id="previewImg" alt="product Image" style="max-width: 130px;margin-top: 20px;" />
			  </div>
			  
			  <button type="submit" class="btn btn-default">Save</button>
			</form>
		</div>
	</div>
</div>

@endsection
