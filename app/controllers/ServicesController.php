<?php


/**
* 
*/
class ServicesController extends BaseController
{

	protected $permission_code = 'manage_services';
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


	
	public function getIndex(){
		$title = strtoupper("Admin::Package Management");
		$services = Service::paginate(5);
		return View::make('admin.services.index')->with(compact('title','services'));
	}


	public function getCreate()
	{
		$title = strtoupper("Admin::Add New Banner");

		return View::make('admin.services.create')->with(compact('title'));
	}


	public function postSave()
	{
		$service = new Service;

		$service->service_name = Input::get('service_title');
		$service->service_detail = Input::get('desc');

		$service->save();

		return Redirect::route('manage_services')->with('message_success','New service added successfully');
	}


	public function getEdit($id)
	{
		$service = Service::find($id);
		$title = 'Admin::Edit Service';
		return View::make('admin.services.edit')->with(compact('title','service'));
	}



	public function postEdit($id)
	{	
		$service = Service::find($id);

		$service->service_name = Input::get('service_title');
		$service->service_detail = Input::get('desc');

		$service->save();

		return Redirect::route('manage_services')->with('message_success','Service updated successfully.');

	}




	public function getDelete($id)
	{
		$service = Service::find($id);

		$service->delete();

		return Redirect::route('manage_services')->with('message_success','Service deleted successfully.');

	}



}