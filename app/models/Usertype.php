<?php

/**
* 
*/
class Usertype extends Eloquent
{
	protected $table = 'tbl_user_types';



	public static function get_all_permissions($id)
	{
		return DB::table('tbl_user_roles_permissions')->where('user_type_id','=',$id)->get();
	}
}