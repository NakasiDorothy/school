@extends('layouts.app')

	@section('content')

	<h1>Student List</h1>
		<ul>
			@foreach($studentList as $student)

				<li>
					{{ $student->f_name }}
					{{ $student->l_name }}
					{{ $student->phone_no }}
					{{ $student->email }}
					{{ $student->address }}
					{{ $student->filename }}
				</li>

			@endforeach
		</ul>

@endsection