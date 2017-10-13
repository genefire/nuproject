@extends('layout.default')

@section('body')
<div class="container">
	<div class="row justify-content-center ">
		<div class="col-6">
		<form class="form-horizontal" action="{{ route('postsignup') }}" method="post">
		 {{ csrf_field() }}
		 	
		 	<div class="form-group">
				<label for="fullname">Full Name</label>
				<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter full name">
			</div>


			<div class="form-group">
				<label for="email">Email address</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password"  name="password" class="form-control" placeholder="Password">
			</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</div>
@endsection