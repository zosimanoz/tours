<?php


/**
* 
*/
class PagesController extends BaseController
{

	protected $permission_code = 'pages_management';
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





	public function showIndex()
	{
		return View::make('admin.manage_pages');
		/*
		$permissions=$this->getUserPermissions();


    	foreach($permissions as $val)
    	{
     		if($val->permission_code == $this->permission_code)
	      	{
	      		$status="allowed";	
	      		break;
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

        */
	}





	public function getIndex()
	{
		$title = 'Admin::Page Content Management';

		$data = Page::all();
		return View::make('admin.content.index')->with(compact('title','data'));
	}




	public function postSave($id)
	{
		$title = 'Admin::Edit Page Content';

		$page = Page::find($id);

		$page->page_name = Input::get('page_name');
		$page->page_title = Input::get('page_title');
		$page->description = Input::get('page_desc');

		$page->save();
		
		return Redirect::back()->with('message_success','Page edited successfully.');

	}


	public function getEdit($id)
	{
		$title = 'Admin::Edit Page Content';
		$page= Page::find($id);
		return View::make('admin.content.edit')->with('data',$page)->with('title',$title);
	}










}