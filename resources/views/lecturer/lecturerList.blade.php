@extends('layouts.app')
	@section('content')

	<h1>Lecturer List</h1>
		<ul>
			@foreach($lecturerList as $lecturer)

				<li>
					{{ $lecturer->f_name }}
					{{ $lecturer->l_name }}
					{{ $lecturer->phone_no }}
					{{ $lecturer->email }}
					{{ $lecturer->address }}
				</li>

			@endforeach
		</ul>
	


@endsection