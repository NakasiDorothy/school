@extends('layouts.app')
	@section('content')
		<h1>Register A Course</h1>

		<hr>
		<form method ="POST" action="/courses">
			@csrf
			
			@include('layouts.errors')
			@include('layouts.success')			
				
			<div class="form-group">
				<label for="course_code">Course Code:</label>
				<input type="integer" class="form-control" id="course_code" name="course_code">
			</div>

			<div class="form-group">
				<label for ="course_name">Course Name:</label>
				<input type ="text" class="form-control" id="course_name" name="course_name">
			</div>

			<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	@endsection
