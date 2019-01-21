@extends('layouts.app')
	@section('content')
	<h1>Register Student</h1>
	<hr>

	<form method="POST" action="/student">
		@csrf
		@include('layouts.errors')
		@include('layouts.success')
		<div class="form-group">
			<label for="f_name">First Name:</label>
			<input type="text" class="form-control" id="f_name" name="f_name">
			
		</div>

		<div class="form-group">
			<label for="l_name"> Last Name:</label>
			<input type="text" class="form-control" id="l_name" name="l_name">
			
		</div>
		
		<div class="form-group">
			<label for="phone_no">Phone No:</label>
			<input type="integer" class="form-control" id="phone_no" name="phone_no">
			
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email">
			
		</div>

		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address">
			
		</div>

		<div class="input-group control-group increment" >
          <input type="file" name="filename" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <div class="form-group">
        	<button type="submit" class="btn btn-success">Submit</button>
        	
        </div>
	</form>

@endsection