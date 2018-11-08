@extends('layouts.main')
@section('content')
 <style type="text/css">
    th{
      font-size: 18px;
      background-color: #ffbcbc;
        color: black;
        text-align: center;
    }
    td{
      font-size: 18px;
      text-align: center;
    }
    p{
      color: red;
    }
    div.box-header{
      text-align: center;
      font-size:35px;
    }
  </style>
<div class="content-wrapper">
  <div class="content container">
    <div class="row">
      <div class="col-md-12">
            {{Form::open(['url'=>'nggemployee'])}}
            @csrf
          <br><br>
        <div class="box">
          <div class="box-header" style="text-align: center;">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" >
             <div class="row">    
                           
                 <div class="col-md-6"> 
                        <div class="form-group label-floating">
                                <label class="control-label">รหัสพนักงาน</label>
                                 {{Form::text('code','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                   <div class="col-md-6"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">เลขบัตรประจำตัวประชาชน</label>
                            {{Form::text('idcard','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                            
        </div>
            <div class="row">    
                           
                   <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">คำนำหน้าชื่อ(ภาษาไทย)</label>
                                   {{ Form::select('thai_title_tname', [''=>'เลือก'  ,'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว','ว่าที่ร้อยตรี'=> 'ว่าที่ร้อยตรี'],null, ['class' => 'form-control','required']) }}
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">ชื่อ(ภาษาไทย)</label>
                            {{Form::text('thai_name','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">นามสกุล(ภาษาไทย)</label>
                    {{Form::text('thai_lastname','',['class'=>'form-control','required'])}} 
                        </div> 
                </div> 

                 <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">ชื่อเล่น</label>
                    {{Form::text('nickname','',['class'=>'form-control','required'])}} 
                        </div> 
                </div>      
        </div>
<br>
        <div class="form-group">     
        <div class="row">
                        <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                   {{ Form::select('eng_title_tname', [''=>'เลือก'  ,'Mr.' => 'Mr.','Miss.' => 'Miss.','Mrs.'=> 'Mrs.','Acting Sub Lt.'=> 'Acting Sub Lt.'],null, ['class' => 'form-control','required']) }}
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">ชื่อ(ภาษาอังกฤษ)</label>
                            {{Form::text('eng_name','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">นามสกุล(ภาษาอังกฤษ)</label>
                    {{Form::text('eng_lastname','',['class'=>'form-control','required'])}} 
                        </div> 
                </div> 
                <div class="col-md-3 ">
                 <div class="form-group label-floating">
                                <label class="control-label">วันเกิด</label>
                        {{Form::date('birthday','',['class'=>'form-control','required'])}}   
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
                                  <select name="company" class="js-example-basic-single form-control">
                                    <option value='เลือก'>เลือก</option>
                                    @foreach($ngg_company as $company)
                                    <option value={{$company->ncp_id}}>{{$company->ncp_name}}</option>
                                    @endforeach
                                  </select>
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">Department</label>
                            <select name="department" class="js-example-basic-single form-control">
                                    <option value='เลือก'>เลือก</option>
                                      @foreach($ngg_department as $department)
                                    <option value={{ $department->ndp_id}}>{{$department->ndp_name}}</option>
                                      @endforeach
                                  </select>
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">Position</label>
                                  <select name="position" class="js-example-basic-single form-control">
                                    <option value='เลือก'>เลือก</option>
                                    @foreach($ngg_position as $position)
                                    <option value={{$position->id}}>{{$position->nps_name}}</option>
                                      @endforeach
                                  </select> 
                        </div> 
                </div> 

                 <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">Level</label>
                                  <select name="level" class="js-example-basic-single form-control">
                                    <option value='เลือก'>เลือก</option>
                                    @foreach($ngg_level as $level)
                                    <option value={{$level->nlv_id}}>{{$level->nlv_name}}</option>
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
                              <select name="sector" class="js-example-basic-single  form-control">
                                <option value='เลือก'>เลือก</option>
                                    @foreach($ngg_sector as $sector)
                                    <option value={{$sector->nst_id}}>{{$sector->nst_name}}</option>
                                      @endforeach
                                  </select>
                        </div> 
                </div>  
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">เงินเดือน</label>
                           {{Form::text('salary','',['class'=>'form-control','required'])}}    
                        </div> 
                </div>
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">เพศ</label>
                              {{ Form::select('sex', [ '' =>'เลือก', 'ชาย' => 'ชาย', 'หญิง' => 'หญิง'],null, ['class' => 'form-control','required'])
                            }}
                        </div> 
                </div>
                <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">วุฒิการศึกษา</label>
                               <textarea class="form-control" value='' style="resize: none;" name='enducation' ></textarea>
                        </div> 
                </div>      
        </div>
  </div>

      <div class="form-group">
          <div class="row">
            <div class="col-md-12"> 
              <label class="control-label">เพิ่มเติม</label>
               <textarea class="form-control" style="resize: none;" name='remark'></textarea>
            </div> 
          </div>
      </div>
        </div>
      </div>
       {{ Html::link('nggemployee','Back',array('class ' => 'btn btn-primary')) }}
      {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
                                      {{ Form::close()}} 
    </div>
  </div>
</div>
@endsection