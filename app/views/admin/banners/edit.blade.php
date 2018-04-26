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


		


		{{ Form::open(['files'=>true,'method'=>'POST']) }}

			<div class="row">
				<div class="col-md-8">
					<div class="form form-group">
						<label>Title :</label>
						<input type="text" value="{{ $banner->title }}" class="form form-control" name="banner_title" required>	
					</div>
			
					<div class="form form-group">
						<label>Choose New File :</label>
						<div>
							{{ HTML::image($banner->file_name,'alt',['class'=>'adminImageThumb']) }}
						</div><br/>
							{{ Form::file('image') }}
					</div>
			
					<div class="form form-group">
						<label>Status :</label>
						<select name="status" class="form form-control">
							<option value="1">1</option>
							<option value="0">0</option>
						</select>
					</div>

					<div class="form form-group">
						<label>Order :</label>
						<input type="text" value="{{ $banner->order }}" class="form form-control" name="banner_order">
					</div>

					<div class="form form-group">
						<label>Description :</label>
						<textarea id="ckeditor" name="desc" required>{{ $banner->description }}</textarea>
					</div>


					<input type="submit" value="Save" class="btn btn-primary" id="saveBannerBtn">
					<span class = "divFormSpan"><a href="{{ URL::route('banner') }}" class="btn btn-success">Back</a></span>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>


@stop


