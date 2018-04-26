@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection




@section('content')

	@if(Session::has('message_success'))
		<p class="alert alert-success">
			{{ Session::get('message_success') }}
		</p>
	@endif


	@if(Session::has('message_error'))
		<p class="alert alert-danger">
			{{ Session::get('message_error') }}
		</p>
	@endif



		<table id="pages" class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Page Name</th>
					<th>Page Title</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($data as $value)
				<tr>
					<td>{{ $value->page_name }}</td>
					<td>{{ $value->page_title }}</td>
					<td><?php echo substr($value->description,0,20) ?></td>
					<td>
						<a href="{{ URL::route('page_content_edit',$value->id) }}">Edit</a>
					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
@stop
