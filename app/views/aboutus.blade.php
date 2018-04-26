@extends('masterpages.site-master')

@section('content')

<div class="page_description"> 
	<div class="define">
		<h1>{{ $data->page_title }}</h1>
	</div>
	{{ $data->description }}
</div>
@stop