@extends('layouts.app')
	@section('content')
	<h1>Lecturer</h1>

	<div class="container">
		<div class="col-sm-7">
			<div class="card">
				<div class="row">
					<div class="col-sm-3">
						<h5>User Profile</h5>
					</div>
				</div>
				<center>
					<h6>Info</h6>
					<div class="col-sm-8 blog-main">
						<h4>{{ $lecturer->f_name }}</h4> 
						<h4>{{ $lecturer->l_name }}</h4>
						{{ $lecturer->phone_no }}
						{{ $lecturer->email }}
						{{ $lecturer->address }}
					    {{ $lecturer->password }}
					</div>
				</center>
			</div>

		</div>
	</div>

	

@endsection