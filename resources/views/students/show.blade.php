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
					<p>{{ $student->f_name }} {{ $student->l_name }}</p>
					
					<p>{{ $student->phone_no }}</p>	
					<p>{{ $student->email }}</p>	
					<p>{{ $student->address }}</p>
					<p>{{ $student->password }}</p>

					 </div>
				</center>
				<div class="card-body">
				<div class="row">
					<div col-sm-4>
						<a href="/student/{{ $student->id }}/edit" class="btn btn-success">Edit</a>
					</div>
					<div col-sm-4>	
						<form action="{{ route('student.destroy',$student->id)}}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" value="DELETE" class="btn btn-danger">
							
						</form>
						
					</div>
				</div>
				</div>
				
			</div>
				
			</div>
			
		</div>
		
	</div>


@endsection