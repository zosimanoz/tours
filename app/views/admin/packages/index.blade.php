@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection



@section('content')


<div class="row">
	<div class="col-md-12">
		
		@if ($message = Session::get('success'))
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



		<a href="{{ URL::route('add_new_package') }}" class="btn btn-primary pull-right" style="margin-bottom:10px ">Create</a>

		<table id="pages" class="table table-striped table-hover table-bordered table-condensed">
			<thead>
				<tr>
					<th>Feature Image</th>
					<th>Package Name</th>
					<th>Category</th>
					<th>Duration</th>
					<th>Featured</th>
					<th>Action</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($packages as $package)
				<tr>
					<td>{{ HTML::image($package->thumb_image,'alt',array('width'=>150, 'height'=>80)) }}</td>
					<td>{{ $package->package_name }}</td>
					<td>{{ $package->category['package_name'] }}</td>
					<td>{{ $package->package_time }}</td>
					<td>{{ $package->is_featured }}</td>

					<td>
						<a href="{{ URL::route('edit_package', $package->id) }}"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
						<a href="{{ URL::route('delete_package', $package->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
	
					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
		<div class="pagination"> {{ $packages->links() }} </div>
</div>

@stop



@section('scripts')

<script type="text/javascript">
	
	$(document).ready(function(){

		$('.deleteAction').on('click',function(e){
			if(confirm('Are you sure?') == false)
			{
				e.preventDefault();
			}
		});
	});

</script>

@stop

