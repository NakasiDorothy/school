@extends('layouts.app')

	@section('content')

	<h1>Student List</h1>

		<div class="container">
			<table class="table">
  				<thead class="thead-dark">
			    <tr>
			      	<th scope="col">First Name</th>
			      	<th scope="col">Last Name</th>
			     	<th scope="col">Phone no</th>
			      	<th scope="col">Email</th>
			   		<th scope="col">Address</th>
			    {{--    	<th scope="col">Password</th> --}}
				</tr>
  				</thead>
  				<tbody>
  					@foreach($studentList as $student)
    					<tr>
		                    <td><a href="/student/{{ $student->id }}">{{ $student->f_name }}</a></td>
							<td>{{ $student->l_name }}</td>
							<td>{{ $student->phone_no }}</td>
							<td>{{ $student->email }}</td>
							<td>{{ $student->address }}</td>
						   {{--  <td>{{ $student->password }}</td> --}}
						    {{-- <td>{{ $student->filename }}</td> --}}

    					</tr>
    				@endforeach

				</tbody>
			</table>
	
		</div>
		
@endsection