<?php

use App\Http\Controllers\PDFController;

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

Route::resource('position','PositionController');

Route::resource('employee','EmployeeController');

Route::resource('mbti','TestmbtiController');

Route::resource('disc','TestdiscController');
Route::resource('disctest','DisctestController');

Route::post('/start','AnswerController@start');
Route::post('/endtest','AnswerController@answer');


Route::post('testdisc','DisctestController@start');
Route::post('ansdisc','DisctestController@answer');

Route::get('/orgchartcompany','JorgchartController@company');

Route::resource('evatesting','EvatestingController');

Auth::routes();
Route::get('/', function () 
{
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

Route::get('/pdf/{id}','PDFController@pdf' );


