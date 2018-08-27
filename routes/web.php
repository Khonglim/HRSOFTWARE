<?php

use App\Http\Controllers\PDFController;
use App\Testmbti;
use App\Testdisc;
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

Route::resource('rate','InterviewController');

Route::resource('rate_sup','Interview_supController');

Route::resource('disctest','DisctestController');


Route::resource('mbti','TestmbtiController');
Route::post('/start','AnswerController@start');
Route::post('/endtest','AnswerController@answer');


Route::resource('disc','TestdiscController');
Route::post('/testdisc','AnswerController@startdisc');
Route::post('/ansdisc','AnswerController@answerdisc');

Route::get('/orgchartcompany','JorgchartController@company');

Route::resource('evatesting','EvatestingController');
Route::post('istestertotest','Evatesting2Controller@test');
Route::post('starttest','Evatesting2Controller@test2');
Route::get('evareport/{id}/report','Evatesting2Controller@test3');
Route::get('summeva','Evatesting2Controller@test4');


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

Route::get('/pdfemployee/{id}','PDFController@pdfemployee' );

Route::get('/pdftestdisc/{id}','PDFController@pdftestdisc' );
Route::get('/pdftestmbti/{id}','PDFController@pdftestmbti' );

Route::get('summbti', function () {
    
    $testmbti =  Testmbti::all();
    $data = array(
        'testmbti' => $testmbti
    );
    return view("summary/summbti",$data);

});
Route::get('sumdisc', function () {
    
    $testdisc =  Testdisc::all();
    $data = array(
        'testdisc' => $testdisc
    );
    return view("summary/sumdisc",$data);

});

Route::get('rate', function () {
    
    

    return view("rate/forminterview");

});
