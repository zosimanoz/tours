<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */


	protected $permissions;


	protected function setupLayout()
	{

		if(Auth::check())
		{
			$this->permissions = DB::table('tbl_user_roles_permissions')
						   ->join('tbl_permissions','tbl_user_roles_permissions.permission_id','=','tbl_permissions.id')
						   ->where('tbl_user_roles_permissions.user_type_id','=', Auth::user()->user_type_id)
						   ->get();

			View::share('permissions',$this->permissions);
		}






		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

		
	}



	public function getUserPermissions()
	{
		if(Auth::check())
		{
			$this->permissions = DB::table('tbl_user_roles_permissions')
						   ->join('tbl_permissions','tbl_user_roles_permissions.permission_id','=','tbl_permissions.id')
						   ->where('tbl_user_roles_permissions.user_type_id','=', Auth::user()->user_type_id)
						   ->get();

			return $this->permissions;
		}
	}




}
