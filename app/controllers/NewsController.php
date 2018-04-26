<?php


/**
* 
*/
class NewsController extends BaseController
{

	protected $permission_code = 'manage_news';
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
		$title = strtoupper("Admin::News Management");
		$all_news = News::paginate(5);
		return View::make('admin.news.index')->with(compact('title','all_news'));
	}


	public function getCreate()
	{
		$title = strtoupper("Admin::Add New News");

		return View::make('admin.news.create')->with(compact('title'));
	}


	public function postSave()
	{
		$news = new News;

		$news->news_title = Input::get('news_title');
		$news->news_detail = Input::get('desc');

		$news->save();

		return Redirect::route('manage_news')->with('message_success','New news added successfully');
	}


	public function getEdit($id)
	{
		$news = News::find($id);
		$title = 'Admin::Edit News';
		return View::make('admin.news.edit')->with(compact('title','news'));
	}



	public function postEdit($id)
	{

		$news = News::find($id);

		$news->news_title = Input::get('news_title');
		$news->news_detail = Input::get('desc');

		$news->save();

		return Redirect::route('manage_news')->with('message_success','News updated successfully.');

	}




	public function getDelete($id)
	{
		$news = News::find($id);

		$news->delete();

		return Redirect::route('manage_news')->with('message_success','News deleted successfully.');

	}



	
}