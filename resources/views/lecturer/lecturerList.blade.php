@extends('layouts.app')
	@section('content')

	<h1>Lecturer List</h1>
	

		<div class="container">
			<table class="table">
  				<thead class="thead-dark">
			    <tr>
			      	<th scope="col">First Name</th>
			      	<th scope="col">Last Name</th>
			     	<th scope="col">Phone No</th>
			      	<th scope="col">Email</th>
			   		<th scope="col">Address</th>
			       	<th scope="col">Password</th>
				</tr>
  				</thead>
  				<tbody>
  					@foreach($lecturerList as $lecturer)
    					<tr>
    						
								<td><a href="/lecturer/{{ $lecturer->id }}">
									{{ $lecturer->f_name }}
								</a> </td>
								<td>{{ $lecturer->l_name }}</td>
								<td>{{ $lecturer->phone_no }}</td>
								<td>{{ $lecturer->email }}</td>
								<td>{{ $lecturer->address }}</td>
							    <td>{{ $lecturer->password }}</td>
						   
    					</tr>
    				@endforeach

				</tbody>
			</table>
	
		</div>

@endsection