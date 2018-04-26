<?php


/**
* 
*/
class UsersController extends BaseController
{
	
	protected $permission_code = 'admin_users';
	protected $status = 'denied';


	function __construct()
	{
		$permissions=$this->getUserPermissions();

    	foreach($permissions as $val)
    	{
     		if($val->permission_code == $this->permission_code)
	      	{
	      		$this->status = "allowed";
	      	}
    	}

    	if($this->status == 'denied')
    	{
    		App::abort(403);
    	}
	}



	public function getUsers(){
		$users = new User();

		$users = $users->all();


		$title = strtoupper("All Admin Users");

		return View::make('admin.admin_users')->with(compact('users',$users))->with(compact('title',$title));
		
	}



	public function getRoles()
	{
		$title = strtoupper("All Admin Roles");
		$users = User::with('usertype')->get();
		return View::make('admin.admin_roles')->with(compact('users',$users))->with(compact('title',$title));
	}



	public function editRoles($id)
	{
		$title = strtoupper("Edit Admin Roles");
		$all_permissions = Permission::get_all_permissions();
		$user_permissions = Usertype::get_all_permissions($id);
		return View::make('admin.role_list')
				->with(compact('user_permissions' , $user_permissions))
				->with(compact('all_permissions', $all_permissions))
				->with(compact('id', $id))
				->with(compact('title',$title));
	}





	public function postCheckedRoles($id)
	{
		PermissionRole::deletePreviousRoles($id);
		foreach(Input::get('permissions_id') as $key=>$value)
		{
 			$permission_data = array(
		  		'user_type_id' => $id,
		  		'permission_id' => $value,
		   	);
			DB::table('tbl_user_roles_permissions')->insert($permission_data);
		}

		return Redirect::route('roles')->with('message_success','User roles have been successfully updated.');
	}




	public function getAddNewUser()
	{
		$title = strtoupper("Add New User");
		$usertype = Usertype::all();

		return View::make('admin.add_new_user')
					->with(compact('title',$title))
					->with(compact('usertype',$usertype));
	}



	public function postAddNewUser()
	{

		$validator=Validator::make(Input::all(),
				   array(
					'user_name'=>'required|min:3|unique:tbl_admin_users',
					'password'=>'required|min:5',
					're_password'=>'required|same:password',
					'email'=>'required|email|unique:tbl_admin_users',
					'user_type'=>'required'
				 ));
		

		if($validator->fails())
   		{
			return Redirect::route('add_new_user')
		         ->withErrors($validator)
				 ->withInput(); 
	  	}	
	  	else
	  	{
			$user_data = array(
			  			'user_name' => Input::get('user_name'),
						'password' => Hash::make(Input::get('password')),
						'email' => Input::get('email'),
						'user_type_id' => Input::get('user_type')
			  		);
			  

		    DB::table('tbl_admin_users')
		    		->insert($user_data);

			
			return Redirect::route('add_new_user')
			 		->with('message_success','New Admin Added Successfully!'); 
		}  

	}







	public function getUserEdit($id)
	{
		$user_detail = User::find($id);
		
		$usertype = Usertype::all();

		$title = strtoupper("Edit user ");
		return View::make('admin.user_edit')
					->with(compact('user_detail',$user_detail))
					->with(compact('usertype',$usertype))
					->with(compact('title',$title));
	}





	public function postUserEdit($id)
	{

		$data['checkin_data']= DB::table('tbl_admin_users')
	            ->where('id','=',$id)
				->first();


		if((Input::get('user_name') != $data['checkin_data']->user_name ) || (Input::get('email') != $data['checkin_data']->email ) )
		{
			$validator=Validator::make(Input::all(),
		     array(
			 			'user_name'=>'required|min:3|unique:tbl_admin_users',
						'email'=>'required|email|unique:tbl_admin_users',
						'user_type'=>'required'
			 ));
		}
		else
		{
			$validator=Validator::make(Input::all(),
		     array(
			 		
						'user_name'=>'required|min:3',
						'email'=>'required|email',
						'user_type'=>'required'
			 ));

    	}

 
   
   		if($validator->fails())
   		{
			return Redirect::route('admin_user_edit',$id)
	         ->withErrors($validator)
			 ->withInput(); 
	  	}	
	  	else
	  	{

	  	  	$update_checkin=array(
		  		'user_name'=>Input::get('user_name'),
		  		'email'=>Input::get('email'),
		  		'user_type_id'=>Input::get('user_type')
		   	);
		  
		 	
		 	$user = User::find($id);

		 	// $user->user_name = Input::get('user_name');
		 	// $user->email = Input::get('email');
		 	// $user->user_type_id = Input::get('user_type');
		 	// $user->save();

		 	DB::table('tbl_admin_users')
	            ->where('id','=',$id)
				->update($update_checkin);
			
			return Redirect::route('admin_user_edit',$id)
		                   ->with('message_success','Updated successfully!'); 

		  }
	}






	public function deleteUser($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::route('admin_users',$id)
		                   ->with('message_success','Deleted successfully!'); 

	}



	
}