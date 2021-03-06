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
						<label>Author :</label>
						<input type="text" value="{{ $testimonial->author }}" class="form form-control" name="author" required>	
					</div>


					<div class="form form-group">
						<label>Country :</label>
						<input type="text" value="{{ $testimonial->country }}" class="form form-control" name="country" required>	
					</div>
			

					<div class="form form-group">
						<label>Description :</label>
						<textarea id="ckeditor" name="desc" required>{{ $testimonial->testimonial_detail }}</textarea>
					</div>


					<input type="submit" value="Save" class="btn btn-primary" id="saveBannerBtn">
					<span class = "divFormSpan"><a href="{{ URL::route('manage_testimonials') }}" class="btn btn-success">Back</a></span>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>


@stop


