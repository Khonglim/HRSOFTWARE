<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Operate_Chioce;
use App\Operate_qSup;
use App\Operate_sup;
use App\Ngg_employee;
use DB;
class Operate_supController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('operate/sup/operate_60');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(Input::get('id_posinal') !== '') {

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper' => 1]);

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_conduct' => 1]);

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['recheck_Oper_90' => 1]);

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('id_posinal'))
            ->update(['degree' => 1]);



            }

        $operatesup = new Operate_sup;
        $operatesup->id_posinal= Input::get('id_posinal');
        $operatesup->id_employ= Input::get('id_employ');
        $operatesup->position= Input::get('position');
        $operatesup->department= Input::get('department');
        $operatesup->degree= Input::get('degree');  ;
        $operatesup->starttime= Input::get('dateStart2');
        $operatesup->endtime= Input::get('dateEnd2');
        $operatesup->number= Input::get('totolDay2');
        $operatesup->date_60= Input::get('totolDay_60');
        $operatesup->date_90 = Input::get('totolDay_90');


        $operatesup->chioce1_60= Input::get('score60_1');
        $operatesup->chioce2_60= Input::get('score60_2');
        $operatesup->chioce3_60= Input::get('score60_3');
        $operatesup->chioce4_60 = Input::get('score60_4');
        $operatesup->chioce5_60= Input::get('score60_5');
        $operatesup->chioce6_60 = Input::get('score60_6');
        $operatesup->chioce7_60 = Input::get('score60_7');
        $operatesup->chioce8_60= Input::get('score60_8');
        $operatesup->chioce9_60= Input::get('score60_9');
        $operatesup->chioce10_60 = Input::get('score60_10');
        $operatesup->chioce11_60 = Input::get('score60_11');
        $operatesup->chioce12_60 = Input::get('score60_12');
        $operatesup->chioce13_60 = Input::get('score60_13');
        $operatesup->chioce14_60 = Input::get('score60_14');
        $operatesup->chioce15_60 = Input::get('score60_15');
        $operatesup->chioce16_60 = Input::get('score60_16');
        $operatesup->chioce17_60 = Input::get('score60_17');
        $operatesup->chioce18_60 = Input::get('score60_18');
        $operatesup->chioce19_60 = Input::get('score60_19');
        $operatesup->chioce20_60 = Input::get('score60_20');
        $operatesup->chioce21_60 = Input::get('score60_21');
        $operatesup->chioce22_60 = Input::get('score60_22');
        $operatesup->chioce23_60 = Input::get('score60_23');
        $operatesup->chioce24_60 = Input::get('score60_24');
        $operatesup->chioce25_60 = Input::get('score60_25');




        $operatesup->subtotal_60= Input::get('total_60');
        $operatesup->rate_60= Input::get('rate_60');

        $operatesup->comments_60 = Input::get('assessor');

        $operatesup->comments_featured= Input::get('featured');
        $operatesup->comments_weakness= Input::get('weakness');
        $operatesup->name_rate_60=   Input::get('namerate_60');




        $operatesup->startwork_60= Input::get('startrate_60_2') ;
        $operatesup->endwork_60 = Input::get('endrate_60_2');
        $operatesup->sick_leave_60 = Input::get('sick');
        $operatesup->errand_leave_60 = Input::get('errand');
        $operatesup->absence_60 = Input::get('absence');
        $operatesup->vacation_60= Input::get('vacation');
        $operatesup->line_terms_60 = Input::get('line');
        $operatesup->line_min_60 = Input::get('min');
        $operatesup->signa1_60 = Input::get('signa1_60');
        $operatesup->NumberDate_60 = Input::get('NumberDate_60');
        $operatesup->NumberDate_90 = Input::get('NumberDate_90');
        $operatesup->save();
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
            $employee  = Ngg_employee::where('nem_enable','=', 1)->get();
            $manager = DB::table('__manager')->get();
            $operate_sup = Operate_sup::find($id);
            $operate_Chioce  = Operate_Chioce::all();
            $operate_qSup  = Operate_qSup::all();

            $data = array(
                'operate_sup' =>  $operate_sup,
                'operate_Chioce'=>  $operate_Chioce,
                'operate_qSup' =>  $operate_qSup,
                'employee'      =>  $employee,
                'manager'       =>  $manager
            );
            return view('operate/sup/operate_90',$data);
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
      

        if(Input::get('idemploy') !== '') {

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('idemploy'))
            ->update(['recheck_Oper_90' => 1]);

            DB::table('Ngg_employee')
            ->where('nem_id', Input::get('idemploy'))
            ->update(['recheck_conduct' => 0]);

            }


    $operate_sup =  Operate_sup::find($id);
    $operate_sup->chioce1_90= Input::get('score90_1');
    $operate_sup->chioce2_90= Input::get('score90_2');
    $operate_sup->chioce3_90 = Input::get('score90_3');
    $operate_sup->chioce4_90= Input::get('score90_4');
    $operate_sup->chioce5_90 = Input::get('score90_5');
    $operate_sup->chioce6_90= Input::get('score90_6');
    $operate_sup->chioce7_90= Input::get('score90_7');
    $operate_sup->chioce8_90= Input::get('score90_8');
    $operate_sup->chioce9_90= Input::get('score90_9');
    $operate_sup->chioce10_90 = Input::get('score90_10');
    $operate_sup->chioce11_90 = Input::get('score90_11');
    $operate_sup->chioce12_90 = Input::get('score90_12');
    $operate_sup->chioce13_90 = Input::get('score90_13');
    $operate_sup->chioce14_90= Input::get('score90_14');
    $operate_sup->chioce15_90 = Input::get('score90_15');
    $operate_sup->chioce16_90 = Input::get('score90_16');
    $operate_sup->chioce17_90 = Input::get('score90_17');
    $operate_sup->chioce18_90 = Input::get('score90_18');
    $operate_sup->chioce19_90 = Input::get('score90_19');
    $operate_sup->chioce20_90 = Input::get('score90_20');
    $operate_sup->chioce21_90 = Input::get('score90_21');
    $operate_sup->chioce22_90 = Input::get('score90_22');
    $operate_sup->chioce23_90 = Input::get('score90_23');
    $operate_sup->chioce24_90 = Input::get('score90_24');
    $operate_sup->chioce25_90 = Input::get('score90_25');

    $operate_sup->signa2 = Input::get('signa2');
    $operate_sup->signa3 = Input::get('signa3');

    $operate_sup->signa4 = Input::get('signa4');
    $operate_sup->signa1_90 = Input::get('signa1_90');




    $operate_sup->subtotal_90 = Input::get('total_90');
    $operate_sup->rate_90 = Input::get('rate_90');
    $operate_sup->subtotal_final= Input::get('rate_all');
    $operate_sup->comments_90 = Input::get('assessor2');
    $operate_sup->experimental = Input::get('experimental');
    $operate_sup->experimental_date = Input::get('clsdate');
    $operate_sup->full_time_worker= Input::get('full_time_worker');
    $operate_sup->full_time_worker_date= Input::get('dateinto');
    $operate_sup->full_time_worker_position= Input::get('full_time_worker_position');


    $operate_sup->modify= Input::get('modify');
    $operate_sup->modify_position1= Input::get('modify_position1');
    $operate_sup->modify_position2 = Input::get('modify_position2');
    $operate_sup->modify_date = Input::get('"modify_date');


    $operate_sup->other_90= Input::get('other_90');
    $operate_sup->other_com_90 = Input::get('other_com_90');
    $operate_sup->name_rate_90 = Input::get('namerate_90');


    $operate_sup->chioce_suitability1= Input::get('staaff_one1') ;
    $operate_sup->chioce_suitability2 = Input::get('staaff_one2');
    $operate_sup->chioce_suitability3 = Input::get('staaff_one3');
    $operate_sup->chioce_suitability4= Input::get('staaff_one4') ;
    $operate_sup->chioce_suitability5 = Input::get('staaff_one5');
    $operate_sup->chioce_suitability6 = Input::get('staaff_one6');
    $operate_sup->chioce_suitability7= Input::get('staaff_one7');
    $operate_sup->chioce_suitability8= Input::get('staaff_one8');
    $operate_sup->chioce_suitability9 = Input::get('staaff_one9');
    $operate_sup->chioce_suitability10= Input::get('staaff_one10');


    $operate_sup->chioce_suitability11= Input::get('staaff_one50') ;
    $operate_sup->chioce_suitability12 = Input::get('staaff_one51');
    $operate_sup->chioce_suitability13 = Input::get('staaff_one52');
    $operate_sup->chioce_suitability14= Input::get('staaff_one53') ;
    $operate_sup->chioce_suitability15 = Input::get('staaff_one54');
    $operate_sup->chioce_suitability16 = Input::get('staaff_one55');
    $operate_sup->chioce_suitability17= Input::get('staaff_one56');
    $operate_sup->chioce_suitability18= Input::get('staaff_one57');
    $operate_sup->chioce_suitability19 = Input::get('staaff_one58');
    $operate_sup->chioce_suitability20= Input::get('staaff_one59');


    $operate_sup->chioce_suitability21= Input::get('staaff_one100') ;
    $operate_sup->chioce_suitability22 = Input::get('staaff_one101');
    $operate_sup->chioce_suitability23 = Input::get('staaff_one102');
    $operate_sup->chioce_suitability24= Input::get('staaff_one103') ;
    $operate_sup->chioce_suitability25 = Input::get('staaff_one104');
    $operate_sup->chioce_suitability26 = Input::get('staaff_one105');
    $operate_sup->chioce_suitability27= Input::get('staaff_one106');
    $operate_sup->chioce_suitability28= Input::get('staaff_one107');
    $operate_sup->chioce_suitability29 = Input::get('staaff_one108');
    $operate_sup->chioce_suitability30= Input::get('staaff_one109');


    $operate_sup->sum_chioce_suitability10 = Input::get('sum_chioce_suitability10');
    $operate_sup->comment_suitability10 = Input::get('comment_suitability10');
    $operate_sup->ok_suitability = Input::get('ok_suitability');
    $operate_sup->other_suitability = Input::get('other_suitability');


    $operate_sup->other_com_suitability= Input::get('other_com_suitability') ;
    $operate_sup->namerate_suitability= Input::get('namerate_suitability') ;



    $operate_sup->conclusions= Input::get('conclusions') ;
    $operate_sup->results_manager= Input::get('results_manager');




        $operate_sup->human_resource_ok= Input::get('human_resource_ok');

        $operate_sup->human_resource_modi = Input::get('human_resource_modi');
        $operate_sup->human_resource_commo = Input::get('human_resource_commo');

        $operate_sup->human_resource_nodi = Input::get('human_resource_nodi');
        $operate_sup->human_resource_comno = Input::get('human_resource_comno');

        $operate_sup->human_resource_adjust= Input::get('human_resource_adjust') ;
        $operate_sup->human_resource_posi = Input::get('human_resource_posi');

        $operate_sup->human_resource_fail = Input::get('human_resource_fail');
        $operate_sup->human_resource_date = Input::get('human_resource_date');

        $operate_sup->human_resource_other= Input::get('human_resource_other');
      $operate_sup->human_resource_othercom = Input::get('human_resource_othercom');

       $operate_sup->human_resource_nre = Input::get('human_resource_nre');



       $operate_sup->manager_resource_ok = Input::get('manager_resource_ok');

       $operate_sup->manager_resource_modi = Input::get('manager_resource_modi');
       $operate_sup->manager_resource_comdi = Input::get('manager_resource_comdi');

       $operate_sup->manager_resource_nodi = Input::get('manager_resource_nodi');
       $operate_sup->manager_resource_comno	= Input::get('manager_resource_comno') ;

        $operate_sup->manager_resource_adjust = Input::get('manager_resource_adjust');
        $operate_sup->manager_resource_posi = Input::get('manager_resource_posi');

       $operate_sup->manager_resource_fail= Input::get('manager_resource_fail') ;
        $operate_sup->manager_resource_date = Input::get('manager_resource_date');

        $operate_sup->manager_resource_other = Input::get('manager_resource_other');
        $operate_sup->manager_resource_othercom = Input::get('manager_resource_othercom');


        $operate_sup->manager_resource_nre = Input::get('manager_resource_nre');











        $operate_sup->startwork_90 = Input::get('startrate_90');
        $operate_sup->endtwork_90 = Input::get('endrate_90');
        $operate_sup->sick_leave_90 = Input::get('sick_90');
        $operate_sup->errand_leave_90 = Input::get('errand_90');
        $operate_sup->absence_90 = Input::get('absence_90');
        $operate_sup->vacation_90 = Input::get('vacation_90');
        $operate_sup->line_terms_90= Input::get('line_90') ;
        $operate_sup->line_min_90 = Input::get('min_90');
        $operate_sup->save();

        return redirect('home');

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
