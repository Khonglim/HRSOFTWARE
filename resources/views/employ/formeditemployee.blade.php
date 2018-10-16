@extends('layouts.main')

@section('content')
  <div class="content-wrapper">
               
        <div class="content container-fluid">
               
       
                        {{Form::open(['route'=>['employee.update',$personal->id],'method'=>'PUT','files' => true])}}
          
        <div class="row">
                <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">ประวัติส่วนตัว</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                                <div class="col-md-4 "></div>
                                <div class="col-md-2 ">
                                        <div class="form-group label-floating">
                                            <label class="control-label">เงินเดือนที่ต้องการ<small class="text-danger">*</small></label>
                                            {{ Form::text('salaryngg',$personal->salaryngg, ['class' => 'form-control','required']) }}
                            
                                           </div>
                        
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ตำแหน่งที่จะสมัคร<small class="text-danger">*</small></label>
                                            {{ Form::text('positionngg',$personal->positionngg, ['class' => 'form-control','required']) }}
                            
                                           </div>
                        
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ">
                                            <label class="control-label">สาขาที่จะสมัคร</label>
                                            {{ Form::text('talent','', ['class' => 'form-control','id'=>'talent']) }}
                                          
                                           </div>
                        
                                    </div>
                        </div>
                    <div class="row">
                                <div class="col-md-5"></div>  
                                <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" >
                                              <label >รูปภาพ || {{$personal->photo}}||</label>
                                                {{Form::file('image')}}
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            
                                        </div>  
                              </div>
                    </div>
                                  
                        <div class="row">  
                                        <div class="col-md-1 ">
                                                        <div class="input-group">
                                                         <div class="form-group label-floating">
                                                             <label class="control-label">คำนำ<small class="text-danger">*</small></label>
                                                         {{ Form::select('fronname', [ $personal->fronname =>$personal->fronname, 'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว'],null, ['class' => 'form-control','required']) }} 
                                                        </div>
                                                     </div>
                                                 </div>
                                <div class="col-md-2">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="name">ชื่อ</label> 
                                    {{Form::text('name',$personal->name,['class'=>'form-control'])}}          
                                   
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                </div> 
                                <div class="col-md-2">
                                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                        <label >นามสกุล</label> 
                                        {{Form::text('lastname',$personal->lastname,['class'=>'form-control'])}}   
                                        
                                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                    </div>
                                    </div> 
                                <div class="col-md-2">
                                        <div class="form-group {{ $errors->has('nikname') ? 'has-error' : '' }}">
                                            <label >ชื่อล่น</label> 
                                            {{Form::text('nikname',$personal->nikname,['class'=>'form-control'])}}   
                                            <span class="text-danger">{{ $errors->first('nikname') }}</span>
                                        </div>
                                 </div> 
                                 <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                                        <label >เพศ</label><br>
                                       @if($personal->gender == 'ชาย')
                                        ชาย {{ Form::radio('gender', 'ชาย',true) }}
                                        หญิง {{ Form::radio('gender', 'หญิง') }}
                                        @else
                                        ชาย {{ Form::radio('gender', 'ชาย') }}
                                        หญิง {{ Form::radio('gender', 'หญิง',true) }}
                                        @endif
                                        <br> <span class="text-danger">{{ $errors->first('gender') }}</span>
                                </div>
                                       
                                </div> 
    
                           
                              <div class="col-md-2">
                                        <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                                        <label >วันเกิด</label>
                                        {{Form::date('birthday',$personal->birthday,['class'=>'form-control'])}}   
                                        <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                </div>
                        </div>
                            </div>
                      
                            <div class="row">  
                                    
                                    <div class="col-md-2">
                                        <div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
                                         <label >สัญชาติ</label>
                                         {{ Form::select('nationality', [
                                                 $personal->nationality => $personal->nationality,
                                                'ไทย' => 'ไทย', 
                                                'คริสต์' => 'คริสต์',
                                                'อิสลาม' => 'อิสลาม',
                                                'อื่นๆ'=> 'อื่นๆ'
                                    ],null, ['class' => 'form-control']) }}   
                                           
                                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('race') ? 'has-error' : '' }}" >
                                            <label >เชื้อชาติ</label>
                                            {{ Form::select('race', [
                                                $personal->race => $personal->race,
                                                'ไทย' => 'ไทย', 
                                                'คริสต์' => 'คริสต์',
                                                'อิสลาม' => 'อิสลาม',
                                                'อื่นๆ'=> 'อื่นๆ'
                                    ],null, ['class' => 'form-control']) }}  
                                           
                                            <span class="text-danger">{{ $errors->first('race') }}</span>
                                            </div>
                                    </div> 
                                    
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('religion') ? 'has-error' : '' }}" >
                                            <label >ศาสนา</label>
                                            {{ Form::select('religion', [
                                                  $personal->religion => $personal->religion,  
                                                  'พุทธ' => 'พุทธ',
                                                  'คริสต์' => 'คริสต์', 
                                                
                                                'อิสลาม' => 'อิสลาม',
                                                'อื่นๆ'=> 'อื่นๆ'
                                    ],null, ['class' => 'form-control']) }}  
                                           
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}" >
                                            <label >อายุ</label>
                                            {{Form::text('age',$personal->age,['class'=>'form-control'])}}   
                                           
                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}" >
                                            <label >ส่วนสูง</label>
                                            {{Form::text('height',$personal->height,['class'=>'form-control'])}}   

                                          
                                            <span class="text-danger">{{ $errors->first('height') }}</span>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}" >
                                            <label >น้ำหนัก</label>
                                            {{Form::text('weight',$personal->weight,['class'=>'form-control'])}}   
                                          
                                            <span class="text-danger">{{ $errors->first('weight') }}</span>
                                            </div>
                                    </div> 
                               
                            </div>
      
                            <div class="row">  
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >พี่น้องกี่คน</label>
                                            {{Form::text('brothers',$personal->brothers,['class'=>'form-control'])}}   
                                          
                                            </div>
                                    </div> 
    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >เป็นคนที่</label>
                                            {{Form::text('number',$personal->number,['class'=>'form-control'])}}   
                                           
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group  {{ $errors->has('tel') ? 'has-error' : '' }}">
                                            <label >โทรศัพท์ที่ติดต่อ</label>
                                            {{Form::text('tel',$personal->tel,['class'=>'form-control'])}}   
                                            
                                            <span class="text-danger">{{ $errors->first('tel') }}</span>
                                            </div>
                                    </div>
    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์บ้าน</label>
                                            {{Form::text('home',$personal->home,['class'=>'form-control'])}}   
                                           
                                            </div>
                                    </div>
    
                                    <div class="col-md-2">
                                            <div class="form-group {{ $errors->has('moblie') ? 'has-error' : '' }}">
                                            <label >โทรศัพท์มือถือ</label>
                                            {{Form::text('moblie',$personal->moblie,['class'=>'form-control'])}}   
                                       
                                            <span class="text-danger">{{ $errors->first('moblie') }} </span>
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์สำนักงาน</label>
                                            {{Form::text('office',$personal->office,['class'=>'form-control'])}}   
                                            
                                            </div>
                                    </div>
                            </div>
                            <div class="row">  
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label>อีเมล</label>
                                            {{Form::email('email',$personal->email,['class'=>'form-control'])}}   
                                           
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            </div>
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('address1') ? 'has-error' : '' }}" >
                                            <label >ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก</label>
                                            <textarea name="address1"  required="required" class="form-control"  rows="1"  >{{$personal->address1}}</textarea>
                                            <span class="text-danger">{{ $errors->first('address1') }}</span>
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('address2') ? 'has-error' : '' }}" >
                                            <label > ที่อยู่ตามบัตรประชาชน</label>
                                            <textarea name="address2"  required="required" class="form-control"  rows="1"  >{{$personal->address2}}</textarea>
                                            <span class="text-danger">{{ $errors->first('address2') }}</span>
                                            </div>
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('idcard') ? 'has-error' : '' }}">
                                            <label >เลขบัตรประชาชน</label>
                                            {{Form::text('idcard',$personal->idcard,['class'=>'form-control'])}}   
                                            
                                            <span class="text-danger">{{ $errors->first('idcard') }}</span>
                                            </div>
                                    </div>     
                            </div>
                            <div class="row">
                                        <div class="col-md-3">
                                                        <div class="form-group {{ $errors->has('province_crad') ? 'has-error' : '' }}" >
                                                          <label >จังหวัด</label>
                                                            {{ Form::text('province_crad',$personal->province_crad, ['class' => 'form-control']) }}
                                                             <span class="text-danger">{{ $errors->first('province_crad') }}</span>
                                                        </div>
                                            </div>
                                    <div class="col-md-3">
                                            <div class="form-group  {{ $errors->has('issued') ? 'has-error' : '' }}" >
                                            <label >ออกให้ ณ อำเภอ/เขต:</label>
                                            {{Form::text('issued',$personal->issued,['class'=>'form-control'])}}   
                                            <span class="text-danger">{{ $errors->first('issued') }}</span>
                                            </div>
                                    </div>
                                   
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('issueddate') ? 'has-error' : '' }}" >
                                            <label >วันออกบัตร</label>
                                            {{Form::date('issueddate',$personal->issueddate,['class'=>'form-control'])}}   
                                            <span class="text-danger">{{ $errors->first('issueddate') }}</span>
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group {{ $errors->has('expid') ? 'has-error' : '' }}" >
                                            <label >บัตรหมดอายุ:</label>
                                            {{Form::date('expid',$personal->expid,['class'=>'form-control'])}}   
                                            <span class="text-danger">{{ $errors->first('expid') }}</span>
                                            </div>
                                    </div>
                            </div>
    
    
                      <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                    <label >บัตรประจำตัวผู้เสียภาษี</label>
                                    {{Form::date('texid',$personal->texid,['class'=>'form-control'])}}   
                                   
                                    </div>
                            </div>
                            <div class="col-md-2">
                                    <div class="form-group {{ $errors->has('living_status') ? 'has-error' : '' }}" >
                                            <label >สถานะความเป็นอยู่</label>
                                                    {{ Form::select('living_status', [
                                                          $personal->living_status=>$personal->living_status,
                                                            'บ้านส่วนตัว' => 'บ้านส่วนตัว',
                                                            'บ้านเช่า' => 'บ้านเช่า',
                                                            'อาศัยกับบิดามารดา'=> 'อาศัยกับบิดามารดา',
                                                            'อาศัยกับผู้อื่น'=>'อาศัยกับผู้อื่น'
                                                ],null, ['class' => 'form-control']) }}

                                        <span class="text-danger">{{ $errors->first('living_status') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group{{ $errors->has('marital_status') ? 'has-error' : '' }}" >
                                            <label >สถานะครอบครัว</label>
                                                  {{ Form::select('marital_status', [
                                                              $personal->marital_status=>$personal->marital_status,
                                                            'โสด' => 'โสด',
                                                            'สมรส' => 'สมรส',
                                                            'หย่า'=> 'หย่า',
                                                            'หม้าย'=>'หม้าย',
                                                            'แยกกันอยู่'=>'แยกกันอยู่'
                                                ],null, ['class' => 'form-control']) }}
                                                  <span class="text-danger">{{ $errors->first('marital_status') }}</span>        
                                    </div> 
                                </div>
    
                                <div class="col-md-2">
                                        <div class="form-group">
                                                <label >กรณีแต่งงาน</label>
                                                      {{ Form::select('if_marricd', [
                                                            $personal->if_marricd=>$personal->if_marricd, 
                                                            'จดทะเบียนสมรส' => 'จดทะเบียนสมรส',
                                                            'ไม่ได้จดทะเบียนสมรส' => 'ไม่ได้จดทะเบียนสมรส'
                                                ],null, ['class' => 'form-control']) }}
                                        </div> 
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >คู่มสมรส</label>
                                                  {{ Form::select('spouse', [
                                                       $personal->spouse=>$personal->spouse,
                                                        'มี' => 'มี',
                                                        'ไม่มี' => 'ไม่มี'
                                            ],null, ['class' => 'form-control']) }}

                                            </div>
                                    </div>
                                
                      </div>
                    <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                            <label >ชื่อคู่สมรส</label>
                                            {{Form::text('name_spouse',$personal->name_spouse,['class'=>'form-control'])}}   
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                        <div class="form-group">
                                                <label >อาชีพคู่สมรส</label>
                                                {{Form::text('spouse_occupation',$personal->spouse_occupation,['class'=>'form-control'])}}   
                                        </div> 
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                    <label > สถานที่ทำงาน</label>
                                                    {{Form::text('firm_address',$personal->firm_address,['class'=>'form-control'])}}   
                                            </div> 
                                        </div>
    
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >โทรศัพท์</label>
                                                        {{Form::text('spouse_tel',$personal->spouse_tel,['class'=>'form-control'])}}   
                                                </div> 
                                            </div>
                          </div> 
                          
                          <div class="row">
                                <div class="col-md-2">
                                <div class="form-group">
                                        <label >จำนวนบุตรทั้งหมด</label>
                                        {{Form::text('children',$personal->children,['class'=>'form-control'])}}   
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <label >หญิง</label>
                                            {{Form::text('girls',$personal->girls,['class'=>'form-control'])}}   
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                        <div class="form-group">
                                                <label >ชาย</label>
                                                {{Form::text('boy',$personal->boy,['class'=>'form-control'])}}   
                                        </div>
                                    </div>
        
                                    <div class="col-md-2">
                                            <div class="form-group">
                                                    <label > จำนวนบุตรกำลังศึกษา</label>
                                                    {{Form::text('school',$personal->school,['class'=>'form-control'])}}  
                                                   
                                            </div>
                                        </div>
    
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >จำนวนบุตรที่อายุเกิน21ปี</label>
                                                        {{Form::text('over21',$personal->over21,['class'=>'form-control'])}}  
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                    <div class="form-group {{ $errors->has('military_service') ? 'has-error' : '' }}" >
                                                    <label > สถานะทางทหาร</label>
                                                          {{ Form::select('military_service', [
                                                               $personal->military_service=>$personal->military_service, 
                                                                'ได้รับการยกเว้น' => 'ได้รับการยกเว้น',
                                                                'ศึกษาวิชาทหาร' => 'ศึกษาวิชาทหาร',
                                                                'ผ่านการเกณฑ์ทหาร' => 'ผ่านการเกณฑ์ทหาร'
                                                    ],null, ['class' => 'form-control']) }}
                                                          <span class="text-danger">{{ $errors->first('military_service') }}</span>
                                                        </div> 
                                                </div>
                                </div>
                                <div class="row">
                                      
    
                                            <div class="col-md-3">
                                                    <div class="form-group  {{ $errors->has('namefather') ? 'has-error' : '' }}" >
                                                    <label > ชื่อบิดา</label>
                                                    {{Form::text('namefather',$personal->namefather,['class'=>'form-control'])}}  
                                                   
                                                    <span class="text-danger">{{ $errors->first('namefather') }}</span>
                                                </div>
                                            </div>
                                                <div class="col-md-3">
                                                        <div class="form-group {{ $errors->has('lastfather') ? 'has-error' : '' }}">
                                                        <label >นามสกุล</label>
                                                        {{Form::text('lastfather',$personal->lastfather,['class'=>'form-control'])}}  
                                                        
                                                        <span class="text-danger">{{ $errors->first('lastfather') }}</span>
                                                    </div>
                                                </div>
                                                    <div class="col-md-3">
                                                            <div class="form-group {{ $errors->has('occupation_father') ? 'has-error' : '' }}" >
                                                            <label >อาชีพ</label>
                                                            {{Form::text('occupation_father',$personal->occupation_father,['class'=>'form-control'])}}  
                                                            
                                                            <span class="text-danger">{{ $errors->first('occupation_father') }}</span>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-3"><br>
                                                            <div class="form-group{{ $errors->has('alivef') ? 'has-error' : '' }}" >
                                                                        @if($personal->alivef == 'ยังมีชีวิตอยู่')
                                                                        {{ Form::radio('alivef', 'ยังมีชีวิตอยู่',true) }}ยังมีชีวิตอยู่ 
                                                                        {{ Form::radio('alivef', 'ถึงแก่กรรม') }}ถึงแก่กรรม
                                                                       @else
                                                                       {{ Form::radio('alivef', 'ยังมีชีวิตอยู่') }}ยังมีชีวิตอยู่ 
                                                                        {{ Form::radio('alivef', 'ถึงแก่กรรม',true) }}ถึงแก่กรรม
                                                                       @endif

                                                                <br> <span class="text-danger">{{ $errors->first('alivef') }}</span>
                                                            </div>
                                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <div class="form-group {{ $errors->has('namemother') ? 'has-error' : '' }}" >
                                                <label > ชื่อมารดา</label>
                                                {{Form::text('namemother', $personal->namemother,['class'=>'form-control'])}}  
                                               
                                                <span class="text-danger">{{ $errors->first('namemother') }}</span>
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                                    <div class="form-group {{ $errors->has('lasrmother') ? 'has-error' : '' }}" >
                                                    <label >นามสกุล</label>
                                                    {{Form::text('lasrmother',$personal->lasrmother,['class'=>'form-control'])}}  
                                                    
                                                    <span class="text-danger">{{ $errors->first('lasrmother') }}</span>
                                                </div>
                                            </div>
                                                <div class="col-md-3">
                                                        <div class="form-group {{ $errors->has('occupationm') ? 'has-error' : '' }}" >
                                                        <label >อาชีพ</label>
                                                        {{Form::text('occupationm',$personal->occupationm,['class'=>'form-control'])}}  
                                                        
                                                        <span class="text-danger">{{ $errors->first('occupationm') }}</span>
                                                    </div>
                                                </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group {{ $errors->has('alivem') ? 'has-error' : '' }}" >
                                                                        @if($personal->alivem == 'ยังมีชีวิตอยู่')
                                                                         {{ Form::radio('alivem', 'ยังมีชีวิตอยู่',true) }}ยังมีชีวิตอยู่ 
                                                                         {{ Form::radio('alivem', 'ถึงแก่กรรม') }}ถึงแก่กรรม
                                                                        @else
                                                                        {{ Form::radio('alivem', 'ยังมีชีวิตอยู่') }}ยังมีชีวิตอยู่ 
                                                                         {{ Form::radio('alivem', 'ถึงแก่กรรม',true) }}ถึงแก่กรรม
                                                                        @endif
                                         <br><span class="text-danger">{{ $errors->first('alivem') }}</span>
                                     </div>
                                </div>
                           </div>  
                      </div>
                  </div>
             </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">ประวัติการศึกษา</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>ระดับการศึกษา</th>
                                            <th>ชื่อสถาบัน</th>
                                            <th>เริ่มปีการศึกษา</th>
                                            <th>จบปีการศึกษา</th>
                                            <th>เกรดเฉลี่ย</th>
                                            <th>สาขา</th>
                                            <th>วุฒที่ได้รับ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr >
                                            <td align="center" >ประถมศึกษา</td>
                                            <td> {{Form::text('primary',$personal->primary,['class'=>'form-control'])}}</td>
                                            <td>      
                                                {{Form::text('year1',$personal->year1,['class'=>'form-control'])}}
                                                </td>
                                                <td>
                                                {{Form::text('year2',$personal->year2,['class'=>'form-control'])}}
                                                </td>
                                            <td>{{Form::text('gpa',$personal->gpa,['class'=>'form-control'])}}</td>
                                            <td>{{Form::text('major',$personal->major,['class'=>'form-control'])}}</td>
                                            <td>{{Form::text('degree1',$personal->degree1,['class'=>'form-control'])}}</td>
                                          </tr>
                                          <tr>
                                                <td>มัธยมศึกษา</td>
                                                <td>{{Form::text('secondary',$personal->secondary,['class'=>'form-control'])}} </td>
                                                <td> 
                                                {{Form::text('year3',$personal->year3,['class'=>'form-control'])}}
                                                </td>
                                                <td> 
                                                {{Form::text('year4',$personal->year4,['class'=>'form-control'])}}    
                                                </td>
                                                <td> {{Form::text('gpas',$personal->gpas,['class'=>'form-control'])}}</td>
                                                <td> {{Form::text('majors',$personal->majors,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('degree2',$personal->degree2,['class'=>'form-control'])}}</td>
                                          </tr>
        
                                          <tr>
                                                <td>อาชีวะศึกษา</td>
                                                <td>{{Form::text('vocation',$personal->vocation,['class'=>'form-control'])}}</td>
                                                <td>
                                                {{Form::text('year5',$personal->year5,['class'=>'form-control'])}}  
                                                </td>
                                                <td> 
                                                                {{Form::text('year6',$personal->year6,['class'=>'form-control'])}}     

                                                </td>
                                                <td>{{Form::text('gpav',$personal->gpav,['class'=>'form-control'])}} </td>
                                                <td>{{Form::text('majorv',$personal->majorv,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('degree3',$personal->degree3,['class'=>'form-control'])}}</td>
                                          </tr>
        
                                          <tr>
                                                <td>อนุปริญญา</td>
                                                <td>{{Form::text('diploma',$personal->diploma,['class'=>'form-control'])}}</td>
                                                <td>
                                                {{Form::text('year7',$personal->year7,['class'=>'form-control'])}} 
                                                </td>
                                                <td>
                                                {{Form::text('year8',$personal->year8,['class'=>'form-control'])}} 
                                                </td>
                                                <td>{{Form::text('gpad',$personal->gpad,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('majord',$personal->majord,['class'=>'form-control'])}} </td>
                                                <td>{{Form::text('degree4',$personal->degree4,['class'=>'form-control'])}}</td>
                                          </tr>
        
        
                                          <tr>
                                                <td>ปริญญาตรี</td>
                                                <td>{{Form::text('bachelor',$personal->bachelor,['class'=>'form-control'])}}</td>
                                                <td>
                                                                {{Form::text('year9',$personal->year9,['class'=>'form-control'])}} 
                                                </td>
                                                <td> {{Form::text('year10',$personal->year10,['class'=>'form-control'])}}    </td>
                                                <td>{{Form::text('gpab',$personal->gpab,['class'=>'form-control'])}} </td>
                                                <td>{{Form::text('majorb',$personal->majorb,['class'=>'form-control'])}} </td>
                                                <td>{{Form::text('degree5',$personal->degree5,['class'=>'form-control'])}}</td>
                                          </tr>
        
                                      
        
                                          <tr>
                                                <td>ปริญญาโท</td>
                                                <td>{{Form::text('master',$personal->master,['class'=>'form-control'])}}</td>
                                                <td> 
                                                                {{Form::text('year11',$personal->year11,['class'=>'form-control'])}}
                                                        
                                                </td>
                                                <td>
                                                                {{Form::text('year12',$personal->year12,['class'=>'form-control'])}}  
                                                </td>
                                                <td>{{Form::text('gpam',$personal->gpam,['class'=>'form-control'])}} </td>
                                                <td> {{Form::text('majorm',$personal->majorm,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('degree6',$personal->degree6,['class'=>'form-control'])}}</td>
                                          </tr>
        
        
                                          <tr>
                                                <td>อื่นๆ</td>
                                                <td> {{Form::text('otherE',$personal->otherE,['class'=>'form-control'])}}</td>
                                                <td> 
                                                             {{Form::text('year13',$personal->year13,['class'=>'form-control'])}}
                                                </td>
                                                <td>
                                                                {{Form::text('year14',$personal->year1,['class'=>'form-control'])}}
                                                </td>
                                                <td> {{Form::text('gpao',$personal->gpao,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('majoro',$personal->majoro,['class'=>'form-control'])}}</td>
                                                <td>{{Form::text('degree7',$personal->degree7,['class'=>'form-control'])}}</td>
                                          </tr>
                                        </tbody>
                                </table>
                        </div>
                  </div>  
           </div>            
     </div>
</div>


<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">ภาษา</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
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
                                    <td>ไทย</td>
                                    <td>
                                            <div class="form-group {{ $errors->has('thais') ? 'has-error' : '' }}">
                                         
                                            {{ Form::select('thais', [
                                                 $personal->thais=>$personal->thais,
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
                                                 $personal->thail=>$personal->thail, 
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
                                                 $personal->thair=>$personal->thair, 
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}
                                            <span class="text-danger">{{ $errors->first('thair') }}</span>

                                        </td>
                                  </tr>
                                  <tr>
                                    <td>อังกฤษ</td>
                                    <td>
                                        <div class="form-group {{ $errors->has('engliss') ? 'has-error' : '' }}">
                                         
                                         {{ Form::select('engliss', [
                                               $personal->engliss=>$personal->engliss, 
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}
                                            <span class="text-danger">{{ $errors->first('engliss') }}</span>

                                        </td>
                                    <td>
                                        <div class="form-group {{ $errors->has('englisl') ? 'has-error' : '' }}">
                                            {{ Form::select('englisl', [
                                                $personal->englisl=>$personal->englisl, 
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}
                                            <span class="text-danger">{{ $errors->first('englisl') }}</span>

                                        </td>
                                    <td>
                                        <div class="form-group {{ $errors->has('englisr') ? 'has-error' : '' }}">
                                            {{ Form::select('englisr', [
                                                $personal->englisr=>$personal->englisr,
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}

                                            <span class="text-danger">{{ $errors->first('englisr') }}</span>
                                        </td>
                                  </tr>
                                  <tr>
                                    <td>อื่นๆ{{Form::text('otherr',$personal->otherr,['class'=>'form-control'])}} </td>
                                    <td>
                                            {{ Form::select('othes', [
                                                 $personal->othes=>$personal->othes, 
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}
                                        </td>
                                    <td>
                                            {{ Form::select('othel', [
                                                $personal->othel=>$personal->othel,
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}

                                        </td>
                                    <td>
                                            {{ Form::select('other', [
                                                $personal->other=>$personal->other, 
                                                'ดี' => 'ดี',
                                                'พอใช้' => 'พอใช้',
                                                'ไม่ดี' => 'ไม่ดี'
                                           ],null, ['class' => 'form-control']) }}
                                        </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>  
                 </div>  
              </div>            
     </div>
</div>




<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">ประวัติการทำงาน</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>ชื่อสถานที่ประกอบการ</th>
                                    <th>ลักษณะงานที่รับผิดชอบ</th>
                                    <th>โทร</th>
                                    <th>ระยะงานเริ่ม</th>
                                    <th>ระยะงานสิ้นสุด</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สาเหตุที่ออก</th>
                                    <th>เงินเดือนครั้งสุดท้าย</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td> {{Form::text('list_of_employed1',$personal->list_of_employed1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('job_description1',$personal->job_description1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('call1',$personal->call1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('start_job_duration1',$personal->start_job_duration1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('end_job_duration2',$personal->end_job_duration2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('position1',$personal->position1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('reasonLeaving1',$personal->reasonLeaving1,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('lastsalary1',$personal->lastsalary1,['class'=>'form-control'])}} </td>
                                  </tr>
                                  <tr>
                                    <td> {{Form::text('list_of_employed2',$personal->list_of_employed2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('job_description2',$personal->job_description2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('call2',$personal->call2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('start_job_duration3',$personal->start_job_duration3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('end_job_duration4',$personal->end_job_duration4,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('position2',$personal->position2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('reasonleaving2',$personal->reasonLeaving2,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('lastsalary2',$personal->lastsalary2,['class'=>'form-control'])}}</td>
                                  </tr>
                                  <tr>
                                    <td> {{Form::text('list_of_employed3',$personal->list_of_employed3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('job_description3',$personal->job_description3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('call3',$personal->call3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('start_job_duration5',$personal->start_job_duration5,['class'=>'form-control'])}}</td>
                                    <td> {{Form::date('end_job_duration6',$personal->end_job_duration6,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('position3',$personal->position3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('reasonleaving3',$personal->reasonLeaving3,['class'=>'form-control'])}}</td>
                                    <td> {{Form::text('lastsalary3',$personal->lastsalary3,['class'=>'form-control'])}} </td>
                                  </tr>
                                </tbody>
                              </table>
                         </div> 
                   </div>  
             </div>            
        </div>
</div>

<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">อื่นๆ</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
         
                <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>
                <div class="box-body table-responsive no-padding">
                        <div class="form-group">
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ความสัมพันธ์</th>
                            <th>สถานที่ทำงาน/ที่อยู่</th>
                            <th>โทรศัพท์</th>
                            <th>ตำแหน่ง</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                        <div class="form-group {{ $errors->has('namecm') ? 'has-error' : '' }}">       
                                {{Form::text('namecm',$personal->namecm,['class'=>'form-control'])}}
                        
                                <span class="text-danger">{{ $errors->first('namecm') }}</span>  
                        </div>
                           </td>
                            <td>
                                        <div class="form-group {{ $errors->has('lastnamecm') ? 'has-error' : '' }}">       
                                    {{Form::text('lastnamecm',$personal->lastnamecm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('lastnamecm') }}</span>  
                                </div>
                            </td>
                            <td>
                                        <div class="form-group {{ $errors->has('firm') ? 'has-error' : '' }}"> 
                                    {{Form::text('firm',$personal->firm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('firm') }}</span>  
                                </div>
                            </td>
                            <td>
                                        <div class="form-group {{ $errors->has('telecm') ? 'has-error' : '' }}"> 
                                    {{Form::text('telecm',$personal->telecm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('telecm') }}</span>  
                                </div>
                           </td>
                            <td>
                                        <div class="form-group {{ $errors->has('positioncm') ? 'has-error' : '' }}"> 
                                    {{Form::text('positioncm',$personal->positioncm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('positioncm') }}</span>  
                                </div>
                           </td>
                          </tr>
                         
                        </tbody>
                    
                      </table>
                    </div>

                   







                    <div class="row">    
                                <div class="col-md-1"> </div>
                                <div class="col-md-5">
                                                <div class="form-group" >
                                              <label >Link ผลงาน </label>
                                           
                                              {{Form::text('portfolio1',$personal->portfolio1,['class'=>'form-control'])}}
                                            
                                        </div>  
                              </div>

                        
                        </div>




         <div class="row">      
                    <div class="col-md-5">
                            <div class="form-group">
                        <label for="name">ความรู้พิเศษ</label> 
                        คอมพิวเตอร์   ระบุ:  {{Form::text('computer',$personal->computer)}}
                                
                            </div>
                    </div> 
                    <div class="col-md-5">
                            <div class="form-group">
                                    <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร" > เครื่องโทรสาร 
                                    <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย
                                    {{Form::text('dot',$personal->dot)}} คำ/นาที
                        </div>
                        </div> 
        
                </div>

                <div class="row">      
                        <div class="col-md-12">
                                <div class="form-group {{ $errors->has('crash1') ? 'has-error' : '' }}">
                                        <label>ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)</label> &emsp;&emsp;
                                        @if($personal->crash1 == 'ขัดข้อง')
                                        {{ Form::radio('crash1','ขัดข้อง',true) }} ขัดข้อง
                                        {{ Form::radio('crash1','ไม่ขัดข้อง') }} ไม่ขัดข้อง
                                        ชื่อ:  {{Form::text('compd',$personal->compd)}} 
                                        สถานที่ทำงาน:  {{Form::text('compa',$personal->compa)}} 
                                        @else
                                        {{ Form::radio('crash1','ขัดข้อง') }} ขัดข้อง
                                        {{ Form::radio('crash1','ไม่ขัดข้อง',true) }} ไม่ขัดข้อง
                                        ชื่อ:  {{Form::text('compd',$personal->compd)}} 
                                        สถานที่ทำงาน:  {{Form::text('compa',$personal->compa)}} 
                                        @endif

                                        <br>
                                        <span class="text-danger">{{ $errors->first('crash1') }}</span>  

                                    
                                </div>
                        </div>   
                    </div>

                    <div class="row">      
                            <div class="col-md-10">
                                    <div class="form-group {{ $errors->has('crash2') ? 'has-error' : '' }}">
                                            <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            @if($personal->crash2 == 'ขัดข้อง')
                                             {{ Form::radio('crash2','ขัดข้อง',true) }}ขัดข้อง
                                             {{ Form::radio('crash2','ไม่ขัดข้อง') }}ไม่ขัดข้อง
                                             @else
                                             {{ Form::radio('crash2','ขัดข้อง') }}ขัดข้อง
                                             {{ Form::radio('crash2','ไม่ขัดข้อง',true) }}ไม่ขัดข้อง
                                             @endif
                                             <br>
                                             <span class="text-danger">{{ $errors->first('crash2') }}</span>  
                                    </div>
                            </div>   
                        </div>


                        <div class="row">      
                                <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('crash3') ? 'has-error' : '' }}">
                                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                @if($personal->crash3 == 'ขัดข้อง')
                                                 {{ Form::radio('crash3','ขัดข้อง',true) }}  ขัดข้อง
                                                 {{ Form::radio('crash3','ไม่ขัดข้อง') }}ไม่ขัดข้อง
                                                 @else
                                                 {{ Form::radio('crash3','ขัดข้อง') }}  ขัดข้อง
                                                 {{ Form::radio('crash3','ไม่ขัดข้อง',true) }}ไม่ขัดข้อง
                                                 <br>
                                                 <span class="text-danger">{{ $errors->first('crash3') }}</span>  
                                                 @endif

                                            </div>
                                </div>   
                            </div>


                            <div class="row">      
                                    <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('yes') ? 'has-error' : '' }}">
                                                    <label>ท่านสามารถขับรถยนต์ได้หรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    @if($personal->yes == 'ได้')
                                                     {{ Form::radio('yes', 'ได้',true) }}ได้
                                                     {{ Form::radio('yes', 'ไม่ได้') }}ไม่ได้
                                                     @else
                                                     {{ Form::radio('yes', 'ได้') }}ได้
                                                     {{ Form::radio('yes', 'ไม่ได้',true) }}ไม่ได้
                                                     @endif
                                                     <br>
                                                     <span class="text-danger">{{ $errors->first('yes') }}</span>  
                                                    
                                            </div>
                                    </div>   
                                </div>

                                <div class="row">      
                                        <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('owncar') ? 'has-error' : '' }}">
                                                        <label>ท่านมีรถยนต์ส่วนตัวหรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                        @if($personal->owncar == 'มี') 
                                                        {{ Form::radio('owncar','มี',true) }} มี
                                                         {{ Form::radio('owncar','ไม่มี') }}ไม่มี
                                                         @else
                                                         {{ Form::radio('owncar','มี') }} มี
                                                         {{ Form::radio('owncar','ไม่มี',true) }}ไม่มี
                                                         @endif
                                                         <br>
                                                         <span class="text-danger">{{ $errors->first('owncar') }}</span>  
        
                                                    
                                                </div>
                                        </div>   
                                    </div>
    



                                    <div class="row">      
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</label> {{Form::text('workk',$personal->workk)}} 
                                                        
                                                    </div>
                                            </div>   
                                        </div>
        


                                        <div class="row">      
                                                <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('dateworkk') ? 'has-error' : '' }}">
                                                                <label>ท่านพร้อมงานวันที่<label>  {{Form::date('dateworkk',$personal->dateworkk)}} 
                                                                <span class="text-danger">{{ $errors->first('dateworkk') }}</span>  
                                                        </div>
                                                </div>   
                                            </div>




                                            <div class="row">      
                                                    <div class="col-md-12">
                                                            <div class="form-group ">
                                                                    <label>ท่านเป็นเจ้าของรถประเภทใด</label> {{Form::text('cardec',$personal->cardec)}}  
                                                                    <label>ทะเบียน</label> {{Form::text('license',$personal->license)}} 
                                                                      
                                                                
                                                            </div>
                                                    </div>   
                                                </div>
                                                <div class="row">      
                                                        <div class="col-md-10">
                                                                <div class="form-group {{ $errors->has('exitwork') ? 'has-error' : '' }}">
                                                                        <label>ท่านเคยให้ถูกออกจากงานหรือไม่</label> &emsp;&emsp;&emsp;&emsp;&emsp;  
                                                                        @if($personal->exitwork == 'เคย')                                                                 
                                                                        {{ Form::radio('exitwork','เคย',true) }} เคย เพราะ{{Form::text('because',$personal->because)}}
                                                                            &emsp;&emsp;&emsp;  
                                                                            {{ Form::radio('exitwork','ไม่เคย') }}ไม่เคย 
                                                                            @else
                                                                            {{ Form::radio('exitwork','เคย') }} เคย เพราะ{{Form::text('because',$personal->because)}}
                                                                            &emsp;&emsp;&emsp;  
                                                                            {{ Form::radio('exitwork','ไม่เคย',true) }}ไม่เคย 
                                                                            @endif
                                                                            <br>
                                                                            <span class="text-danger">{{ $errors->first('exitwork') }}</span>  

                                                                </div>
                                                        </div>   
                                                    </div>
                                                    <div class="row">      
                                                            <div class="col-md-6">
                                                                    <div class="form-group {{ $errors->has('serious_ill') ? 'has-error' : '' }}">
                                                                            <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                            @if($personal->serious_ill == 'เคย')
                                                                             {{ Form::radio('serious_ill','เคย',true) }}เคย
                                                                             {{ Form::radio('serious_ill','ไม่เคย') }}ไม่เคย<br>
                                                                                @else
                                                                                {{ Form::radio('serious_ill','เคย') }}เคย
                                                                             {{ Form::radio('serious_ill','ไม่เคย',true) }}ไม่เคย<br>
                                                                                @endif
                                                                             <span class="text-danger">{{ $errors->first('serious_ill') }}</span>  
                                                                            
                                                                        
                                                                    </div>
                                                            </div>   
                                                        </div>
                                                        <div class="row">      
                                                                <div class="col-md-12">
                                                                        <div class="form-group  {{ $errors->has('offense') ? 'has-error' : '' }}">
                                                                                <label>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;

                                                                                @if($personal->offense == 'เคย')
                                                                                {{ Form::radio('offense','เคย',true) }}เคย
                                                                                {{ Form::radio('offense','ไม่เคย') }}ไม่เคย
                                                                                @else
                                                                                {{ Form::radio('offense','เคย') }}เคย
                                                                                {{ Form::radio('offense','ไม่เคย',true) }}ไม่เคย
                                                                                @endif
                                                                                <br>
                                                                                <span class="text-danger">{{ $errors->first('offense') }}</span>  
                                                                                
                                                                        </div>
                                                                </div>   
                                                            </div>
                                                            <div class="row">      
                                                                    <div class="col-md-6">
                                                                            <div class="form-group {{ $errors->has('pregnant') ? 'has-error' : '' }}">
                                                                                    <label>ขณะนี้คุณตั้งครรภ์หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                    @if($personal->pregnant == 'ใช่')
                                                                                     {{ Form::radio('pregnant','ใช่',true) }}ใช่
                                                                                    {{ Form::radio('pregnant','ไม่ใช่') }} ไม่ใช่
                                                                                    @else
                                                                                    {{ Form::radio('pregnant','ใช่') }}ใช่
                                                                                    {{ Form::radio('pregnant','ไม่ใช่',true) }} ไม่ใช่
                                                                                    @endif
                                                                                    <br>
                                                                                    <span class="text-danger">{{ $errors->first('pregnant') }}</span>  
                                                                                    
                                                                                
                                                                            </div>
                                                                    </div>   
                                                                </div>                                               
                                                           </div>      
                                                      </div>  
                                               </div>            
                                           </div>
                                      </div>
                                     
                                      {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
                                        
                                      {{ Form::close()}}               
                                     
      </div>
      
</div>

  @endsection
