@extends('layouts.newmain')
@section('content')
  
    <div class="content container-fluid">

            {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}}

            <div class="tabs-wrapper">
                    <ul class="nav nav-tabs row" role="tablist">
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ประวัติส่วนตัว</a></li>
              <li role="presentation"><a href="#edu" aria-controls="edu" role="tab" data-toggle="tab">ประวัติการศึกษา</a></li>
              <li role="presentation"><a href="#lang" aria-controls="lang" role="tab" data-toggle="tab">ภาษา</a></li>
              <li role="presentation"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">ประวัติการทำงาน</a></li>
              <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">อื่นๆ</a></li>
            </ul>
            </div>
          
<!--- เนื้อหา------------------->

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="profile">
                    <h2 class="text-center"><i class="glyphicon glyphicon-user"></i></h2>
                <div class="row">
                    <div class="col-md-1"></div>
                  <div class="col-md-4">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">ชื่อ *</label> 
                                {{Form::text('name','',['class'=>'form-control'])}}          
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-3">
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                <label>นามสกุล *</label> 
                                {{Form::text('lastname','',['class'=>'form-control'])}}   
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            </div>
                  </div>
                  <div class="col-md-2">
                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" >
                                <label>รูปภาพ *</label>
                                {{Form::file('image')}}
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            </div>
                  </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-4">
                                <div class="form-group {{ $errors->has('nikname') ? 'has-error' : '' }}">
                                        <label>ชื่อเล่น *</label> 
                                        {{Form::text('nikname','',['class'=>'form-control'])}}   
                                        <span class="text-danger">{{ $errors->first('nikname') }}</span>
                                    </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                                <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                                        <label>วันเกิด *</label>
                                        {{Form::date('birthday','',['class'=>'form-control'])}}   
                                        <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                    </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}" >
                                <label>อายุ *</label>
                                {{Form::text('age','',['class'=>'form-control'])}}   
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                <label>เพศ *</label> &nbsp;&nbsp;
                                {{ Form::radio('gender', 'ชาย') }}  ชาย <br> &emsp;&emsp;&emsp;
                                {{ Form::radio('gender', 'หญิง') }} หญิง 
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}" >
                                <label>น้ำหนัก *</label>
                                {{Form::text('weight','',['class'=>'form-control'])}}   
                                <span class="text-danger">{{ $errors->first('weight') }}</span>
                            </div>
                        <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}" >
                                <label>ส่วนสูง *</label>
                                {{Form::text('height','',['class'=>'form-control'])}}   
                                <span class="text-danger">{{ $errors->first('height') }}</span>
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                        <div class="col-md-12">
                            -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
                            <label>สัญชาติ *</label>
                            {{ Form::select('nationality', ['ไทย' => 'ไทย','คริสต์' => 'คริสต์','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('race') ? 'has-error' : '' }}" >
                            <label>เชื้อชาติ *</label>
                            {{ Form::select('race', ['ไทย' => 'ไทย','คริสต์' => 'คริสต์','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('race') }}</span>
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('religion') ? 'has-error' : '' }}" >
                            <label>ศาสนา *</label>  
                            {{ Form::select('religion', ['ไทย' => 'ไทย','พุทธ' => 'พุทธ','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>พี่น้องกี่คน</label>
                            {{Form::text('brothers','',['class'=>'form-control'])}}     
                            </div> 
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เป็นคนที่</label>
                            {{Form::text('number','',['class'=>'form-control'])}}  
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                        <div class="col-md-12">
                            -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('idcard') ? 'has-error' : '' }}">
                            <label>เลขบัตรประชาชน*</label>
                            {{Form::text('idcard','',['class'=>'form-control'])}}   
                            <span class="text-danger">{{ $errors->first('idcard') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <div class="from-group">
                            <label >ออกให้ ณ อำเภอ/เขต:*</label>
                            {{ Form::select('issued', [ '' => '::เลือก::','อำเภอ/เขต' =>$sub],null, ['class' => 'form-control','id'=>'issued']) }}          
                            <span class="text-danger">{{ $errors->first('province_crad') }}</span> 
                            <span class="text-danger">{{ $errors->first('issued') }}</span>
                            </div>  
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('province_crad') ? 'has-error' : '' }}" >
                            <label >จังหวัด*</label>         
                            {{ Form::select('province_crad', [ '' => '::เลือก::','กรุณาเลือกจังหวัด' =>$items],null, ['class' => 'form-control','id'=>'province_crad']) }}          
                            <span class="text-danger">{{ $errors->first('province_crad') }}</span>
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('issueddate') ? 'has-error' : '' }}" >
                            <label >วันออกบัตร:*</label>
                            {{Form::date('issueddate','',['class'=>'form-control'])}}   
                            <span class="text-danger">{{ $errors->first('issueddate') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('expid') ? 'has-error' : '' }}" >
                            <label >บัตรหมดอายุ:*</label>
                            {{Form::date('expid','',['class'=>'form-control'])}}   
                            <span class="text-danger">{{ $errors->first('expid') }}</span>
                            </div>
                    </div>
                    </div> 
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >บัตรประจำตัวผู้เสียภาษี</label>
                            {{Form::text('texid','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('military_service') ? 'has-error' : '' }}" >
                            <label > สถานะทางทหาร*</label>
                                {{ Form::select('military_service', ['-' =>'::ไม่มี::','ได้รับการยกเว้น' => 'ได้รับการยกเว้น','ศึกษาวิชาทหาร' => 'ศึกษาวิชาทหาร','ผ่านการเกณฑ์ทหาร' => 'ผ่านการเกณฑ์ทหาร'],null, ['class' => 'form-control']) }}
                            <span class="text-danger">{{ $errors->first('military_service') }}</span>
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address1') ? 'has-error' : '' }}" >
                            <label>ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก *</label>
                                <textarea name="address1"  class="form-control"  rows="3" >{{ old('address1') }}</textarea>
                                <span class="text-danger">{{ $errors->first('address1') }}</span>
                            </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('address2') ? 'has-error' : '' }}" >
                            <label > ที่อยู่ตามบัตรประชาชน *</label>
                                <textarea name="address2" class="form-control"  rows="3" >{{ old('address2') }}</textarea>
                                <span class="text-danger">{{ $errors->first('address2') }}</span>
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group  {{ $errors->has('tel') ? 'has-error' : '' }}">
                            <label >โทรศัพท์ที่ติดต่อ:*</label>
                                {{Form::text('tel','',['class'=>'form-control'])}}   
                                <span class="text-danger">{{ $errors->first('tel') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >โทรศัพท์บ้าน:*</label>
                            {{Form::text('home','',['class'=>'form-control'])}} 
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('moblie') ? 'has-error' : '' }}">
                            <label >โทรศัพท์มือถือ:*</label>
                            {{Form::text('moblie','',['class'=>'form-control'])}}   
                            <span class="text-danger">{{ $errors->first('moblie') }} </span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                            <div class="form-group">
                                <label >โทรศัพท์สำนักงาน</label>
                                {{Form::text('office','',['class'=>'form-control'])}}   
                                </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label>อีเมล:*</label>
                            {{Form::email('email','',['class'=>'form-control'])}}   
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('living_status') ? 'has-error' : '' }}" >
                            <label >สถานะความเป็นอยู่:*</label>
                                {{ Form::select('living_status', ['' => '::เลือก::', 
                                                            'บ้านส่วนตัว' => 'บ้านส่วนตัว',
                                                            'บ้านเช่า' => 'บ้านเช่า',
                                                            'อาศัยกับบิดามารดา'=> 'อาศัยกับบิดามารดา',
                                                            'อาศัยกับผู้อื่น'=>'อาศัยกับผู้อื่น'
                                                ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('living_status') }}</span>
                            </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('marital_status') ? 'has-error' : '' }}" >
                            <label >สถานะครอบครัว</label>
                                {{ Form::select('marital_status', [
                                                            '' => '::เลือก::', 
                                                            'โสด' => 'โสด',
                                                            'สมรส' => 'สมรส',
                                                            'หย่า'=> 'หย่า',
                                                            'หม้าย'=>'หม้าย',
                                                            'แยกกันอยู่'=>'แยกกันอยู่'
                                                ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('marital_status') }}</span>        
                                </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label >กรณีแต่งงาน</label>
                                {{ Form::select('if_marricd', ['' =>'::เลือก::','จดทะเบียนสมรส' => 'จดทะเบียนสมรส','ไม่ได้จดทะเบียนสมรส' => 'ไม่ได้จดทะเบียนสมรส'],null, ['class' => 'form-control']) }}
                            </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label >คู่มสมรส</label>
                                {{ Form::select('spouse', ['' =>'::เลือก::','มี' => 'มี','ไม่มี' => 'ไม่มี'],null, ['class' => 'form-control']) }}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >ชื่อคู่สมรส</label>
                            {{Form::text('name_spouse','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >อาชีพคู่สมรส</label>
                            {{Form::text('spouse_occupation','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > สถานที่ทำงาน</label>
                            {{Form::text('firm_address','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label >โทรศัพท์</label>
                            {{Form::text('spouse_tel','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >จำนวนบุตรทั้งหมด</label>
                            {{Form::text('children','',['class'=>'form-control'])}}   
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                            <div class="form-group">
                                <label >หญิง :</label>
                                {{Form::text('girls','',['class'=>'form-control'])}}   
                                </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label >ชาย :</label>
                                {{Form::text('boy','',['class'=>'form-control'])}}   
                                </div>
                        </div>
                    
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > จำนวนบุตรกำลังศึกษา</label>
                            {{Form::text('school','',['class'=>'form-control'])}}      
                            </div>
                    </div>        
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>จำนวนบุตรที่อายุเกิน21ปี</label>
                            {{Form::text('over21','',['class'=>'form-control'])}}                                    
                            </div>
                    </div>
                    </div> <br>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div> <br>     
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('namefather') ? 'has-error' : '' }}" >
                            <label> ชื่อบิดา :*</label>
                            {{Form::text('namefather','',['class'=>'form-control'])}}                                    
                            <span class="text-danger">{{ $errors->first('namefather') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('lastfather') ? 'has-error' : '' }}">
                            <label >นามสกุล :*</label>
                            {{Form::text('lastfather','',['class'=>'form-control'])}}                                      
                            <span class="text-danger">{{ $errors->first('lastfather') }}</span>
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('occupation_father') ? 'has-error' : '' }}" >
                            <label >อาชีพ :*</label>
                            {{Form::text('occupation_father','',['class'=>'form-control'])}}                                      
                            <span class="text-danger">{{ $errors->first('occupation_father') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('alivef') ? 'has-error' : '' }}" > <br>
                            {{ Form::radio('alivef', 'ยังมีชีวิตอยู่') }}ยังมีชีวิตอยู่ &emsp;   
                            {{ Form::radio('alivef', 'ยังมีชีวิตอยู่') }}ถึงแก่กรรม                                   
                            <span class="text-danger">{{ $errors->first('alivef') }}</span>
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('namemother') ? 'has-error' : '' }}" >
                            <label > ชื่อมารดา :*</label>
                            {{Form::text('namemother','',['class'=>'form-control'])}}                                     
                            <span class="text-danger">{{ $errors->first('namemother') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group {{ $errors->has('lasrmother') ? 'has-error' : '' }}" >
                            <label >นามสกุล :*</label>
                            {{Form::text('lasrmother','',['class'=>'form-control'])}}                                      
                            <span class="text-danger">{{ $errors->first('lasrmother') }}</span>
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('occupationm') ? 'has-error' : '' }}" >
                            <label>อาชีพ :*</label>
                            {{Form::text('occupationm','',['class'=>'form-control'])}}                                      
                            <span class="text-danger">{{ $errors->first('occupationm') }}</span>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class= "col-md-3">
                        <div class="form-group {{ $errors->has('alivem') ? 'has-error' : '' }}" > <br>
                            {{ Form::radio('alivem', 'ยังมีชีวิตอยู่') }}ยังมีชีวิตอยู่ &emsp;       
                            {{ Form::radio('alivem', 'ยังมีชีวิตอยู่') }}ถึงแก่กรรม
                            <span class="text-danger">{{ $errors->first('alivem') }}</span>
                            </div>
                    </div>
                    </div>
    
                <div class="form-group" align=right>
                        <a href="#edu" class="btn btn-primary btn btn-next" data-toggle="tab" onclick="Submit()">ถัดไป</a>
                    </div>
        <!--แท๊กปิด profile-->
            </div>
        <!-- end of profile -->

            <div role="tabpanel" class="tab-pane" id="edu">
                    <h2 class="text-center"><i class="glyphicon glyphicon-education"></i></h2>
                <div class="row"><h4><label>ประถมศึกษา</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('primary','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year1','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year2','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                                <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpa','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                            {{Form::text('major','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                                {{Form::text('degree1','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>มัธยมศึกษา</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('secondary','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year3','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year4','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpas','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                                {{Form::text('majors','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                                {{Form::text('degree2','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>อาชีวะศึกษา</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('vocation','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year5','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year6','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpav','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                                {{Form::text('majorv','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                                {{Form::text('degree3','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>อนุปริญญา</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('diploma','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year7','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year8','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpad','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                            {{Form::text('majord','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                            {{Form::text('degree4','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>ปริญญาตรี</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('bachelor','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year9','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year10','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpab','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                                {{Form::text('majorb','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                                {{Form::text('degree5','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>ปริญญาโท</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('master','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year11','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year12','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>เกรดเฉลี่ย :</label>
                                    {{Form::text('gpam','',['class'=>'form-control'])}}
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>สาขา :</label>
                                    {{Form::text('majorm','',['class'=>'form-control'])}}
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>วุฒิที่ได้รับ :</label>
                                    {{Form::text('degree6','',['class'=>'form-control'])}}
                                </div>
                        </div>
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row"><h4><label>อื่นๆ</label></h4></div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ชื่อสถาบัน :</label>
                                {{Form::text('otherE','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>เริ่มปีการศึกษา :</label>
                                {{Form::text('year13','',['class'=>'form-control'])}}
                            <label>จบปีการศึกษา :</label>
                                {{Form::text('year14','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>เกรดเฉลี่ย :</label>
                                {{Form::text('gpao','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>สาขา :</label>
                                {{Form::text('majoro','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>วุฒิที่ได้รับ :</label>
                                {{Form::text('degree7','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
            <div class="form-group" align=right>
                <a href="#lang" class="btn btn-primary btn btn-next" data-toggle="tab">ถัดไป</a> 
                </div>
                    
        <!--แท๊กปิด EDU-->            
            </div>
        <!--enf of edu-->

            <div role="tabpanel" class="tab-pane" id="lang">
                    <h2 class="text-center"><i class="glyphicon glyphicon-globe"></i></h2>
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>ประเภทภาษา</th>
                                <th>การพูด</th>
                                <th>การเข้าใจ</th>
                                <th>การเขียน</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>ไทย *</td>
                                <td>
                                        <div class="form-group {{ $errors->has('thais') ? 'has-error' : '' }}">
                                            {{ Form::select('thais', [
                                                    '' =>'::เลือก::', 
                                                    'ดี' => 'ดี',
                                                    'พอใช้' => 'พอใช้',
                                                    'ไม่ดี' => 'ไม่ดี'
                                               ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('thais') }}</span>
                                    </div>
                                    </td>
                                <td>
                                    <div class="form-group {{ $errors->has('thail') ? 'has-error' : '' }}">
                                            {{ Form::select('thail', [
                                                    '' =>'::เลือก::', 
                                                    'ดี' => 'ดี',
                                                    'พอใช้' => 'พอใช้',
                                                    'ไม่ดี' => 'ไม่ดี'
                                               ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('thail') }}</span>
                                    </div>
                                    </td>
                                <td>
                                    <div class="form-group {{ $errors->has('thair') ? 'has-error' : '' }}">
                                            {{ Form::select('thair', [
                                            '' =>'::เลือก::', 
                                            'ดี' => 'ดี',
                                            'พอใช้' => 'พอใช้',
                                            'ไม่ดี' => 'ไม่ดี'
                                       ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('thair') }}</span>

                                    </td>
                              </tr>
                              <tr>
                                <td>อังกฤษ *</td>
                                <td>
                                    <div class="form-group {{ $errors->has('engliss') ? 'has-error' : '' }}">
                                            {{ Form::select('engliss', [
                                                    '' =>'::เลือก::', 
                                                    'ดี' => 'ดี',
                                                    'พอใช้' => 'พอใช้',
                                                    'ไม่ดี' => 'ไม่ดี'
                                               ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('engliss') }}</span>

                                    </td>
                                <td>
                                    <div class="form-group {{ $errors->has('englisl') ? 'has-error' : '' }}">
                                            {{ Form::select('englisl', [
                                                    '' =>'::เลือก::', 
                                                    'ดี' => 'ดี',
                                                    'พอใช้' => 'พอใช้',
                                                    'ไม่ดี' => 'ไม่ดี'
                                               ],null, ['class' => 'form-control']) }}
                                        <span class="text-danger">{{ $errors->first('englisl') }}</span>

                                    </td>
                                <td>
                                    <div class="form-group {{ $errors->has('englisr') ? 'has-error' : '' }}">
                                            {{ Form::select('englisr', [
                                                    '' =>'::เลือก::', 
                                                    'ดี' => 'ดี',
                                                    'พอใช้' => 'พอใช้',
                                                    'ไม่ดี' => 'ไม่ดี'
                                               ],null, ['class' => 'form-control']) }}
    
                                        <span class="text-danger">{{ $errors->first('englisr') }}</span>
                                        

                                    </td>
                              </tr>
                              <tr>
                                <td>อื่นๆ <input type="text" name="otherr" id="otherr" style="width:150px" name="otherr" class="form-control"/></td>
                                <td>
                                    {{ Form::select('othes', [
                                            '' =>'::เลือก::', 
                                            'ดี' => 'ดี',
                                            'พอใช้' => 'พอใช้',
                                            'ไม่ดี' => 'ไม่ดี'
                                       ],null, ['class' => 'form-control']) }}
                                    </td>
                                <td>
                                    {{ Form::select('othel', [
                                            '' =>'::เลือก::', 
                                            'ดี' => 'ดี',
                                            'พอใช้' => 'พอใช้',
                                            'ไม่ดี' => 'ไม่ดี'
                                       ],null, ['class' => 'form-control']) }}
                                    </td>
                                <td>
                                    {{ Form::select('other', [
                                            '' =>'::เลือก::', 
                                            'ดี' => 'ดี',
                                            'พอใช้' => 'พอใช้',
                                            'ไม่ดี' => 'ไม่ดี'
                                       ],null, ['class' => 'form-control']) }}
                                    </td>
                              </tr>
                            </tbody>
                          </table>

            <div class="form-group" align=right>
                    <a href="#work" class="btn btn-primary btn btn-next" data-toggle="tab">ถัดไป</a>
                </div>   
        <!--แท๊กปิด lang-->
            </div>
        <!-- end of lang -->

            <div role="tabpanel" class="tab-pane" id="work">
                    <h2 class="text-center"><i class="glyphicon glyphicon-wrench"></i></h2>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                                <label>ชื่อสถานที่ประกอบการ :</label>
                                    {{Form::text('list_of_employed1','',['class'=>'form-control'])}}
                        </div>     
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ลักษณะงานที่รับผิดชอบ :</label>
                                {{Form::text('job_description1','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                                <label>ระยะงานเริ่ม</label>
                                {{Form::date('start_job_duration1','',['class'=>'form-control'])}}
                                <label>ระยะงานสิ้นสุด</label>
                                {{Form::date('end_job_duration2','',['class'=>'form-control'])}} 
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                                <label> ตำแหน่ง</label>
                                {{Form::text('position1','',['class'=>'form-control'])}}
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                                <label>สาเหตุที่ออก</label>     
                                    {{Form::text('reasonLeaving1','',['class'=>'form-control'])}}
                        </div>    
                    </div>
                    <div class="col-md-1"></div>    
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>เงินเดือนครั้งสุดท้าย</label>
                                {{Form::text('lastsalary1','',['class'=>'form-control'])}}
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>ชื่อสถานที่ประกอบการ :</label>
                                {{Form::text('list_of_employed2','',['class'=>'form-control'])}}
                            </div>     
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ลักษณะงานที่รับผิดชอบ :</label>
                                {{Form::text('job_description2','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ระยะงานเริ่ม</label>
                                {{Form::date('start_job_duration3','',['class'=>'form-control'])}}
                            <label>ระยะงานสิ้นสุด</label>
                                {{Form::date('end_job_duration4','',['class'=>'form-control'])}} 
                            </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label> ตำแหน่ง</label>
                                {{Form::text('position2','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>สาเหตุที่ออก</label>     
                                {{Form::text('reasonLeaving2','',['class'=>'form-control'])}}
                            </div>    
                    </div>
                    <div class="col-md-1"></div>    
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>เงินเดือนครั้งสุดท้าย</label>
                                {{Form::text('lastsalary2','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>ชื่อสถานที่ประกอบการ :</label>
                                {{Form::text('list_of_employed3','',['class'=>'form-control'])}}
                            </div>     
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ลักษณะงานที่รับผิดชอบ :</label>
                                {{Form::text('job_description3','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ระยะงานเริ่ม</label>
                                {{Form::date('start_job_duration5','',['class'=>'form-control'])}}
                            <label>ระยะงานสิ้นสุด</label>
                                {{Form::date('end_job_duration6','',['class'=>'form-control'])}} 
                            </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label> ตำแหน่ง</label>
                                {{Form::text('position3','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>สาเหตุที่ออก</label>     
                                {{Form::text('reasonLeaving3','',['class'=>'form-control'])}}
                            </div>    
                    </div>
                    <div class="col-md-1"></div>    
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>เงินเดือนครั้งสุดท้าย</label>
                                {{Form::text('lastsalary3','',['class'=>'form-control'])}}
                            </div>
                    </div>
                    </div>
            <div class="form-group" align=right>
                <a href="#other" class="btn btn-primary btn btn-next" data-toggle="tab">ถัดไป</a>
                </div>
        <!--แท๊กปิด work-->        
            </div>
        <!-- end of work -->

            <div role="tabpanel" class="tab-pane" id="other">
                    <h2 class="text-center"><i class="glyphicon glyphicon-search"></i></h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>
                            </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group {{ $errors->has('namecm') ? 'has-error' : '' }}">
                                <label>ชื่อ-นามสกุล : *</label>       
                                    {{Form::text('namecm','',['class'=>'form-control'])}}                                
                                    <span class="text-danger">{{ $errors->first('namecm') }}</span>  
                                </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="form-group {{ $errors->has('lastnamecm') ? 'has-error' : '' }}"> 
                                <label>ความสัมพันธ์ : *</label>
                                    {{Form::text('lastnamecm','',['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('lastnamecm') }}</span>  
                                </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">                            
                                    <div class="form-group {{ $errors->has('telecm') ? 'has-error' : '' }}">
                                        <label>โทรศัพท์ : *</label>
                                            {{Form::text('telecm','',['class'=>'form-control'])}}
                                            <span class="text-danger">{{ $errors->first('telecm') }}</span>  
                                        </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group {{ $errors->has('firm') ? 'has-error' : '' }}">
                                <label>สถานที่ทำงาน/ที่อยู่ : *่</label>          
                                    {{Form::text('firm','',['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('firm') }}</span>  
                                </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">                            
                            <div class="form-group {{ $errors->has('positioncm') ? 'has-error' : '' }}"> 
                                <label>ตำแหน่ง : *</label>
                                    {{Form::text('positioncm','',['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('positioncm') }}</span>  
                                </div>
                        </div>                        
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">ความรู้พิเศษ</label> 
                                คอมพิวเตอร์  ระบุ:  {{Form::text('computer','',['class'=>'form-control'])}}                                                
                                </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group"> <br><br>
                                <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร" > เครื่องโทรสาร &emsp;&emsp;
                                <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย  &emsp;&emsp;
                                <input type="text" name="dot" id="dot"  style="width:50px"/>คำ/นาที
                                </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('crash1') ? 'has-error' : '' }}">
                                <label>ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ) : *</label> &emsp;&emsp;
                                    {{ Form::radio('crash1','ขัดข้อง') }} ขัดข้อง
                                    {{ Form::radio('crash1','ไม่ขัดข้อง') }} ไม่ขัดข้อง                                    
                                </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                ชื่อ:  {{Form::text('compd','',['class'=>'form-control'])}} 
                                <span class="text-danger">{{ $errors->first('crash1') }}</span>  
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                สถานที่ทำงาน:  {{Form::text('compa','',['class'=>'form-control'])}} 
                                <span class="text-danger">{{ $errors->first('crash1') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('crash2') ? 'has-error' : '' }}">
                                <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป : *</label> &emsp;&emsp;&ensp;
                                    {{ Form::radio('crash2','ขัดข้อง') }}ขัดข้อง    &emsp;&emsp;&emsp;&emsp;
                                    {{ Form::radio('crash2','ไม่ขัดข้อง') }}ไม่ขัดข้อง
                                    <span class="text-danger">{{ $errors->first('crash2') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('crash3') ? 'has-error' : '' }}">
                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม : *</label>&emsp;&emsp;
                                    {{ Form::radio('crash3','ขัดข้อง') }}  ขัดข้อง  &emsp;&emsp;&emsp;&emsp;
                                    {{ Form::radio('crash3','ไม่ขัดข้อง') }}ไม่ขัดข้อง                                
                                    <span class="text-danger">{{ $errors->first('crash3') }}</span>                        
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('yes') ? 'has-error' : '' }}">
                                <label>ท่านสามารถขับรถยนต์ได้หรือไม่ : *</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;
                                    {{ Form::radio('yes', 'ได้') }}ได้  &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                                    {{ Form::radio('yes', 'ไม่ได้') }}ไม่ได้
                                <span class="text-danger">{{ $errors->first('yes') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('owncar') ? 'has-error' : '' }}">
                                <label>ท่านมีรถยนต์ส่วนตัวหรือไม่ : *</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                                    {{ Form::radio('owncar','มี') }} มี &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                                    {{ Form::radio('owncar','ไม่มี') }}ไม่มี
                                    <span class="text-danger">{{ $errors->first('owncar') }}</span> 
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</label> {{Form::text('workk','',['class'=>'form-control'])}} 
                                </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                                <div class="form-group {{ $errors->has('dateworkk') ? 'has-error' : '' }}">
                                        <label>ท่านพร้อมงานวันที่ : *</label>  
                                        {{Form::date('dateworkk','',['class' => 'form-control'])}} 
                                        <span class="text-danger">{{ $errors->first('dateworkk') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group ">
                                <label>ท่านเป็นเจ้าของรถประเภทใด :</label> {{Form::text('cardec','',['class' => 'form-control'])}}  
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ทะเบียน :</label> {{Form::text('license','',['class' => 'form-control'])}} 
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('exitwork') ? 'has-error' : '' }}">
                                <label>ท่านเคยให้ถูกออกจากงานหรือไม่ : *</label> &emsp;&emsp;                                                                  
                                    {{ Form::radio('exitwork','เคย') }} เคย เพราะ &emsp; {{Form::text('because','')}} &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     
                                    {{ Form::radio('exitwork','ไม่เคย') }}ไม่เคย 
                                    <span class="text-danger">{{ $errors->first('exitwork') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('serious_ill') ? 'has-error' : '' }}">
                                <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่? : *</label>&emsp;&emsp;
                                {{ Form::radio('serious_ill','เคย') }}เคย &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                {{ Form::radio('serious_ill','ไม่เคย') }}ไม่เคย
                                <span class="text-danger">{{ $errors->first('serious_ill') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group  {{ $errors->has('offense') ? 'has-error' : '' }}">
                                <label>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่? : *</label>&emsp;&emsp;&emsp;&ensp;
                                {{ Form::radio('offense','เคย') }}เคย   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                {{ Form::radio('offense','ไม่เคย') }}ไม่เคย
                                <span class="text-danger">{{ $errors->first('offense') }}</span>  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('pregnant') ? 'has-error' : '' }}">
                                <label>ขณะนี้คุณตั้งครรภ์หรือไม่? : *</label>&emsp;&emsp;
                                {{ Form::radio('pregnant','ใช่') }}ใช่ &emsp;&emsp;&emsp;
                                {{ Form::radio('pregnant','ไม่ใช่') }} ไม่ใช่
                                <span class="text-danger">{{ $errors->first('pregnant') }}</span>  
                                </div>
                        </div>
                        </div> 

                    {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
                                {{ Form::close()}}
        <!--แท๊กปิด other-->
            </div>
        <!-- end of other -->
      </div>
    <!--end of tab-content-->
    </div>
    <!--end of container-->
  
  <!--end of warpper-->
  <script language="javascript">
    function fncSubmit()
    {
    if(document..name.value == "false")
    {
    alert('Please input Input 1');
    document.form1.txt1.focus();
    return false;
    }  
    if(document.form1.lastname.value == "flase")
    {
    alert('Please input Input 2');
    document.form1.txt2.focus();       
    return false;
    }  
    document.form1.submit();
    }
    </script>
@endsection