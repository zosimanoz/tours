<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/












App::error(function($exception,$code)
{
	switch ($code) {
		case 403:
			return Response::view('error.unauthorized',array(),403);
			break;
		case 404:
			return Response::view('error.not_found',array(),404);
			break;
		default:
			return Response::view('error.server_error',array(),500);
			break;
	}
});




Route::group(array('before'=>'auth','prefix'=>'admin'),function(){

	Route::get('index',array(
		'as'=>'admin',
		'uses'=>'HomeController@admin'
		));

	Route::get('logout',array(
		'as'=>'logout',
		'uses'=>'LoginController@getSignOut'
	));



	Route::get('admin_users',array(
		'as'=>'admin_users',
		'uses'=>'UsersController@getUsers'
		));


	Route::get('settings',array(
		'as'=>'settings',
		'uses'=>'SettingsController@showSettings'
		));



	Route::get('roles',array(
		'as' => 'roles',
		'uses' => 'UsersController@getRoles'
		));

	Route::get('edit_roles/{id}',array(
		'as'=>'edit_roles',
		'uses' => 'UsersController@editRoles'
		));


	Route::post('edit_checked_roles/{id}',array(
		'as' => 'edit_checked_roles',
		'uses' => 'UsersController@postCheckedRoles'
		));


	Route::get('add_new_user',array(
		'as' => 'add_new_user',
		'uses'=>'UsersController@getAddNewUser'
		));


	Route::post('add_new_user',array(
		'as' => 'post_add_new_user',
		'uses'=>'UsersController@postAddNewUser'
		));



	Route::get('admin_user_edit/{id}',array(
		'as'=>'admin_user_edit',
		'uses'=>'UsersController@getUserEdit'
		));


	Route::post('admin_user_edit/{id}',array(
		'as'=>'edit-admin-post',
		'uses'=>'UsersController@postUserEdit'
		));


	Route::get('delete_user/{id}',array(
		'as'=>'delete_user',
		'uses'=>'UsersController@deleteUser'
		));




	#route for pages management
	
	Route::get('pages',array(
		'as'=>'pages',
		'uses'=>'PagesController@getIndex'
	));


	Route::get('page_edit/{id}',array(
		'as'=>'page_content_edit',
		'uses'=>'PagesController@getEdit'
		));


	Route::post('page_edit/{id}',array(
		'as'=>'page_content_edit_save',
		'uses'=>'PagesController@postSave'
		));




	#route for gallery management

	Route::get('gallery',array(
		'as'=>'gallery',
		'uses'=>'GalleryController@showIndex'
	));




	#banner management
	Route::get('banners',['as'=>'banner','uses'=>'GalleryController@showIndex']);
	Route::get('banners/add',['as'=>'banner_add','uses'=>'GalleryController@getCreate']);
	Route::post('banners/add',['as'=>'banner_save','uses'=>'GalleryController@postSave']);
	Route::get('banners/{id}/edit',['as'=>'banner_edit','uses'=>'GalleryController@getEdit']);
	Route::post('banners/{id}/edit',['as'=>'banner_update','uses'=>'GalleryController@postEdit']);
	Route::get('banners/{id}/delete',['as'=>'banner_delete','uses'=>'GalleryController@getDelete']);




	/******  Manage Packages  ********/
	Route::get('packages', ['as'=>'packages', 'uses'=> 'AdminPackageController@getIndex' ]);
	Route::get('packages/add', ['as'=>'add_new_package', 'uses'=>'AdminPackageController@getCreate' ]);
	Route::post('packages/add', ['as'=>'save_new_package', 'uses'=>'AdminPackageController@postSave']);
	Route::get('package/{id}/edit', ['as'=>'edit_package', 'uses'=> 'AdminPackageController@getEdit']);
	Route::post('package/{id}/edit', ['as'=>'save_edit_package', 'uses'=> 'AdminPackageController@postEdit']);
	Route::get('package/{id}/delete', ['as'=>'delete_package' , 'uses'=>'AdminPackageController@getDelete' ]);


	/******  Manage Foreign Packages  ********/
	Route::get('foreign_packages', ['as'=>'foreign_packages', 'uses'=> 'AdminForeignPackageController@getIndex' ]);
	Route::get('foreign_packages/add', ['as'=>'add_new_fpackage', 'uses'=>'AdminForeignPackageController@getCreate' ]);
	Route::post('foreign_packages/add', ['as'=>'save_new_fpackage', 'uses'=>'AdminForeignPackageController@postSave']);
	Route::get('foreign_packages/{id}/edit', ['as'=>'edit_fpackage', 'uses'=> 'AdminForeignPackageController@getEdit']);
	Route::post('foreign_packages/{id}/edit', ['as'=>'save_edit_fpackage', 'uses'=> 'AdminForeignPackageController@postEdit']);
	Route::get('foreign_packages/{id}/delete', ['as'=>'delete_fpackage' , 'uses'=>'AdminForeignPackageController@getDelete' ]);



	/******  Manage Services  ********/
	Route::get('services', ['as'=>'manage_services', 'uses'=> 'ServicesController@getIndex' ]);
	Route::get('services/add', ['as'=>'add_new_service', 'uses'=>'ServicesController@getCreate' ]);
	Route::post('services/add', ['as'=>'save_new_service', 'uses'=>'ServicesController@postSave']);
	Route::get('services/{id}/edit', ['as'=>'edit_service', 'uses'=> 'ServicesController@getEdit']);
	Route::post('services/{id}/edit', ['as'=>'save_edit_service', 'uses'=> 'ServicesController@postEdit']);
	Route::get('services/{id}/delete', ['as'=>'delete_service' , 'uses'=>'ServicesController@getDelete' ]);




	/******  Manage Testimonial  ********/
	Route::get('testimonials', ['as'=>'manage_testimonials', 'uses'=> 'TestimonialController@getIndex' ]);
	Route::get('testimonials/add', ['as'=>'add_new_testimonial', 'uses'=>'TestimonialController@getCreate' ]);
	Route::post('testimonials/add', ['as'=>'save_new_testimonial', 'uses'=>'TestimonialController@postSave']);
	Route::get('testimonials/{id}/edit', ['as'=>'edit_testimonial', 'uses'=> 'TestimonialController@getEdit']);
	Route::post('testimonials/{id}/edit', ['as'=>'save_edit_testimonial', 'uses'=> 'TestimonialController@postEdit']);
	Route::get('testimonials/{id}/delete', ['as'=>'delete_testimonial' , 'uses'=>'TestimonialController@getDelete' ]);


	/******  Manage News  ********/
	Route::get('news', ['as'=>'manage_news', 'uses'=> 'NewsController@getIndex' ]);
	Route::get('news/add', ['as'=>'add_new_news', 'uses'=>'NewsController@getCreate' ]);
	Route::post('news/add', ['as'=>'save_new_news', 'uses'=>'NewsController@postSave']);
	Route::get('news/{id}/edit', ['as'=>'edit_news', 'uses'=> 'NewsController@getEdit']);
	Route::post('news/{id}/edit', ['as'=>'save_edit_news', 'uses'=> 'NewsController@postEdit']);
	Route::get('news/{id}/delete', ['as'=>'delete_news' , 'uses'=>'NewsController@getDelete' ]);


	/******  Manage feedbacks  ********/
	Route::get('feedbacks', ['as'=>'manage_feedbacks', 'uses'=> 'AdminPackageController@getIndex' ]);
	Route::get('feedbacks/add', ['as'=>'add_new_package', 'uses'=>'AdminPackageController@getCreate' ]);
	Route::post('feedbacks/add', ['as'=>'save_new_package', 'uses'=>'AdminPackageController@postSave']);
	Route::get('feedbacks/{id}/edit', ['as'=>'edit_package', 'uses'=> 'AdminPackageController@getEdit']);
	Route::post('feedbacks/{id}/edit', ['as'=>'save_edit_package', 'uses'=> 'AdminPackageController@postEdit']);
	Route::get('feedbacks/{id}/delete', ['as'=>'delete_package' , 'uses'=>'AdminPackageController@getDelete' ]);


	/******  Manage bookings  ********/
	Route::get('bookings', ['as'=>'manage_bookings', 'uses'=> 'AdminBookingController@getIndex' ]);
	Route::get('bookings/{id}/confirm', ['as'=>'booking_detail', 'uses'=> 'AdminBookingController@getConfirm']);
	Route::post('bookings/{id}/confirm', ['as'=>'booking_confirm', 'uses'=> 'AdminBookingController@postConfirm']);
	Route::get('bookings/{id}/delete', ['as'=>'delete_booking' , 'uses'=>'AdminBookingController@getDelete' ]);


	/******  Manage bookings  ********/
	Route::get('package_category', ['as'=>'manage_package_category', 'uses'=> 'AdminPackageCategoryController@getIndex' ]);
	Route::get('package_category/add', ['as'=>'add_new_package_category', 'uses'=>'AdminPackageCategoryController@getCreate' ]);
	Route::post('package_category/add', ['as'=>'save_new_package_category', 'uses'=>'AdminPackageCategoryController@postSave']);
	Route::get('package_category/{id}/edit', ['as'=>'edit_package_category', 'uses'=> 'AdminPackageCategoryController@getEdit']);
	Route::post('package_category/{id}/edit', ['as'=>'save_edit_package_category', 'uses'=> 'AdminPackageCategoryController@postEdit']);
	Route::get('package_category/{id}/delete', ['as'=>'delete_package_category' , 'uses'=>'AdminPackageCategoryController@getDelete' ]);



	

});


Route::group(array('before'=>'guest','prefix'=>'admin'),function(){
	Route::get('login',array(
	'as'=>'login',
	'uses'=>'HomeController@getLogin'
	));

	Route::post('login',array(
	'as'=>'login-post',
	'uses'=>'LoginController@postLogin'
	));

	
});





Route::get('package/{id}/detail', ['as'=>'package_detail' , 'uses'=>'SitePageController@getPackageDetails' ]);
// Route::get('foreign_packages/{id}/detail', ['as'=>'fpackage_detail' , 'uses'=>'SitePageController@getFPackageDetails' ]);

Route::get('/{page}',array(
		'as' => 'show_page',
		'uses' => 'SitePageController@showPages'
	));


Route::get('captcha', function()
{

    $captcha = new Captcha;

    $cap = $captcha->make();

    return View::make('detail')->with('cap', $cap);

});


Route::post('package/book',['as'=>'save_booking','uses'=>'SitePageController@saveBooking']);
// Route::post('foreign_packages/book',['as'=>'save_foreign_booking','uses'=>'SitePageController@saveForeignBooking']);

Route::get('package_detail/{id}',['as'=>'submenu_package','uses'=>'SitePageController@showPackageCategoryDetail']);
Route::get('service_detail/{id}',['as'=>'service_detail','uses'=>'SitePageController@showServiceDetail']);



Route::get('/', function()
{
	$gallery = Gallery::all();
	$packages = Package::where('is_featured','=','1')->get();
	return View::make('index')->with('gallery',$gallery)->with('packages',$packages);
});

