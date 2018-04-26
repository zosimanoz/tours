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




<form id="defaultForm" method="post" action=" {{ URL::route('edit-admin-post',$user_detail->id) }} " class="form-horizontal">		
	<fieldset>
		<div class="form-group">
			<label class="col-sm-3 control-label">Admin Name</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="user_name" value="<?php if(Input::old('user_name'))echo e(Input::old('user_name'));else echo $user_detail->user_name;?>" />
					<div class="error_mesg">{{ $errors->first('user_name')}}</div>
				</div>
		</div>
						
		<div class="form-group">
			<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="email" value="<?php if(Input::old('email'))echo e(Input::old('email'));else echo $user_detail->email;?>"/>
						<div class="error_mesg">{{ $errors->first('email')}}</div>
				</div>
		</div>


						
		<div class="form-group">
			<label class="col-sm-3 control-label">Users Type</label>
				<div class="col-sm-5">
					<select class="form-control" name="user_type" required/>
						<option value="">Select Admin type</option>
							@foreach($usertype as $type)
								<option value="{{ $type->id }}" >{{ $type->user_type }}</option>	
	    					@endforeach			    
					</select>
					<div class="error_mesg">{{ $errors->first('user_type')}}</div>
				</div>
		</div>
	</fieldset>

		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
</form>


@endsection