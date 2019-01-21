@extends('layouts.app')
	@section('content')

	<h1>Course Units</h1>

	<hr>
	<form method="POST" action="/courseUnits">
		@csrf
		@include('layouts.errors')
		@include('layouts.success')

		<div class="form-group">
			<label for ="course_unit_name">Course Unit:</label>
			<input type="text" class="form-control" id="course_unit_name"  name="course_unit_name">
		</div>

		<div class="form-group">
			<label for="duration">Duration:</label>
			<input type="text" class="form-control" id="duration" name="duration">
			
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
	</form>
@endsection