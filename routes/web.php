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
Route::resource('department','DepartmentController');
Route::resource('employee','EmployeeController');
Route::resource('position','PositionController');
Route::get('/orgchartcompany','JorgchartController@company');
Route::get('/orgchartdepartment','JorgchartController@department');
Route::get('/orgchartposition','JorgchartController@position');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('my-theme', function () {

    return view('welcome2');

});
