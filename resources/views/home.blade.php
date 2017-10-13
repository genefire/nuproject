@extends('layout.default')

@section('body')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card text-center">
				<div class="card-header">WELCOME</div>
				<div class="card-body">
					<h4 class="card-title">NU PROJECT</h4>
					<p class="card-text">Website Under Construction</p>
					<a href="/signin" class="btn btn-primary">LOGIN</a>
					<a href="/signup" class="btn btn-primary">REGISTER</a>
				</div>
				<div class="card-footer text-muted">Copyright 2017</div>
			</div>
		</div>
	</div>
</div>
	
@endsection