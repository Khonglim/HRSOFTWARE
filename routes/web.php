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

Route::resource('company','CompanyController');
Route::get('company/create', 'CompanyController@create');

Route::resource('department','DepartmentController');
Route::get('department/create', 'DepartmentController@create');

Route::resource('position','PositionController');
Route::get('position/create', 'PositionControllerr@create');

Route::resource('employee','EmployeeController');
Route::get('employee/create', 'EmployeeController@create');


Route::get('/orgchartcompany','JorgchartController@company');





Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('home','HomeController');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('iframe', function () {

    return view('iframe');

});

Route::get('/dynamicdependent','DynamicDependent@index');
Route::get('states/get/{id}', 'DynamicDependent@getStates');
Route::get('states2/get/{id}', 'DynamicDependent@getStates');

