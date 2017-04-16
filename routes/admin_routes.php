<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');

	/* ================== Karutes ================== */
	Route::resource(config('laraadmin.adminRoute') . '/karutes', 'LA\KarutesController');
	Route::get(config('laraadmin.adminRoute') . '/karute_dt_ajax', 'LA\KarutesController@dtajax');

	/* ================== Prefectures ================== */
	Route::resource(config('laraadmin.adminRoute') . '/prefectures', 'LA\PrefecturesController');
	Route::get(config('laraadmin.adminRoute') . '/prefecture_dt_ajax', 'LA\PrefecturesController@dtajax');


	/* ================== TourCompanies ================== */
	Route::resource(config('laraadmin.adminRoute') . '/tourcompanies', 'LA\TourCompaniesController');
	Route::get(config('laraadmin.adminRoute') . '/tourcompany_dt_ajax', 'LA\TourCompaniesController@dtajax');


	/* ================== Foods ================== */
	Route::resource(config('laraadmin.adminRoute') . '/foods', 'LA\FoodsController');
	Route::get(config('laraadmin.adminRoute') . '/food_dt_ajax', 'LA\FoodsController@dtajax');

	/* ================== Ingredients ================== */
	Route::resource(config('laraadmin.adminRoute') . '/ingredients', 'LA\IngredientsController');
	Route::get(config('laraadmin.adminRoute') . '/ingredient_dt_ajax', 'LA\IngredientsController@dtajax');

	/* ================== Coupons ================== */
	Route::resource(config('laraadmin.adminRoute') . '/coupons', 'LA\CouponsController');
	Route::get(config('laraadmin.adminRoute') . '/coupon_dt_ajax', 'LA\CouponsController@dtajax');

	/* ================== Fronts ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fronts', 'LA\FrontsController');
	Route::get(config('laraadmin.adminRoute') . '/front_dt_ajax', 'LA\FrontsController@dtajax');

	/* ================== Buses ================== */
	Route::resource(config('laraadmin.adminRoute') . '/buses', 'LA\BusesController');
	Route::get(config('laraadmin.adminRoute') . '/bus_dt_ajax', 'LA\BusesController@dtajax');

	/* ================== Rooms ================== */
	Route::resource(config('laraadmin.adminRoute') . '/rooms', 'LA\RoomsController');
	Route::get(config('laraadmin.adminRoute') . '/room_dt_ajax', 'LA\RoomsController@dtajax');

});
