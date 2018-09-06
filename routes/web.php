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







Route::resource('employee','EmployeeController');

Route::resource('rate','InterviewController');

Route::resource('rate_sup','Interview_supController');

Route::resource('disctest','DisctestController');

Route::resource('con_all', 'Con_allController');

Route::resource('mbti','TestmbtiController');
Route::post('/start','AnswerController@start');
Route::post('/endtest','AnswerController@answer');


Route::resource('disc','TestdiscController');
Route::post('/testdisc','AnswerController@startdisc');
Route::post('/ansdisc','AnswerController@answerdisc');

Route::resource('evatesting','EvatestingController');
Route::post('istestertotest','Evatesting2Controller@test');
Route::post('starttest','Evatesting2Controller@test2');
Route::get('evareport/{id}/report','Evatesting2Controller@test3');
Route::get('summeva','Evatesting2Controller@test4');
Route::get('evareport/{id}/evareportblindname','Evatesting2Controller@test5');


Auth::routes();
Route::get('/', function () 
{
    return view('wellcome');

});

Route::get('/userlogin', function () 
{
    return view('auth.userlogin');

});


Route::resource('home','HomeController');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dynamicdependent','DynamicDependent@index');
Route::get('states/get/{id}', 'DynamicDependent@getStates');
Route::get('states2/get/{id}', 'DynamicDependent@getStates');

Route::get('/pdfemployee/{id}','PDFController@pdfemployee' );

Route::get('/pdftestdisc/{id}','PDFController@pdftestdisc' );
Route::get('/pdftestmbti/{id}','PDFController@pdftestmbti' );
Route::get('/pdfcon_all/{id}','PDFController@pdfconall' );




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

Route::get('rate', function () {return view("rate/forminterview");});


Route::get('form', function () {return view("formregister");});


Route::get('interview', function () { return view("rate/index");});


Route::get('save', function () { return view("rate/save");});

Route::get('testto', function () { return view("testmbti/index");});

Route::get('testtoo', function () { return view("testdisc/index");});

Route::get('savembti', function () { return view("testmbti/save");});

Route::get('savedisc', function () { return view("testdisc/save");});


//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

