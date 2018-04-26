<?php



/**
* 
*/
class SitePageController extends BaseController
{



	protected function showPages($page){
		switch ($page) {
			case 'home':
				return Redirect::to('/');
				break;
			
			case 'aboutus':
				$page_data = Page::where('page_name','=','aboutus')->first();
				return View::make($page)->with('data',$page_data);
				break;
			
			case 'contactus':
				$page_data = Page::where('page_name','=',$page)->first();
				return View::make($page)->with('data',$page_data);
				break;
			
			case 'login':
				return View::make('admin/login');
				break;

			default:
				$gallery = Gallery::all();
				$packages = DB::table('packages')->where('is_featured','=','1')->get();
				return View::make('index')->with('gallery',$gallery)->with('packages',$packages);
				break;
		}($page);
	}


	public function getPackageDetails($id)
	{
		$package_details = Package::find($id);
		return View::make('detail')->with(compact('package_details',$package_details)); 
	}


	

	public function showPackageCategoryDetail($id){
		$packages = Package::where('package_category','=',$id)->get();
		$category_details = PackageCategory::find($id);

		return View::make('package_detail')->with(compact('packages','category_details'));
	}



	public function showServiceDetail($id){
		$service_details = Service::find($id);
		
		return View::make('service_detail')->with(compact('service_details'));
	}



	public function saveBooking(){
		$id = $_POST['id'];
		$data = Input::get('data');
		parse_str($data,$formFields);

		$booking_data = array(
			'package_id' => $formFields['bookPackageID'],
			'name' => $formFields['bookFullName'],
			'email'=> $formFields['bookEmail'],
			'address'=> $formFields['bookAddress'],
			'phone'=> $formFields['bookPhoneNumber'],
			'number_of_people'=> $formFields['bookPeople'],
			'country'=> $formFields['bookCountry'],
			'arrival_date'=> $formFields['bookArrivalDate'],
			'departure_date'=> $formFields['bookDepartureDate'],
			'hotel_category'=> $formFields['bookHotel']
			);


			$booking = new Booking;
			$booking->name = $booking_data['name'];
			$booking->email = $booking_data['email'];
			$booking->address = $booking_data['address'];
			$booking->phone = $booking_data['phone'];
			$booking->number_of_people = $booking_data['number_of_people'];
			$booking->country = $booking_data['country'];
			$booking->arrival_date = $booking_data['arrival_date'];
			$booking->departure_date = $booking_data['departure_date'];
			$booking->hotel_category = $booking_data['hotel_category'];
			$booking->package_id = $booking_data['package_id'];
			$booking->confirmed = false;

			$booking->save();
			$success = "Package have been booked. We will contact you soon.";
			return $success;
	}

	public function saveForeignBooking(){
		$id =$_GET['id'];
		return "Hello" + $id;
	}
}
