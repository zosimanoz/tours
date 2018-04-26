@extends('masterpages.site-master')

@section('content')
	
	<div class="page_description"> 
		<div class="define">
			<h1>{{ $category_details->package_name }}</h1>
		</div>
			{{ $category_details->category_description }}
	</div>
	
	<div class="tour">
		<h3>{{ $category_details->package_name }}</h3>
		<div class="row">
			@if($packages->count() < 1)
				<div class="col-md-12">
			        <div class="alert alert-info alert-block">
			            <button type="button" class="close" data-dismiss="alert">&times;</button>
			          	{{ "There are no packages in this tour package." }}
			        </div>
				</div>      
			@else
				@foreach($packages as $package)
					<div class="col-md-4 col-sm-6 col-xs-6 full">
						<div class="tour-default">
							<div class="tour-img">
								{{ HTML::image($package->thumb_image) }}
								<a href="{{ URL::route('package_detail', $package->id) }}">{{ $package->package_name }}</a>
							</div>
										
							<div class="default-text clearfix" style="padding-top:30px;">
								<p><strong>Tour Duration:</strong> {{ $package->package_time }}<br />
								<strong>Per person fare:</strong> {{ $package->per_person_fare }}</p>
								<a href="{{ URL::route('package_detail', $package->id) }}">View details</a>								
							</div>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
					
			

@endsection

@section('scripts')

@endsection

@stop