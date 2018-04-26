<?php



/* Admin Package Controller class */


class AdminPackageController extends BaseController
{



	protected $permission_code = 'manage_packages';
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
		$title = "Admin::Package Management";
		// get all package alogn with the category they belong
		$packages = Package::with('category')->paginate(5);
		return View::make('admin.packages.index')->with(compact('title','packages'));
	}


	public function getCreate()
	{
		$title = "Admin::Add New Package";
		$packages_category = PackageCategory::all();
		return View::make('admin.packages.create')->with(compact('title'))->with(compact('packages_category'));
	}


	public function postSave()
	{
		$rules = array(
				'package_name' => 'required',
				'package_description' =>'required',
				'package_time' => 'required',
				'per_person_fare' => 'required',
				'package_category' => 'required',
				'is_featured' => 'required'
			);

		$data = array(
				'package_name' => Input::get('package_name'),
				'package_description' => Input::get('package_description'),
				'package_time' => Input::get('package_time'),
				'per_person_fare' => Input::get('per_person_fare'),
				'package_category' => Input::get('package_category'),
				'is_featured' => Input::get('is_featured')
			);

		$validator = Validator::make($data,$rules);
			

		if( $validator->passes() )
		{
			$package = new Package;

			$file = Input::file('image');

			if($file)
			{

				$filename = (new DateTime() )->getTimestamp().".".$file->getClientOriginalName();
				$destinationOriginalPath = 'uploads/packages/originals/';
				$destinationThumbPath = 'uploads/packages/thumbnails/';

				$image_path = $destinationOriginalPath.$filename;

				$image_thumb_path = $destinationThumbPath.$filename;

				Image::make($file->getRealPath())->resize(252,144)->save($image_thumb_path);

				$upload_path = Input::file('image')->move( $destinationOriginalPath,  $filename);
				
				$package->large_image = $image_path;
				$package->thumb_image = $image_thumb_path;

			
			}



			$package->package_name = Input::get('package_name');
			$package->package_description = Input::get('package_description');
			$package->package_time = Input::get('package_time');
			$package->per_person_fare = Input::get('per_person_fare');
			$package->package_category = Input::get('package_category');
			$package->is_featured = Input::get('is_featured');

			$package->save();

			return Redirect::route('packages')->with('success','Package added successfully.');
		}
		else
		{
			return Redirect::back()->with('error','All the fields are required');
		}
	}


	public function getEdit($id)
	{
		$title = "Admin::Edit Package";
		$package = Package::find($id);
		$packages_category = PackageCategory::all();
		$current_category = PackageCategory::find($package->package_category);
		return View::make('admin.packages.edit')->with(compact('title','package','current_category','packages_category'));		
	}


	public function postEdit($id)
	{
		$rules = array(
				'package_name' => 'required',
				'package_description' =>'required',
				'package_time' => 'required',
				'per_person_fare' => 'required',
				'package_category' => 'required',
				'is_featured' => 'required'
			);

		$data = array(
				'package_name' => Input::get('package_name'),
				'package_description' => Input::get('package_description'),
				'package_time' => Input::get('package_time'),
				'per_person_fare' => Input::get('per_person_fare'),
				'package_category' => Input::get('package_category'),
				'is_featured' => Input::get('is_featured')
			);

		$validator = Validator::make($data,$rules);
			

		if( $validator->passes() )
		{
			$package = Package::find($id);
			$file = Input::file('image');

			if($file)
			{

				$filename = (new DateTime() )->getTimestamp().".".$file->getClientOriginalName();
				$destinationOriginalPath = 'uploads/packages/originals/';
				$destinationThumbPath = 'uploads/packages/thumbnails/';

				$image_path = $destinationOriginalPath.$filename;

				$image_thumb_path = $destinationThumbPath.$filename;

				Image::make($file->getRealPath())->resize(252,144)->save($image_thumb_path);

				$upload_path = Input::file('image')->move( $destinationOriginalPath,  $filename);
				
				$package->large_image = $image_path;
				$package->thumb_image = $image_thumb_path;

			
			}

			$package->package_name = Input::get('package_name');
			$package->package_description = Input::get('package_description');
			$package->package_time = Input::get('package_time');
			$package->per_person_fare = Input::get('per_person_fare');
			$package->package_category = Input::get('package_category');
			$package->is_featured = Input::get('is_featured');
			$package->save();

			return Redirect::route('packages')->with('success','Package updated successfully.');
		}
		else
		{
			return Redirect::back()->with('error','All the fields are required. Error while updating.');
		}
		
	}


	public function getDelete($id)
	{
		$package = Package::find($id);
		$package->delete();
		return Redirect::route('packages')->with('success','Package deleted successfully.');
	}



}