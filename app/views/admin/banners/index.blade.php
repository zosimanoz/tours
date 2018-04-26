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




		<a href="{{ URL::route('banner_add') }}" class="btn btn-primary pull-right">Create</a>
		<br/><br/><br/>

		<table id="pages" class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>File</th>
					<th>Title</th>
					<th>Status</th>
					<th>Order</th>
					<th>Action</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($banner as $value)
				<tr>
					<td>{{ HTML::image($value->file_name_thumb) }}</td>
					<td>{{ $value->title }}</td>
					<td>{{ $value->status }}</td>
					<td>{{ $value->order }}</td>
					<td>

						<a href="{{ URL::route('banner_edit',$value->id) }}"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
						<a href="{{ URL::route('banner_delete',$value->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>

					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
</div>
	
@stop


