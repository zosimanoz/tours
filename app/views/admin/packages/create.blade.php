@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection




@section('content')


<div class="row">
	<div class="col-md-12">

		
		{{ Form::open(['files'=>true,'method'=>'POST']) }}

			<div class="row">
				<div class="col-md-8">
					<div class="form form-group">
						<label>Package Name :</label>
						<input type="text" class="form form-control" name="package_name" required>	
					</div>
			
					<div class="form form-group">
						<label>Package Duration :</label>
						<input type="text" class="form form-control" name="package_time" required>	
					</div>

					<div class="form form-group">
						<label>Featured Image :</label>
						{{ Form::file('image',['required']) }}
					</div>

					<div class="form form-group">
						<label>Per Person Fare</label>
						<input type="text" class="form form-control" name="per_person_fare" required>
					</div>


					<div class="form form-group">
						<label>Package Category</label>
						<select name="package_category" class="form-control" required>
						<option value="">--select category--</option>
							@foreach($packages_category as $category)
								<option value="{{ $category->id }}">{{ $category->package_name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form form-group">
							<label>Make featured</label></br>
							<input type="radio" name="is_featured" value="1" id="feature_check_yes" style="margin-left:10px;height: 15px; width: 15px;" required> Yes
							<input type="radio" name="is_featured" value="0" id="feature_check_no" style="margin-left:10px;height: 15px; width: 15px;" required> No
					</div>

					<div class="form form-group">
						<label>Description :</label>
						<textarea  id="ckeditor" name="package_description" required></textarea>
					</div>


					<input type="submit" value="Save" class="btn btn-primary" id="saveBannerBtn">
					<span class = "divFormSpan"><a href="{{ URL::route('packages') }}" class="btn btn-success">Back</a></span>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>


@stop


