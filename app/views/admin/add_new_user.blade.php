@extends('masterpages.admin_master')

@section('title')
	{{ $title }}
@endsection

@section('content')
	
	@if(Session::has('message_success'))
		<p class="alert alert-success">
			{{ Session::get('message_success') }}
		</p>
	@endif


	@if(Session::has('message_error'))
		<p class="alert alert-danger">
			{{ Session::get('message_error') }}
		</p>
	@endif


	<form role="form" method="post" action="{{ URL::route('post_add_new_user')}}">
	  <div class="form-group">
	    <label for="username">Admin User Name :</label>
	    <input type="text" class="form-control" name="user_name">
	    <div class="error_mesg">{{ $errors->first('user_name')}}</div>
	  </div>
	  
	  <div class="form-group">
	    <label for="email">Email :</label>
	    <input type="email" class="form-control" name="email">
	    <div class="error_mesg">{{ $errors->first('email')}}</div>
	  </div>
	  
	  <div class="form-group">
	    <label for="user_type">Select User Type :</label>
	    <select class="form-control" name="user_type" value="" />
			<option value="">Select Admin type</option>
	    	@foreach($usertype as $type)
				<option value="{{ $type->id }}">{{ $type->user_type }}</option>	
	    	@endforeach
	    </select>
	    <div class="error_mesg">{{ $errors->first('user_type')}}</div>
	  </div>
	  
	  <div class="form-group">
	    <label for="password">Enter Password :</label>
	    <input type="password" class="form-control" name="password">
	    <div class="error_mesg">{{ $errors->first('password')}}</div>
	  </div>

	  <div class="form-group">
	    <label for="re_password">Re-Enter Password :</label>
	    <input type="password" class="form-control" name="re_password">
	    <div class="error_mesg">{{ $errors->first('re_password')}}</div>
	  </div>
	  
	  

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>




@endsection