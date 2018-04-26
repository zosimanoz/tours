<?php


/**
* 
*/
class TestimonialController extends BaseController
{

	protected $permission_code = 'manage_testimonials';
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
		$title = strtoupper("Admin::Testimonial Management");
		$testimonials = Testimonials::paginate(5);
		return View::make('admin.testimonials.index')->with(compact('title','testimonials'));
	}


	public function getCreate()
	{
		$title = strtoupper("Admin::Add New Testimonial");

		return View::make('admin.testimonials.create')->with(compact('title'));
	}


	public function postSave()
	{
		$testimonial = new Testimonials;

		$testimonial->author = Input::get('author');
		$testimonial->country = Input::get('country');
		$testimonial->testimonial_detail = Input::get('desc');

		$testimonial->save();

		return Redirect::route('manage_testimonials')->with('message_success','New testimonial added successfully');
	}


	public function getEdit($id)
	{
		$testimonial = Testimonials::find($id);
		$title = 'Admin::Edit Service';
		return View::make('admin.testimonials.edit')->with(compact('title','testimonial'));
	}



	public function postEdit($id)
	{	
		$testimonial = Testimonials::find($id);

		$testimonial->author = Input::get('author');
		$testimonial->country = Input::get('country');
		$testimonial->testimonial_detail = Input::get('desc');

		$testimonial->save();

		return Redirect::route('manage_testimonials')->with('message_success','Testimonial updated successfully.');

	}




	public function getDelete($id)
	{
		$service = Testimonials::find($id);

		$service->delete();

		return Redirect::route('manage_testimonials')->with('message_success','Testimonial deleted successfully.');

	}




}