@extends('masterpages.admin_master')


@section('title')
	{{ $title }}
@endsection



@section('content')

<?php $i =1 ?>

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
			<thead>
				<tr>
					<th>S.N</th>
					<th>Package Name</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>People</th>
					<th>Booked Date</th>
					<th>Address</th>
					<th>Country</th>
					<th>Confirmed</th>
					<th>Action</th>
				</tr>
			</thead>	
			<tbody>
			@foreach($bookings as $book)
				@if($book->confirmed)
				<tr class="confirmed">
					<td>{{ $i++ }}</td>
					<td>{{ $book->package['package_name'] }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ $book->email }}</td>
					<td>{{ $book->phone }}</td>
					<td>{{ $book->number_of_people }}</td>
					<td>{{ $book->created_at }}</td>
					<td>{{ $book->address }}</td>
					<td>{{ $book->country }}</td>
					<td>{{ "YES" }}</td>
					<td>
						<a href="{{ URL::route('booking_confirm', $book->id) }}"><span class="glyphicon glyphicon-edit" title="Confirm Booking"></span></a>
						<a href="{{ URL::route('delete_booking', $book->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
					</td>
				</tr>
				@else
				<tr class="notconfirmed">
					<td>{{ $i++ }}</td>
					<td>{{ $book->package['package_name'] }}</td>
					<td>{{ $book->name }}</td>
					<td>{{ $book->email }}</td>
					<td>{{ $book->phone }}</td>
					<td>{{ $book->number_of_people }}</td>
					<td>{{ $book->created_at }}</td>
					<td>{{ $book->address }}</td>
					<td>{{ $book->country }}</td>
					<td>{{ "NO" }}</td>
					<td>
						<a href="{{ URL::route('booking_confirm', $book->id) }}"><span class="glyphicon glyphicon-edit" title="Confirm Booking"></span></a>
						<a href="{{ URL::route('delete_booking', $book->id) }}" onclick="return ConfirmDelete();" ><span class="glyphicon glyphicon-trash delete" title="Delete"></span></a>
					</td>
				</tr>
				@endif
			@endforeach
			</tbody>			
		</table>
		<div class="pagination"> {{ $bookings->links() }} </div>
</div>



@section('scripts')
@endsection



@stop