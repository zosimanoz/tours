@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection




@section('content')

<?php $i=1 ?>
<form method="post" action="{{ URL::route('edit_checked_roles' , array($id) ) }}">
	<table class="table table-bordered table-hover">
		<tr>
			<th>S.N</th>
			<th>Modules</th>
			<th>Action</th>
		</tr>
		@foreach($all_permissions as $permission)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $permission->permission_name }}</td>
				<td>
					@foreach($user_permissions as $user_perm)
						@if($user_perm->permission_id == $permission->id)
							<?php $checked_flag = "checked" ?>
						@endif
					@endforeach

					<input type="checkbox" name="permissions_id[]" title="Select" value="{{ $permission->id }}"
						@foreach($user_permissions as $user_perm)
							@if($user_perm->permission_id == $permission->id)
								<?php echo "checked" ?>
							@endif
						@endforeach
					> 
				</td>
			</tr>
		@endforeach
	</table>
	<input type="submit" class="btn btn-primary" value="Update Roles">

	<a href="{{ URL::route('roles') }}" class="btn btn-warning back_btn">Back</a>
</form>
@endsection