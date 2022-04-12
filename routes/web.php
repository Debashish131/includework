<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//User Section
Route::get('/', 'HomeController@index')->name('/');
Route::get('/service', 'ServiceController@service')->name('service');
Route::get('/team_member', 'TeamController@team')->name('team_member');
Route::get('/review', 'ReviewController@review')->name('review');
Route::get('/aboutUs', 'AboutUsController@aboutUs')->name('about');
Route::get('/project', 'ProjectController@project')->name('project');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/sentMail', 'ContactController@mail');
Route::get('/service_details{id}', 'ServiceController@service_details');
Route::get('/project_details{id}', 'ProjectdetailsController@singleproject');
Route::get('/career', 'CareerController@career')->name('career');
Route::post('/cvUpload', 'CareerController@cvUpload')->name('cvUpload');
Route::get('/careerCircular', 'CircularController@circular')->name('circular');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');

Route::namespace("admin")->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout')->name('admin.logout');
    });
});


Route::get('/adminHome', 'admin\HomeController@homePageEditor');

Route::get('/adminService', 'admin\ServiceController@adminService');
Route::post('/serviceAdd', 'admin\ServiceController@serviceAdd');
Route::get('/serviceList', 'admin\ServiceController@serviceList');
Route::get('/serviceEdit{id}', 'admin\ServiceController@serviceEdit');
Route::post('/serviceUpdate{id}', 'admin\ServiceController@serviceUpdate');
Route::get('/serviceDelete/{id}', 'admin\ServiceController@serviceDelete');

Route::get('/discussServiceAdd', 'admin\ServiceController@discussServiceAdd');
Route::post('/discussService', 'admin\ServiceController@discussService');
Route::get('/discussServiceList', 'admin\ServiceController@discussServiceList');
Route::get('/discussServiceEdit{id}', 'admin\ServiceController@discussServiceEdit');
Route::post('/discussServiceUpdate{id}', 'admin\ServiceController@discussServiceUpdate');
Route::get('/discussServiceDelete/{id}', 'admin\ServiceController@discussServiceDelete');


Route::get('/roundServiceForm', 'admin\RoundServiceController@roundServiceForm');
Route::get('/roundServiceList', 'admin\RoundServiceController@roundServiceList');
Route::post('/roundServiceAdd', 'admin\RoundServiceController@roundServiceAdd');
Route::get('/roundServiceEdit{id}', 'admin\RoundServiceController@roundServiceEdit');
Route::post('/roundServiceUpdate{id}', 'admin\RoundServiceController@roundServiceUpdate');
Route::get('/roundServiceDelete/{id}', 'admin\RoundServiceController@roundServiceDelete');

Route::get('/teamadmin', 'admin\TeamController@team');
Route::get('/teamList', 'admin\TeamController@teamList');
Route::post('/memberAdd', 'admin\TeamController@memberAdd');
Route::get('/memberEdit{id}', 'admin\TeamController@memberEdit');
Route::post('/memberUpdate{id}', 'admin\TeamController@memberUpdate');
Route::get('/teamDelete/{id}', 'admin\TeamController@teamDelete');


Route::get('/reviewList', 'admin\ReviewController@reviewList');
Route::get('/reviewForm', 'admin\ReviewController@reviewForm');
Route::post('/reviewAdd', 'admin\ReviewController@reviewAdd');
Route::get('/reviewEdit{id}', 'admin\ReviewController@reviewEdit');
Route::post('/reviewUpdate{id}', 'admin\ReviewController@reviewUpdate');
Route::get('/reviewDelete/{id}', 'admin\ReviewController@reviewDelete');


Route::get('/showCaseList', 'admin\ShowCaseController@showCaseList');
Route::get('/showCaseForm', 'admin\ShowCaseController@showCaseForm');
Route::post('/showCaseAdd', 'admin\ShowCaseController@showCaseAdd');
Route::get('/showCaseEdit{id}', 'admin\ShowCaseController@showCaseEdit');
Route::post('/showCaseUpdate{id}', 'admin\ShowCaseController@showCaseUpdate');
Route::get('/showCaseDelete/{id}', 'admin\ShowCaseController@showCaseDelete');


Route::get('/projectCount', 'admin\CustomerController@projectCount');
Route::post('/projectCountAdd', 'admin\CustomerController@projectCountAdd');
Route::get('/projectCountEdit{id}', 'admin\CustomerController@projectCountEdit');
Route::post('/projectCountUpdate{id}', 'admin\CustomerController@projectCountUpdate');

Route::get('/careerview', 'admin\CareerController@careerview');
Route::get('/careerCvdelete/{id}', 'admin\CareerController@careerCvdelete');
Route::get('/circularUpload', 'admin\CareerController@circularUpload');
Route::post('/circularAdd', 'admin\CareerController@circularAdd');
Route::get('/circularList', 'admin\CareerController@circularList');
Route::get('/circularEdit{id}', 'admin\CareerController@circularEdit');
Route::get('/circularDelete{id}', 'admin\CareerController@circularDelete');
Route::post('/circularUpdate{id}', 'admin\CareerController@circularUpdate');

Route::get('/contactList', 'admin\ContactController@contactList');
Route::get('/contactDelete/{id}', 'admin\ContactController@contactDelete');


