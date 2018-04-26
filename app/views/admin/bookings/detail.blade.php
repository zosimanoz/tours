@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection



@section('content')

<div class="row">
	<div class="col-md-12">
		
		@if ($message = Session::get('success'))
		<div class="row">
			<div class="col-md-12">
		        <div class="alert alert-success alert-block">
		            <button type="button" class="close" data-dismiss="alert">&times;</button>
		          	{{ $message }}
		        </div>
			</div>      
		</div>
		@elseif($message = Session::get('error'))
		<div class="row">
			<div class="col-md-12">
		        <div class="alert alert-danger alert-block">
		            <button type="button" class="close" data-dismiss="alert">&times;</button>
		          	{{ $message }}
		        </div>
			</div>      
		</div>
		@endif




		<table id="pages" class="table table-striped table-hover table-bordered table-condensed">
				<tr>
					<!-- <th>S.N</th> -->
					<th>Package Name</th>
					<td>{{ $book->package['package_name'] }}</td>
				</tr>
				<tr>
					<th>Customer Name</th>
					<td>{{ $book->name }}</td>
				</tr>
					<th>Customer Email</th>
					<td>{{ $book->email }}</td>
				<tr>
					<th>Customer Phone</th>
					<td>{{ $book->phone }}</td>
				</tr>
				<tr>
					<th>Number of customers</th>
					<td>{{ $book->number_of_people }}</td>
				</tr>
				<tr>
					<th>Booked Date</th>
					<td>{{ $book->created_at }}</td>
				</tr>
				<tr>
					<th>Address</th>
					<td>{{ $book->address }}</td>
				</tr>
				<tr>
					<th>Country</th>
					<td>{{ $book->country }}</td>
				</tr>
				<tr>
					<th>Arrival Date</th>
					<td>{{ $book->arrival_date }}</td>
				</tr>
				<tr>
					<th>Departure Date</th>
					<td>{{ $book->departure_date }}</td>
				</tr>
				<tr>
					<th>Hotel Category</th>
					<td>{{ $book->hotel_category }}</td>
				</tr>
				<tr>
					<th>Confirm Booking</th>
					<td>
						<form method="post">
							<input type = "radio" name="confirmed" id="yes" value="1" style="height: 15px; width: 15px;"> Yes
							<input type = "radio" name="confirmed" id="no" value="0" style="margin-left: 30px; height: 15px; width: 15px;"> No
					</td>
				</tr>
		</table>
		<input type="submit" value="Confirm Booking" class="btn btn-primary" onclick="return ConfirmBooking();" id="saveBannerBtn">
		<span class = "divFormSpan"><a href="{{ URL::route('manage_bookings') }}" class="btn btn-success">Back</a></span>
		</form>

</div>


@section('scripts')
<script type="text/javascript">
	var confirmed = "{{ $book->confirmed }}";
	if ( confirmed === '1' ){
		$('#yes').prop('checked', true);
	}else{
		$('#no').prop('checked',true);	
	}
</script>
@endsection

@stop