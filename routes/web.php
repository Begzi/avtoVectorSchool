<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'meta'], function () { //Клиеский интерфейс
	Route::get('/', 'MainController@index')->name('home');
	Route::post('/asd', 'MainController@storage')->name('home.storage');
	Route::get('/goodLink', 'GoodLinkController@index')->name('goodLink');
	Route::get('/sveden', 'SvedenController@sveden')->name('sveden');
	Route::group(['prefix' => 'sveden', 'as'=>'sveden.'], function () {

		Route::get('/common', 'SvedenController@common')->name('common');
		Route::get('/struct', 'SvedenController@struct')->name('struct');
		Route::get('/document', 'SvedenController@document')->name('document');
		Route::get('/education', 'SvedenController@education')->name('education');
		Route::get('/eduStandarts', 'SvedenController@eduStandarts')->name('eduStandarts');
		Route::get('/employees', 'SvedenController@employees')->name('employees');
		Route::get('/objects', 'SvedenController@objects')->name('objects');
		Route::get('/grants', 'SvedenController@grants')->name('grants');
		Route::get('/paid_edu', 'SvedenController@paidEdu')->name('paidEdu');
		Route::get('/budget', 'SvedenController@budget')->name('budget');
		Route::get('/vacant', 'SvedenController@vacant')->name('vacant');
	});
});
Route::group(['prefix' => 'admin', 'as'=>'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
	Route::group(['prefix' => 'sveden', 'as'=>'sveden.', 'namespace' => 'Sveden'], function () {
    	Route::resource('/common', 'CommonController');
    	Route::resource('/struct', 'StructController');
    	Route::resource('/document', 'DocumentController');
		Route::get('/document/edit/{document}/paidEdu', 'DocumentController@editPaidEdu')->name('document.edit.for.paidEdu');
		Route::put('/document/update/{document}/paidEdu', 'DocumentController@updatePaidEdu')->name('document.update.for.paidEdu');
    	Route::resource('/education', 'EducationController');
    	Route::resource('/eduStandart', 'EduStandartController');
    	Route::resource('/objectsSchool', 'ObjectsSchoolController');
    	Route::resource('/grant', 'GrantController');
    	Route::resource('/paidEdu', 'PaidEduController');
    	Route::resource('/budget', 'BudgetController');
    	Route::resource('/vacant', 'VacantController');   	
    	Route::resource('/employees', 'EmployeeController');
		Route::get('/employees/manager/edit/{manager}', 'EmployeeController@managerEdit')->name('manager.edit');
		Route::put('/employees/manager/update/{manager}', 'EmployeeController@managerUdate')->name('manager.update');
		Route::delete('/employees/manager/destroy/{manager}', 'EmployeeController@managerDestroy')->name('manager.destroy');		
		Route::get('/employees/teacher/edit/{teacher}', 'EmployeeController@teacherEdit')->name('teacher.edit');
		Route::put('/employees/teacher/update/{teacher}', 'EmployeeController@teacherUpdate')->name('teacher.update');
		Route::delete('/employees/teacher/destroy/{teacher}', 'EmployeeController@teacherDestroy')->name('teacher.destroy');
	});
    Route::resource('/main', 'MainController');
    Route::get('/', 'MainController@index')->name('index');
    Route::get('/main', 'MainController@main')->name('main');
	Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('ckeditor.upload'); //editor
    Route::resource('/goodLink', 'GoodLinkController');
    Route::resource('/meta', 'MetaController');
    // Route::get('/main/edit/{main}', 'MainController@edit')->name('goodLink.edit');
    // Route::put('/main/update/{main}', 'MainController@update')->name('goodLink.update');
    // Route::resource('/categories', 'CategoryController');
    // Route::resource('/tags', 'TagController');
    // Route::resource('/posts', 'PostController');
});

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/register', 'UserController@create')->name('register.create');
    // Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
