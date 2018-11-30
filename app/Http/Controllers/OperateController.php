<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Operate;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Operate_Chioce;
use App\Operate_qSeff;
use App\Operate_qSup;
use App\Operate_staff;
use App\Operate_sup;

class OperateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operater = Operate::all();
        $data = array('operater' => $operater);
        return view("operate/index_operate", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = DB::table('ngg_employee')
            ->leftJoin('ngg_company', 'ngg_employee.nem_company_id', '=', 'ngg_company.ncp_id')
            ->leftJoin('ngg_department', 'ngg_employee.nem_department_id', '=', 'ngg_department.ndp_id')
            ->leftJoin('ngg_sector', 'ngg_employee.nem_sector_id', '=', 'ngg_sector.nst_id')
            ->leftJoin('ngg_position', 'ngg_employee.nem_position_id', '=', 'ngg_position.id')
            ->leftJoin('ngg_level', 'ngg_employee.nem_level_id', '=', 'ngg_level.nlv_id')
            ->get();
        $data = array('employee' => $employee);
        return view("operate/new_indexAll", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operater = new Operate;
        $operater->company = $request->textCompany;
        $operater->first_name = $request->textName;
        $operater->new_id_employ = $request->textNem_code;
        $operater->new_position = $request->textPosition;
        $operater->new_department = $request->textDepartment;
     
        $operater->id_employ = $request->id_employ;
        $operater->degree = $request->textDegree;
        $operater->starttime = $request->dateStart2;
        $operater->endtime = $request->dateEnd2;
        $operater->number = $request->totolDay2;
        $operater->numberMN = $request->numberMN;
        $operater->date_60 = $request->totolDay_60;
        $operater->date_90 = $request->totolDay_90;
    
        $operater->degree_enable = $request->degree_en;
        $operater->dateC = $request->dateC;
        $operater->save();

        Session::flash('flash_message', 'บันทึกเรียบร้อย!! ');
        return redirect('Operate');
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
            $operate = Operate::find($id);
            $operate_Chioce   = Operate_Chioce::all();
            $operate_qSeff    = Operate_qSeff::all();
            $operate_qSup     = Operate_qSup::all();
            $operate_staff    = Operate_staff::all();
            $manager = DB::table('__manager')->get();


            $data = array(
                'operate' =>   $operate,
                'operate_Chioce' =>  $operate_Chioce,
                'operate_qSeff' =>   $operate_qSeff,
                'operate_staff' =>   $operate_staff,
                'operate_qSup' =>   $operate_qSup,
                'manager' =>   $manager,
            );


            return view('operate/lookHR', $data);
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
        $operater = Operate::find($id);
        if (Input::get('score60_1') != '') {

            $operater->chioce1_60 = Input::get('score60_1');

        }

        if (Input::get('score60_2') != '') {
            $operater->chioce2_60 = Input::get('score60_2');
        }
        if (Input::get('score60_3') != '') {
            $operater->chioce3_60 = Input::get('score60_3');
        }
        if (Input::get('score60_4') != '') {
            $operater->chioce4_60 = Input::get('score60_4');
        }
        if (Input::get('score60_5') != '') {
            $operater->chioce5_60 = Input::get('score60_5');
        }
        if (Input::get('score60_6') != '') {
            $operater->chioce6_60 = Input::get('score60_6');
        }
        if (Input::get('score60_7') != '') {
            $operater->chioce7_60 = Input::get('score60_7');
        }
        if (Input::get('score60_8') != '') {
            $operater->chioce8_60 = Input::get('score60_8');
        }
        if (Input::get('score60_9') != '') {
            $operater->chioce9_60 = Input::get('score60_9');
        }
        if (Input::get('score60_10') != '') {
            $operater->chioce10_60 = Input::get('score60_10');
        }
        if (Input::get('score60_11') != '') {
            $operater->chioce11_60 = Input::get('score60_11');
        }
        if (Input::get('score60_12') != '') {
            $operater->chioce12_60 = Input::get('score60_12');
        }
        if (Input::get('score60_13') != '') {
            $operater->chioce13_60 = Input::get('score60_13');
        }
        if (Input::get('score60_14') != '') {
            $operater->chioce14_60 = Input::get('score60_14');
        }
        if (Input::get('score60_15') != '') {
            $operater->chioce15_60 = Input::get('score60_15');
        }
        if (Input::get('score60_16') != '') {
            $operater->chioce16_60 = Input::get('score60_16');
        }
        if (Input::get('score60_17') != '') {
            $operater->chioce17_60 = Input::get('score60_17');
        }
        if (Input::get('score60_18') != '') {
            $operater->chioce18_60 = Input::get('score60_18');
        }
        if (Input::get('score60_19') != '') {
            $operater->chioce19_60 = Input::get('score60_19');
        }
        if (Input::get('score60_20') != '') {
            $operater->chioce20_60 = Input::get('score60_20');
        }
        if (Input::get('score60_21') != '') {
            $operater->chioce21_60 = Input::get('score60_21');
        }
        if (Input::get('score60_22') != '') {
            $operater->chioce22_60 = Input::get('score60_22');
        }
        if (Input::get('score60_23') != '') {
            $operater->chioce23_60 = Input::get('score60_23');
        }
        if (Input::get('score60_24') != '') {
            $operater->chioce24_60 = Input::get('score60_24');
        }
        if (Input::get('score60_25') != '') {
            $operater->chioce25_60 = Input::get('score60_25');
        }
        if (Input::get('total_60') != '') {
            $operater->subtotal_60 = Input::get('total_60');
        }
        if (Input::get('rate_60') != '') {
            $operater->rate_60 = Input::get('rate_60');
        }
        if (Input::get('assessor') != '') {
            $operater->comments_60 = Input::get('assessor');
        }
        if (Input::get('featured') != '') {
            $operater->comments_featured = Input::get('featured');
        }
        if (Input::get('score60_1') != '') {
            $operater->comments_weakness = Input::get('weakness');
        }
        if (Input::get('namerate_60') != '') {
            $operater->name_rate_60 = Input::get('namerate_60');
        }
        if (Input::get('startrate_60_2') != '') {
            $operater->startwork_60 = Input::get('startrate_60_2');
        }
        if (Input::get('endrate_60_2') != '') {
            $operater->endwork_60 = Input::get('endrate_60_2');
        }
        if (Input::get('sick') != '') {
            $operater->sick_leave_60 = Input::get('sick');
        }
        if (Input::get('errand') != '') {
            $operater->errand_leave_60 = Input::get('errand');
        }
        if (Input::get('absence') != '') {
            $operater->absence_60 = Input::get('absence');
        }
        if (Input::get('vacation') != '') {
            $operater->vacation_60 = Input::get('vacation');
        }
        if (Input::get('line') != '') {
            $operater->line_terms_60 = Input::get('line');
        }
        if (Input::get('min') != '') {
            $operater->line_min_60 = Input::get('min');
        }
        if (Input::get('signa1_60') != '') {
            $operater->signa1_60 = Input::get('signa1_60');
        }
        if (Input::get('NumberDate_60') != '') {
            $operater->NumberDate_60 = Input::get('NumberDate_60');
        }

        if (Input::get('score90_1') != '') {
            $operater->chioce1_90 = Input::get('score90_1');
        }
        if (Input::get('score90_2') != '') {
            $operater->chioce2_90 = Input::get('score90_2');
        }
        if (Input::get('score90_3') != '') {
            $operater->chioce3_90 = Input::get('score90_3');
        }
        if (Input::get('score90_4') != '') {
            $operater->chioce4_90 = Input::get('score90_4');
        }
        if (Input::get('score90_5') != '') {
            $operater->chioce5_90 = Input::get('score90_5');
        }
        if (Input::get('score90_6') != '') {
            $operater->chioce6_90 = Input::get('score90_6');
        }
        if (Input::get('score90_7') != '') {
            $operater->chioce7_90 = Input::get('score90_7');
        }
        if (Input::get('score90_8') != '') {
            $operater->chioce8_90 = Input::get('score90_8');
        }
        if (Input::get('score90_9') != '') {
            $operater->chioce9_90 = Input::get('score90_9');
        }
        if (Input::get('score90_10') != '') {
            $operater->chioce10_90 = Input::get('score90_10');
        }
        if (Input::get('score90_11') != '') {
            $operater->chioce11_90 = Input::get('score90_11');
        }
        if (Input::get('score90_12') != '') {
            $operater->chioce12_90 = Input::get('score90_12');
        }
        if (Input::get('score90_13') != '') {
            $operater->chioce13_90 = Input::get('score90_13');
        }
        if (Input::get('score90_14') != '') {
            $operater->chioce14_90 = Input::get('score90_14');
        }
        if (Input::get('score90_15') != '') {
            $operater->chioce15_90 = Input::get('score90_15');
        }
        if (Input::get('score90_16') != '') {
            $operater->chioce16_90 = Input::get('score90_16');
        }
        if (Input::get('score90_17') != '') {
            $operater->chioce17_90 = Input::get('score90_17');
        }
        if (Input::get('score90_18') != '') {
            $operater->chioce18_90 = Input::get('score90_18');
        }
        if (Input::get('score90_19') != '') {
            $operater->chioce19_90 = Input::get('score90_19');
        }
        if (Input::get('score90_20') != '') {
            $operater->chioce20_90 = Input::get('score90_20');
        }
        if (Input::get('score90_21') != '') {
            $operater->chioce21_90 = Input::get('score90_21');
        }
        if (Input::get('score90_22') != '') {
            $operater->chioce22_90 = Input::get('score90_22');
        }
        if (Input::get('score90_23') != '') {
            $operater->chioce23_90 = Input::get('score90_23');
        }
        if (Input::get('score90_24') != '') {
            $operater->chioce24_90 = Input::get('score90_24');
        }
        if (Input::get('score90_25') != '') {
            $operater->chioce25_90 = Input::get('score90_25');
        }
        if (Input::get('signa2') != '') {

            $operater->signa2 = Input::get('signa2');
        }
        if (Input::get('signa3') != '') {
            $operater->signa3 = Input::get('signa3');
        }
        if (Input::get('signa4') != '') {

            $operater->signa4 = Input::get('signa4');
        }
        if (Input::get('signa1_90') != '') {

            $operater->signa1_90 = Input::get('signa1_90');
        }
        if (Input::get('total_90') != '') {

            $operater->subtotal_90 = Input::get('total_90');
        }
        if (Input::get('rate_90') != '') {
            $operater->rate_90 = Input::get('rate_90');
        }
        if (Input::get('rate_all') != '') {
            $operater->subtotal_final = Input::get('rate_all');
        }
        if (Input::get('assessor2') != '') {
            $operater->comments_90 = Input::get('assessor2');
        }
        if (Input::get('experimental') != '') {
            $operater->experimental = Input::get('experimental');
        }
        if (Input::get('clsdate') != '') {
            $operater->experimental_date = Input::get('clsdate');
        }
        if (Input::get('full_time_worker') != '') {
            $operater->full_time_worker = Input::get('full_time_worker');
        }
        if (Input::get('dateinto') != '') {
            $operater->full_time_worker_date = Input::get('dateinto');
        }
        if (Input::get('full_time_worker_position') != '') {
            $operater->full_time_worker_position = Input::get('full_time_worker_position');
        }
        if (Input::get('modify') != '') {

            $operater->modify = Input::get('modify');
        }
        if (Input::get('modify_position1') != '') {
            $operater->modify_position1 = Input::get('modify_position1');
        }
        if (Input::get('modify_position2') != '') {
            $operater->modify_position2 = Input::get('modify_position2');
        }
        if (Input::get('modify_date') != '') {
            $operater->modify_date = Input::get('"modify_date');
        }
        if (Input::get('other_90') != '') {

            $operater->other_90 = Input::get('other_90');
        }
        if (Input::get('other_com_90') != '') {
            $operater->other_com_90 = Input::get('other_com_90');
        }
        if (Input::get('namerate_90') != '') {
            $operater->name_rate_90 = Input::get('namerate_90');
        }

        if (Input::get('staaff_one1') != '') {
            $operater->chioce_suitability1 = Input::get('staaff_one1');
        }
        if (Input::get('staaff_one2') != '') {
            $operater->chioce_suitability2 = Input::get('staaff_one2');
        }
        if (Input::get('staaff_one4') != '') {
            $operater->chioce_suitability3 = Input::get('staaff_one3');
        }
        if (Input::get('other_com_90') != '') {
            $operater->chioce_suitability4 = Input::get('staaff_one4');
        }
        if (Input::get('staaff_one5') != '') {
            $operater->chioce_suitability5 = Input::get('staaff_one5');
        }
        if (Input::get('staaff_one6') != '') {
            $operater->chioce_suitability6 = Input::get('staaff_one6');
        }
        if (Input::get('staaff_one7') != '') {
            $operater->chioce_suitability7 = Input::get('staaff_one7');
        }
        if (Input::get('staaff_one8') != '') {
            $operater->chioce_suitability8 = Input::get('staaff_one8');
        }
        if (Input::get('staaff_one9') != '') {
            $operater->chioce_suitability9 = Input::get('staaff_one9');
        }
        if (Input::get('staaff_one10') != '') {
            $operater->chioce_suitability10 = Input::get('staaff_one10');
        }
        if (Input::get('staaff_one50') != '') {
            $operater->chioce_suitability11 = Input::get('staaff_one50');
        }
        if (Input::get('staaff_one51') != '') {
            $operater->chioce_suitability12 = Input::get('staaff_one51');
        }
        if (Input::get('staaff_one52') != '') {
            $operater->chioce_suitability13 = Input::get('staaff_one52');
        }
        if (Input::get('staaff_one53') != '') {
            $operater->chioce_suitability14 = Input::get('staaff_one53');
        }
        if (Input::get('staaff_one54') != '') {
            $operater->chioce_suitability15 = Input::get('staaff_one54');
        }
        if (Input::get('staaff_one55') != '') {
            $operater->chioce_suitability16 = Input::get('staaff_one55');
        }
        if (Input::get('staaff_one56') != '') {
            $operater->chioce_suitability17 = Input::get('staaff_one56');
        }
        if (Input::get('staaff_one57') != '') {
            $operater->chioce_suitability18 = Input::get('staaff_one57');
        }
        if (Input::get('staaff_one58') != '') {
            $operater->chioce_suitability19 = Input::get('staaff_one58');
        }
        if (Input::get('staaff_one59') != '') {
            $operater->chioce_suitability20 = Input::get('staaff_one59');
        }
        if (Input::get('staaff_one100') != '') {
            $operater->chioce_suitability21 = Input::get('staaff_one100');
        }
        if (Input::get('staaff_one101') != '') {
            $operater->chioce_suitability22 = Input::get('staaff_one101');
        }
        if (Input::get('staaff_one102') != '') {
            $operater->chioce_suitability23 = Input::get('staaff_one102');
        }
        if (Input::get('staaff_one103') != '') {
            $operater->chioce_suitability24 = Input::get('staaff_one103');
        }
        if (Input::get('staaff_one104') != '') {
            $operater->chioce_suitability25 = Input::get('staaff_one104');
        }
        if (Input::get('staaff_one105') != '') {
            $operater->chioce_suitability26 = Input::get('staaff_one105');
        }
        if (Input::get('staaff_one106') != '') {
            $operater->chioce_suitability27 = Input::get('staaff_one106');
        }
        if (Input::get('staaff_one107') != '') {
            $operater->chioce_suitability28 = Input::get('staaff_one107');
        }
        if (Input::get('staaff_one108') != '') {
            $operater->chioce_suitability29 = Input::get('staaff_one108');
        }
        if (Input::get('staaff_one109') != '') {
            $operater->chioce_suitability30 = Input::get('staaff_one109');
        }

        if (Input::get('sum_chioce_suitability10') != '') {
            $operater->sum_chioce_suitability10 = Input::get('sum_chioce_suitability10');
        }
        if (Input::get('comment_suitability10') != '') {
            $operater->comment_suitability10 = Input::get('comment_suitability10');
        }
        if (Input::get('ok_suitability') != '') {
            $operater->ok_suitability = Input::get('ok_suitability');
        }
        if (Input::get('other_suitability') != '') {
            $operater->other_suitability = Input::get('other_suitability');
        }
        if (Input::get('other_com_suitability') != '') {
            $operater->other_com_suitability = Input::get('other_com_suitability');
        }
        if (Input::get('namerate_suitability') != '') {
            $operater->namerate_suitability = Input::get('namerate_suitability');
        }
        if (Input::get('conclusions') != '') {
            $operater->conclusions = Input::get('conclusions');
        }
        if (Input::get('results_manager') != '') {
            $operater->results_manager = Input::get('results_manager');
        }
        if (Input::get('human_resource_ok') != '') {
            $operater->human_resource_ok = Input::get('human_resource_ok');
        }
        if (Input::get('human_resource_modi') != '') {
            $operater->human_resource_modi = Input::get('human_resource_modi');
        }
        if (Input::get('human_resource_commo') != '') {
            $operater->human_resource_commo = Input::get('human_resource_commo');
        }
        if (Input::get('human_resource_nodi') != '') {
            $operater->human_resource_nodi = Input::get('human_resource_nodi');
        }
        if (Input::get('human_resource_comno') != '') {
            $operater->human_resource_comno = Input::get('human_resource_comno');
        }
        if (Input::get('human_resource_adjust') != '') {
            $operater->human_resource_adjust = Input::get('human_resource_adjust');
        }
        if (Input::get('human_resource_posi') != '') {
            $operater->human_resource_posi = Input::get('human_resource_posi');
        }
        if (Input::get('human_resource_fail') != '') {
            $operater->human_resource_fail = Input::get('human_resource_fail');
        }
        if (Input::get('human_resource_date') != '') {
            $operater->human_resource_date = Input::get('human_resource_date');
        }
        if (Input::get('human_resource_other') != '') {
            $operater->human_resource_other = Input::get('human_resource_other');
        }
        if (Input::get('human_resource_othercom') != '') {
            $operater->human_resource_othercom = Input::get('human_resource_othercom');
        }
        if (Input::get('human_resource_nre') != '') {
            $operater->human_resource_nre = Input::get('human_resource_nre');
        }
        if (Input::get('manager_resource_ok') != '') {
            $operater->manager_resource_ok = Input::get('manager_resource_ok');
        }
        if (Input::get('manager_resource_modi') != '') {
            $operater->manager_resource_modi = Input::get('manager_resource_modi');
        }
        if (Input::get('manager_resource_comdi') != '') {
            $operater->manager_resource_comdi = Input::get('manager_resource_comdi');
        }
        if (Input::get('manager_resource_nodi') != '') {
            $operater->manager_resource_nodi = Input::get('manager_resource_nodi');
        }
        if (Input::get('manager_resource_comno') != '') {
            $operater->manager_resource_comno = Input::get('manager_resource_comno');
        }
        if (Input::get('manager_resource_adjust') != '') {
            $operater->manager_resource_adjust = Input::get('manager_resource_adjust');
        }
        if (Input::get('manager_resource_posi') != '') {
            $operater->manager_resource_posi = Input::get('manager_resource_posi');
        }
        if (Input::get('manager_resource_fail') != '') {
            $operater->manager_resource_fail = Input::get('manager_resource_fail');
        }
        if (Input::get('manager_resource_date') != '') {
            $operater->manager_resource_date = Input::get('manager_resource_date');
        }
        if (Input::get('manager_resource_other') != '') {
            $operater->manager_resource_other = Input::get('manager_resource_other');
        }
        if (Input::get('manager_resource_othercom') != '') {
            $operater->manager_resource_othercom = Input::get('manager_resource_othercom');
        }
        if (Input::get('manager_resource_nre') != '') {
            $operater->manager_resource_nre = Input::get('manager_resource_nre');
        }

        if (Input::get('startrate_90') != '') {
            $operater->startwork_90 = Input::get('startrate_90');
        }
        if (Input::get('endrate_90') != '') {
            $operater->endtwork_90 = Input::get('endrate_90');
        }
        if (Input::get('sick_90') != '') {
            $operater->sick_leave_90 = Input::get('sick_90');
        }
        if (Input::get('errand_90') != '') {
            $operater->errand_leave_90 = Input::get('errand_90');
        }
        if (Input::get('absence_90') != '') {
            $operater->absence_90 = Input::get('absence_90');
        }
        if (Input::get('vacation_90') != '') {
            $operater->vacation_90 = Input::get('vacation_90');
        }
        if (Input::get('line_90') != '') {
            $operater->line_terms_90 = Input::get('line_90');
        }
        if (Input::get('min_90') != '') {
            $operater->line_min_90 = Input::get('min_90');
        }
        if (Input::get('NumberDate_90') != '') {
            $operater->NumberDate_90 = Input::get('NumberDate_90');
        }

        if (Input::get('date60T') != '') {
            $operater->date60T = Input::get('date60T');
        }
        if (Input::get('date90T') != '') {
            $operater->date90T = Input::get('date90T');
        }
        if (Input::get('dateS') != '') {
            $operater->dateS = Input::get('dateS');
        }
        if (Input::get('dateM') != '') {
            $operater->dateM = Input::get('dateM');
        }
        if (Input::get('dateL') != '') {
            $operater->dateL = Input::get('dateL');
        }





        $operater->save();
        Session::flash('flash_message', 'บันทึกเรียบร้อย!!');
        if(Input::get('signa1_60') != '' || Input::get('signa1_90') != '' || Input::get('signa2') != '' 
        || Input::get('signa3') != '' || Input::get('signa4') != ''
        
        ){
            return redirect('/');
           
        } else{

            return redirect('Operate');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operate = Operate::find($id);
        $operate->delete();
        Session::flash('flash_message', 'ลบสำเร็จ!!');
        return redirect('Operate');
    }
}
