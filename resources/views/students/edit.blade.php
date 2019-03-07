@extends('layouts.app')
@section('content')

<h1>Edit: {{ $student->f_name}}</h1>
	
	<form method="post" action="/student/{{$student->id}}">
		@csrf

		@method('PUT')
		@include('layouts.errors')
		@include('layouts.success')
		<div class="form-group">
			<label for="f_name">First Name:</label>
			<input type="text" class="form-control" id="f_name" name="f_name" value="{{ $student->f_name }}">
		</div>

		<div class="form-group">
			<label for="l_name">Last Name:</label>
			<input type="text" class="form-control" id="l_name" name="l_name" value="{{ $student->l_name }}">
		</div>

		<div class="form-group">
			<label for ="phone_no">Phone No:</label>
			<input type="interger" class="form-control" id="phone_no" name="phone_no" value="{{ $student->phone_no }}">
			
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
		</div>

		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
		</div>
		{{-- <div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" name="password" value="{{ $student->password }}">
		</div> --}}

		<div class="form-group">
			<button type="submit" class="btn btn-success">Register</button>
			
		</div>


	</form>

@endsection