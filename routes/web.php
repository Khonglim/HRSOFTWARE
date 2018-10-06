<?php

use App\Http\Controllers\PDFController;
use App\Testmbti;
use App\Testdisc;
use App\Personal;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Operate_qSup;
use App\Operate_staff;
use App\Operate_sup;
use Illuminate\Support\Facades\DB;

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

Route::resource('Operate', 'OperateController');

Route::resource('Operate_sup', 'Operate_supController');

Route::resource('Operate_staff', 'Operate_staffController');

Route::resource('reset', 'ResetController');

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

Route::resource('evatestingv2','Evatestingv2Controller');
Route::post('istestertotestv2','Evatesting2v2Controller@test');
Route::post('starttestv2','Evatesting2v2Controller@test2');
Route::get('evareportv2/{id}/reportv2','Evatesting2v2Controller@test3');
Route::get('summevav2','Evatesting2v2Controller@test4');
Route::get('evareportv2/{id}/evareportblindnamev2','Evatesting2v2Controller@test5');

Route::get('evatestversion','Evatesting2v2Controller@index');

Route::resource('management','EvamanagementController');


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

Route::post('/saveep', 'EmployeeController@index')->name('saveep');
Route::get('/dynamicdependent','DynamicDependent@index');
Route::get('states/get/{id}', 'DynamicDependent@getStates');
Route::get('states2/get/{id}', 'DynamicDependent@getStates');

Route::get('/pdfemployee/{id}','PDFController@pdfemployee' );

Route::get('/pdftestdisc/{id}','PDFController@pdftestdisc' );
Route::get('/pdftestmbti/{id}','PDFController@pdftestmbti' );
Route::get('/pdfcon_all/{id}','PDFController@pdfconall' );


Route::get('/pdfcon_staf/{id}','PDFController@pdfoper_staff' );
Route::get('/pdfcon_sup/{id}','PDFController@pdfoper_sup' );



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


Route::get('save_employ', function () { return view("employ/save");});






Route::get('operate_employf', function () { 
    
    $employee  = Personal::where('enable','=', 1)->get();
    $data = array(
        'employee' => $employee 
    ); 
    return view("operate/staff/index",$data);
    
  

});


Route::post('operate_employstaff', function () { 
    
   
    $operate_Chioce  = Operate_Chioce::all();
    $operate_qSeff  = Operate_qSeff::all();
    $data = array(
        'operate_Chioce' =>  $operate_Chioce,
        'operate_qSeff' =>   $operate_qSeff,
       
    );
    return view("operate/staff/operate_60",$data);

});



Route::post('operate_employsup', function () { 
    
    $manager = DB::table('__manager')->get();
    $operate_Chioce  = Operate_Chioce::all();
    $operate_qSup  = operate_qSup::all();
    $data = array(
        'operate_Chioce' =>  $operate_Chioce,
        'operate_qSup' =>   $operate_qSup,
        'manager' =>   $manager,
    );
    return view("operate/sup/operate_60",$data);

});



Route::get('operate_report*', function () { 


    $employee  =   DB::table('personal')
                    ->where('enable', '=', 1)
                    ->where('degree', '=', 0)
  ->get();
    $operate_staff   =       Operate_staff::all();
    $data = array(
        'employee' => $employee ,
        'operate_staff' =>  $operate_staff
    ); 
    return view("operate/staff/show",$data);

});





Route::get('operate_report**', function () { 
    $employee  =   DB::table('personal')
    ->where('enable', '=', 1)
    ->where('degree', '=', 1)
->get();
    $operate_sup   =       Operate_sup::all();


    $data = array(
        'employee' => $employee ,
        'operate_sup' => $operate_sup
    ); 

    return view("operate/sup/show",$data);

});









Route::post('conduct_employs', function () { 
    
    $employee  = Personal::where('enable','=', 1  )->get();
    $operate_staff   =       Operate_staff::all();
    $operate_sup   =       Operate_sup::all();
        $data = array(
            'employee' => $employee ,
            'operate_staff' =>  $operate_staff,
            'operate_sup' =>  $operate_sup
        ); 
   
        return view("operate/staff/conduct_staff",$data);




});




Route::get('setting', function () { 
    $employee  = Personal::where('enable','=', 1  )->get();
   
    $data = array(
        'employee' => $employee ,
       
    ); 
    return view("setting/reset",$data);

});

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);
Route::get('session', ['as' => 'session', 'uses' => 'ErrorController@session']);






Route::get('online', 'PersonalController@index')->name('online');
Route::post('online/postdata', 'PersonalController@postdata')->name('online.postdata');