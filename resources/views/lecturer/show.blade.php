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
						<div class="row">
							<div class="col-sm-4">
								<h4>{{ $lecturer->f_name }}</h4>
							</div>
							<div class="col-sm-4">
								<h4>{{ $lecturer->l_name }}</h4>
							</div>
						</div>
		
						<p>{{ $lecturer->phone_no }}</p>
						<p>{{ $lecturer->email }}</p>
						<p>{{ $lecturer->address }}</p>
						<p>{{ $lecturer->password }}</p>
					    
					</div>
				</center>

				<div class="card-body">
				<div class="row">
					<div col-sm-4>
						<a href="/lecturer/{{ $lecturer->id }}/edit" class="btn btn-success">Edit</a>
						
					</div>
					<div col-sm-4>
						<form action="{{ route('lecturer.destroy', $lecturer->id)}}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" value="Delete" class="btn btn-danger">
						</form>
					</div>
					
				</div>
			</div>
			</div>



		</div>
	</div>

	

@endsection