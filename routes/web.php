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
Route::get('department//create', 'PositionControllerr@create');

Route::resource('employee','EmployeeController');
Route::get('employee/create', 'EmployeeController@create');

Route::get('/orgchartcompany','JorgchartController@company');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-theme', function () {

    return view('welcome2');

});
