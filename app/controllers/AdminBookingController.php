<?php


/**
* 
*/
class AdminBookingController extends BaseController
{

	protected $permission_code = 'manage_bookings';
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


	public function getIndex()
	{
		$title = "Admin::Booking Management";

		$bookings = Booking::with('package')->paginate(10);

		return View::make('admin.bookings.index')->with(compact('title','bookings'));
	}



	public function getConfirm($id){
		$book = Booking::find($id);
		$title = "Admin:: Booking Details";

		return View::make('admin.bookings.detail')->with(compact('title','book'));
	}


	public function postConfirm($id){
		$booking = Booking::find($id);

		$booking->confirmed = Input::get('confirmed');
		$booking->save();

		return Redirect::route('manage_bookings')->with('success','Booking confirmed successfully.');
	}


	public function getDelete($id){
		$book = Booking::find($id);
		$book->delete();

		return Redirect::route('manage_bookings')->with('success','Booking deleted successfully.');
	}


}