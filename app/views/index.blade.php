@extends('masterpages.site-master')


@section('slider')

<!-- slider -->


{{ Hash::make("admin") }}

<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		
		@foreach($gallery as $images)
		<div class="item">
		  <img src="{{ asset($images->file_name) }}" class="img-responsive">
			<div class="nepal-tour welcome">
				<h1>Holiday Safari Tours and Travels</h1>
				<p>We serve you to celebrate holidays</p>
				<a href="{{ URL::to('/aboutus') }}">Read More</a>
			</div>
		</div>
		@endforeach
		
		<!-- <div class="item">
		  <img src="images/site-banner-4.jpg" alt="Nepal Trek">
			<div class="nepal-tour welcome">
				<h1>Nepal Tours Destination</h1>
				<p>We're always at your  destination</p>
				<a href="aboutus.php">Read More</a>
			</div>
		</div> -->
	  </div>
	
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</div>
    

@endsection



@section('what-we-do')

<div class="container">
        <div class="row we-provide">
            
            <div class="col-md-4 col-sm-4 hidden-xs">
                <div class="tourtype">
                    <img src="http://lorempixel.com/400/200" class="img img-responsive">
                    <span>
                        <h4>Trekking in Nepal</h4>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam...</span>
                    <div class="tourtype-read">
                        <div class="readmore">
                            <h4><a href="#">Read More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 hidden-xs">
                <div class="tourtype">
                    <img src="http://lorempixel.com/400/200" class="img img-responsive">
                    <span>
                        <h4>Trekking in Nepal</h4>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam...</span>
                    <div class="tourtype-read">
                        <div class="readmore">
                            <h4><a href="#">Read More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 hidden-xs">
                <div class="tourtype">
                    <img src="http://lorempixel.com/400/200" class="img img-responsive">
                    <span>
                        <h4>Trekking in Nepal</h4>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam...</span>
                    <div class="tourtype-read">
                        <div class="readmore">
                            <h4><a href="#">Read More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
                                
        </div>
	<hr/>
    </div>

@endsection



@section('content')
		<div class="main-content">
			<div class="define">
				<h1>Nepal Tours & Travel</h1>
				<p>Nepal Tours Destination is a professional  tour operator &amp; travel agency based in Kathmandu Nepal, handling tours packages with best combination of sightseeing tours, airfares, hotels, car  rental with professional local guides and so on. We offer tours to Nepal, Tibet, Bhutan and India with our expertise  and experience in the inbound market. We extend our services in assisting  corporate companies and institutions to organize their tour arrangements for  convention, trade mission, incentive and seminars.  [<a href="aboutus.php">Read More...</a>]<br>
                        We will make sure that your tour vacation is a truly memorable experience to last a lifetime.</p>
			</div>
			<!-- tour -->
			<div class="tour">
				<h3>Featured Tour Packages</h3>
					<div class="row">
						@foreach($packages as $package)
						<div class="col-md-4 col-sm-6 col-xs-6 full">
							<div class="tour-default">
								<div class="tour-img">
									{{ HTML::image($package->thumb_image) }}
									<!-- <img src="http://lorempixel.com/400/200" alt=""> -->
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
						</div>
					</div>
					
					
				<!-- 	<div class="multi-tour">
						<h3>Different Multi Countries Combination  Tours</h3>
						
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="tibetitinerary4-71.htm">Kathmandu Tibet Lhasa Tour</a></h5>
									<p><strong>Tour Duration:</strong> 8 days,                                    <strong>Altitude:</strong> 1300m. - 3650m.</p>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="touritinerary23-76.htm">Nepal Tibet Bhutan Tour</a></h5>
									<p><strong>Tour Duration:</strong> 12 days, <strong>Altitude:</strong> 1300m. - 3650m.</p>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="touritinerary23-74.htm">Nepal and Tibet Tours</a></h5>
									<p><strong>Tour Duration:</strong> 17 days, <strong>Altitude:</strong> 150m. - 5050m.</p>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="touritinerary23-75.htm">Bhutan Nepal Tours</a></h5>
									<p><strong>Tour Duration:</strong> 10 days, <strong>Altitude:</strong> 1300m. - 3100m.</p>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="touritinerary23-77.htm">Nepal Darjeeling Sikkim Tour</a></h5>
									<p><strong>Tour Duration:</strong> 13 days, <strong>Altitude:</strong> 1300m. - 3124m.</p>
								</div>
							</div>
							
							<div class="col-md-6 col-sm-12">
								<div class="default-text">
									<h5><a href="touritinerary23-78.htm">Nepal Tibet Bhutan Tour</a></h5>
									<p><strong>Tour Duration:</strong> 19 days, <strong>Altitude:</strong> 150m. - 5050m.</p>
								</div>
							</div>
                            
                            <div class="col-md-6 col-sm-12">
							  <div class="default-text">
								<h5><a href="china-tibet-nepal-bhutan-india-tour.php">China Tibet Nepal Bhutan India Tours</a></h5>
								  <p><strong>Tour Duration:</strong> 25 days, <strong>Altitude:</strong> 44m. - 4390m.</p>
								</div>
							</div>
                            
                            <div class="col-md-6 col-sm-12">
							  <div class="default-text">
								<h5><a href="/india-nepal-tour.php" title="India Nepal Cultural Tour">India Nepal Cultural Tour</a></h5>
								  <p><strong>Tour Duration:</strong> 10 days, <strong>Altitude:</strong> 171m. - 1300m.</p>
							  </div>
							</div>
                            
						</div>
					</div> -->
				</div>

@stop