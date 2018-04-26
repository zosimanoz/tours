<?php


/**
* 
*/
class AdminPackageCategoryController extends BaseController
{

	protected $permission_code = 'manage_package_category';
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
		$title = strtoupper("Admin::Package Category Management");
		$package_category = PackageCategory::paginate(5);
		return View::make('admin.package_category.index')->with(compact('title','package_category'));
	}


	public function getCreate()
	{
		$title = strtoupper("Admin::Add New package category");

		return View::make('admin.package_category.create')->with(compact('title'));
	}


	public function postSave()
	{
		$package_category = new PackageCategory;

		$package_category->package_name = Input::get('package_name');
		$package_category->category_description = Input::get('desc');

		$package_category->save();

		return Redirect::route('manage_package_category')->with('message_success','New category added successfully');
	}


	public function getEdit($id)
	{
		$package_category = PackageCategory::find($id);
		$title = 'Admin::Edit category';
		return View::make('admin.package_category.edit')->with(compact('title','package_category'));
	}



	public function postEdit($id)
	{	
		$package_category = PackageCategory::find($id);

		$package_category->package_name = Input::get('package_name');
		$package_category->category_description = Input::get('desc');

		$package_category->save();

		return Redirect::route('manage_package_category')->with('message_success','Category updated successfully.');

	}




	public function getDelete($id)
	{
		$package_category = PackageCategory::find($id);
		$package_category->delete();

		Package::where('package_category','=',$id)->delete();

		return Redirect::route('manage_package_category')->with('message_success','Service deleted successfully.');

	}



}