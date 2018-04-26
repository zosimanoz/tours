<?php

/**
* 
*/
class GalleryController extends BaseController
{

	protected $permission_code = 'gallery_management';
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
		$title = strtoupper("Admin::Gallery Management");
		
		$banner = Gallery::all();

		return View::make('admin.banners.index')->with(compact('title','banner')); 
	}






	public function getCreate()
	{
		$title = strtoupper("Admin::Add New Banner");

		return View::make('admin.banners.create')->with(compact('title'));
	}



	public function postSave()
	{
		$banner = new Gallery;


		$file = Input::file('image');

		if($file)
		{

			$filename = (new DateTime() )->getTimestamp().".".$file->getClientOriginalName();
			$destinationOriginalPath = 'uploads/banners/originals/';
			$destinationThumbPath = 'uploads/banners/thumbnails/';

			$image_path = $destinationOriginalPath.$filename;

			$image_thumb_path = $destinationThumbPath.$filename;

			Image::make($file->getRealPath())->resize(150,150)->save($image_thumb_path);

			$upload_path = Input::file('image')->move( $destinationOriginalPath,  $filename);
			
			$banner->file_name = $image_path;
			$banner->file_name_thumb = $image_thumb_path;
		
		}

		$banner->status = Input::get('status');
		$banner->order = Input::get('banner_order');
		$banner->title = Input::get('banner_title');
		$banner->description = Input::get('desc');


		$banner->save();

		return Redirect::route('banner')->with('message_success','New banner added successfully');
	}



	public function getEdit($id)
	{
		$banner = Gallery::find($id);
		$title = 'Admin::Edit Banner';
		return View::make('admin.banners.edit')->with(compact('title','banner'));
	}


	public function postEdit($id)
	{	
		$banner = Gallery::find($id);

		$file = Input::file('image');

		if($file)
		{
			// $destinationPath = 'uploads/banners/';

			// $filename = (new DateTime() )->getTimestamp().".".$file->getClientOriginalExtension();

			// $image_path = $destinationPath.$filename;

			// $upload_path = Input::file('image')->move( $destinationPath,  $filename);
				
			// $banner->file_name = $image_path;


		    $filename = (new DateTime() )->getTimestamp().".".$file->getClientOriginalName();
			$destinationOriginalPath = 'uploads/banners/originals/';
			$destinationThumbPath = 'uploads/banners/thumbnails/';

			$image_path = $destinationOriginalPath.$filename;

			$image_thumb_path = $destinationThumbPath.$filename;

			Image::make($file->getRealPath())->resize(150,150)->save($image_thumb_path);

			$upload_path = Input::file('image')->move( $destinationOriginalPath,  $filename);
			
			$banner->file_name = $image_path;
			$banner->file_name_thumb = $image_thumb_path;


			
		}

		$banner->status = Input::get('status');
		$banner->order = Input::get('banner_order');
		$banner->title = Input::get('banner_title');
		$banner->description = Input::get('desc');


		$banner->save();

		return Redirect::route('banner')->with('message_success','Banner updated successfully.');

	}





	public function getDelete($id)
	{
		$banner = Gallery::find($id);

		$banner->delete();

		return Redirect::route('banner')->with('message_success','Banner deleted successfully.');

	}










}