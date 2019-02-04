@extends('layouts.app')
@section('content')
	<h1>students</h1>
	<div class="container">
		<div class="col-sm-7">
			<div class="card">
				<div class="row">
					<div class="col-sm-5">
						<h5>User Profile</h5>
						
					</div>
					
				</div>
				<center>
					<h6>Info</h6>
					<div class="col-sm-8 blog-main">								
					{{ $lecturer->f_name }}
						{{ $lecturer->l_name }}
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