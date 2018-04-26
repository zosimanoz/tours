@extends('masterpages.site-master')

@section('content')
 


    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="color:green">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="color: green">Book Selected Package</h4>
                    </div>
                    <div class="modal-body">
						
                        <form id="bookForm" class="saveBooking">
                        	<div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                    	 <label>Full Name</label>
                                         <input type="text" class="form-control" id="FullName"  name="bookFullName" placeholder="Enter your name" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                    	 <label>Email</label>
                                         <input type="email" class="form-control" id="Email"  name="bookEmail" placeholder="Enter your email" required/>
                                    </div>
                                </div>

                            </div><br />
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                    	 <label>Phone Number</label>
                                         <input type="text" class="form-control" id="PhoneNumber" name="bookPhoneNumber" placeholder="Enter your phone number" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                    	 <label>Address</label>
                                         <input type="text" class="form-control" id="Address" name="bookAddress" placeholder="Enter your address" required/>
                                    </div>
                                </div>

                            </div><br />
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                    	<label>Enter number of people</label>
                                        <input type="text" class="form-control" id="NumberPeople" name="bookPeople" placeholder="Enter number of people" required/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                    	<label>Country</label>
                                        <input type="text" class="form-control" id="Country" name="bookCountry" placeholder="Enter your country name" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
	                                    	<label>Arrival Date</label>
	                                    <div class='input-group date datetimepicker'>
	                                    	<input type='text' class="form-control" name="bookArrivalDate" required/>
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
	                                    </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
	                                    	<label>Departure Date</label>
                                    	<div class='input-group date datetimepicker'>
	                                    	<input type='text' class="form-control" name="bookDepartureDate" required/>
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
						                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                    	<label>Hotel Category</label>
                                    	<select name="bookHotel" class="form-control" id="Hotel" required>
                                    		<option value="">--select hotel--</option>
                                    		<option value="3 star">3 star</option>
                                    		<option value="4 star">4 star</option>
                                    		<option value="5 star">5 star</option>
                                    		<option value="Standard">Standard</option>
                                    		<option value="Budjet">Budjet</option>
                                    	</select>
                                    </div>
                                </div>
	                        	@if(isset($package_details))
	                                <div class="col-xs-12 col-md-6">
	                                    <div class="form-group">
	                                    	<!-- <label>Selected Package</label> -->
	                                        <input type="text" class="form-control" data-id="{{ $package_details->id }}" value="{{ $package_details->id }}" id="packageID" name="bookPackageID"  />
	                                    </div>
	                                </div>
	                            @elseif(isset($fpackage_details))
	                            	<div class="col-xs-12 col-md-6">
	                                    <div class="form-group">
	                                    	<!-- <label>Selected Package</label> -->
	                                        <input type="text" class="form-control" data-id="{{ $fpackage_details->id }}" value="{{ $fpackage_details->id }}" id="packageID" name="bookPackageID" />
	                                    </div>
	                                </div>
								@endif
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                    @if(isset($package_details))
                        <button type="button" class="btn btn-primary" id="btnSavePackageBooking">Login</button>        
	                @elseif(isset($fpackage_details))
                        <button type="button" class="btn btn-primary" id="btnSaveForeignBooking">Login</button>        
	                @endif
                    </div>
                </div>
            </div>
    </div>



		<div class="row">
			<div class="col-md-8 col-sm-12">
				<img src="{{ asset($package_details->large_image) }}" class="detailImage img-responsive" />
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="tourDetail">
					<h3><span class="fa fa-list-ul"></span>  Details</h3>
					<ul>
						<li>
							<a href="#"><span class="fa fa-angle-right"></span>{{ $package_details->package_name }}</a>
						</li>

						<li>
							<a href="#"><span class="fa fa-angle-right"></span>Duration :{{ $package_details->package_time }}</a>
						</li>

						<li>
							<a href="#"><span class="fa fa-angle-right"></span>Fare per head : NRs.{{ $package_details->per_person_fare }}</a>
						</li>
						<li style="margin-top:33px">
							<input type="button" id="BookingButton" class="btn btn-warning" style="float: left; width: 100%; border-radius: 0px" value="Book Now" />
						</li>
					</ul>
				</div>
			</div> 
		</div>
		<div class="page_description" style="margin-top:30px;">
			
			<div class="define" style="margin-top:20px">
				<h1>Detail</h1>
				{{ $package_details->package_description }}
			</div>
		</div>
	

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#BookingButton').on('click', function(e){
			$('#myModal').modal('show');
		});

		

		$('#btnSavePackageBooking').on('click', function(e){
			var id_value = $('#packageID').attr('data-id');
			$.ajax({
                type: "POST",
                data: { 
                		id : id_value, 
                		data: $('form.saveBooking').serialize()
                	},
                url: "{{ url('package/book') }}",
                async: true,
                cache: false,
                success: function(msg){
                    $('#bookForm')[0].reset();
                    $('#myModal').modal('hide');
                    swal("Great!", msg , "success")
                },
                error: function(){
                    $('#myModal').modal('hide');
                	swal("Oops!", "Failed to book package.Try again." , "error");
                }
            });
		});



		function ValidateInputs(){
			$("input").each(function(){
	    		var name = $(this).attr("name");
	    		// console.log(name);
	    		if(!$(this).val()){
	    			swal('Error','All fields are required','error');
                	// $('#bookForm')[0].reset();
		      		e.preventDefault();
		    	}else{
		      		return true; 
		    	}
			});
		}

	});


	$(function() {
        $('input[type="text"]').last().hide();
    });

	$(function () {
    	$('.datetimepicker').datepicker({
            format: "yyyy-mm-dd"
        });
    });



</script>


@endsection


@stop