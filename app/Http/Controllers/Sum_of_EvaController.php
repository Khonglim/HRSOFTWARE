<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sum_of_eva;
use App\Ngg_evaluate_resultv2;
use App\Ngg_evaresult_commentv2;
use App\Extensions\MongoSessionStore;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Input;

class Sum_of_EvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum_of_eva = Sum_of_eva::all();
        $data = array(
            'sum_of_eva' => $sum_of_eva,
           
        );   
        return view('SumOfEva/sumindex',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                if (Input::get('form') == 'leader') {

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_1');
        $sum_of_eva->soe_point = Input::get('point_1');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_2');
        $sum_of_eva->soe_point = Input::get('point_2');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_3');
        $sum_of_eva->soe_point = Input::get('point_3');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_4');
        $sum_of_eva->soe_point = Input::get('point_4');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_5');
        $sum_of_eva->soe_point = Input::get('point_5');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_6');
        $sum_of_eva->soe_point = Input::get('point_6');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_7');
        $sum_of_eva->soe_point = Input::get('point_7');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_8');
        $sum_of_eva->soe_point = Input::get('point_8');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_9');
        $sum_of_eva->soe_point = Input::get('point_9');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_10');
        $sum_of_eva->soe_point = Input::get('point_10');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();
        }
                elseif (Input::get('form') == 'officer') {
        $sum_of_eva->soe_point = Input::get('point_2');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_3');
        $sum_of_eva->soe_point = Input::get('point_3');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_4');
        $sum_of_eva->soe_point = Input::get('point_4');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_5');
        $sum_of_eva->soe_point = Input::get('point_5');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();
        }
                elseif (Input::get('form') == 'manager') {
        $sum_of_eva->soe_point = Input::get('point_2');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_3');
        $sum_of_eva->soe_point = Input::get('point_3');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_4');
        $sum_of_eva->soe_point = Input::get('point_4');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();

        $sum_of_eva =  new Sum_of_eva;
        $sum_of_eva->soe_name_is_employee = Input::get('name_is_employee');
        $sum_of_eva->soe_name_by_employee = Input::get('name_by_employee_5');
        $sum_of_eva->soe_point = Input::get('point_5');
        $sum_of_eva->soe_form = Input::get('form'); 
        $sum_of_eva->save();
        }
       
         Session::flash('flash_message','สำเร็จ!!');
        return redirect("storeExcel");
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
        //
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
