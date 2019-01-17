@extends('layouts.app')
	
	@section('content')

	<h1>Courses List</h1>
		<ul>
		
			@foreach ($courseLists as $course)
			
				<li>
					{{ $course->course_code }}
					{{ $course->course_name }}
				</li>
			

			@endforeach
			
		
		</ul>
		
		
@endsection