@extends('layouts.app')
@section('content')

<h1>University Course</h1>

<div class="container">
	<div class="col-sm-6">
		<div class="card">
			<center>
				
				<p>{{ $course->course_code }}</p>
				<p>{{ $course->course_name }}</p>
			</center>
			
			<div class="card-body">
				<div class="row">
					<div col-sm-3>
						<a href="/courses/{{ $course->id }}/edit" class="btn btn-success">Edit</a>
						
					</div>
					<div col-sm-3>
						<form action="{{ route('courses.destroy', $course->id)}}" method="post">
							@csrf
							<input type="submit" value="Delete" class="btn btn-danger">
							
						</form>						
					</div>
					
				</div>
				
			</div>

		</div>
		
		
	</div>
	
</div>

@endsection