@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection



@section('content')

<div class="row">
	<div class="col-md-12">
		
		@if ($message = Session::get('message_success'))
		<div class="row">
			<div class="col-md-12">
		        <div class="alert alert-success alert-block">
		            <button type="button" class="close" data-dismiss="alert">&times;</button>
		          	{{ $message }}
		        </div>
			</div>      
		</div>
		@elseif($message = Session::get('error'))
		<div class="row">
			<div class="col-md-12">
		        <div class="alert alert-danger alert-block">
		            <button type="button" class="close" data-dismiss="alert">&times;</button>
		          	{{ $message }}
		        </div>
			</div>      
		</div>
		@endif



		<a href="{{ URL::route('add_new_package_category') }}" class="btn btn-primary pull-right" style="margin-bottom:10px ">Create</a>

		<table id="pages" class="table table-striped table-hover table-bordered table-condensed">
			<thead>
				<tr>
					<!-- <th>S.N</th> -->
					<th>Package Name</th>
					<th>Action</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($package_category as $category)
				<tr>
					<td>{{ $category->package_name }}</td>
					<td>
						<a href="{{ URL::route('edit_package_category', $category->id) }}"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
						<a href="{{ URL::route('delete_package_category', $category->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
		<div class="pagination"> {{ $package_category->links() }} </div>
</div>




@stop