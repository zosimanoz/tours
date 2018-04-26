<?php

/**
* 
*/
class LoginController extends BaseController
{

	public function postLogin()
	{
		$validator=Validator::make(Input::all(),
     			   array(
						 'username'=>'required',
						 'password'=>'required|min:5|max:16'
						));


		if($validator->fails())
   		{
			return Redirect::route('login')
	         	   ->withErrors($validator)
			 	   ->withInput(); 
	  	}	
	  	else
	  	{
		  
		  	$auth=Auth::attempt(array(
		  		'user_name'=>Input::get('username'),
		  		'password'=>Input::get('password')
			));
		  
		   	if($auth)
		    {//redirect to the intended page
			 	return Redirect::route('admin');
			}
			else
			{
				return Redirect::route('login')
				 ->with('error_message',' Username or Password not matched!');
			}
		  
		}
   
	}





	public function getSignOut()
	{
		Auth::logout();
		return Redirect::route('login');
	}





}