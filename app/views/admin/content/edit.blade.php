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




		{{ Form::open(['method'=>'POST']) }}

		<div class="row">
			<div class="col-md-8">
				<div class="form form-group">
					<label>Page Name :</label>
					<input type="text" value="{{ $data->page_name }}" class="form form-control" name="page_name" required>	
				</div>
				<div class="form form-group">
					<label>Page Title :</label>
					<input type="text" value="{{ $data->page_title }}" class="form form-control" name="page_title" required>
				</div>
				<div class="form form-group">
					<label>Description :</label>
					<textarea  id="ckeditor" name="page_desc" required>{{ $data->description }}</textarea>
				</div>


				<input type="submit" value="Save" class="btn btn-primary" id="savePageBtn">
				<span class = "divFormSpan"><a href="{{ URL::route('pages') }}" class="btn btn-success">Back</a></span>
			</div>
		</div>
		{{ Form::close() }}


@stop


