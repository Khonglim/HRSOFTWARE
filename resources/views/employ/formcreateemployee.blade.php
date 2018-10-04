@extends('layouts.new')
@section('content')
<div class="banner-inner">

        <br> 
      <center> <h1 class="text-light"> สมัครงานออนไลน์ <br>

        NGG GROUP




      </h1>
    
    
    
    </center>
      </div>   
   <br>   <br>   <br>
<div class="container">  
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
           
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
           
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
          
        </div>
        <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
               
            </div>

            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                
            </div>

            <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                      
                    </div>
                    <div class="stepwizard-step">
                                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                               
                            </div>

    </div>
</div>
{{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}}
    <div class="row setup-content" id="step-1">
        
                <h3>ประวัติส่วนตัว</h3>
                <div class="form-group">
<div class="row">
        <div class="col-md-3 "></div>
        <div class="col-md-2 ">
                <div class="form-group label-floating">
                    <label class="control-label">เงินเดือนที่ต้องการ<small class="text-danger">*</small></label>
                    {{ Form::text('salaryngg','', ['class' => 'form-control','required']) }}
    
                   </div>

            </div>
            <div class="col-md-2">
                <div class="form-group label-floating">
                    <label class="control-label">ตำแหน่งที่จะสมัคร<small class="text-danger">*</small></label>
                    {{ Form::text('positionngg','', ['class' => 'form-control','required']) }}
    
                   </div>

            </div>
       
</div>

<hr>

               <div class="row">    
                           
                   <div class="col-md-3"> 
                                <div class="form-group label-floating">
                                <label class="control-label">คำนำ<small class="text-danger">*</small></label>
                                                         {{ Form::select('fronname', [''=>'เลือก'  ,'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว'],null, ['class' => 'form-control','required']) }}
                        </div>  
                </div>  
                        <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                            <label class="control-label">ชื่อ<small class="text-danger">*</small></label>
                            {{Form::text('name','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                         <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                         <label class="control-label">นามสกุล<small class="text-danger">*</small></label>
                    {{Form::text('lastname','',['class'=>'form-control','required'])}} 
                        </div> 
                </div>   

                        <div class="col-md-3"> 
                                        <div class="form-group label-floating">
                                        <label class="control-label">รูปภาพ<small class="text-danger">*ขนาดไม่เกิน 512kb</small></label>
                                        <input type="file"    name="image" data-validation-allowing="jpg, png"
                                        data-validation-max-size="512kb"  required>
                                      </div>   
                                            
               </div>
        </div>
</div>	
        <div class="form-group">     
        <div class="row">    
                      <div class="col-md-3 ">
                                <div class="form-group label-floating">
                         <label class="control-label">ชื่อเล่น<small class="text-danger">*</small></label>
                         {{Form::text('nikname','',['class'=>'form-control','required'])}}  
                        </div>
                </div>
                        <div class="col-md-3 ">
                 <div class="form-group label-floating">
                                <label class="control-label">วันเกิด<small class="text-danger">*</small></label>
                        {{Form::date('birthday','',['class'=>'form-control','required'])}}   
                         </div>
                        </div>
                         <div class="col-md-2">
                                        <div class="form-group label-floating">
                              <label class="control-label">อายุ<small class="text-danger">*</small></label>
                            {{Form::text('age','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}   
                        </div>
                </div>
                        <div class="col-md-2">
                                        <div class="form-group label-floating">
                        <label class="control-label">เพศ<small class="text-danger">*</small></label> 


                {{ Form::select('gender', [ '' => 'เลือก', 'ชาย' => 'ชาย','หญิง' => 'หญิง'],null, ['class' => 'form-control','required']) }} 
                                                       
                        </div>
                </div>
                    </div>
                </div>
                <div class="form-group">  

                                <div class="row">
                                              
                                                <div class="col-md-3">
  
                                                      <div class="input-group">
                                                              <div class="form-group label-floating">
                                                                     <label class="control-label">น้ำหนัก<small class="text-danger">*</small></label>
                                                                     {{Form::text('weight','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$"])}}   
                                                             </div>
                                                          </div>
                                                       
                                                </div>
  
                                                <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group label-floating">
                                                                     <label class="control-label">ส่วนสูง/ซม.<small class="text-danger">*</small></label>
                                                                     {{Form::text('height','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"3"])}}
                                                             </div>
                                                          </div>
                                                      </div>
                                                    
                                          </div>

                </div>
                <hr>
                <div class="form-group"> 
                                <div class="row">

                                                <div class="col-md-2" >
                                                  
                                                        <label class="control-label">สัญชาติ<small class="text-danger">*</small></label>
                                                        {{ Form::select('nationality', [ 'ไทย' => 'ไทย','โปรดระบุ' =>$items2],null, ['class' => 'form-control','id'=>'nationality']) }}    
                                                </div>
                                               
                                                <div class="col-md-2">
                                                   
                                                        <label class="control-label">เชื้อชาติ<small class="text-danger">*</small></label>
                                                        {{ Form::select('race', [ 'ไทย' => 'ไทย','โปรดระบุ' =>$items2],null, ['class' => 'form-control','id'=>'race']) }}

                                                        <span class="text-danger">{{ $errors->first('race') }}</span>
                                                        </div>
                                             
                                              
                                                <div class="col-md-2">
                                                   
                                                        <label class="control-label">ศาสนา<small class="text-danger">*</small></label>  
                                                        {{ Form::select('religion', ['พุทธ' => 'พุทธ','อิสลาม' => 'อิสลาม','คริสต์'=> 'คริสต์','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control']) }}
                                        
                                            </div>

                                            
   
                                             
                                                
                                    </div>

                </div>

                <div class="form-group"> 
                                <div class="row">
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                        <label class="control-label">พี่น้องกี่คน</label>
                                                                        {{Form::text('brothers','',['class'=>'form-control',"maxlength"=>"2"])}}  
                                                               </div>
                                                            </div>
                                                   
                                                </div>
                                              
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                        <label class="control-label">เป็นคนที่</label>
                                                                        {{Form::text('number','',['class'=>'form-control',"maxlength"=>"2"])}}  
                                                               </div>
                                                            </div>
                                                            
                                                </div>
                                                </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >ถัดไป</button>
    </div>


    <div class="row setup-content" id="step-2">
        <br> <br>  
                <div class="row">
                              
                                <div class="col-md-3 ">
                                        
                                                <div class="form-group label-floating">
                                                        <label class="control-label">เลขบัตรประชาชน/บัตรประจำตัวผู้เสียภาษี<small class="text-danger">*</small> </label>
                                                        {{Form::text('idcard','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"13"])}}   
                                               </div>
                                           
                                  
                                </div>
                              
                                <div class="col-md-3 ">
                                      
                                                <div class="form-group label-floating">
                                                        <label class="control-label">ออกให้ ณ อำเภอ/เขต<small class="text-danger">*</small></label>
                                                     {{ Form::text('issued','' , ['class' => 'form-control','id'=>'issued','required']) }}    
                                               </div>
                                        
                                    
                                   </div>
                                  
                                   <div class="col-md-3 ">
                                    
                                    <div class="form-group label-floating">
                                        <label class="control-label">สถานะทางทหาร<small class="text-danger">*</small></label> 
                                        {{ Form::select('military_service', [''=>'เลือก','-' =>'ไม่มี','ได้รับการยกเว้น' => 'ได้รับการยกเว้น','ศึกษาวิชาทหาร' => 'ศึกษาวิชาทหาร','ผ่านการเกณฑ์ทหาร' => 'ผ่านการเกณฑ์ทหาร'],null, ['class' => 'form-control','required']) }}
                                   
                                    
                                </div>
                            </div>
                           
                                </div>
    
                                <div class="row">
                                       
                                        <div class="col-md-3">
                                            
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">จังหวัด<small class="text-danger">*</small></label>
                                                                {{ Form::select('province_crad', [ '' => 'เลือก','จังหวัด' =>$items],null, ['class' => 'form-control','id'=>'province_crad']) }}     
                                                       </div>
                                                  
                                                </div>
                                    </div>
    
    
    
                                               <div class="row">
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group" >
                                                            <label class="control-label"><h4>วันออกบัตร<small class="text-danger">*</small></h4></label>
                                                        {{Form::date('issueddate','',['class'=>'form-control','required'])}}   
                                                        <span class="text-danger">{{ $errors->first('issueddate') }}</span>
                                                        </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <div class="form-group" >
                                                            <label class="control-label"><h4>บัตรหมดอายุ<small class="text-danger">*</small></h4></label>
                                                        {{Form::date('expid','',['class'=>'form-control','required'])}}   
                                                        <span class="text-danger">{{ $errors->first('expid') }}</span>
                                                        </div>
                                                </div>
    
                                          
    
                                                
                                                </div>
    
                                               
    
    <div class="row" >
          
            <div class="col-md-4 ">
                       
                    <div class="form-group label-floating">
                            <label class="control-label">ที่อยู่ตามบัตรประชาชน<small class="text-danger">*</small></label>
                            <textarea name="address2"  id="address2"  class="form-control"  rows="3" required >{{ old('address2') }}</textarea> 
                    </div>
             </div>
    
     <div class="col-md-4">
            <div class="form-group label-floating">
                <input type="checkbox" onchange="document.getElementById('address1').value=document.getElementById('address2').value" > <label class="control-label">ที่อยู่เดียวกันกับบัตรประชาชน</label>           <label class="control-label">ที่อยู่ปัจจุบันที่ติดต่อได้<small class="text-danger">*</small></label> 
                    <textarea name="address1" id="address1" class="form-control"  rows="3"  required>{{ old('address1') }}</textarea>     
           </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group label-floating">
          
               
       </div>
</div>


    </div>
    
    

                                                             <div class="row">
                                                                    
                                                                        <div class="col-md-3 ">
                                                                                <div class="form-group label-floating">
                                                                                        <label class="control-label">โทรศัพท์ที่ติดต่อ<small class="text-danger">*</small></label>
                                                                                        {{Form::text('tel','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}   
                                                                               </div>
                                                                            
                                                                        </div>
                                                                       
                                                                             <div class="col-md-3 ">
                                                                                <div class="form-group label-floating">
                                                                                        <label class="control-label">โทรศัพท์บ้าน</label>
                                                                                        {{Form::text('home','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}   
                                                                               </div>
                                                                          
                                                                            </div>
    
                                                                            <div class="col-md-3 ">
                                                                                    <div class="form-group label-floating">
                                                                                            <label class="control-label">โทรศัพท์มือถือ<small class="text-danger">*</small></label>
                                                                                            {{Form::text('moblie','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}    
                                                                                   </div>
                                                                              
                                                                            </div>
                                                                           
                                                                           
    
                                                                        </div>
    
                                                                        <div class="row">
                                                                               
                                                                              
                                                                               
                                                                                <div class="col-md-3 ">
                                                                                        <div class="form-group label-floating">
                                                                                                <label class="control-label">โทรศัพท์สำนักงาน</label>
                                                                                                {{Form::text('office','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}    
                                                                                       </div>
                                                                                       
                                                                                </div>
                                                                                      
                                                                                        <div class="col-md-3">
                                                                                                <div class="form-group label-floating">
                                                                                                        <label class="control-label">อีเมล<small class="text-danger">*</small></label>
                                                                                                        {{Form::email('email','',['class'=>'form-control','required'])}}   
                                                                                               </div>
                                                                                               
                                                                                         
                                                             </div>
                                            </div>




 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">ถัดไป</button>

    </div>

    <div class="row setup-content" id="step-3">
        <br> <br>
                <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3" >
                                    <div class="form-group label-floating">
                                        <label class="control-label" >สถานะความเป็นอยู่<small class="text-danger">*</small></label>  
                                            {{ Form::select('living_status', [''=>'เลือก', 
                                                                        'บ้านส่วนตัว' => 'บ้านส่วนตัว',
                                                                        'บ้านเช่า' => 'บ้านเช่า',
                                                                        'อาศัยกับบิดามารดา'=> 'อาศัยกับบิดามารดา',
                                                                        'อาศัยกับผู้อื่น'=>'อาศัยกับผู้อื่น'
                                                            ],null, ['class' => 'form-control','required']) }}
                                                    
                                        </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label" >สถานะครอบครัว<small class="text-danger">*</small></label>  
                                            {{ Form::select('marital_status', [
                                                                       ''=>'เลือก', 
                                                                        'โสด' => 'โสด',
                                                                        'สมรส' => 'สมรส',
                                                                        'หย่า'=> 'หย่า',
                                                                        'หม้าย'=>'หม้าย',
                                                                        'แยกกันอยู่'=>'แยกกันอยู่'
                                                            ],null, ['class' => 'form-control','required']) }}
                                                    <span class="text-danger">{{ $errors->first('marital_status') }}</span>        
                                            </div>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label" >กรณีแต่งงาน</label>
                                                    {{ Form::select('if_marricd', ['' =>'','จดทะเบียนสมรส' => 'จดทะเบียนสมรส','ไม่ได้จดทะเบียนสมรส' => 'ไม่ได้จดทะเบียนสมรส'],null, ['class' => 'form-control']) }}
                                                </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label" >คู่มสมรส</label>
                                                    {{ Form::select('spouse', ['' =>'','มี' => 'มี','ไม่มี' => 'ไม่มี'],null, ['class' => 'form-control']) }}
                                                </div>
                                        </div>
                                        </div>
                                     
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">ชื่อคู่สมรส</label>
                                                                {{Form::text('name_spouse','',['class'=>'form-control'])}}     
                                                       </div>
                                                 
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">อาชีพคู่สมรส</label>
                                                                {{Form::text('spouse_occupation','',['class'=>'form-control'])}}    
                                                       </div>
                                                  
                                                </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">สถานที่ทำงาน</label>
                                                                {{Form::text('firm_address','',['class'=>'form-control'])}}     
                                                       </div>
                            
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-3">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">โทรศัพท์</label>
                                                                {{Form::text('spouse_tel','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}      
                                                       </div>
                                                </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">จำนวนบุตรทั้งหมด/คน</label>
                                                                {{Form::text('children','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}  
                                                       </div>
                                                   
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label">หญิง/คน</label>
                                                                {{Form::text('girls','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}   
                                                       </div>
                                                       
                                                    </div>
                                                    <div class="col-md-2">
                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">ชาย/คน </label>
                                                                            {{Form::text('boy','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}     
                                                           </div>
                                                       
                                                    </div>
                                                
                                                </div>
                                                <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label"> จำนวนบุตรกำลังศึกษา/คน </label>
                                                                {{Form::text('school','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}       
                                                       </div>
                            
                                                </div>        
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                                <label class="control-label"> จำนวนบุตรที่อายุเกิน21ปี/คน </label>
                                                                {{Form::text('over21','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}       
                                                       </div>
                                              
                                                </div>
                                                </div> 
        
        
        
        
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >ถัดไป</button>

        </div>

        <div class="row setup-content" id="step-4">
            <br> <br>

                        <div class="row">
                                        <div class="col-md-1"></div>
                                       <div class="col-md-4">
                                        <div class="form-group label-floating">
                                     <label class="control-label">  ชื่อบิดา<small class="text-danger">*</small></label>
                                      {{Form::text('namefather','',['class'=>'form-control','required'])}}   
                                            </div>
                                                                                                                                                                                  
                                                    </div>
                                    <div class="col-md-2"></div>
                                                               <div class="col-md-3">
                                                                <div class="form-group label-floating">
                                        <label class="control-label"> นามสกุล<small class="text-danger">*</small></label>
                                                         {{Form::text('lastfather','',['class'=>'form-control','required'])}}   
                                                   </div>
                                                                                                                                                                                     
                                      </div>
                                    </div>
                                           <div class="row">
                                              <div class="col-md-1"></div>
                                   <div class="col-md-4">
                                               <div class="form-group label-floating">
                                              <label class="control-label"> อาชีพ<small class="text-danger">*</small></label>
                                                {{Form::text('occupation_father','',['class'=>'form-control','required'])}}   
                                                           </div>
                                                                                                                                                                                  
                                                              </div>
                                                              <div class="col-md-2"></div>
                                                              <div class="col-md-3">
                                                   <div class="form-group label-floating"> 
                                               <label class="control-label">สถานะ<small class="text-danger">*</small></label>
                                  
                                             {{ Form::select('alivef', [ ''=>'เลือก', 'ยังมีชีวิตอยู่' => 'ยังมีชีวิตอยู่','ถึงแก่กรรม' => 'ถึงแก่กรรม'],null, ['class' => 'form-control','required']) }} 
                                                                                                                                                                                                                     
                                                                                                                                                                                         
                                                         </div>
                                                           </div>
                                                           </div>
                                                   <div class="row">
                                          <div class="col-md-1"></div>
                                                   <div class="col-md-4">
                                              <div class="form-group label-floating">
                                          <label class="control-label">ชื่อมารดา<small class="text-danger">*</small></label>
                                       {{Form::text('namemother','',['class'=>'form-control','required'])}}
                                                                                 </div>
                                                                                                                                                                                    
                                                                             </div>
                                                                   <div class="col-md-2"></div>
                                                              <div class="col-md-3">
                                                                                               <div class="form-group label-floating">
                                                                   <label class="control-label">นามสกุล<small class="text-danger">*</small></label>
                                                             {{Form::text('lasrmother','',['class'=>'form-control','required'])}}  
                                                               </div>
                                                                                                                                                                                   
                                                                  </div>
                                                       </div>
                                                   <div class="row">
                                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-4">
                                                                      <div class="form-group label-floating">
                                                                           <label class="control-label">อาชีพ<small class="text-danger">*</small></label>
                                                                    {{Form::text('occupationm','',['class'=>'form-control','required'])}} 
                                                              </div>
                                                                                                                                                                                    
                                                           </div>
                                                     <div class="col-md-2"></div>
                                                    <div class= "col-md-3">
                                                   <div class="form-group label-floating"> 
                                                             <label class="control-label">สถานะ<small class="text-danger">*</small></label>
                                  
                                       {{ Form::select('alivem', [ ''=>'เลือก', 'ยังมีชีวิตอยู่' => 'ยังมีชีวิตอยู่','ถึงแก่กรรม' => 'ถึงแก่กรรม'],null, ['class' => 'form-control','required']) }} 
                                                                                                                                                                                       
                                                                                                                                                                                         
                                        </div>
                                    </div>
                                    </div>




        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >ถัดไป</button>

</div>

<div class="row setup-content" id="step-5">

                <h4 class="text-danger">  กรุณาคลิกเลือกที่ต้องการระบุการศึกษา </h4>
                <table class="table table-striped" id="foo">
                        <thead>
                          <tr>
                            <th style="text-align:center">ระดับการศึกษา</th>
                            <th style="text-align:center">สถาบัน</th>
                            <th style="text-align:center">เริ่มปีการศึกษา</th>
                            <th style="text-align:center">จบปีการศึกษา</th>
                            <th style="text-align:center">เกรดเฉลี่ย</th>
                            <th style="text-align:center">วุฒิที่ได้รับ</th>
                            <th style="text-align:center">สาขา</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="text-align:center"> <input type="checkbox" id="form_setchange1"/><br> ประถมศึกษา  </td>
                            <td>
                            {{Form::text('primary','',['class'=>'form-control','id'=>'primary','disabled','required'])}}
                            </td>
                            <td>{{Form::text('year1','',['class'=>'form-control','id'=>'year1','disabled','required'])}}</td>
                            <td> {{Form::text('year2','',['class'=>'form-control','id'=>'year2','disabled','required'])}}</td>
                            <td> {{Form::text('gpa','',['class'=>'form-control','id'=>'gpa','disabled','required'])}}</td>
                            <td>   {{Form::text('degree1','',['class'=>'form-control','id'=>'degree1','disabled','required'])}}</td>
                            <td> {{Form::text('major','',['class'=>'form-control','id'=>'major','disabled','required'])}}</td>
                          </tr>
                          
                          <tr>
                            <td style="text-align:center"><input type="checkbox" id="form_setchange2" /><br>มัธยมศึกษา</td>
                            <td>{{Form::text('secondary','',['class'=>'form-control','required','id'=>'secondary','disabled'])}}</td>
                            <td>{{Form::text('year3','',['class'=>'form-control','required','id'=>'year3','disabled'])}}</td>
                            <td>{{Form::text('year4','',['class'=>'form-control','required','id'=>'year4','disabled'])}}</td>
                            <td>{{Form::text('gpas','',['class'=>'form-control','required','id'=>'gpas','disabled'])}}</td>
                            <td> {{Form::text('degree2','',['class'=>'form-control','id'=>'degree2','disabled'])}}</td>
                            <td>{{Form::text('majors','',['class'=>'form-control','required','id'=>'majors','disabled'])}}</td>
                          </tr>
                        
                          <tr>
                            <td style="text-align:center"><input type="checkbox" id="form_setchange3"/><br>อาชีวะศึกษา</td>
                            <td>{{Form::text('vocation','',['class'=>'form-control','id'=>'vocation','disabled','required'])}}</td>
                            <td>{{Form::text('year5','',['class'=>'form-control','id'=>'year5','disabled','required'])}}</td>
                            <td>{{Form::text('year6','',['class'=>'form-control','id'=>'year6','disabled','required'])}}</td>
                            <td>{{Form::text('gpav','',['class'=>'form-control','id'=>'gpav','disabled','required'])}}</td>
                            <td> {{Form::text('degree3','',['class'=>'form-control','id'=>'degree3','disabled','required'])}}</td>
                            <td> {{Form::text('majorv','',['class'=>'form-control','id'=>'majorv','disabled','required'])}}</td>
                           
                          </tr>
                         
                          <tr>
                                <td style="text-align:center"><input type="checkbox" id="form_setchange4"/><br>อนุปริญญา</td>
                                <td>  {{Form::text('diploma','',['class'=>'form-control','id'=>'diploma','disabled','required'])}}</td>
                                <td> {{Form::text('year7','',['class'=>'form-control','id'=>'year7','disabled','required'])}}</td>
                                <td> {{Form::text('year8','',['class'=>'form-control','id'=>'year8','disabled','required'])}}</td>
                                <td>{{Form::text('gpad','',['class'=>'form-control','id'=>'gpad','disabled','required'])}}</td>
                                <td>  {{Form::text('majord','',['class'=>'form-control','id'=>'majord','disabled','required'])}}</td>
                                <td>{{Form::text('degree4','',['class'=>'form-control','id'=>'degree4','disabled','required'])}}</td>
                              </tr>

                              <tr>
                                    <td style="text-align:center"><input type="checkbox" id="form_setchange5"/><br>ปริญญาตรี</td>
                                    <td> {{Form::text('bachelor','',['class'=>'form-control','required','id'=>'bachelor','disabled'])}}</td>
                                    <td>{{Form::text('year9','',['class'=>'form-control','required','id'=>'year9','disabled'])}}</td>
                                    <td>{{Form::text('year10','',['class'=>'form-control','required','id'=>'year10','disabled'])}}</td>
                                    <td>{{Form::text('gpab','',['class'=>'form-control','required','id'=>'gpab','disabled'])}}</td>
                                    <td>{{Form::text('majorb','',['class'=>'form-control','required','id'=>'majorb','disabled'])}}</td>
                                    <td>{{Form::text('degree5','',['class'=>'form-control','required','id'=>'degree5','disabled'])}}</td>
                                  </tr>


                         <tr>
                            <td style="text-align:center"><input type="checkbox" id="form_setchange6"/><br>ปริญญาโท</td>
                            <td>{{Form::text('master','',['class'=>'form-control','id'=>'master','disabled','required'])}}</td>
                            <td>{{Form::text('year11','',['class'=>'form-control','id'=>'year11','disabled','required'])}}</td>
                            <td>{{Form::text('year12','',['class'=>'form-control','id'=>'year12','disabled','required'])}}</td>
                            <td>{{Form::text('gpam','',['class'=>'form-control','id'=>'gpam','disabled','required'])}}</td>
                            <td>{{Form::text('majorm','',['class'=>'form-control','id'=>'majorm','disabled','required'])}}</td>
                            <td>{{Form::text('degree6','',['class'=>'form-control','id'=>'degree6','disabled','required'])}}</td>

                          </tr>

                           <tr>
                                <td style="text-align:center"><input type="checkbox" id="form_setchange7"/><br>อื่นๆ</td>
                                <td>{{Form::text('otherE','',['class'=>'form-control','id'=>'otherE','disabled','required'])}}</td>
                                <td>{{Form::text('year13','',['class'=>'form-control','id'=>'year13','disabled','required'])}}</td>
                                <td>{{Form::text('year14','',['class'=>'form-control','id'=>'year14','disabled','required'])}}</td>
                                <td>{{Form::text('gpao','',['class'=>'form-control','id'=>'gpao','disabled','required'])}}</td>
                                <td>{{Form::text('majoro','',['class'=>'form-control','id'=>'majoro','disabled','required'])}}</td>
                                <td>{{Form::text('degree7','',['class'=>'form-control','id'=>'degree7','disabled','required'])}}</td>
                              </tr>

                        </tbody>

                    </table>    
                    
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >ถัดไป</button>
            </div>

            <div class="row setup-content" id="step-6">
<h3>ภาษา</h3>
                        <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th style="text-align:center">ประเภทภาษา</th>
                                            <th style="text-align:center">การพูด</th>
                                            <th style="text-align:center">การเข้าใจ</th>
                                            <th style="text-align:center">การเขียน</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td style="text-align:center">ไทย *</td>
                                            <td>
                                                    <div class="form-group {{ $errors->has('thais') ? 'has-error' : '' }}">
                                                        {{ Form::select('thais', [
                                                                '' =>'::เลือก::', 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control','required']) }}
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
                                                           ],null, ['class' => 'form-control','required']) }}
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
                                                   ],null, ['class' => 'form-control','required']) }}
                                                    <span class="text-danger">{{ $errors->first('thair') }}</span>
            
                                                </td>
                                          </tr>
                                          <tr>
                                            <td style="text-align:center"> อังกฤษ *</td>
                                            <td>
                                                <div class="form-group {{ $errors->has('engliss') ? 'has-error' : '' }}">
                                                        {{ Form::select('engliss', [
                                                                '' =>'::เลือก::', 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control','required']) }}
                                                    <span class="text-danger">{{ $errors->first('engliss') }}</span>
            
                                                </td>
                                            <td>
                                                <div class="form-group {{ $errors->has('englisl') ? 'has-error' : '' }}">
                                                        {{ Form::select('englisl', [
                                                                '' =>'::เลือก::', 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control','required']) }}
                                                    <span class="text-danger">{{ $errors->first('englisl') }}</span>
            
                                                </td>
                                            <td>
                                                <div class="form-group {{ $errors->has('englisr') ? 'has-error' : '' }}">
                                                        {{ Form::select('englisr', [
                                                                '' =>'::เลือก::', 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control','required']) }}
                
                                                    <span class="text-danger">{{ $errors->first('englisr') }}</span>
                                                    
            
                                                </td>
                                          </tr>
                                          <tr>
                                            <td style="text-align:center" >อื่นๆ <input type="text" name="otherr"  style="width:100%"  id="otherr"  name="otherr" class="form-control"/> </td>
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
                                      <h3>ประวัติการทำงาน</h3>
                                      <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">1.ชื่อสถานที่ประกอบการ</label>
                                                                    {{Form::text('list_of_employed1','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                      
                                                </div>
                                               
                                                <div class="col-md-3">

                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ลักษณะงานที่รับผิดชอบ</label>
                                                                    {{Form::text('job_description1','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div>
                                                </div>

                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ตำแหน่ง</label>
                                                                    {{Form::text('position1','',['class'=>'form-control'])}} 
                                                               </div>
                                                            </div> 
                                                  
                                                </div>
                                                
                                              
                                                </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >สาเหตุที่ออก</label>
                                                                    {{Form::text('reasonLeaving1','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div>   
                                                    </div>

                                                    <div class="col-md-3">

                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                        {{Form::text('lastsalary1','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                    
                                                    </div>

                                                </div>
                                            
                                               
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                
                                                    <div class="col-md-3">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label>ระยะงานเริ่ม</label>
                                                                        {{Form::date('start_job_duration1','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                    
                                                    </div>
                                                    

                                                    <div class="col-md-3">
                                                        
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label>ระยะงานสิ้นสุด</label>
                                                                        {{Form::date('end_job_duration2','',['class'=>'form-control'])}} 
                                                                   </div>
                                                                </div> 
                                                        

                                                            </div> 
                                            
                                                        </div> 
                                                        <hr>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">2.ชื่อสถานที่ประกอบการ</label>
                                                                    {{Form::text('list_of_employed2','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                   
                                                </div>
                                               
                                                <div class="col-md-3">
                                                         <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >ลักษณะงานที่รับผิดชอบ </label>
                                                                    {{Form::text('job_description2','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                   
                                                   
                                                </div>

                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >ตำแหน่ง</label>
                                                                    {{Form::text('position2','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                   
                                                </div>



                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">

                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label>ระยะงานเริ่ม</label>
                                                                    {{Form::date('start_job_duration3','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                
                                                </div>
                                                <div class="col-md-3">
        
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label  >ระยะงานสิ้นสุด</label>
                                                                    {{Form::date('end_job_duration4','',['class'=>'form-control'])}} 
                                                               </div>
                                                            </div> 
                                    
                                                </div>
                                                
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >สาเหตุที่ออก</label>
                                                                    {{Form::text('reasonLeaving2','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                     
                                                </div>
                                               
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                    {{Form::text('lastsalary2','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >3.ชื่อสถานที่ประกอบการ</label>
                                                                    {{Form::text('list_of_employed3','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                     
                                                </div>
                                               
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >ลักษณะงานที่รับผิดชอบ</label>
                                                                    {{Form::text('job_description3','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                  
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" > ตำแหน่ง</label>
                                                                    {{Form::text('position3','',['class'=>'form-control'])}} 
                                                               </div>
                                                    </div> 

                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label >ระยะงานเริ่ม</label>
                                                                    {{Form::date('start_job_duration5','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label>ระยะงานสิ้นสุด</label>
                                                                    {{Form::date('end_job_duration6','',['class'=>'form-control'])}} 
                                                               </div>
                                                    </div> 
                                                </div>
                                                
                                                  
                                                </div>
                                               
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >สาเหตุที่ออก</label>
                                                                    {{Form::text('reasonLeaving3','',['class'=>'form-control'])}} 
                                                               </div>
                                                    </div> 
                                                   
                                                </div>
                          
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                    {{Form::text('lastsalary3','',['class'=>'form-control'])}} 
                                                               </div>
                                                    </div> 
                                                   
                                                </div>
                                            </div>

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >ถัดไป</button>
                                        </div>

    <div class="row setup-content" id="step-7">
        <h3>อื่นๆ</h3>
               
        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>
                            </div>
                        </div>
                        </div>
                    <div class="row">
                          
                        <div class="col-md-3">
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ชื่อ-นามสกุล<small class="text-danger">*</small></label>
                                            {{Form::text('namecm','',['class'=>'form-control','required'])}}        
                                       </div>
                                    </div> 
                          
                        </div>
                        
                        <div class="col-md-3 ">
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ความสัมพันธ์<small class="text-danger">*</small></label>
                                            {{Form::text('lastnamecm','',['class'=>'form-control','required'])}}        
                                       </div>
                                    </div> 
                         

                        </div>
                       
                        <div class="col-md-3 ">   
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">โทรศัพท์<small class="text-danger">*</small></label>
                                            {{Form::text('telecm','',['class'=>'form-control','required'])}}        
                                       </div>
                                </div>        
                            </div>

                          
                            <div class="col-md-3">   
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ตำแหน่ง<small class="text-danger">*</small></label>
                                            {{Form::text('positioncm','',['class'=>'form-control','required'])}}
                                       </div>
                                </div>                   
                        </div>      
                           
                        </div>
                        <div class="row">
                                <div class="col-md-5">
                                        <div class="input-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">สถานที่ทำงาน/ที่อยู่<small class="text-danger">*</small></label>
                                                    

                                                    <textarea  name="firm" type="text"  style="text-align:center" class ='form-control' required></textarea>
                                               </div>
                                        </div>
                                </div>
                        </div>
                   <hr>

                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >ความรู้พิเศษ:<small class="text-danger">*</small></label>
                                
                        
                            </div>
                        </div>  
                    </div>  
                    <div class="row">
                                <div class="col-md-3">
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <input type="checkbox" class="form-check-input" id="portfolio1" name="portfolio1" value="คอมพิวเตอร์" required> <label class="control-label"> คอมพิวเตอร์<small class="text-danger">*</small></label>
                                            {{Form::text('computer','',['required'])}}      
                                       </div>
                                    </div>
                                </div> 
                        
                        <div class="col-md-10">
                            <div class="form-group"> <br><br>
                                <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร"> เครื่องโทรสาร &emsp;&emsp;
                                <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย  &emsp;&emsp;
                                <input type="text" name="dot" id="dot"  style="width:50px"/>คำ/นาที &emsp;&emsp;
                                <input type="checkbox" class="form-check-input" id="portfolio1" name="portfolio2" value="อื่นๆ"> อื่นๆ  <input type="text" name="portfolio3" id="portfolio3"  style="width:250px"/> &emsp;&emsp;
                                </div>
                        </div>
                        </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>ในตำแหน่งที่ต้องการต้องมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)<small class="text-danger">*</small></label> &emsp;&emsp;
                                <input type="radio" name="crash1" value="ขัดข้อง"  id="crash1" required > ขัดข้อง
                                <input type="radio" name="crash1" value="ไม่ขัดข้อง" id="crash1" required > ไม่ขัดข้อง                                    
                                </div>
                        </div>
                        </div>
                    <div class="row">
                           
                        <div class="col-md-5">
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">ชื่อ-นามสกุล</label>
                                {{Form::text('compd','',['class'=>'form-control' ,'required','id'=>'compd'])}} 
                            </div>
                            </div>
                        </div>
                      
                        <div class="col-md-4">
                                <div class="input-group">
                                        <div class="form-group label-floating">
                                                <label class="control-label"> สถานที่ทำงาน:</label>
                                
                                
                                {{Form::text('compa','',['class'=>'form-control','required','id'=>'compa'])}} 
                            </div>
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป<small class="text-danger">*</small></label> &emsp;&emsp;&ensp;
                                <input type="radio" name="crash2" value="ขัดข้อง"  required >ขัดข้อง    &emsp;&emsp;&emsp;&emsp;
                                <input type="radio" name="crash2" value="ไม่ขัดข้อง"  required > ไม่ขัดข้อง
                                  
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม<small class="text-danger">*</small></label>&emsp;&emsp;
                                <input type="radio" name="crash3" value="ขัดข้อง"  required > ขัดข้อง  &emsp;&emsp;&emsp;&emsp;
                                <input type="radio" name="crash3" value="ไม่ขัดข้อง"  required >ไม่ขัดข้อง                                
                                                
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ท่านสามารถขับรถยนต์ได้หรือไม่ <small class="text-danger">*</small> </label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;
                                <input type="radio" name="yes" value="ได้"  required > ได้  &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                                <input type="radio" name="yes" value="ไม่ได้"  required > ไม่ได้
                                
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ท่านมีรถยนต์ส่วนตัวหรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                                <input type="radio" name="owncar" value="มี"  required >มี &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                                <input type="radio" name="owncar" value="ไม่มี"  required >ไม่มี
                                    <span class="text-danger">{{ $errors->first('owncar') }}</span> 
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคยชื่อ:</label> {{Form::text('workk','',['class'=>'form-control'])}} 
                                </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                                <div class="form-group {{ $errors->has('dateworkk') ? 'has-error' : '' }}">
                                        <label>ท่านพร้อมที่จะปฎิบัติงานกับบริษัทฯได้ในวันที่:<small class="text-danger">*</small></label>  
                                        {{Form::date('dateworkk','',['class' => 'form-control','required'])}} 
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
                            <div class="form-group">
                                <label>ท่านเคยถูกให้ออกจากงานหรือไม่?<small class="text-danger">*</small></label> &emsp;&emsp;                                                                  
                                <input type="radio" name="exitwork" value="เคย" id="exitwork" required >เคย เพราะ &emsp; {{Form::text('because','',['id'=>'because'])}} &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     
                                <input type="radio" name="exitwork" value="ไม่เคย" id="exitwork"  required >ไม่เคย 
                       
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?<small class="text-danger">*</small></label>&emsp;&emsp;
                                <input type="radio" name="serious_ill" value="เคย"  required > เคย &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" name="serious_ill" value="ไม่เคย"  required >ไม่เคย
                              
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ท่านเคยไดรั้บโทษทาง อาญา หรือ จำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?<small class="text-danger">*</small></label>&emsp;&emsp;&emsp;&ensp;
                                <input type="radio" name="offense" value="เคย"  required >เคย   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" name="offense" value="ไม่เคย"  required >ไม่เคย
                               
                                </div>
                        </div>
                        </div> <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ขณะนี้คุณตั้งครรภ์หรือไม่?<small class="text-danger">*</small> </label>&emsp;&emsp;
                                <input type="radio" name="pregnant" value="ใช่"  required >ใช่ &emsp;&emsp;&emsp;
                                <input type="radio" name="pregnant" value="ไม่ใช่"  required > ไม่ใช่
                               
                                </div>
                        </div>
                        </div>  
       
               
               
               
                <button class="btn btn-success btn-lg pull-right" type="submit">บันทึก</button>
    </div>
    {{ Form::close()}}
</div>

@endsection