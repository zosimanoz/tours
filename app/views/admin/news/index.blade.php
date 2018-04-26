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



		<a href="{{ URL::route('add_new_news') }}" class="btn btn-primary pull-right" style="margin-bottom:10px ">Create</a>

		<table id="pages" class="table table-striped table-hover table-bordered table-condensed">
			<thead>
				<tr>
					<!-- <th>S.N</th> -->
					<th>Title</th>
					<th>Actions</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($all_news as $news)
				<tr>
					<td>{{ $news->news_title }}</td>
					<td>
						<a href="{{ URL::route('edit_news', $news->id) }}"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
						<a href="{{ URL::route('delete_news', $news->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
		<div class="pagination"> {{ $all_news->links() }} </div>
</div>




@stop