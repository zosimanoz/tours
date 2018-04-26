<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HolidaySafari - Dashboard</title>

{{ HTML::style('assets/css/bootstrap.min.css') }}
{{ HTML::style('assets/css/styles.css') }}
{{ HTML::style('assets/plugins/sweetalert-master/dist/sweetalert.css') }}
{{ HTML::style('styles/style.css') }}
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<style type="text/css">
	/*.module{
		display: block;
		margin:10px; 
		color:#fff;
		box-shadow: 1px;
		font-weight: bold;
		box-shadow: 5px 5px 1px #999;
	}*/

	body{
		background: #ddd;
	}

	.module a:hover{
		background-color: #f4a846;
	}

	.module a{
		text-align: center;
		padding: 50px;
		margin:10px;
		display: block;
		background-color: #aaa;
		color: #fff;
		text-decoration: none;
		font-weight: bold;
	}

	.admin-page-title{
		padding: 15px;
		margin-bottom: 10px;
		color: #d11231;
		font-weight: bold;
		text-transform: uppercase;
	}

	tr.confirmed{
		color: red;
		font-weight: 600;
	}

</style>


	<script>
		function ConfirmDelete()
		{
			
			if(confirm('Do you want to delete?'))
			return true;
		    else
			return false;
		}

		function ConfirmBooking()
		{
			
			if(confirm('Are you sure?'))
			return true;
		    else
			return false;
		}


	</script>





</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ URL::to('/admin/index') }}"><span>HolidaySafari</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->user_name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="{{ URL::route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
				<ul class="user-menu" style="margin-right:50px">
        			<li><a href="{{ URL::to('/') }}">View Website</a></li>
        		</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search Here">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{ URL::route('admin') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

			@foreach($permissions as $permission_val)
				@if($permission_val->permission_name == 'Users')
					<li class="parent">
						<a href="javascript::void()"><span class="glyphicon glyphicon-list"></span>
						  {{ $permission_val->permission_name }}
						  <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
						</a>
						<ul class="children collapse" id="sub-item-1">
							<li>
								<a class="" href="{{ URL::route('admin_users') }}">
									<span class="glyphicon glyphicon-share-alt"></span> All Admin Users
								</a>
							</li>
							<li>
								<a class="" href="{{ URL::route('add_new_user') }}">
									<span class="glyphicon glyphicon-share-alt"></span> Add New User
								</a>
							</li>
							<li>
								<a class="" href="{{ URL::route('roles') }}">
									<span class="glyphicon glyphicon-share-alt"></span> Edit User Roles
								</a>
							</li>
						</ul>
					</li>
				@else
					<li><a href= "{{ URL::route($permission_val->permission_route) }}"><span class="glyphicon glyphicon-th"></span> {{ $permission_val->permission_name  }} </a></li>
				@endif
			@endforeach

		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
	
		
		<div class="row main_content">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">@yield('title')</div> -->
					<div class="panel-body">
						<div class="admin-page-title">@yield('title')</div>
						<div class="canvas-wrapper">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		


	</div>	<!--/.main-->


	{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/plugins/sweetalert-master/dist/sweetalert.min.js') }}
	{{ HTML::script('assets/js/bootstrap-datepicker.js') }}
	{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }}

	<script>
		$('#calendar').datepicker({
		});

		if ($("#ckeditor")[0]) {
             var editor = CKEDITOR.replace('ckeditor');
             CKFinder.setupCKEditor( editor, '/public/assets/plugins/ckfinder/' );
        }

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

	</script>	

	@yield('scripts')


</body>

</html>












































