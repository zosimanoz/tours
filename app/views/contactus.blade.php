@extends('masterpages.site-master')


@section('content')

<div class="page_description"> 
	<div class="define"><h1>{{ $data->page_title }}</h1></div>
	<div class="contact">
		<div id="map"></div>
	</div>
	<hr/>
	{{ $data->description }}
	<hr/>
	
	<form method="post">
		<div class="form-group">
		    <label for="feedbackName">* Enter your name</label>
		    <input type="text" class="form-control" name="feedbackName" placeholder="Full Name">
		</div>
		<div class="form-group">
		    <label for="feedbackEmail">* Enter your email address</label>
		    <input type="email" class="form-control" name="feedbackEmail" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="feedbackMessage">* Enter your message </label>
			<textarea name="feedbackMessage" rows="10" class="form-control" style="overflow: auto;resize:none"></textarea>
		</div>
		<input type="submit" name="btnSubmitFeedback" class="btn btn-warning" style="float: right" value="Submit Feedback">
	</form>
</div>

@stop