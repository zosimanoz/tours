@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection



@section('content')

	<?php $i=1 ?>

	@if(Session::has('message_success'))
		<div class="alert alert-success">
			{{ Session::get('message_success') }}
		</div>
	@endif


<table class="table table-bordered table-hover">
<tr>
	<th>S.N</th>
	<th>User Name</th>
	<th>User Role</th>
	<th>Description</th>
	<th>Action</th>
</tr>
@foreach($users as $user)
<tr>
	<td>{{ $i++ }}</td>
	<td>{{ $user->user_name }}</td>
	<td>{{ $user->user_type['user_type'] }}</td>
	@if($user->user_type['user_type'] == 'superadmin')
		<td> All module access </td>
	@else
		<td> Limited module access </td>
	@endif
	<td><a href="{{ URL::route('edit_roles',array($user->user_type_id))  }}"> <span class="glyphicon glyphicon-edit" title="Edit Roles"></span></a></td>
</tr>
@endforeach
</table>

@endsection