@extends('masterpages.admin_master')


<?php $i = 1 ?>

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

	<table class="table table-bordered table-hover">
		<tr>
			<th>S.N</th>
			<th>User Name</th>
			<th>User Type</th>
			<th>Action</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $user->user_name }}</td>
			<td>{{ $user->usertype->user_type }}</td>
			<td>
				<a href="{{ URL::route('admin_user_edit',$user->id) }}"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
				<a href="{{ URL::route('delete_user', $user->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
			</td>
		</tr>
		@endforeach

	</table>

@endsection