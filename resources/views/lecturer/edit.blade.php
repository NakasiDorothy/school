@extends('layouts.app')
	@section('content')

	<h1>Register a Lecturer</h1>
  
	<form method="POST" action="/lecturer/{{ $lecturer->id }}">
		@csrf
		@method('PUT')
		@include('layouts.errors')
		@include('layouts.success')
		<div class="form-group">
			<label for="f_name">First Name:</label>
			<input type="text" class="form-control" id="f_name" name="f_name" value="{{ $lecturer->f_name}}">
		</div>

		<div class="form-group">
			<label for="l_name">Last Name:</label>
			<input type="text" class="form-control" id="l_name" name="l_name" value="{{ $lecturer->l_name}}">
		</div>

		<div class="form-group">
			<label for ="phone_no">Phone No:</label>
			<input type="interger" class="form-control" id="phone_no" name="phone_no" value="{{ $lecturer->phone_no}}">
			
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" value="{{ $lecturer->email }}">
		</div>

		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address" value="{{ $lecturer->address }}">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" name="password" value="{{ $lecturer->password }}">
		</div>

		<div class="form-group">
			<label for="filename">Profile Picture:</label>
			<input type="file" class="form-control" id="filename" name="filename" value="{{ $lecturer->filename }}">
		</div

		<div class="form-group">
			<button type="submit" class="btn btn-success">Register</button>
			
		</div>


	</form>



@endsection