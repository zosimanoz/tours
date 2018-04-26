<?php

/**
* 
*/
class Permission extends Eloquent
{
	
	protected $table = 'tbl_permissions';


	public static function get_all_permissions()
	{
		return Permission::all();
	}

}