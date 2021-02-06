@extends('app')
@section('content')

<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="{{route('user.store')}}" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="name">User Name</label>
			    <input type="text" name="name" class="form-control"placeholder="User Name" required>
			  </div>
			  <div class="form-group">
			    <label for="Email">Email</label>
			    <input type="email" name="email" class="form-control"placeholder="email" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
			  </div>
			  
			  <button type="submit" class="btn btn-default">Register</button>
			</form>
		</div>
	</div>
</div>

@endsection