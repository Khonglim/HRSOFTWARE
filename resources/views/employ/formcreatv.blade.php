<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HRNGG|สมัครงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
    <link href="{{ asset('new/css/style2.css') }}"   rel='stylesheet' type='text/css' />
    <style>
    body {
      font-family: 'Prompt', sans-serif;
     
    }
    </style>

<style type="text/css">
#second,#third,#result,#three,#for{
    display: none;
}
    
    </style>
    <style type="text/css">
        #scroll_demo {
          width:100%;
          height:100%;
         
          overflow:auto;
        }
        #scroll_demo2 {
          width:90%;
          height:90%;
         
          overflow:auto;
        }

input.invalid, textarea.invalid{
	border: 2px solid red;
}

input.valid, textarea.valid{
	border: 2px solid green;
}
        </style>
</head>
<body class="bg-dark">
        <div class="banner-inner ">
              <br>
              <center>
                <img src="{{URL::asset('img/NGGlogo.jpg')}}"  width="110px" height="110px"> 
              </center>
        </div> 
 <div class="container">
        
   
     <div class="row justify-content-center">
        
       <div class="col-md-12 bg-light p-4 rounded mt-5">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                
            </div>
   
    
    
     @endif
           <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="reult">สมัครงานออนไลน์</h5>
          
          <div class="progress mb-3" style="height:40px;">
                <div class="progress-bar bg-danger progress-bar-striped  progress-bar-animated " role="progressbar" style="width:20%" id="progressBar">
                        <b class="lead" id="progressText">Step - 1</b>
                   </div>
          </div>
        
           
        <form action=" {{url('employee')}}" method="post" id="form-data" enctype="multipart/form-data" id="inviterSave">
                @csrf
                <div id="first">
                    <h4 class="text-center bg-primary p-1rounded tect-light">ประวัติส่วนตัว</h4>
                    <hr>
                    <div class="form-group">
                            <div class="row">
                                   
                                    <div class="col-md-3 ">
                                            <div class="form-group ">
                                                <label class="control-label">เงินเดือนที่ต้องการ<small class="text-danger">*</small></label>
                                                {{ Form::text('salaryngg','', ['class' => 'form-control ','id'=>'salaryngg']) }}
                                                <b  class="text-danger" id="salarynggError"></b>
                                               </div>
                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label class="control-label">ตำแหน่งที่จะสมัคร<small class="text-danger">*</small></label>
                                                {{ Form::text('positionngg','', ['class' => 'form-control','id'=>'positionngg']) }}
                                                <b  class="text-danger" id="positionnggError"></b>
                                               </div>
                            
                                        </div>

                                        <div class="col-md-3">
                                                <div class="form-group ">
                                                    <label class="control-label">สาขาที่จะสมัคร</label>
                                                    {{ Form::text('talent','', ['class' => 'form-control','id'=>'talent']) }}
                                                  
                                                   </div>
                                
                                            </div>
                                   
                            </div>
                            
                            <hr>
                            
                                           <div class="row">    
                                                       
                                               <div class="col-md-3"> 
                                                            <div class="form-group ">
                                                            <label class="control-label">คำนำ<small class="text-danger">*</small></label>
                                                                                     {{ Form::select('fronname', [''=>'เลือก'  ,'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว'],null, ['class' => 'form-control','id'=>'fronname']) }}
                                                                                     <b  class="text-danger" id="fronnameError"></b>
                                                                                    </div>  
                                            </div>  
                                                    <div class="col-md-3"> 
                                                                    <div class="form-group ">
                                                        <label class="control-label">ชื่อ<small class="text-danger">*</small></label>
                                                        {{Form::text('name','',['class'=>'form-control','id'=>'name'])}}
                                                        <b  class="text-danger" id="nameError"></b>
                                                    </div>  
                                            </div>  
                                                     <div class="col-md-3"> 
                                                                    <div class="form-group ">
                                                     <label class="control-label">นามสกุล<small class="text-danger">*</small></label>
                                                {{Form::text('lastname','',['class'=>'form-control','id'=>'lastname'])}} 
                                                <b  class="text-danger" id="lastnameError"></b>
                                                    </div> 
                                            </div>   
                            
                                                    <div class="col-md-3"> 
                                                                    <div class="form-group ">
                                                                    <label class="control-label">รูปภาพ<small class="text-danger">*ขนาดไม่เกิน 512kb</small></label>
                                                                    {{Form::file('image',['id'=>'image'])}}
                                                                   
                                                                  </div>   
                                                                  <b  class="text-danger" id="imageError"></b>           
                                           </div>
                                    </div>
                            </div>
           

                            <div class="form-group">     
                                    <div class="row">    
                                                  <div class="col-md-3 ">
                                                            <div class="form-group ">
                                                     <label class="control-label">ชื่อเล่น<small class="text-danger">*</small></label>
                                                     {{Form::text('nikname','',['class'=>'form-control','id'=>'nikname'])}}  
                                                     <b  class="text-danger" id="niknameError"></b>        
                                                    </div>
                                            </div>
                                                    <div class="col-md-3 ">
                                             <div class="form-group ">
                                                            <label class="control-label">วันเกิด<small class="text-danger">*</small></label>
                                                    {{Form::date('birthday','',['class'=>'form-control','id'=>'birthday'])}}  
                                                      <b  class="text-danger" id="birthdayError"></b>         
                                                     </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                                    <div class="form-group ">
                                                          <label class="control-label">อายุ<small class="text-danger">*</small></label>
                                                        {{Form::text('age','',['class'=>'form-control','id'=>'age'])}}   
                                                        <b  class="text-danger" id="ageError"></b>    
                                                    </div>
                                            </div>
                                                    <div class="col-md-3">
                                                                    <div class="form-group ">
                                                  
                                           
                                                       <label class="control-label">เพศ<small class="text-danger">*</small></label>
                                                       {{ Form::select('gender', [ '' => 'เลือก', 'ชาย' => 'ชาย','หญิง' => 'หญิง'],null, ['class' => 'form-control','id'=>'gender']) }} 
                                                       <b  class="text-danger" id="genderError"></b>
                                                      </div>  
                                        </div>                           
                                        </div>
                                           
                                                </div>
                                            

                                            <div class="form-group">  

                                                    <div class="row">
                                                                  
                                                                    <div class="col-md-3">
                      
                                                                         
                                                                                  <div class="form-group ">
                                                                                         <label class="control-label">น้ำหนัก<small class="text-danger">*</small></label>
                                                                                         {{Form::text('weight','',['class'=>'form-control','id'=>'weight'])}}   
                                                                                         <b  class="text-danger" id="weightError"></b>    
                                                                                 </div>
                                                                              
                                                                           
                                                                    </div>
                      
                                                                    <div class="col-md-3">
                                                                         
                                                                                  <div class="form-group ">
                                                                                         <label class="control-label">ส่วนสูง/ซม.<small class="text-danger">*</small></label>
                                                                                         {{Form::text('height','',['class'=>'form-control','id'=>'height'])}}
                                                                                         <b  class="text-danger" id="heightError"></b>    
                                                                                 </div>
                                                                            
                                                                          </div>

                                                                          <div class="col-md-3 ">
                                    
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">สถานะทางทหาร<small class="text-danger">*</small></label> 
                                                                                    {{ Form::select('military_service', [''=>'เลือก','-' =>'ไม่มี','ได้รับการยกเว้น' => 'ได้รับการยกเว้น','ศึกษาวิชาทหาร' => 'ศึกษาวิชาทหาร','ผ่านการเกณฑ์ทหาร' => 'ผ่านการเกณฑ์ทหาร'],null, ['class' => 'form-control']) }}
                                                                               
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        
                                                              </div>
                    
                                    </div>
                                    <hr>
                                    <div class="form-group"> 
                                            <div class="row">
            
                                                            <div class="col-md-3" >
                                                              
                                                                    <label class="control-label">สัญชาติ<small class="text-danger">*</small></label>
                                                                    {{ Form::select('nationality', [ 'ไทย' => 'ไทย','โปรดระบุ' =>$items2],null, ['class' => 'form-control','id'=>'nationality']) }}    
                                                                    <b  class="text-danger" id="nationalityError"></b>   
                                                                </div>
                                                           
                                                            <div class="col-md-3">
                                                               
                                                                    <label class="control-label">เชื้อชาติ<small class="text-danger">*</small></label>
                                                                    {{ Form::select('race', [ 'ไทย' => 'ไทย','โปรดระบุ' =>$items2],null, ['class' => 'form-control','id'=>'race']) }}
            
                                                                    <b  class="text-danger" id="raceError"></b>   
                                                                    </div>
                                                         
                                                          
                                                            <div class="col-md-3">
                                                               
                                                                    <label class="control-label">ศาสนา<small class="text-danger">*</small></label>  
                                                                    {{ Form::select('religion', ['พุทธ' => 'พุทธ','อิสลาม' => 'อิสลาม','คริสต์'=> 'คริสต์','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control','id'=>'religion']) }}
                                                                    <b  class="text-danger" id="religionError"></b>  
                                                        </div>
            
                                                        
               
                                                         
                                                            
                                                </div>
            
                            </div>







<div class="form-group"> 
        <div class="row">
                        <div class="col-md-3">
                               
                                        <div class="form-group ">
                                                <label class="control-label">พี่น้องกี่คน</label>
                                                {{Form::text('brothers','',['class'=>'form-control','id'=>'brothers'])}}  
                                                <b  class="text-danger" id="brothersError"></b>  
                                       </div>
                                    </div>
                           
                      
                      
                        <div class="col-md-3">
                                
                                        <div class="form-group ">
                                                <label class="control-label">เป็นคนที่</label>
                                                {{Form::text('number','',['class'=>'form-control','id'=>'number'])}}  
                                                <b  class="text-danger" id="numberError"></b> 
                                       </div>
                      </div>

                        
                      <div class="col-md-4 ">
                                        
                            <div class="form-group ">
                                    <label class="control-label">เลขบัตรประชาชน/บัตรประจำตัวผู้เสียภาษี<small class="text-danger">*</small> </label>
                                    {{Form::text('idcard','',['class'=>'form-control','id'=>'idcard'])}}
                                    <b  class="text-danger" id="idcardError"></b>    
                           </div>
                       
              
            </div>    
            
            <div class="col-md-3 ">
                                      
                    <div class="form-group ">
                            <label class="control-label">ออกให้ ณ อำเภอ/เขต<small class="text-danger">*</small></label>
                         {{ Form::text('issued','' , ['class' => 'form-control','id'=>'issued',]) }}
                         <b  class="text-danger" id="issuedError"></b>    
                   </div>
            
        
       </div>



       <div class="col-md-3">
            <div class="form-group" >
                    <label class="control-label">วันออกบัตร<small class="text-danger">*</small></label>
                {{Form::date('issueddate','',['class'=>'form-control','id'=>'issueddate'])}}   
                <b  class="text-danger" id="issueddateError"></b>  
               
                </div>
        </div>
       
        <div class="col-md-3">
            <div class="form-group" >
                    <label class="control-label">บัตรหมดอายุ<small class="text-danger">*</small></label>
                {{Form::date('expid','',['class'=>'form-control','id'=>'expid'])}} 
                <b  class="text-danger" id="expidError"></b>    
               
                </div>
        </div>  
        <div class="col-md-3">
                                            
                <div class="form-group label-floating">
                        <label class="control-label">จังหวัด<small class="text-danger">*</small></label>
                        {{ Form::select('province_crad', [ '' => 'เลือก','จังหวัด' =>$items],null, ['class' => 'form-control','id'=>'province_crad']) }}   
                        <b  class="text-danger" id="province_cradError"></b>     
               </div>
          
        </div>                
    </div>
</div>

<hr>

<div class="form-group">
   <div class="row">
        <div class="col-md-5 ">
                       
                <div class="form-group ">
                        <label class="control-label ">ที่อยู่ตามบัตรประชาชน<small class="text-danger">*</small></label>
                        <textarea name="address2"  id="address2"  class="form-control"  rows="3" id="address2" >{{ old('address2') }}</textarea> 
                        <b  class="text-danger" id="address2Error"></b>    
                </div>
         </div>
         <div class="col-md-5">
                <div class="form-group ">
                    <input type="checkbox" onchange="document.getElementById('address1').value=document.getElementById('address2').value" > <label class="control-label text-danger">ที่อยู่เดียวกันกับบัตรประชาชน</label>           <label class="control-label">ที่อยู่ปัจจุบันที่ติดต่อได้<small class="text-danger">*</small></label> 
                        <textarea name="address1" id="address1" class="form-control"  rows="3" id="address1" >{{ old('address1') }}</textarea> 
                        <b  class="text-danger" id="address1Error"></b>       
               </div>
        </div>
   </div>

</div>
<hr>
    <div class="form-group">
            <br>
                              <center>  <a href="#" class="btn btn-danger" id="next-1">ถัดไป</a>
                                <br>  <b class="text-danger"  id="allError"></b></center>
                             </div>
               
                            </div>
                <div id="second">
                        <div class="row">
                                                                    
                                <div class="col-md-4 ">
                                        <div class="form-group ">
                                                <label class="control-label">โทรศัพท์ที่ติดต่อ<small class="text-danger">*</small></label>
                                                {{Form::text('tel','',['class'=>'form-control','id'=>'tel'])}}  
                                                <b  class="text-danger" id="telError"></b>       
                                       </div>
                                    
                                </div>
                               
                                     <div class="col-md-4 ">
                                        <div class="form-group ">
                                                <label class="control-label">โทรศัพท์บ้าน</label>
                                                {{Form::text('home','',['class'=>'form-control','id'=>'home'])}}
                                                <b  class="text-danger" id="homeError"></b>       
                                       </div>
                                  
                                    </div>

                                    <div class="col-md-4 ">
                                            <div class="form-group ">
                                                    <label class="control-label">โทรศัพท์มือถือ<small class="text-danger">*</small></label>
                                                    {{Form::text('moblie','',['class'=>'form-control','id'=>'moblie'])}}  
                                                    <b  class="text-danger" id="moblieError"></b>    
                                           </div>
                                      
                                    </div>
                                   
                                   

                                </div>
                                <div class="row">
                                                                               
                                                                              
                                                                               
                                        <div class="col-md-4 ">
                                                <div class="form-group ">
                                                        <label class="control-label">โทรศัพท์สำนักงาน</label>
                                                        {{Form::text('office','',['class'=>'form-control','id'=>'office'])}}
                                                        <b  class="text-danger" id="officeError"></b>        
                                               </div>
                                               
                                        </div>
                                              
                                                <div class="col-md-4">
                                                        <div class="form-group ">
                                                                <label class="control-label">อีเมล<small class="text-danger">*</small></label>
                                                                {{Form::text('email_2','',['class'=>'form-control','id'=>'email'])}}  
                                                                <b  class="text-danger" id="emailError"></b>      
                                                       </div>
                                                       
                                                 
                                              </div>

                                            
                                                  
                                                    <div class="col-md-4" >
                                                        <div class="form-group ">
                                                            <label class="control-label" >สถานะความเป็นอยู่<small class="text-danger">*</small></label>  
                                                                {{ Form::select('living_status', [''=>'เลือก', 
                                                                                            'บ้านส่วนตัว' => 'บ้านส่วนตัว',
                                                                                            'บ้านเช่า' => 'บ้านเช่า',
                                                                                            'อาศัยกับบิดามารดา'=> 'อาศัยกับบิดามารดา',
                                                                                            'อาศัยกับผู้อื่น'=>'อาศัยกับผู้อื่น'
                                                                                ],null, ['class' => 'form-control','id'=>'living_status']) }}
                                                                         <b  class="text-danger" id="living_statusError"></b>      
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group ">
                                                            <label class="control-label" >สถานะครอบครัว<small class="text-danger">*</small></label>  
                                                                {{ Form::select('marital_status', [
                                                                                           ''=>'เลือก', 
                                                                                            'โสด' => 'โสด',
                                                                                            'สมรส' => 'สมรส',
                                                                                            'หย่า'=> 'หย่า',
                                                                                            'หม้าย'=>'หม้าย',
                                                                                            'แยกกันอยู่'=>'แยกกันอยู่'
                                                                                ],null, ['class' => 'form-control','id'=>'marital_status']) }}
                                                                                 <b  class="text-danger" id="marital_statusError"></b>      
                                                                              
                                                                </div>
                                                    </div>
                                                   
                                            </div>
                   

                                        <hr>
                                            <div class="row">
                                                  
                                                    <div class="col-md-4">
                                                        <div class="form-group ">
                                                            <label class="control-label" >กรณีแต่งงาน</label>
                                                                {{ Form::select('if_marricd', ['' =>'เลือก','จดทะเบียนสมรส' => 'จดทะเบียนสมรส','ไม่ได้จดทะเบียนสมรส' => 'ไม่ได้จดทะเบียนสมรส'],null, ['class' => 'form-control','id'=>'if_marricd']) }}
                                                                <b  class="text-danger" id="if_marricdError"></b> 
                                                            </div>
                                                    </div>
                                                  
                                                    <div class="col-md-4">
                                                        <div class="form-group ">
                                                            <label class="control-label" >คู่มสมรส</label>
                                                                {{ Form::select('spouse', ['' =>'','มี' => 'มี','ไม่มี' => 'ไม่มี'],null, ['class' => 'form-control','id'=>'spouse']) }}
                                                                <b  class="text-danger" id="spouseError"></b> 
                                                            </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="form-group ">
                                                                    <label class="control-label">ชื่อคู่สมรส</label>
                                                                    {{Form::text('name_spouse','',['class'=>'form-control','id'=>'name_spouse'])}}  
                                                                    <b  class="text-danger" id="name_spouseError"></b>    
                                                           </div>
                                                     
                                                    </div>

                                                    </div>


                                                    <div class="row">
                                                           
                                                           
                                                          
                                                            <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                            <label class="control-label">อาชีพคู่สมรส</label>
                                                                            {{Form::text('spouse_occupation','',['class'=>'form-control','id'=>'spouse_occupation'])}}  
                                                                            <b  class="text-danger" id="spouse_occupationError"></b>      
                                                                   </div>
                                                              
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                            <label class="control-label">สถานที่ทำงาน</label>
                                                                            {{Form::text('firm_address','',['class'=>'form-control','id'=>'firm_address'])}} 
                                                                            <b  class="text-danger" id="firm_addressError"></b>         
                                                                   </div>
                                        
                                                            </div>
                                                            <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                            <label class="control-label">โทรศัพท์</label>
                                                                            {{Form::text('spouse_tel','',['class'=>'form-control','id'=>'spouse_tel'])}}   
                                                                            <b  class="text-danger" id="spouse_telError"></b>    
                                                                   </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                            <label class="control-label">จำนวนบุตรทั้งหมด/คน</label>
                                                                            {{Form::text('children','',['class'=>'form-control','id'=>'children'])}}  
                                                                            <b  class="text-danger" id="childrenError"></b>  
                                                                   </div>
                                                               
                                                            </div>

                                                            <div class="col-md-4">
                                                                    <div class="form-group ">
                                                                            <label class="control-label">หญิง/คน</label>
                                                                            {{Form::text('girls','',['class'=>'form-control','id'=>'girls'])}}  
                                                                            <b  class="text-danger" id="girlsError"></b>   
                                                                   </div>
                                                                   
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                                <label class="control-label">ชาย/คน </label>
                                                                                        {{Form::text('boy','',['class'=>'form-control','id'=>'boy'])}}  
                                                                                        <b  class="text-danger" id="boyError"></b>      
                                                                       </div>
                                                                   
                                                                </div>

                                                            </div>
                                                                <div class="row">
                                                                        <div class="col-md-4">
                                                                                            <div class="form-group ">
                                                                                                    <label class="control-label"> จำนวนบุตรกำลังศึกษา/คน </label>
                                                                                                    {{Form::text('school','',['class'=>'form-control','id'=>'school'])}}  
                                                                                                    <b  class="text-danger" id="schoolError"></b>       
                                                                                           </div>
                                                                
                                                                                    </div>        
                                                                                   
                                                                                    <div class="col-md-4">
                                                                                            <div class="form-group ">
                                                                                                    <label class="control-label"> จำนวนบุตรที่อายุเกิน21ปี/คน </label>
                                                                                                    {{Form::text('over21','',['class'=>'form-control','id'=>'over21'])}}  
                                                                                                    <b  class="text-danger" id="over21Error"></b>          
                                                                                           </div>
                                                                                  
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                       
                                                                       <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                     <label class="control-label">  ชื่อบิดา<small class="text-danger">*</small></label>
                                                                      {{Form::text('namefather','',['class'=>'form-control','id'=>'namefather'])}} 
                                                                      <b  class="text-danger" id="namefatherError"></b>     
                                                                            </div>
                                                                                                                                                                                                                  
                                                                                    </div>
                                                                  
                                                                                               <div class="col-md-4">
                                                                                                <div class="form-group ">
                                                                        <label class="control-label"> นามสกุล<small class="text-danger">*</small></label>
                                                                                         {{Form::text('lastfather','',['class'=>'form-control','id'=>'lastfather'])}}
                                                                                         <b  class="text-danger" id="lastfatherError"></b>      
                                                                                   </div>
                                                                                                                                                                                                                     
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                            <div class="form-group ">
                                                                           <label class="control-label"> อาชีพ<small class="text-danger">*</small></label>
                                                                             {{Form::text('occupation_father','',['class'=>'form-control','id'=>'occupation_father'])}}  
                                                                             <b  class="text-danger" id="occupation_fatherError"></b>  
                                                                                        </div>
                                                                           </div>
                                                                    </div>

                                                                    <div class="row">
                                                                          
                                                              
                                                                                          
                                                                                    <div class="col-md-4">
                                                                                 <div class="form-group "> 
                                                                             <label class="control-label">สถานะ<small class="text-danger">*</small></label>
                                                                
                                                                           {{ Form::select('alivef', [ ''=>'เลือก', 'ยังมีชีวิตอยู่' => 'ยังมีชีวิตอยู่','ถึงแก่กรรม' => 'ถึงแก่กรรม'],null, ['class' => 'form-control','id'=>'alivef']) }} 
                                                                                                                                                                                                                                                   
                                                                           <b  class="text-danger" id="alivefError"></b>                                                                                                                                         
                                                                                       </div>
                                                                            </div>
                                                                </div>

                                                                <div class="row">
                                                                       
                                                                                 <div class="col-md-4">
                                                                            <div class="form-group ">
                                                                        <label class="control-label">ชื่อมารดา<small class="text-danger">*</small></label>
                                                                     {{Form::text('namemother','',['class'=>'form-control','id'=>'namemother'])}}
                                                                     <b  class="text-danger" id="namemotherError"></b>                      
                                                                                                               </div>
                                                                                                                                                                                                                  
                                                                                                           </div>
                                                                                                
                                                                                            <div class="col-md-4">
                                                                                                                             <div class="form-group ">
                                                                                                 <label class="control-label">นามสกุล<small class="text-danger">*</small></label>
                                                                                           {{Form::text('lasrmother','',['class'=>'form-control','id'=>'lasrmother'])}}
                                                                                           <b  class="text-danger" id="nlasrmotherError"></b>       
                                                                                             </div>
                                                                                                                                                                                                                 
                                                                                                </div>



                                                                                                <div class="col-md-4">
                                                                                                        <div class="form-group ">
                                                                                                             <label class="control-label">อาชีพ<small class="text-danger">*</small></label>
                                                                                                      {{Form::text('occupationm','',['class'=>'form-control','id'=>'occupationm'])}} 
                                                                                                      <b  class="text-danger" id="occupationmError"></b>      
                                                                                                </div>
                                                                                                                                                                                                                      
                                                                                             </div>








                                                                                     </div>
                                                                                     <div class="row">
                                                                                            
                                                                                
                                                                            
                                                                            <div class= "col-md-4">
                                                                           <div class="form-group "> 
                                                                                     <label class="control-label">สถานะ<small class="text-danger">*</small></label>
                                                          
                                                               {{ Form::select('alivem', [ ''=>'เลือก', 'ยังมีชีวิตอยู่' => 'ยังมีชีวิตอยู่','ถึงแก่กรรม' => 'ถึงแก่กรรม'],null, ['class' => 'form-control','id'=>'alivem']) }} 
                                                               <b  class="text-danger" id="alivemError"></b>                                                                                                                                                  
                                                                                                                                                                                                                 
                                                                </div>
                                                            </div>
                                                            </div>


<hr>
                        <div class="form-group"> <center>
                               <a href="#" class="btn btn-danger" id="prev-2">ย้อนกลับ</a>
                               <a href="#" class="btn btn-danger" id="next-2" >ถัดไป</a> 
                               <br>  <b class="text-danger"  id="all2Error"></b></center>
                            </div>
                   
                                </div>

                    <div id="third">
                            <h4 class="text-center bg-primary p-1rounded tect-light">ประวัติการศึกษา</h4>
                        
                            <h4 class="text-danger"> กรุณาคลิกถูกที่ต้องการระบุการศึกษา</h4>
                            <div class="row">
                                    <label>  <input type="checkbox" id="form_setchange1"/> ระดับประถมศึกษา</label>
                                    <div class= "col-md-4">
                                            <div class="form-group "> 
                                                      <label class="control-label">สถาบัน</label>
                           
                                                      {{Form::text('primary','',['class'=>'form-control','id'=>'primary','readonly'])}}                                                                                                                                            
                                                                                                                                                                                  
                                 </div>
                             </div>
                             
                             <div class= "col-md-4">
                                    <div class="form-group "> 
                                            <label class="control-label">เริ่มปีการศึกษา</label>

                                            {{Form::text('year1','',['class'=>'form-control','id'=>'year1','readonly'])}}                                                                                                                                         
                                                                                                                                                                          
                         </div>
                     </div>
                                                                     
                     <div class= "col-md-4">
                            <div class="form-group "> 
                                    <label class="control-label">จบปีการศึกษา</label>

                                    {{Form::text('year2','',['class'=>'form-control','id'=>'year2','readonly'])}}                                                                                                                                      
                                                                                                                                                                  
                 </div>
             </div>


                        <div class= "col-md-4">
                                    <div class="form-group "> 
                                            <label class="control-label">เกรดเฉลี่ย</label>

                                            {{Form::text('gpa','',['class'=>'form-control','id'=>'gpa','readonly'])}}                                                                                                                                         
                                                                                                                                                                          
                         </div>
                     </div>
                              
                            
                        <div class= "col-md-4">
                                <div class="form-group "> 
                                                                                                                                                               
                                                <label class="control-label">สาขา</label>
                                                {{Form::text('major','',['class'=>'form-control','id'=>'major','readonly'])}}                                                                                                                           
                     </div>
                 </div>    
                 
                 <div class= "col-md-4">
                        <div class="form-group "> 
                                        <label class="control-label">วุฒิที่ได้รับ</label>
                                        {{Form::text('degree1','',['class'=>'form-control','id'=>'degree1','readonly'])}}     
                                                                                                                                                                      
                                                                                                                                                              
             </div>
         </div>         
                    </div>
                  

<hr>



<div class="row">
        <label>  <input type="checkbox" id="form_setchange2" /> ระดับมัธยมศึกษา</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน</label>

                          {{Form::text('secondary','',['class'=>'form-control','id'=>'secondary','readonly'])}}                                                                                                                                       
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>

                {{Form::text('year3','',['class'=>'form-control','id'=>'year3','readonly'])}}                                                                                                                                       
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year4','',['class'=>'form-control','id'=>'year4','readonly'])}}                                                                                                                                 
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpas','',['class'=>'form-control','id'=>'gpas','readonly'])}}                                                                                                                         
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
           
            <label class="control-label">สาขา</label>
            {{Form::text('majors','',['class'=>'form-control','id'=>'majors','readonly'])}}                                                                          
                                                                                                                                          
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
                <label class="control-label">วุฒิที่ได้รับ</label>
                {{Form::text('degree2','',['class'=>'form-control','id'=>'degree2','readonly'])}}                                                                                              
                                                                                                                                  
</div>
</div>         
</div>








<hr>




<div class="row">
        <label>   <input type="checkbox" id="form_setchange3"/>อาชีวะศึกษา</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน</label>

                          {{Form::text('vocation','',['class'=>'form-control','id'=>'vocation','readonly'])}}                                                                                                                             
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>
                {{Form::text('year5','',['class'=>'form-control','id'=>'year5','readonly'])}}
                                                                                                                                            
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year6','',['class'=>'form-control','id'=>'year6','readonly'])}}                                                                                           
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpav','',['class'=>'form-control','id'=>'gpav','readonly'])}}                                                                                                 
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
                <label class="control-label">สาขา</label>
                {{Form::text('majorv','',['class'=>'form-control','id'=>'majorv','readonly'])}}  
            
                                                                                                     
                                                                                                                                          
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
                <label class="control-label">วุฒิที่ได้รับ</label>
                {{Form::text('degree3','',['class'=>'form-control','id'=>'degree3','readonly'])}}                                                         
                                                                                                                                  
</div>
</div>         
</div>







<hr>


<div class="row">
        <label>  <input type="checkbox" id="form_setchange4"/>อนุปริญญา</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน:</label>

                          {{Form::text('diploma','',['class'=>'form-control','id'=>'diploma','readonly'])}}                                                                                                                         
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>
                {{Form::text('year7','',['class'=>'form-control','id'=>'year7','readonly'])}}
                                                                                                                                            
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year8','',['class'=>'form-control','id'=>'year8','readonly'])}}                                                                            
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpad','',['class'=>'form-control','id'=>'gpad','readonly'])}}                                                                                                
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
           
            <label class="control-label">สาขา</label>
            {{Form::text('majord','',['class'=>'form-control','id'=>'majord','readonly'])}}                                                                                                  
                                                                                                                                          
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
                <label class="control-label">วุฒิที่ได้รับ</label>
                {{Form::text('degree4','',['class'=>'form-control','id'=>'degree4','readonly'])}}                                            
                                                                                                                                  
</div>
</div>         
</div>


<hr>


<div class="row">
        <label><input type="checkbox" id="form_setchange5"/>ปริญญาตรี</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน:</label>
                          {{Form::text('bachelor','',['class'=>'form-control','id'=>'bachelor','readonly'])}}
                                                                                                                   
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>
                {{Form::text('year9','',['class'=>'form-control','id'=>'year9','readonly'])}}
                                                                                                                                            
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year10','',['class'=>'form-control','id'=>'year10','readonly'])}}                       
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpab','',['class'=>'form-control','id'=>'gpab','readonly'])}}    
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
                <label class="control-label">สาขา</label>
          
                {{Form::text('majorb','',['class'=>'form-control','id'=>'majorb','readonly'])}}                                             
                                                                                                                                          
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
                <label class="control-label">วุฒิที่ได้รับ</label>
         
                {{Form::text('degree5','',['class'=>'form-control','id'=>'degree5','readonly'])}}   

             
                                                                                                                                  
</div>
</div>         
</div>

















<hr>


<div class="row">
        <label><input type="checkbox" id="form_setchange6"/>ปริญญาโท</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน:</label>
                          {{Form::text('master','',['class'=>'form-control','id'=>'master','readonly'])}}
                                                                                                                   
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>
                {{Form::text('year11','',['class'=>'form-control','id'=>'year11','readonly'])}}
                                                                                                                                            
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year12','',['class'=>'form-control','id'=>'year12','readonly'])}}                         
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpam','',['class'=>'form-control','id'=>'gpam','readonly'])}}                                                                                       
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
            <label class="control-label">วุฒิที่ได้รับ</label>
         
            {{Form::text('degree6','',['class'=>'form-control','id'=>'degree6','readonly'])}}                                                            
                                                                                                                                          
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
    <label class="control-label">สาขา</label>
          
    {{Form::text('majorm','',['class'=>'form-control','id'=>'majorm','readonly'])}}              
                                                                                                                                  
</div>
</div>         
</div>
<hr>


<div class="row">
        <label><input type="checkbox" id="form_setchange7"/>อื่นๆ</label>
        <div class= "col-md-4">
                <div class="form-group "> 
                          <label class="control-label">สถาบัน</label>
                          {{Form::text('otherE','',['class'=>'form-control','id'=>'otherE','readonly'])}}
                                                                                                                   
                                                                                                                                                      
     </div>
 </div>
 
 <div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เริ่มปีการศึกษา</label>
                {{Form::text('year13','',['class'=>'form-control','id'=>'year13','readonly'])}}
                                                                                                                                            
                                                                                                                                              
</div>
</div>
                                         
<div class= "col-md-4">
<div class="form-group "> 
        <label class="control-label">จบปีการศึกษา</label>

        {{Form::text('year14','',['class'=>'form-control','id'=>'year14','readonly'])}}
                                                                                                                                      
</div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
                <label class="control-label">เกรดเฉลี่ย</label>

                {{Form::text('gpao','',['class'=>'form-control','id'=>'gpao','readonly'])}}                                                                    
                                                                                                                                              
</div>
</div>
  

<div class= "col-md-4">
    <div class="form-group "> 
          
        <label class="control-label">สาขา</label>       
            {{Form::text('majoro','',['class'=>'form-control','id'=>'majoro','readonly'])}}                                                                                                                        
</div>
</div>    

<div class= "col-md-4">
<div class="form-group "> 
    <label class="control-label">วุฒิที่ได้รับ</label>
    {{Form::text('degree7','',['class'=>'form-control','id'=>'degree7','readonly'])}}   
    
           
                                                                                                                                  
</div>
</div>         
</div>








                            <div class="form-group">
                                    <center>
                                    <a href="#" class="btn btn-danger" id="prev-3">ย้อนกลับ</a>
                                    <a href="#" class="btn btn-danger" id="next-3">ถัดไป</a>
                                 
                                    </center>
                                 </div>
                              
                        </div>

                       




                        <div id="three">
                                <h4 > ด้านภาษา</h4>
<div class="row">
        <div class= "col-md-4">
                <div class="form-group "> 
                       <label>ภาษาไทย การพูด<small class="text-danger">*</small></label>     
                       {{ Form::select('thais', [
                        '' =>'::เลือก::', 
                        'ดี' => 'ดี',
                        'พอใช้' => 'พอใช้',
                        'ไม่ดี' => 'ไม่ดี'
                   ],null, ['class' => 'form-control','id'=>'thais']) }}
                     <b  class="text-danger" id="thaisError"></b>                                                                                              
                                                                                                                                                      
     </div>
    </div>
    <div class= "col-md-4">
            <div class="form-group "> 
                   <label>ภาษาไทย การฟัง<small class="text-danger">*</small></label>     
                   {{ Form::select('thail', [
                    '' =>'::เลือก::', 
                    'ดี' => 'ดี',
                    'พอใช้' => 'พอใช้',
                    'ไม่ดี' => 'ไม่ดี'
               ],null, ['class' => 'form-control','id'=>'thail']) }}
      <b  class="text-danger" id="thailError"></b>                                                                                         
                                                                                                                                                  
 </div>
</div>


<div class= "col-md-4">
        <div class="form-group "> 
               <label>ภาษาไทย การเขียน<small class="text-danger">*</small></label>     
               {{ Form::select('thair', [
                '' =>'::เลือก::', 
                'ดี' => 'ดี',
                'พอใช้' => 'พอใช้',
                'ไม่ดี' => 'ไม่ดี'
           ],null, ['class' => 'form-control','id'=>'thair']) }}
            <b  class="text-danger" id="thairError"></b> 
                                                                                           
                                                                                                                                              
</div>
</div>
<hr>
<div class= "col-md-4">
        <div class="form-group "> 
               <label>ภาษาอังกฤษ การพูด<small class="text-danger">*</small></label>     
               {{ Form::select('engliss', [
                '' =>'::เลือก::', 
                'ดี' => 'ดี',
                'พอใช้' => 'พอใช้',
                'ไม่ดี' => 'ไม่ดี'
           ],null, ['class' => 'form-control','id'=>'engliss']) }}
      <b  class="text-danger" id="englissError"></b> 

                                                                                           
                                                                                                                                              
</div>
</div>

<div class= "col-md-4">
        <div class="form-group "> 
               <label>ภาษาอังกฤษ การฟัง<small class="text-danger">*</small></label>     
               {{ Form::select('englisl', [
                '' =>'::เลือก::', 
                'ดี' => 'ดี',
                'พอใช้' => 'พอใช้',
                'ไม่ดี' => 'ไม่ดี'
           ],null, ['class' => 'form-control','id'=>'englisl']) }}
      <b  class="text-danger" id="englislError"></b> 

                                                                                           
                                                                                                                                              
</div>
</div>

<div class= "col-md-4">
        <div class="form-group "> 
               <label>ภาษาอังกฤษ การเขียน<small class="text-danger">*</small></label>     
               {{ Form::select('englisr', [
                                                                '' =>'::เลือก::', 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control','id'=>'englisr']) }}
                
                                                         <b  class="text-danger" id="englisrError"></b> 
                                                    

                                                                                           
                                                                                                                                              
</div>
</div>





<div class= "col-md-4">
        <div class="form-group "> 
               <label>อื่นๆ<small class="text-danger">*</small></label>     
               <input type="text" name="otherr"  style="width:100%"  id="otherr"  name="otherr" class="form-control"/>
     
    
                                                                                           
                                                                                                                                              
    </div>
    </div>

<div class= "col-md-4">
    <div class="form-group "> 
           <label>อื่นๆ การพูด<small class="text-danger">*</small></label>     
           {{ Form::select('othes', [
            '' =>'::เลือก::', 
            'ดี' => 'ดี',
            'พอใช้' => 'พอใช้',
            'ไม่ดี' => 'ไม่ดี'
       ],null, ['class' => 'form-control','id'=>'othes']) }}
       

                                                                                       
                                                                                                                                          
</div>
</div>

<div class= "col-md-4">
    <div class="form-group "> 
           <label>อื่นๆ การฟัง<small class="text-danger">*</small></label>     
           {{ Form::select('othel', [
            '' =>'::เลือก::', 
            'ดี' => 'ดี',
            'พอใช้' => 'พอใช้',
            'ไม่ดี' => 'ไม่ดี'
       ],null, ['class' => 'form-control','id'=>'othel']) }}
          <b  class="text-danger" id="othelError"></b> 
                                                

                                                                                       
                                                                                                                                          
</div>
</div>
<div class= "col-md-4">
        <div class="form-group "> 
               <label>อื่นๆ การเขียน<small class="text-danger">*</small></label>     
               {{ Form::select('other', [
                '' =>'::เลือก::', 
                'ดี' => 'ดี',
                'พอใช้' => 'พอใช้',
                'ไม่ดี' => 'ไม่ดี'
           ],null, ['class' => 'form-control','id'=>'other']) }}
           <b  class="text-danger" id="otherError"></b> 
                                                    
    
                                                                                           
                                                                                                                                              
    </div>
    </div>



</div>
<hr>
                                    <h3>ประวัติการทำงาน</h3>
                                    <div class="row">
                                              <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label">1.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed1','',['class'=>'form-control','id'=>'list_of_employed1'])}}
                                                                  <b  class="text-danger" id="list_of_employed1Error"></b> 
                                                             </div>
                                                          </div> 
                                                    
                                              </div>
                                             
                                              <div class="col-md-3">

                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label">ลักษณะงานที่รับผิดชอบ</label>
                                                                  {{Form::text('job_description1','',['class'=>'form-control','id'=>'job_description1'])}}
                                                                  <b  class="text-danger" id="job_description1Error"></b> 
                                                             </div>
                                                          </div>
                                              </div>

                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label">ตำแหน่ง</label>
                                                                  {{Form::text('position1','',['class'=>'form-control','id'=>'position1'])}} 
                                                                  <b  class="text-danger" id="position1Error"></b> 
                                                             </div>
                                                          </div> 
                                                
                                              </div>
                                              
                                            
                                              </div>
                                          <div class="row">
                                              <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeaving1','',['class'=>'form-control','id'=>'reasonLeaving1'])}}
                                                                  <b  class="text-danger" id="preasonLeaving1Error"></b> 
                                                             </div>
                                                          </div>   
                                                  </div>

                                                  <div class="col-md-3">

                                                          <div class="input-group">
                                                                  <div class="form-group ">
                                                                      <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                      {{Form::text('lastsalary1','',['class'=>'form-control','id'=>'lastsalary1'])}}
                                                                      <b  class="text-danger" id="lastsalary1Error"></b> 
                                                                 </div>
                                                              </div> 
                                                  
                                                  </div>

                                              </div>
                                          
                                             
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              
                                                  <div class="col-md-3">
                                                          <div class="input-group">
                                                                  <div class="form-group ">
                                                                      <label>ระยะงานเริ่ม</label>
                                                                      {{Form::date('start_job_duration1','',['class'=>'form-control','id'=>'start_job_duration1'])}}
                                                                      <b  class="text-danger" id="start_job_duration1Error"></b> 
                                                                 </div>
                                                              </div> 
                                                  
                                                  </div>
                                                  

                                                  <div class="col-md-3">
                                                      
                                                          <div class="input-group">
                                                                  <div class="form-group ">
                                                                      <label>ระยะงานสิ้นสุด</label>
                                                                      {{Form::date('end_job_duration2','',['class'=>'form-control','id'=>'end_job_duration2'])}} 
                                                                      <b  class="text-danger" id="start_job_duration1Error"></b> 
                                                                 </div>
                                                              </div> 
                                                      

                                                          </div> 
                                          
                                                      </div> 
                                                      <hr>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label">2.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed2','',['class'=>'form-control','id'=>'list_of_employed2'])}}
                                                                  <b  class="text-danger" id="list_of_employed2Error"></b> 
                                                             </div>
                                                          </div> 
                                                 
                                              </div>
                                             
                                              <div class="col-md-3">
                                                       <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ลักษณะงานที่รับผิดชอบ </label>
                                                                  {{Form::text('job_description2','',['class'=>'form-control','id'=>'job_description2'])}}
                                                                  <b  class="text-danger" id="job_description2Error"></b> 
                                                             </div>
                                                          </div> 
                                                 
                                                 
                                              </div>

                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ตำแหน่ง</label>
                                                                  {{Form::text('position2','',['class'=>'form-control','id'=>'position2'])}}
                                                                  <b  class="text-danger" id="position2Error"></b> 
                                                             </div>
                                                          </div> 
                                                 
                                              </div>



                                              </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">

                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label>ระยะงานเริ่ม</label>
                                                                  {{Form::date('start_job_duration3','',['class'=>'form-control','id'=>'start_job_duration3'])}}
                                                                  <b  class="text-danger" id="start_job_duration3Error"></b> 
                                                             </div>
                                                          </div> 
                                              
                                              </div>
                                              <div class="col-md-3">
      
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label  >ระยะงานสิ้นสุด</label>
                                                                  {{Form::date('end_job_duration4','',['class'=>'form-control','id'=>'end_job_duration4'])}} 
                                                                  <b  class="text-danger" id="end_job_duration4Error"></b> 
                                                             </div>
                                                          </div> 
                                  
                                              </div>
                                              
                                              </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeaving2','',['class'=>'form-control','id'=>'reasonLeaving2'])}}
                                                                  <b  class="text-danger" id="reasonLeaving2Error"></b> 
                                                             </div>
                                                          </div> 
                                                   
                                              </div>
                                             
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                  {{Form::text('lastsalary2','',['class'=>'form-control','id'=>'lastsalary2'])}}
                                                                  <b  class="text-danger" id="lastsalary2Error"></b> 
                                                             </div>
                                                          </div> 
                                               
                                                  </div>
                                              </div>
                                              <hr>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >3.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed3','',['class'=>'form-control','id'=>'list_of_employed3'])}}
                                                                  <b  class="text-danger" id="list_of_employed3Error"></b> 
                                                             </div>
                                                          </div> 
                                                   
                                              </div>
                                             
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ลักษณะงานที่รับผิดชอบ</label>
                                                                  {{Form::text('job_description3','',['class'=>'form-control','id'=>'job_description3'])}}
                                                                  <b  class="text-danger" id="job_description3Error"></b> 
                                                             </div>
                                                          </div> 
                                                
                                              </div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" > ตำแหน่ง</label>
                                                                  {{Form::text('position3','',['class'=>'form-control','id'=>'position3'])}} 
                                                                  <b  class="text-danger" id="position3Error"></b> 
                                                             </div>
                                                  </div> 

                                              </div>
                                          </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                   
                                                              <div class="form-group ">
                                                                  <label >ระยะงานเริ่ม</label>
                                                                  {{Form::date('start_job_duration5','',['class'=>'form-control','id'=>'start_job_duration5'])}}
                                                                  <b  class="text-danger" id="start_job_duration5Error" ></b> 
                                                             </div>
                                                         
                                               
                                              </div>
                                              <div class="col-md-3">
                                                    
                                                              <div class="form-group ">
                                                                  <label>ระยะงานสิ้นสุด</label>
                                                                  {{Form::date('end_job_duration6','',['class'=>'form-control','id'=>'end_job_duration6'])}} 
                                                                  <b  class="text-danger" id="end_job_duration6Error"></b> 
                                                            
                                                  </div> 
                                              </div>
                                              
                                                
                                              </div>
                                             
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                     
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeaving3','',['class'=>'form-control','id'=>'reasonLeaving3'])}} 
                                                                  <b  class="text-danger" id="reasonLeaving3Error"></b> 
                                                            
                                                  </div> 
                                                 
                                              </div>
                        
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                  {{Form::text('lastsalary3','',['class'=>'form-control','id'=>'end_job_duration6'])}} 
                                                                  <b  class="text-danger" id="lastsalary3Error"></b> 
                                                             </div>
                                                  </div> 
                                                 
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >4.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed4','',['class'=>'form-control','id'=>'list_of_employed4'])}}
                                                                  <b  class="text-danger" id="list_of_employed4Error"></b> 
                                                             </div>
                                                          </div> 
                                                   
                                              </div>
                                             
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ลักษณะงานที่รับผิดชอบ</label>
                                                                  {{Form::text('job_description4','',['class'=>'form-control','id'=>'job_description4'])}}
                                                                  <b  class="text-danger" id="job_description4Error"></b> 
                                                             </div>
                                                          </div> 
                                                
                                              </div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" > ตำแหน่ง</label>
                                                                  {{Form::text('position4','',['class'=>'form-control','id'=>'position4'])}} 
                                                                  <b  class="text-danger" id="position4Error"></b> 
                                                             </div>
                                                  </div> 

                                              </div>
                                          </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                   
                                                              <div class="form-group ">
                                                                  <label >ระยะงานเริ่ม</label>
                                                                  {{Form::date('start_job_duration7','',['class'=>'form-control','id'=>'start_job_duration7'])}}
                                                                  <b  class="text-danger" id="start_job_duration7Error" ></b> 
                                                             </div>
                                                         
                                               
                                              </div>
                                              <div class="col-md-3">
                                                    
                                                              <div class="form-group ">
                                                                  <label>ระยะงานสิ้นสุด</label>
                                                                  {{Form::date('end_job_duration8','',['class'=>'form-control','id'=>'end_job_duration8'])}} 
                                                                  <b  class="text-danger" id="end_job_duration8Error"></b> 
                                                            
                                                  </div> 
                                              </div>
                                              
                                                
                                              </div>
                                             
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                     
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeavin4','',['class'=>'form-control','id'=>'reasonLeaving4'])}} 
                                                                  <b  class="text-danger" id="reasonLeaving4Error"></b> 
                                                            
                                                  </div> 
                                                 
                                              </div>
                        
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                  {{Form::text('lastsalary4','',['class'=>'form-control','id'=>'lastsalary4'])}} 
                                                                  <b  class="text-danger" id="lastsalary4Error"></b> 
                                                             </div>
                                                  </div> 
                                                 
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >5.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed5','',['class'=>'form-control','id'=>'list_of_employed5'])}}
                                                                  <b  class="text-danger" id="list_of_employed5Error"></b> 
                                                             </div>
                                                          </div> 
                                                   
                                              </div>
                                             
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ลักษณะงานที่รับผิดชอบ</label>
                                                                  {{Form::text('job_description5','',['class'=>'form-control','id'=>'job_description5'])}}
                                                                  <b  class="text-danger" id="job_description5Error"></b> 
                                                             </div>
                                                          </div> 
                                                
                                              </div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" > ตำแหน่ง</label>
                                                                  {{Form::text('position5','',['class'=>'form-control','id'=>'position5'])}} 
                                                                  <b  class="text-danger" id="position5Error"></b> 
                                                             </div>
                                                  </div> 

                                              </div>
                                          </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                   
                                                              <div class="form-group ">
                                                                  <label >ระยะงานเริ่ม</label>
                                                                  {{Form::date('start_job_duration9','',['class'=>'form-control','id'=>'start_job_duration9'])}}
                                                                  <b  class="text-danger" id="start_job_duration9Error" ></b> 
                                                             </div>
                                                         
                                               
                                              </div>
                                              <div class="col-md-3">
                                                    
                                                              <div class="form-group ">
                                                                  <label>ระยะงานสิ้นสุด</label>
                                                                  {{Form::date('end_job_duration10','',['class'=>'form-control','id'=>'end_job_duration10'])}} 
                                                                  <b  class="text-danger" id="end_job_duration10Error"></b> 
                                                            
                                                  </div> 
                                              </div>
                                              
                                                
                                              </div>
                                             
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                     
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeavin5','',['class'=>'form-control','id'=>'reasonLeaving5'])}} 
                                                                  <b  class="text-danger" id="reasonLeaving3Error"></b> 
                                                            
                                                  </div> 
                                                 
                                              </div>
                        
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                  {{Form::text('lastsalary5','',['class'=>'form-control','id'=>'lastsalary5'])}} 
                                                                  <b  class="text-danger" id="lastsalary5Error"></b> 
                                                             </div>
                                                  </div> 
                                                 
                                              </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >6.ชื่อสถานที่ประกอบการ</label>
                                                                  {{Form::text('list_of_employed6','',['class'=>'form-control','id'=>'list_of_employed6'])}}
                                                                  <b  class="text-danger" id="list_of_employed6Error"></b> 
                                                             </div>
                                                          </div> 
                                                   
                                              </div>
                                             
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >ลักษณะงานที่รับผิดชอบ</label>
                                                                  {{Form::text('job_description6','',['class'=>'form-control','id'=>'job_description6'])}}
                                                                  <b  class="text-danger" id="job_description6Error"></b> 
                                                             </div>
                                                          </div> 
                                                
                                              </div>
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" > ตำแหน่ง</label>
                                                                  {{Form::text('position6','',['class'=>'form-control','id'=>'position6'])}} 
                                                                  <b  class="text-danger" id="position6Error"></b> 
                                                             </div>
                                                  </div> 

                                              </div>
                                          </div>
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                   
                                                              <div class="form-group ">
                                                                  <label >ระยะงานเริ่ม</label>
                                                                  {{Form::date('start_job_duration11','',['class'=>'form-control','id'=>'start_job_duration11'])}}
                                                                  <b  class="text-danger" id="start_job_duration11Error" ></b> 
                                                             </div>
                                                         
                                               
                                              </div>
                                              <div class="col-md-3">
                                                    
                                                              <div class="form-group ">
                                                                  <label>ระยะงานสิ้นสุด</label>
                                                                  {{Form::date('end_job_duration12','',['class'=>'form-control','id'=>'end_job_duration12'])}} 
                                                                  <b  class="text-danger" id="end_job_duration12Error"></b> 
                                                            
                                                  </div> 
                                              </div>
                                              
                                                
                                              </div>
                                             
                                          <div class="row">
                                                  <div class="col-md-1"></div>
                                              <div class="col-md-3">
                                                     
                                                              <div class="form-group ">
                                                                  <label class="control-label" >สาเหตุที่ออก</label>
                                                                  {{Form::text('reasonLeavin6','',['class'=>'form-control','id'=>'reasonLeaving6'])}} 
                                                                  <b  class="text-danger" id="reasonLeaving6Error"></b> 
                                                            
                                                  </div> 
                                                 
                                              </div>
                        
                                              <div class="col-md-3">
                                                      <div class="input-group">
                                                              <div class="form-group ">
                                                                  <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                  {{Form::text('lastsalary6','',['class'=>'form-control','id'=>'lastsalary6'])}} 
                                                                  <b  class="text-danger" id="lastsalary6Error"></b> 
                                                             </div>
                                                  </div> 
                                                 
                                              </div>
                                          </div>
                                <div class="form-group">
                                        <center>
                                        <a href="#" class="btn btn-danger" id="prev-4">ย้อนกลับ</a>
                                        <a href="#" class="btn btn-danger" id="next-4">ถัดไป</a>
                                        <br>  <b class="text-danger"  id="all3Error"></b>
                                        </center>
                                     </div>
                        </div>

                        <div id="for">

                               
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
                                                                            <input type="checkbox" class="form-check-input" id="portfolio1" name="portfolio1" value="คอมพิวเตอร์" required> <label class="control-label"> คอมพิวเตอร์<small class="text-danger">*จำเป็นต้องระบุ</small></label>
                                                                            {{Form::text('computer','',['required'])}}      
                                                                       </div>
                                                                    </div>
                                                                </div> 
                                                        
                                                        
                                                            <div class="form-group"> 
                                                                <div class="col-md-8">
                                                                <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร"> เครื่องโทรสาร 
                                                            </div>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <div class="col-md-8">
                                                            <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย  
                                                        </div>
                                                    </div>
                                                        <div class="form-group"> 
                                                            <div class="col-md-8">
                                                               
                                                                <input type="text" name="dot" id="dot"  style="width:50px"/>คำ/นาที
                                                                
                                                            </div>
                                                        </div>
                                                            <div class="form-group"> 
                                                                <div class="col-md-8">
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
                                                                <label>ท่านสามารถขับรถยนต์ได้หรือไม่ <small class="text-danger">*</small> </label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;
                                                                <input type="radio" name="yes" value="ได้"  required > ได้  &emsp;&emsp;&emsp;
                                                                <input type="radio" name="yes" value="ไม่ได้"  required > ไม่ได้
                                                                
                                                                </div>
                                                        </div>
                                                        </div> <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>ท่านมีรถยนต์ส่วนตัวหรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                                <input type="radio" name="owncar" value="มี"  required >มี &emsp;&emsp;&emsp;
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
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>ท่านเคยถูกให้ออกจากงานหรือไม่?<small class="text-danger">*</small></label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;                                                                   
                                                                <input type="radio" name="exitwork" value="เคย" id="exitwork" required >เคย เพราะ &emsp; {{Form::text('because','',['id'=>'because'])}} &emsp;&emsp;
                                                                <input type="radio" name="exitwork" value="ไม่เคย" id="exitwork"  required >ไม่เคย 
                                                       
                                                                </div>
                                                        </div>
                                                        </div> <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group ">
                                                                <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?<small class="text-danger">*</small></label>&emsp;
                                                                <input type="radio" name="serious_ill" value="เคย"  required > เคย &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                <input type="radio" name="serious_ill" value="ไม่เคย"  required >ไม่เคย
                                                              
                                                                </div>
                                                        </div>
                                                        </div> <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>ท่านเคยได้รับโทษทาง อาญา หรือ จำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?<small class="text-danger">*</small></label>&emsp;&emsp;&emsp;&ensp;
                                                                <input type="radio" name="offense" value="เคย"  required >เคย   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                <input type="radio" name="offense" value="ไม่เคย"  required >ไม่เคย
                                                               
                                                                </div>
                                                        </div>
                                                        </div> <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>ขณะนี้คุณตั้งครรภ์หรือไม่?<small class="text-danger">*</small> </label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                <input type="radio" name="pregnant" value="ใช่"  required >ใช่ &emsp;&emsp;&emsp;
                                                                <input type="radio" name="pregnant" value="ไม่ใช่"  required > ไม่ใช่
                                                               
                                                                </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-md-3"> 
                                                                        <div class="form-group ">
                                                                        <label class="control-label">ทราบข่าวสารการสมัครงานจากที่ใด<small class="text-danger">*</small></label>
                                                                                                 {{ Form::select('knowfrom', [''=>'เลือก'  ,'Jobtopgun.com' => 'Jobtopgun.com','Jobsdb.com' => 'Jobsdb.com','Jobthai.com'=> 'Jobthai.com','Jobbkk.com'=> 'Jobbkk.com','Facebook Fanpage : HR NGG Recruitment'=> 'Facebook Fanpage'],null, ['class' => 'form-control','id'=>'knowfrom']) }}
                                                                                                 <b  class="text-danger" id="knowfromError"></b>
                                                                        </div>  
                                                        </div>
                                                        <div class="col-md-3">
                                                                อื่นๆ &emsp; {{Form::text('because2','',['id'=>'because2'])}}
                                                        </div>
                                                        </div>
                                                        <hr> 
                                                        <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>ชื่อผู้ติดต่อ กรณีฉุกเฉิน</label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            <div class="row">    
                                                                <div class="col-md-3">
                                                                        <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">ชื่อ-นามสกุล<small class="text-danger">*</small></label>
                                                                                    {{Form::text('contact_name','',['class'=>'form-control','required'])}}        
                                                                               </div>
                                                                            </div> 
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">ความสัมพันธ์<small class="text-danger">*</small></label>
                                                                                    {{Form::text('contact_firm','',['class'=>'form-control','required'])}}        
                                                                               </div>
                                                                            </div>
                                                                </div>
                                                                <div class="col-md-3">   
                                                                        <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">โทรศัพท์<small class="text-danger">*</small></label>
                                                                                    {{Form::text('contact_tel','',['class'=>'form-control','required'])}}        
                                                                               </div>
                                                                        </div>        
                                                                    </div>   
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-md-5">
                                                                                <div class="input-group">
                                                                                        <div class="form-group label-floating">
                                                                                            <label class="control-label">ที่อยู่<small class="text-danger">*</small></label>
                                                                                            <textarea  name="contact_address" type="text"  style="text-align:center" class ='form-control' required></textarea>
                                                                                       </div>
                                                                                </div>
                                                                        </div>
                                                                </div>













<div class="form-group"></div>
                                       
                                <div class="form-group">
                                        <center>
                                  <span id=""><a href="#" class="btn btn-danger" id="prev-5">ย้อนกลับ</a>
                        
                                    <input type="submit" name="submit"  class="btn btn-success" value="บันทึก"> </span>      
                                        </center>
                                     </div>

                        </div>


            </form>



       </div>
        
    </div>
    



    <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 NGG:
              <a href="#"> version1.0</a>
              <p class="text-danger">ปรับปรุงระบบทุก เวลา 23.00-00.00น.</p>
            </div>
            <!-- Copyright -->
          
          </footer>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){

     $("#next-1").click(function(e){
            
      

            e.preventDefault();
       
      
       
        $('#salarynggError').html(' ');
        $('#positionnggError').html(' ');

        $('#fronnameError').html(' ');
        $('#nameError').html(' ');
        $('#lastnameError').html(' ');
        $('#imageError').html(' ');
        $('#niknameError').html(' ');
        $('#birthdayError').html(' ');
        $('#ageError').html(' ');
        $('#weightError').html(' ');
        $('#nationalityError').html(' ');
        $('#raceError').html(' ');
        $('#religionError').html(' ');
        $('#brothersError').html(' ');
        $('#numberError').html(' ');
        $('#idcardError').html(' ');
        $('#issuedError').html(' ');
        $('#issueddateError').html(' ');
        $('#expidError').html(' ');
        $('#address2Error').html(' ');
        $('#address1Error').html(' ');
        $('#genderError').html(' ');

 $('#allError').html(' ');


           if($("#salaryngg").val() == ''  ){
                $("#salarynggError").addClass("invalid");
             $("#salarynggError").html('*จำเป็นต้องระบุ');
            $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
            return false;
           }

        else   if ($("#positionngg").val() == '' ){
                $("#positionnggError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
                return false;
           }
           
           
           else if ( $("#fronname").val() == ''){
                $("#fronnameError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else  if ( $("#name").val() == ''){
                $("#nameError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else  if ($("#lastname").val() == ''){
                $("#lastnameError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else if ($("#image").val() == '' ){
                $("#imageError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else  if ( $("#nikname").val() == ''){
                $("#niknameError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else  if ( $("#birthday").val() == ''){
                $("#birthdayError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           else if (  $("#age").val() == ''){
                $("#ageError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');

           }
           
           
           else if (  $("#gender").val() == ''){
                $("#genderError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else   if ( $("#weight").val() == ''){
                $("#weightError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');

           }
           
           else   if ( $("#height").val() == '' ){
                $("#heightError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else if ( $("#race").val() == ''){
                $("#raceError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           
           else if ($("#religion").val() == ''){
                $("#religionError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           else if ($("#idcard").val() == '' ){
                $("#idcardError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           
           else  if( $("#issued").val() == ''){
                $("#issuedError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }

    else    if (  $("#issueddate").val() == ''){
                $("#issueddateError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
        


       else if (    $("#expid").val() == ''){
                $("#expidError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
           else if (    $("#province_crad").val() == ''){
                $("#province_cradError").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }


    else    if (  $("#address2").val() ==  ''){
                $("#address2Error").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }


      else  if (   $("#address1").val() == ''){
                $("#address1Error").html('*จำเป็นต้องระบุ');
                $("#allError").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
           }
else{

            $("#second").show();
            $('#first').hide();
            $('#progressBar').css("width","45%");
            $('#progressText').html("Step - 2");


           }

           

           






           
           });


     $("#next-2").click(function(e){

		     e.preventDefault();
        $('#telError').html(' ');
      
        $('#alivefError').html(' ');
        $('#alivemError').html(' ');

        $('#moblieError').html(' ');
        $('#marital_statusError').html(' ');
      
        $('#emailError').html(' ');
        $('#living_statusError').html(' ');
       
        $('#namefatherError').html(' ');
        $('#lastfatherError').html(' ');
        $('#occupation_fatherError').html(' ');
        $('#namemotherError').html(' ');
        $('#nlasrmotherError').html(' ');
        $('#occupationmError').html(' ');
		    $('#allError').html(' ');
            $('#marital_statusError').html(' ');
		   
		       if($("#tel").val() == ''){

                 $("#telError").html('*จำเป็นต้องระบุ');
                 $("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
               return false;
           } else if($("#marital_status").val() == ''){

$("#marital_statusError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}
           
           
           else if($("#moblie").val() == ''){

$("#moblieError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}

else if( $("#email").val() == ''){

$("#emailError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}
else if($("#living_status").val() == '' ){

$("#living_statusError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}else if( $("#marital_statusr").val() == '' ){

$("#marital_statusError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}
else if(  $("#namefather").val() == ''){

$("#namefatherError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}
else if( $("#lastfather").val() == ''){

$("#lastfatherError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');

}
else if( $("#occupation_father").val() == ''){

$("#occupation_fatherError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}else if( $("#alivef").val() == ''){

$("#alivefError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}


else if( $("#namemother").val() == ''){

$("#namemotherError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}
else if($("#lasrmother").val() == ''){

$("#nlasrmotherError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');

}
else if( $("#occupationm").val() == '' ){

$("#occupationmError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}else if( $("#alivem").val() == '' ){

$("#alivemError").html('*จำเป็นต้องระบุ');
$("#all2Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}


else{

      $("#third").show();
            $('#second').hide();
            $('#progressBar').css("width","55%");
            $('#progressText').html("Step - 3");

}




      
           });


           $("#next-3").click(function(e){
           

            $("#three").show();
            $('#third').hide();
            $('#progressBar').css("width","80%");
            $('#progressText').html("Step - 4");
           });










            $("#next-4").click(function(e){

 e.preventDefault();
      $('#thaisError').html(' ');
      $('#thailError').html(' ');
      $('#thairError').html(' ');

      $('#englissError').html(' ');
      $('#englislError').html(' ');
      $('#englisrError').html(' ');

if( $("#thais").val() == '' ){

$("#thaisError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}

if( $("#thail").val() == '' ){

$("#thailError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}

if( $("#thair").val() == '' ){

$("#thairError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}

if( $("#engliss").val() == '' ){

$("#englissError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}

if( $("#englisl").val() == '' ){

$("#englislError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}


if( $("#englisr").val() == '' ){

$("#englisrError").html('*จำเป็นต้องระบุ');
$("#all3Error").html('ไม่สามารถทำรายการถัดไปไ้ด้กรุณาตรวจสอบข้อมูลที่กรอก&กรอกไม่ครบหรือไม่!');
return false;
}











            $("#for").show();
            $('#three').hide();
            $('#progressBar').css("width","100%");
            $('#progressText').html("Step - 5");
           });


           

$("#prev-2").click(function(){
            $("#first").show();
            $('#second').hide();
            $('#progressBar').css("width","20%");
            $('#progressText').html("Step - 1");
           });


$("#prev-3").click(function(){
            $("#second").show();
            $('#third').hide();
            $('#progressBar').css("width","40%");
            $('#progressText').html("Step - 2");
           });

$("#prev-4").click(function(){
            $("#third").show();
            $('#three').hide();
            $('#progressBar').css("width","60%");
            $('#progressText').html("Step - 2");
           });

$("#prev-5").click(function(){
            $('#for').hide();
            $('#three').show();
            $('#progressBar').css("width","80%");
            $('#progressText').html("Step - 5");
           });

});
    


    </script>






<script>
        $('#form_setchange1').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#primary").removeAttr("readonly"); 
            $("#year1").removeAttr("readonly"); 
            $("#year2").removeAttr("readonly"); 
            $("#gpa").removeAttr("readonly"); 
            $("#degree1").removeAttr("readonly"); 
            $("#major").removeAttr("readonly");  
           

          } else {
          $("#primary").val('');
            $("#primary").attr("readonly", "readonly"); 

             $("#year1").val('');
            $("#year1").attr("readonly", "readonly"); 

             $("#year2").val('');
            $("#year2").attr("readonly", "readonly"); 

     
             $("#gpa").val('');
            $("#gpa").attr("readonly", "readonly"); 


            $("#degree1").val('');
            $("#degree1").attr("readonly", "readonly"); 


             $("#major").val('');
            $("#major").attr("readonly", "readonly");  
          }
       });
       
       
       
       
       
       
       $('#form_setchange2').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#secondary").removeAttr("readonly"); 
            $("#year3").removeAttr("readonly"); 
            $("#year4").removeAttr("readonly"); 
            $("#gpas").removeAttr("readonly"); 
            $("#degree2").removeAttr("readonly"); 
            $("#majors").removeAttr("readonly");  
           

          } else {
          $("#secondary").val('');
            $("#secondary").attr("readonly", "readonly"); 

             $("#year3").val('');
            $("#year3").attr("readonly", "readonly"); 

             $("#year4").val('');
            $("#year4").attr("readonly", "readonly"); 

     
             $("#gpas").val('');
            $("#gpas").attr("readonly", "readonly"); 


            $("#degree2").val('');
            $("#degree2").attr("readonly", "readonly"); 


             $("#majors").val('');
            $("#majors").attr("readonly", "readonly");  
          }
       });
       
       
       
       
       
       $('#form_setchange3').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#vocation").removeAttr("readonly"); 
            $("#year5").removeAttr("readonly"); 
            $("#year6").removeAttr("readonly"); 
            $("#gpav").removeAttr("readonly"); 
            $("#degree3").removeAttr("readonly"); 
            $("#majorv").removeAttr("readonly");  
           

          } else {
          $("#vocation").val('');
            $("#vocation").attr("readonly", "readonly"); 

             $("#year5").val('');
            $("#year5").attr("readonly", "readonly"); 

             $("#year6").val('');
            $("#year6").attr("readonly", "readonly"); 

     
             $("#gpav").val('');
            $("#gpav").attr("readonly", "readonly"); 


            $("#degree3").val('');
            $("#degree3").attr("readonly", "readonly"); 


             $("#majorv").val('');
            $("#majorv").attr("readonly", "readonly");  
          }
       });
       
       
       
       
       
       
       $('#form_setchange4').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#diploma").removeAttr("readonly"); 
            $("#year7").removeAttr("readonly"); 
            $("#year8").removeAttr("readonly"); 
            $("#gpad").removeAttr("readonly"); 
            $("#degree4").removeAttr("readonly"); 
            $("#majord").removeAttr("readonly");  
           

          } else {
          $("#diploma").val('');
            $("#diploma").attr("readonly", "readonly"); 

             $("#year7").val('');
            $("#year7").attr("readonly", "readonly"); 

             $("#year8").val('');
            $("#year8").attr("readonly", "readonly"); 

     
             $("#gpad").val('');
            $("#gpad").attr("readonly", "readonly"); 


            $("#degree4").val('');
            $("#degree4").attr("readonly", "readonly"); 


             $("#majord").val('');
            $("#majord").attr("readonly", "readonly");  
          }
       });
       
       
       
       
       $('#form_setchange5').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#bachelor").removeAttr("readonly"); 
            $("#year9").removeAttr("readonly"); 
            $("#year10").removeAttr("readonly"); 
            $("#gpab").removeAttr("readonly"); 
            $("#degree5").removeAttr("readonly"); 
            $("#majorb").removeAttr("readonly");  
           

          } else {
          $("#bachelor").val('');
            $("#bachelor").attr("readonly", "readonly"); 

             $("#year9").val('');
            $("#year9").attr("readonly", "readonly"); 

             $("#year10").val('');
            $("#year10").attr("readonly", "readonly"); 

     
             $("#gpab").val('');
            $("#gpab").attr("readonly", "readonly"); 


            $("#degree5").val('');
            $("#degree5").attr("readonly", "readonly"); 


             $("#majorb").val('');
            $("#majorb").attr("readonly", "readonly");  
          }
       });
       
       
       
         
       $('#form_setchange6').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#master").removeAttr("readonly"); 
            $("#year11").removeAttr("readonly"); 
            $("#year12").removeAttr("readonly"); 
            $("#gpam").removeAttr("readonly"); 
            $("#degree6").removeAttr("readonly"); 
            $("#majorm").removeAttr("readonly");  
           

          } else {
          $("#master").val('');
            $("#master").attr("readonly", "readonly"); 

             $("#year11").val('');
            $("#year11").attr("readonly", "readonly"); 

             $("#year12").val('');
            $("#year12").attr("readonly", "readonly"); 

     
             $("#gpam").val('');
            $("#gpam").attr("readonly", "readonly"); 


            $("#degree6").val('');
            $("#degree6").attr("readonly", "readonly"); 


             $("#majorm").val('');
            $("#majorm").attr("readonly", "readonly");  
          }
       });
       
       
       $('#form_setchange7').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#otherE").removeAttr("readonly"); 
            $("#year13").removeAttr("readonly"); 
            $("#year14").removeAttr("readonly"); 
            $("#gpao").removeAttr("readonly"); 
            $("#degree7").removeAttr("readonly"); 
            $("#majoro").removeAttr("readonly");  
           

          } else {
          $("#otherE").val('');
            $("#otherE").attr("readonly", "readonly"); 

             $("#year13").val('');
            $("#year13").attr("readonly", "readonly"); 

             $("#year14").val('');
            $("#year14").attr("readonly", "readonly"); 

     
             $("#gpao").val('');
            $("#gpao").attr("readonly", "readonly"); 


            $("#degree7").val('');
            $("#degree7").attr("readonly", "readonly"); 


             $("#majoro").val('');
            $("#majoro").attr("readonly", "readonly");  
          }
       });
       
       
       $('#form_setchange7').change(function() {
          var $check = $(this);
          if ($check.prop('checked')) {
            $("#otherE").removeAttr("readonly"); 
          } else {
          $("#otherE").val('');
            $("#otherE").attr("readonly", "readonly"); 
          }
       });
       








        </script>

        <script>
 $('input[name=crash1]').change(function() {

if( crash1[0].checked ){
                  
    $("#compd").attr("readonly", "readonly"); 
    $("#compa").attr("readonly", "readonly"); 
                }
                if( crash1[1].checked ){

  $("#compd").removeAttr("readonly"); 
  $("#compa").removeAttr("readonly"); 
                }
               


      });


 $('input[name=exitwork]').change(function() {

if( exitwork[0].checked ){
  $("#because").removeAttr("readonly"); 
                  
   
    
                }
                if( exitwork[1].checked ){
                    $("#because").attr("readonly", "readonly"); 
                }
               


      });







 $("#inviterSave").submit(function(){    
        
        $("#sendDataSave").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });


 </script> 





</body>
</html>