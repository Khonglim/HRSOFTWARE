@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="content container">
    <div class="row">
      <div class="col-md-12">
          {{Form::open(['route'=>['nggemployee.update',$idd],'method'=>'PUT','files' => true])}}
          @csrf
          <br><br>
                  @foreach($ngg_employee as $ngg_empl)
                  <?php $code = $ngg_empl->nem_code;
                        $idcard = $ngg_empl->nem_id_card;
                        $title_tname = $ngg_empl->nem_thai_title;
                        $thai_name = $ngg_empl->nem_thai_firstname;
                        $thai_lastname = $ngg_empl->nem_thai_lastname;
                        $nickname = $ngg_empl->nem_nickname;
                        $eng_title = $ngg_empl->nem_eng_title;
                        $eng_name = $ngg_empl->nem_eng_firstname;
                        $eng_lastname = $ngg_empl->nem_eng_lastname;
                        $birthday = $ngg_empl->nem_birthday;
                        $company1 = $ngg_empl->nem_company_id;
                        $department1 = $ngg_empl->nem_department_id;
                        $position1 = $ngg_empl->nem_position_id;
                        $level1 = $ngg_empl->nem_level_id;
                        $sector1 = $ngg_empl->nem_sector_id;
                        $remark1 = $ngg_empl->nem_remark;
                        $salary  = $ngg_empl->nem_salary;
                        $sex  = $ngg_empl->nem_sex;
                        $enducation   = $ngg_empl->nem_education;


                        $nationality = $ngg_empl->nem_nationality;
                        $age = $ngg_empl->nem_age;
                        $datestart = $ngg_empl->nem_datestart;
                        $packingdate = $ngg_empl->nem_packingdate;
                        $workplace = $ngg_empl->nem_workplace;
                        $duration1 = $ngg_empl->nem_duration1;
                        $duration2 = $ngg_empl->nem_duration2;
                        $duration3 = $ngg_empl->nem_duration3;
                        $address1 = $ngg_empl->nem_address1;
                        $address2 = $ngg_empl->nem_address2;
                  ?>
                @endforeach

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">    
                           
                   <div class="col-md-6"> 
                        <div class="form-group label-floating">
                                <label class="control-label">รหัสพนักงาน</label>
                                 {{Form::text('code',$code,['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                        <div class="col-md-6"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">เลขบัตรประจำตัวประชาชน</label>
                            {{Form::text('idcard',$idcard,['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                            
        </div>
         <br>
            <div class="row">    
                           
                   <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">คำนำหน้าชื่อ(ภาษาไทย)</label>
                                   {{ Form::select('thai_title_tname', [$title_tname => $title_tname  ,'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว'],null, ['class' => 'form-control','required']) }}

                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">ชื่อ(ภาษาไทย)</label>
                            {{Form::text('thai_name',$thai_name,['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">นามสกุล(ภาษาไทย)</label>
                    {{Form::text('thai_lastname',$thai_lastname,['class'=>'form-control','required'])}} 
                        </div> 
                </div> 

                 <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">ชื่อเล่น</label>
                    {{Form::text('nickname',$nickname,['class'=>'form-control','required'])}} 
                        </div> 
                </div>      
        </div>
<br>
        <div class="form-group">     
        <div class="row">
                        <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                   {{ Form::select('eng_title_tname', [ $eng_title => $eng_title  ,'Mr.' => 'Mr.','Miss.' => 'Miss.','Mrs.'=> 'Mrs.'],null, ['class' => 'form-control','required']) }}
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">ชื่อ(ภาษาอังกฤษ)</label>
                            {{Form::text('eng_name',$eng_name,['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">นามสกุล(ภาษาอังกฤษ)</label>
                    {{Form::text('eng_lastname',$eng_lastname,['class'=>'form-control','required'])}} 
                        </div> 
                </div> 
                <div class="col-md-3 ">
                 <div class="form-group label-floating">
                                <label class="control-label">วันเกิด</label>
                        {{Form::date('birthday',$birthday,['class'=>'form-control','required'])}}   
                         </div>
                        </div>
                        
         </div>
          </div>
          <br>
          <div class="form-group">     
        <div class="row"> 
                          <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">อายุ</label>
                            {{Form::text('age',$age,['class'=>'form-control','required'])}}
                        </div>  
                </div> 
                        <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">duration1</label>
                                  @if($duration1 == 'FALSE')
                                <?php $duration3 = '-';?>
                                @endif
                                   {{Form::text('duration1',$duration1,['class'=>'form-control','required'])}} 
                        </div>  
                </div>  
                        
                        <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">duration2</label>
                         @if($duration2 == 'FALSE')
                                <?php $duration3 = '-';?>
                                @endif
                    {{Form::text('duration2',$duration2,['class'=>'form-control','required'])}} 
                        </div> 
                </div> 
                <div class="col-md-3 ">
                 <div class="form-group label-floating">
                                <label class="control-label">duration3</label>
                                @if($duration3 == 'FALSE')
                                <?php $duration3 = '-';?>
                                @endif
                                 
                        {{Form::text('duration3',$duration3,['class'=>'form-control','required'])}}   
                         </div>
                        </div>
                        
         </div>
          </div>
          <br>
          <div class="form-group">     
        <div class="row"> 
                          <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">อายุ</label>
                            {{Form::text('eng_name',$age,['class'=>'form-control','required'])}}
                        </div>  
                </div> 
                        <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">duration1</label>
                                   {{Form::date('duration1',$duration1,['class'=>'form-control','required'])}} 
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">duration2</label>
                    {{Form::text('duration2',$duration2,['class'=>'form-control','required'])}} 
                        </div> 
                </div> 
                <div class="col-md-3 ">
                 <div class="form-group label-floating">
                                <label class="control-label">duration3</label>
                        {{Form::text('duration3',$duration3,['class'=>'form-control','required'])}}   
                         </div>
                        </div>
                        
         </div>
          </div>
          <br>
          <div class="form-group"> 
          <div class="row">             

                   <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">Company</label>
                                  <select name="company" class=" form-control">

                                    @foreach($ngg_company as $company)
                                      @if($company->ncp_id == $company1)
                                    <option value={{$company->ncp_id}} selected="true">{{$company->ncp_name}}</option>
                                      @else
                                    <option value={{$company->ncp_id}}>{{$company->ncp_name}}</option>
                                      @endif
                                    @endforeach
                                  </select>
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">Department</label>
                            <select name="department" class=" form-control">
                                      @foreach($ngg_department as $department)
                                        @if($department->ndp_id == $department1 )
                                        <option value={{ $department->ndp_id}} selected="true">{{$department->ndp_name}}</option>
                                        @else
                                        <option value={{ $department->ndp_id}}>{{$department->ndp_name}}</option>
                                        @endif
                                      @endforeach
                                  </select>
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">Position</label>
                                  <select name="position" class=" form-control">
                                    @foreach($ngg_position as $position)
                                      @if( $position->id == $position1)
                                      <option value={{$position->id}} selected="true">{{$position->nps_name}}</option>
                                      @else
                                      <option value={{$position->id}}>{{$position->nps_name}}</option>
                                      @endif
                                    @endforeach
                                  </select> 
                        </div> 
                </div> 

                 <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">Level</label>
                                  <select name="level" class=" form-control">
                                    @foreach($ngg_level as $level)
                                      @if($level->nlv_id == $level1)
                                      <option value={{$level->nlv_id}} selected="true">{{$level->nlv_name}}</option>
                                      @else
                                      <option value={{$level->nlv_id}}>{{$level->nlv_name}}</option>
                                      @endif
                                    @endforeach
                                  </select> 
                        </div> 
                </div>
        </div>
  </div>
  <br>
  <div class="row">
    <div class="form-group"> 
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">Sector</label>
                              <select name="sector" class=" form-control">
                                    @foreach($ngg_sector as $sector)
                                      @if($sector->nst_id == $sector1)
                                       <option value={{$sector->nst_id}} selected="true">{{$sector->nst_name}}</option>
                                      @else
                                       <option value={{$sector->nst_id}}>{{$sector->nst_name}}</option>
                                      @endif
                                   
                                    @endforeach
                                  </select>
                        </div> 
                </div>
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">เงินเดือน</label>
                           {{Form::text('salary',$salary,['class'=>'form-control','required'])}}    
                        </div> 
                </div>
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">เพศ</label>
                              <select name="sex" class=" form-control">
                                @if($sex =='ชาย')
                                  <option value="ชาย" selected="true">ชาย</option>
                                  <option value="หญิง">หญิง</option>
                                @else
                                 <option value="ชาย">ชาย</option>
                                  <option value="หญิง"selected="true">หญิง</option>
                                @endif
                              </select> 
                        </div> 
                </div>
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">วุฒิการศึกษา</label>
                               <textarea class="form-control" style="resize: none;" name='enducation' >{{$enducation}}</textarea>
                        </div> 
                </div>      
        </div>
  </div>

   <div class="form-group">
          <div class="row">
            <div class="col-md-12"> 
              <label class="control-label">เพิ่มเติม</label>
               <textarea class="form-control" value={{$remark1}} style="resize: none;" name='remark' ></textarea>
            </div> 
          </div>
      </div>
           </div>
    </div>   
          <div class="row">
      <div class="col-md-6">
        
        {{ Html::link('nggemployee','Back',array('class ' => 'btn btn-primary')) }}
        {{ Form::submit('Seve',['class'=> 'btn btn-success'])}}
        {{Form::close()}}
    </div>
   
  </div>
        </div>
      </div>
    
 
</div>
    

@endsection