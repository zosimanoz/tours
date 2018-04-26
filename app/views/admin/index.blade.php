@extends('masterpages.admin_master')

@section('content')


<div class="row">
	@foreach($permissions as $permission_val)

	<div class="col-md-4 col-sm-6 col-xs-12 module">
		<a href= "{{ URL::route($permission_val->permission_route) }}">{{ $permission_val->permission_name  }} </a>
	</div>
	@endforeach
</div>


@endsection
