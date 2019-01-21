@extends('layouts.app')

	@section('content')
	<h1>Course Unit List</h1>
	<ul>
		@foreach($courseUnitsList as $courseUnit)

			<li>
				{{ $courseUnit->course_unit_name }}
				{{ $courseUnit->duration }}
			</li>

		@endforeach
	</ul>

@endsection