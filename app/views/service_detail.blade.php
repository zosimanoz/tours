@extends('masterpages.site-master')

@section('content')
	
<div class="page_description"> 
	<div class="define">
		<h1>{{ $service_details->service_name }}</h1>
	</div>
	{{ $service_details->service_detail }}
</div>
			
@endsection

@section('scripts')

@endsection

@stop