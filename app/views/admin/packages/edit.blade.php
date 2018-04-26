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
						<label>Package Category</label>
						<select id="package_category" name="package_category" class="form-control" required>
						<option value="">--select category--</option>
							@foreach($packages_category as $category)
								<option value="{{ $category->id }}">{{ $category->package_name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form form-group">
							<label>Make featured</label></br>
							<input type="radio" name="is_featured" value="1" id="yes" style="margin-left:10px;height: 15px; width: 15px;" required> Yes
							<input type="radio" name="is_featured" value="0" id="no" style="margin-left:10px;height: 15px; width: 15px;" required> No
					</div>

					<div class="form form-group">
						<label>Description :</label>
						<textarea  id="ckeditor" name="package_description" required>{{ $package->package_description }}</textarea>
					</div>

					<input type="submit" value="Save" class="btn btn-primary" id="saveBannerBtn">
					<span class = "divFormSpan"><a href="{{ URL::route('packages') }}" class="btn btn-success">Back</a></span>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>


@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			var current_category = "{{ $current_category->id }}";
			$(document).find("#package_category option").each(function(){
				$this = $(this);
				if($this.val() == current_category){
					$this.prop('selected',true);
				}
			});
		});
			var is_featured = "{{ $package->is_featured }}";
			if ( is_featured === '1' ){
				// $('#feature_check_yes').removeAttr('checked');
				$('#yes').prop('checked', true);
			}else{
				// $('#feature_check_no').removeAttr('checked');
				$('#no').prop('checked',true);
			}
	</script>

@endsection

@stop
