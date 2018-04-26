<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	protected $permission_code = "manage_CMS";


	public function admin()
	{
		//$permissions = Permission::all();
		//return View::make('admin.index')->with(compact('permissions',$permissions));
		return View::make('admin.index');
	}
	

	/*
	public function admin()
	{
		$permissions=$this->getUserPermissions();



    	foreach($permissions as $val)
    	{
     		if($val->permission_code == 'manage_CMS')
	      	{
	      		$status="allowed";	
	      	}
	      	else
	      	{
	           $status="denied";
	        }
    	}
   
	    if($status == "allowed")
	    {
	    	return View::make('admin.index');
        }
        else
        {
            return View::make('admin.accessdenied');
        }

	}

	*/

	public function getLogin()
	{
		$permissions = Permission::all();
		return View::make('admin.login');
	}


}
