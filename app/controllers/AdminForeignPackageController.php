<?php



/* Admin Package Controller class */


class AdminForeignPackageController extends BaseController
{



	protected $permission_code = 'foreign_packages';
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
		$packages = ForeignPackage::paginate(5);

		return View::make('admin.foreign-packages.index')->with(compact('title','packages'));
	}


	public function getCreate()
	{
		$title = "Admin::Add New Package";

		return View::make('admin.foreign-packages.create')->with(compact('title'));
	}


	public function postSave()
	{
		$rules = array(
				'package_name' => 'required',
				'package_description' =>'required',
				'package_time' => 'required',
				'per_person_fare' => 'required'
			);

		$data = array(
				'package_name' => Input::get('package_name'),
				'package_description' => Input::get('package_description'),
				'package_time' => Input::get('package_time'),
				'per_person_fare' => Input::get('per_person_fare')
			);

		$validator = Validator::make($data,$rules);
			

		if( $validator->passes() )
		{
			$package = new ForeignPackage;

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

			$package->save();

			return Redirect::route('foreign_packages')->with('success','Package added successfully.');
		}
		else
		{
			return Redirect::back()->with('error','All the fields are required');
		}
	}


	public function getEdit($id)
	{
		$title = "Admin::Edit Package";
		$package = ForeignPackage::find($id);
		
		return View::make('admin.foreign-packages.edit')->with(compact('title','package'));		
	}


	public function postEdit($id)
	{
		$rules = array(
				'package_name' => 'required',
				'package_description' =>'required',
				'package_time' => 'required',
				'per_person_fare' => 'required'
			);

		$data = array(
				'package_name' => Input::get('package_name'),
				'package_description' => Input::get('package_description'),
				'package_time' => Input::get('package_time'),
				'per_person_fare' => Input::get('per_person_fare')
			);

		$validator = Validator::make($data,$rules);
			

		if( $validator->passes() )
		{
			$package = ForeignPackage::find($id);
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

			$package->save();

			return Redirect::route('foreign_packages')->with('success','Package updated successfully.');
		}
		else
		{
			return Redirect::back()->with('error','All the fields are required. Error while updating.');
		}
		
	}


	public function getDelete($id)
	{
		$package = ForeignPackage::find($id);
		$package->delete();
		return Redirect::route('foreign_packages')->with('success','Package deleted successfully.');
	}



}