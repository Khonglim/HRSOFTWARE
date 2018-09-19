<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Personal;
use App\Operate_staff;
use App\Operate_Chioce;
use App\Operate_qSeff;
class Operate_staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operate/staff/operate_60');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request  )
    {
        $personal = Personal::find(Input::get('id_posinal'));
        $personal->recheck_Oper =1;
        $personal->recheck_conduct=1;
        $personal->save();

        $operateSataff = new Operate_staff;
        $operateSataff->id_posinal= Input::get('id_posinal');  
        $operateSataff->id_employ= Input::get('id_employ');  
        $operateSataff->position= Input::get('position');  
        $operateSataff->department= Input::get('department');  
        $operateSataff->degree= Input::get('degree');  ;
        $operateSataff->starttime= Input::get('dateStart2');  
        $operateSataff->endtime= Input::get('dateEnd2');  
        $operateSataff->number= Input::get('totolDay2'); 
        $operateSataff->date_60= Input::get('totolDay_60');  
        $operateSataff->date_90 = Input::get('totolDay_90'); 


        $operateSataff->chioce1_60= Input::get('score60_1');  
        $operateSataff->chioce2_60= Input::get('score60_2');  
        $operateSataff->chioce3_60= Input::get('score60_3');  
        $operateSataff->chioce4_60 = Input::get('score60_4'); 
        $operateSataff->chioce5_60= Input::get('score60_5'); 
        $operateSataff->chioce6_60 = Input::get('score60_6'); 
        $operateSataff->chioce7_60 = Input::get('score60_7'); 
        $operateSataff->chioce8_60= Input::get('score60_8');  
        $operateSataff->chioce9_60= Input::get('score60_9');  
        $operateSataff->chioce10_60 = Input::get('score60_10'); 
        $operateSataff->chioce11_60 = Input::get('score60_11'); 
        $operateSataff->chioce12_60 = Input::get('score60_12'); 
        $operateSataff->chioce13_60 = Input::get('score60_13'); 
        $operateSataff->chioce14_60 = Input::get('score60_14'); 
        $operateSataff->chioce15_60 = Input::get('score60_15'); 

        $operateSataff->subtotal_60= Input::get('total_60');  
        $operateSataff->rate_60= Input::get('rate_60');  
        $operateSataff->rate_90= Input::get('rate_90');  
        $operateSataff->comments_60 = Input::get('assessor'); 

        $operateSataff->comments_featured= Input::get('featured'); 
        $operateSataff->comments_weakness= Input::get('weakness'); 
        $operateSataff->name_rate_60=   Input::get('namerate'); 
        
     //   $operateSataff->chioce1_90= Input::get('score90_1');  
    //    $operateSataff->chioce2_90= Input::get('score90_2');  
      //  $operateSataff->chioce3_90 = Input::get('score90_3'); 
   //     $operateSataff->chioce4_90= Input::get('score90_4');  
    //    $operateSataff->chioce5_90 = Input::get('score90_5'); 
   //     $operateSataff->chioce6_90= Input::get('score90_6');  
  //      $operateSataff->chioce7_90= Input::get('score90_7');  
  //      $operateSataff->chioce8_90= Input::get('score90_8');  
   //     $operateSataff->chioce9_90= Input::get('score90_9');  
    //    $operateSataff->chioce10_90 = Input::get('score90_10'); 
    //    $operateSataff->chioce11_90 = Input::get('score90_11'); 
   //     $operateSataff->chioce12_90 = Input::get('score90_12'); 
     //   $operateSataff->chioce13_90 = Input::get('score90_13');
    //    $operateSataff->chioce14_90= Input::get('score90_14');  
       // $operateSataff->chioce15_90 = Input::get('score90_15'); 
      //  $operateSataff->subtotal_90 = Input::get('score90_7'); 
      //  $operateSataff->subtotal_final= Input::get('score90_7');  
     //   $operateSataff->comments_90 = Input::get('score90_7'); 
     //   $operateSataff->experimental = Input::get('score90_7'); 
     //   $operateSataff->experimental_date = Input::get('score90_7'); 
 
      //  $operateSataff->full_time_worker= Input::get('nee_id2'); 
     //   $operateSataff->full_time_worker_date= Input::get('nee_id2'); 
     //   $operateSataff->full_time_worker_position= Input::get('nee_id2'); 


     //   $operateSataff->modify= Input::get('nee_id2');
       // $operateSataff->modify_position1= Input::get('nee_id2');
    //    $operateSataff->modify_position2 = Input::get('nee_id2');
    //    $operateSataff->modify_date = Input::get('nee_id2');
    //    $operateSataff->other_90= Input::get('nee_id2');
   //     $operateSataff->other_com_90 = Input::get('nee_id2');
   //     $operateSataff->name_rate_90 = Input::get('nee_id2');


    //    $operateSataff->chioce_suitability1= Input::get('nee_id2') ;
    //    $operateSataff->chioce_suitability2 = Input::get('nee_id2');
   //     $operateSataff->chioce_suitability3 = Input::get('nee_id2');
   //     $operateSataff->chioce_suitability4= Input::get('nee_id2') ;
   //     $operateSataff->chioce_suitability5 = Input::get('nee_id2');
    //    $operateSataff->chioce_suitability6 = Input::get('nee_id2');
    //    $operateSataff->chioce_suitability7= Input::get('nee_id2') ;
   //     $operateSataff->chioce_suitability8= Input::get('nee_id2') ;
     //   $operateSataff->chioce_suitability9 = Input::get('nee_id2');
   //     $operateSataff->chioce_suitability10= Input::get('nee_id2') ;
      //  $operateSataff->sum_chioce_suitability10 = Input::get('nee_id2');
     //   $operateSataff->comment_suitability10 = Input::get('nee_id2');
      //  $operateSataff->ok_suitability = Input::get('nee_id2');
    //    $operateSataff->other_suitability = Input::get('nee_id2');
 
 
     //   $operateSataff->other_com_suitability= Input::get('nee_id2') ;
     //   $operateSataff->namerate_suitability= Input::get('nee_id2') ;
      //  $operateSataff->conclusions= Input::get('nee_id2') ;
      //  $operateSataff->results_manager= Input::get('nee_id2');
     //   $operateSataff->human_resource_ok= Input::get('nee_id2');
     //   $operateSataff->human_resource_modi = Input::get('nee_id2');
     //   $operateSataff->human_resource_nodi = Input::get('nee_id2');
     //   $operateSataff->human_resource_commo = Input::get('nee_id2');
     //   $operateSataff->human_resource_comno = Input::get('nee_id2');
     //   $operateSataff->human_resource_adjust= Input::get('nee_id2') ;
     //   $operateSataff->human_resource_posi = Input::get('nee_id2');
     //   $operateSataff->human_resource_fail = Input::get('nee_id2');
 
 
 
      //  $operateSataff->human_resource_date = Input::get('nee_id2');
     //   $operateSataff->human_resource_other= Input::get('nee_id2');
     //   $operateSataff->human_resource_othercom = Input::get('nee_id2');
     //   $operateSataff->human_resource_nre = Input::get('nee_id2');
     //   $operateSataff->manager_resource_ok = Input::get('nee_id2');
     //   $operateSataff->manager_resource_modi = Input::get('nee_id2');
     //   $operateSataff->manager_resource_nodi = Input::get('nee_id2');
     //   $operateSataff->manager_resource_comdi = Input::get('nee_id2');
     //   $operateSataff->manager_resource_comno	= Input::get('nee_id2') ;
    //    $operateSataff->manager_resource_adjust = Input::get('nee_id2');
    //   $operateSataff->manager_resource_posi = Input::get('nee_id2');
    //    $operateSataff->manager_resource_fail= Input::get('nee_id2') ;
 
 
 
 
      //  $operateSataff->manager_resource_date = Input::get('nee_id2');
      //  $operateSataff->manager_resource_other = Input::get('nee_id2');
      //  $operateSataff->manager_resource_othercom = Input::get('nee_id2');
     //   $operateSataff->manager_resource_nre = Input::get('nee_id2');


        $operateSataff->startwork_60= Input::get('startrate_60') ;
        $operateSataff->endwork_60 = Input::get('endrate_60');
        $operateSataff->sick_leave_60 = Input::get('sick');
        $operateSataff->errand_leave_60 = Input::get('errand');
        $operateSataff->absence_60 = Input::get('absence');
        $operateSataff->vacation_60= Input::get('vacation');
        $operateSataff->line_terms_60 = Input::get('line');
        $operateSataff->line_min_60 = Input::get('min');
 
 
 
 
     $operateSataff->startwork_90 = Input::get('startrate_90');
     $operateSataff->endtwork_90 = Input::get('endrate_90');
     $operateSataff->sick_leave_90 = Input::get('sick_90');
     $operateSataff->errand_leave_90 = Input::get('errand_90');
     $operateSataff->absence_90 = Input::get('absence_90');
     $operateSataff->vacation_90 = Input::get('vacation_90');
     $operateSataff->line_terms_90= Input::get('line_90') ;
     $operateSataff->line_min_90 = Input::get('min_90');
        $operateSataff->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
            $employee  = Personal::where('enable','=', 1)->get();
            $operate_staff = Operate_staff::find($id);
            $operate_Chioce  = Operate_Chioce::all();
            $operate_qSeff  = Operate_qSeff::all();
    
            $data = array(
                'operate_staff' =>  $operate_staff,
                'operate_Chioce'=>  $operate_Chioce,
                'operate_qSeff' =>   $operate_qSeff,
                'employee'      =>    $employee
            );
            return view('operate/staff/operate_90',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
