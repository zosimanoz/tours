<?php

/**
* 
*/
class PermissionRole extends Eloquent
{
	protected $table = 'tbl_user_roles_permissions';

	public $timestamps = false;


	public static function deletePreviousRoles($id)
	{
		$permissions_roles = new PermissionRole();
		return $permissions_roles->where('user_type_id','=',$id)->delete();
	}

}
