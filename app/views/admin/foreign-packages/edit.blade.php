@extends('masterpages.admin_master')


@section('title')
	Edit foreign package
@endsection





@section('content')


<div class="row">
	<div class="col-md-12">
		
		
		{{ Form::open(['files'=>true,'method'=>'POST']) }}

			<div class="row">
				<div class="col-md-8">
					<div class="form form-group">
						<label>Package Name :</label>
						<input type="text" class="form form-control" name="package_name" value="{{ $package->package_name }}" required>	
					</div>
			
					<div class="form form-group">
						<label>Package Duration :</label>
						<input type="text" class="form form-control" name="package_time" value="{{ $package->package_time }}" required>	
					</div>

					<div class="form form-group">
						<label>Featured Image :</label>
						<div>
							{{ HTML::image($package->thumb_image) }}
						</div><br/>
							{{ Form::file('image') }}
					</div>

					<div class="form form-group">
						<label>Per Person Fare</label>
						<input type="text" class="form form-control" name="per_person_fare" value="{{ $package->per_person_fare }}" required>
					</div>


					<div class="form form-group">
						<label>Description :</label>
						<textarea  id="ckeditor" name="package_description" required>{{ $package->package_description }}</textarea>
					</div>

					<input type="submit" value="Save" class="btn btn-primary" id="saveBannerBtn">
					<span class = "divFormSpan"><a href="{{ URL::route('foreign_packages') }}" class="btn btn-success">Back</a></span>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>


@stop


