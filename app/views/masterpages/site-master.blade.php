<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xyz Safari, Tours & Travels | Nepal</title>
	<meta name="description" content="We are premier tours operator in Nepal, specialize in a wide variety of Nepal tours and treks.">
	<meta name="keywords" content="Nepal, Tours in Nepal, Nepal Tours, Travel Nepal, Tour Packages, Nepal Trekking, Picture of Nepal, Trekking in Nepal, Visit Nepal, Nepal Trip, Trip to Nepal, Nepal Bhutan Tours">
	<meta name="Abstract" content="Nepal, Tours in Nepal, Nepal Tours, Travel Nepal, Travel in Nepal, Nepal Tour, Tour Nepal, Tour to Nepal, Tour in Nepal, Tour Package, Nepal Trekking, Trekking Nepal, Nepal Map, Picture of Nepal, Trekking in Nepal, Visit Nepal, Nepal Trip, Trip to Nepal">
	<meta name="rating" content="general">
	<meta name="Subject" content="Xyz Safari Tours and Travels Nepal">
	<meta name="Copyright" content="© Xyz Safari Tours and Travels 2015">
	<meta name="Publisher" content="Holiday Safari Tours and Travels">
	<meta name="resource-type" content="document">
	<meta name="distribution" content="global">
	<meta name="Content-Language" content="en us">
	<meta name="Author" content="Xyz Safari Tours and Travels">
	<meta name="doc-type" content="Web Page">
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="_token" content="{{ csrf_token() }}"/>

	{{ HTML::style('site-master/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('site-master/bootstrap/css/social-sharing.css') }}
	{{ HTML::style('site-master/plugins/datepicker/css/bootstrap-datepicker.css') }}
	{{ HTML::style('site-master/newstyle.css') }}
	{{ HTML::style('site-master/fonts/font-awesome.min.css') }}
	{{ HTML::style('site-master/responsive.css') }}
	{{ HTML::style('site-master/plugins/smartmenus/css/sm-core-css.css') }}
	{{ HTML::style('site-master/plugins/smartmenus/css/sm-blue/sm-blue.css') }}
	{{ HTML::style('site-master/plugins/owl-carousel/owl-carousel/owl.carousel.css') }}
	{{ HTML::style('site-master/plugins/owl-carousel/owl-carousel/owl.theme.css') }}
	{{ HTML::style('site-master/bootstrap/css/accordion.css') }}
	{{ HTML::style('assets/plugins/sweetalert-master/dist/sweetalert.css') }}
	<link href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet"/>


	<style type="text/css">
		.pagination{
			margin:10px 7px !important;
			position: relative;
			float: left;
			clear: both;
		}
		.has-success{
			background: black;
		}

		.has-error{
			background: red;
		}
	</style>


</head>
<body>


<!-- Header -->
<header>
		<div class="row">
	<div class="container-fluid">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="biz-logo">
					<a href="{{ URL::to('/') }}"><img src="{{ asset('assets/img/tour-logo.jpg') }}" alt="Holiday Safari"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
                <div class="info">
                    <h4>One of the finest travel tours solution in Nepal.</h4>
                    <span><a href="javascript:;" class="phone"><img src="{{ asset('site-master/images/icon-phone.png') }}" class="icon">+977 1 470511 / 12</a></span>			
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
				<div class="social-icon">
                     <!-- Facebook -->
                    <a href="https://www.facebook.com/HolidaySafari" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                       <!-- Twitter -->
                    <a href="http://twitter.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                    <!-- LinkedIn --> 
                    <!--<a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>-->
				</div>
			</div>
		</div>
	</div>
</header>



<!-- Navigation -->

<div class="navigation">
	<div class="container">
		<aside  class="navbar" role="navigation">
            <article class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		    </article>
		    <article class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
			<ul id="main-menu" class="sm sm-blue">
				<li><a href="{{ URL::to('/') }}">Home</a></li>
				<li><a href="{{ URL::to('/aboutus') }}">About</a></li>
				<li><a href="javascript:;">Nepal Tours</a>
					<ul>
						<li><a href="javascript:;">Nepal Tour Packages</a></li>
						<li><a href="javascript:;">Adventure Sports Tour</a></li>
						<li><a href="javascript:;">River Rafting Tours</a></li>
						<li><a href="javascript:;">Wildlife Safari Tours</a></li>  
						<li><a href="javascript:;">Nepal Hiking Tours</a></li>                        
					</ul>
				</li>
				<li>
					<a href="#">Trekking</a>
				  <ul>
						<li><a href="#">Everest Area Treks</a></li>
						<li><a href="#">Annapurna Area Treks</a></li>
						<li><a href="#">Langtang Area Treks</a></li>
					</ul>
				</li>
				<li><a href="#">Outbound Tours</a>
					<ul>
						<li><a href="#">Tibet Tours</a></li>
						<li><a href="#">Bhutan Tours</a></li>
						<li><a href="#">China Tours</a></li>
						<li><a href="#">India Tours</a></li>
						<li><a href="#">Sikkim & Darjeeling Tours</a></li>                        
					</ul>
				</li>
				<li><a href="#">Travel Info</a>
					<ul>
						<li><a href="#">Nepal Travel Information</a></li>
                        <li><a href="#">Places to visit in Nepal</a></li>
						<li><a href="#">Tibet Travel Information</a></li>
						<li><a href="#">Tibet Tour Booking Terms</a></li>
						<li><a href="#">Places to visit in Tibet</a></li>                        
						<li><a href="#">Bhutan Travel Information</a></li>
						<li><a href="#">Sikkim Travel Information</a></li>                        
					</ul>
				</li>
				<li><a href="{{ URL::to('/contactus') }}">Contact</a></li>
                <li><a href="#" class="searchItem">Search Trips</a></li>
			</ul>
		</article>
		</aside>
	</div>
</div>
    

@yield('slider')



<!-- content -->

<div class="content">
	<!-- what-we-do section -->
		@yield('what-we-do')
    <!-- what-we-do end    -->

	<div class="container">
		<div class="row">       
            <!-- main-content-->
			<div class="col-md-9 col-sm-9">
				@yield('content')
            </div>
			<!-- sidebar -->
			<div class="col-md-3 col-sm-3">
				<div class="side-bar">
					<!-- side content -->
				    <div class="side-content">
						<h3><span class="fa fa-list-ul"></span> Tour Packages</h3>
						<div class="text">
							<ul>
								@foreach($packages_submenu as $sub_package)
									<li><a href="{{ URL::route('submenu_package', $sub_package['id']) }}"><span class="fa fa-angle-right"></span> {{ $sub_package['package_name'] }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
                    <!-- other services -->
                    <div class="side-content">
						<h3><span class="fa fa-caret-square-o-right"></span> Services</h3>
						<div class="text">
						@yield('services')
							<ul>
								@foreach($services as $service)
									<li><a href="{{ URL::route('service_detail', $service['id']) }}"><span class="fa fa-angle-right"></span> {{ $service['service_name'] }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>					
                    <!-- side content -->
					<div class="side-content">
						<h3><span class="fa fa-comments-o"></span><a href="testimonials.php" style="color:#FFF;"> Testimonials</a></h3>
						@yield('testimonials')
						<div class="default-text">
							<div id="test-carousel" class="owl-carousel owl-theme">
								@foreach($testimonial_submenu as $testimonial)
								<div class="item">
									<span class="fa fa-quote-left test-quote"></span>
									<p style="text-align: justify">{{ $testimonial->testimonial_detail }}</p>
									<h5><a href="javascript:;">{{ $testimonial->author }}, {{ $testimonial->country }}</a></h5>
						    	</div>
						    	@endforeach
						  </div>
						</div>
					</div>
                    <!-- news -->
                    <div class="side-content">
						<h3><span class="fa fa-newspaper-o"></span> Tourism News</h3>
						<div class="text">
							<div class="default-text clearfix">
								@foreach($news as $current_news)
									<p style="border-bottom: 1px solid #fff">Date : {{ $current_news['created_at']->format('Y-m-d') }}</p>
									<p style="text-align: justify"><a href="javascript:;" id="news-link">{{ substr($current_news['news_detail'] , 0 , 50) }}...</a></p>
								@endforeach
						</div>
					</div>
                    </div>
				</div>
            </div>
            
		</div>
	</div>
</div>


<!-- footer -->
<footer>
	<div class="container">
		<!-- footer top -->
		<div class="footer-top" style="margin-top:25px">
			<div class="row">	
				<!-- footer-nav -->
				<div class="col-md-3 col-sm-3">
					<div class="footer-nav">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="javascript:;">Nepal Tours</a></li>
							<li><a href="javascript:;">Trekking in Nepal</a></li>
							<li><a href="javascript:;">Multi Countries Combined Tours</a></li>
							<li><a href="javascript:;">Mountain Flight Tour</a></li>
							<li><a href="javascript:;">Places to visit in Nepal</a></li>
						</ul>	
					</div>
				</div>
				
				<!-- licensed -->
				<div class="col-md-3 col-sm-3">
						<div class="footer-contact-partners">
							<h4>Our Partners</h4>
							<ul>
								<li><a href="javascript:;">Buddha Air</a></li>
								<li><a href="javascript:;">Yeti Air</a></li>
								<li><a href="javascript:;">Simrik Air</a></li>
								<li><a href="javascript:;">Sita Air</a></li>
							</ul>
						</div>
				</div>

				<div class="col-md-3 col-sm-3">
						<div class="footer-contact-partners">
							<h4>Destinations</h4>
							<ul>
								<li><a href="javascript:;">Kathmandu</a></li>
								<li><a href="javascript:;">Chitwan</a></li>
								<li><a href="javascript:;">Pokhara</a></li>
								<li><a href="javascript:;">Lumbini</a></li>
								<li><a href="javascript:;">Bhaktapur</a></li>
							</ul>
						</div>
				</div>

				<!-- footer contact -->
				<div class="col-md-3 col-sm-3">
					<div class="footer-contact">
						<h4>Xyz Tours Destination</h4>
						<p><i class="fa fa-map-marker"></i> Satghumti, Thamel, Kathmandu, Nepal<br>
						<i class="fa fa-phone"></i> +977 1 7889898 / +977 1 67687<br>
						<i class="fa fa-square"></i> +977 1 6867878 (Fax)<br>
						<i class="fa fa-mobile"></i> +977 787878 <br>
						<i class="fa fa-envelope"></i> <a href="#">info@xyz.com</a><br>
					</div>
				</div>			
			</div>
		</div>

		
		<!-- footer bottom -->
		<div class="copyright clearfix">
			<p class="copy">&copy; 2015, All  rights reserved. xyz.com</p>
		</div>
	</div>
</footer>





{{ HTML::script('site-master/js/jquery-1.11.1.min.js') }}
{{ HTML::script('site-master/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('site-master/plugins/smartmenus/jquery.smartmenus.js') }}
{{ HTML::script('site-master/js/main.js') }}
{{ HTML::script('site-master/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}
{{ HTML::script('site-master/plugins/accordion.js') }}
{{ HTML::script('assets/plugins/sweetalert-master/dist/sweetalert.min.js') }}
{{ HTML::script('site-master/plugins/datepicker/js/bootstrap-datepicker.min.js') }}
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js" type="text/javascript"></script>





<script type="text/javascript">
	function initialize() {
		  geocoder = new google.maps.Geocoder();
		  var latlng = new google.maps.LatLng( 27.71573389, 85.30929621);

		  var myOptions = {
			   zoom: 19,
			   center: latlng,
			   mapTypeId: google.maps.MapTypeId.ROADMAP
		  };

		  var map = new google.maps.Map(document.getElementById('map'), myOptions);
		  var markerPos = new google.maps.LatLng( 27.71573389, 85.30929621);

		  var marker = new google.maps.Marker({
			   position: markerPos,
			   map: map,
			   title: "Holiday Safari Tours and Travels"
		  });

		  var infowindow = new google.maps.InfoWindow();
		  google.maps.event.addListener(marker, 'click', function() {
		        infowindow.setContent(place.name);
		        infowindow.open(map, this);
		  });
      	}

    google.maps.event.addDomListener(window, 'load', initialize);  
</script>





<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel-inner .item:first').addClass('active');
	});
</script>

@yield('scripts')

</body>
</html>