@extends('layouts.app')
	
	@section('content')

	<h1>Courses List</h1>


		<div class="container">
			<table class="table">
  				<thead class="thead-dark">
			    <tr>
			      	<th scope="col">course code</th>
			      	<th scope="col">course name</th>
			     	
				</tr>
  				</thead>
  				<tbody>
  					@foreach($courseLists as $course)
    					<tr>
		                   <td><a href="/courses/{{ $course->id }}">{{ $course->course_code }}</a></td> 
							<td>{{ $course->course_name }}</td>

    					</tr>
    				@endforeach

				</tbody>
			</table>
	
		</div>
		{{-- <ul>
		
			@foreach ($courseLists as $course)
			
				<li>
					{{ $course->course_code }}
					{{ $course->course_name }}
				</li>
			

			@endforeach
			
		
		</ul> --}}
		
		
@endsection