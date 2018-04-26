<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Greenline::Login</title>

{{ HTML::style('assets/css/bootstrap.min.css') }}
{{ HTML::style('assets/css/styles.css') }}

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>

				<div class="panel-body">
						@if(Session::has('error_message'))
							<p class="alert alert-danger">
								<strong>{{ Session::get('error_message') }}</strong>
							</p>
						@endif
					<form action="{{ URL::route('login-post') }}" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User Name" name="username" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
							</div>

							<input type="submit" class="btn btn-primary" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/bootstrap-datepicker.js') }}

	
</body>

</html>


