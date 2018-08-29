<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

	<title>NGG</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-bootstrap-wizard.css') }}" rel="stylesheet">
	

	<!-- CSS Just for demo purpose, don't include it in your project -->
   
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('{{URL::asset('img/bbb.jpg')}}')">
	  
	    <!--   Big container   -->
	    <div class="container">
	        
		        <div class="col-md-12 ">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                   
                                    {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data','role'=>'form','data-toggle'=>'validator'])}}
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
                                        NGG GROUP.
		                        	</h3>
									<h5>Cien Sesto NGGTP TAI Xian UW Other</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">ประวัติส่วนตัว</a></li>
			                            <li><a href="#account" data-toggle="tab">ประวัติการศึกษา</a></li>
                                        <li><a href="#language" data-toggle="tab">ด้านภาษา</a></li>
                                        <li><a href="#work" data-toggle="tab">ประวัติการทำงาน</a></li>
                                        <li><a href="#another" data-toggle="tab">อื่นๆ</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                           
		                                	<h4 class="info-text"> ประวัติส่วนตัว</h4>
		                                	
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture" required>
		                                        	</div>
		                                        	<h6>อัพโหลดรูปภาพ</h6>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-md-1"></div>
                                                      
                                                    <div class="col-md-2 ">
                                                       <div class="input-group">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">คำนำ<small>*</small></label>
                                                        {{ Form::select('fronname', [ '' => '', 'นาย' => 'นาย','นาง' => 'นาง','นางสาว'=> 'นางสาว'],null, ['class' => 'form-control','required']) }} 
                                                       </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-3 ">
                                                        <div class="input-group">
                                                         <div class="form-group label-floating">
                                                             <label class="control-label">ชื่อ<small>*</small></label>
                                                             {{Form::text('name','',['class'=>'form-control','required'])}}
                                                        </div>
                                                     </div>
                                                 </div>

                                                 <div class="col-md-3 ">
                                                        <div class="input-group">
                                                         <div class="form-group label-floating">
                                                             <label class="control-label">นามสกุล<small>*</small></label>
                                                             {{Form::text('lastname','',['class'=>'form-control','required'])}} 
                                                        </div>
                                                     </div>
                                                 </div>

                                                 <div class="col-md-3 ">
                                                        <div class="input-group">
                                                         <div class="form-group label-floating">
                                                             <label class="control-label">ชื่อเล่น<small>*</small></label>
                                                             {{Form::text('nikname','',['class'=>'form-control','required'])}}  
                                                        </div>
                                                     </div>
                                                 </div>
                                           </div>

                                           <div class="row">
                                                <div class="col-md-1"></div>
                                                


                                                 <div class="col-md-3">
                                                        <div class="input-group">
                                                         <div class="form-group label-floating">
                                                                <label >วันเกิด*</label>
                                                             {{Form::date('birthday','',['class'=>'form-control','required'])}}   
                                                        </div>
                                                     </div>
                                                 </div>

                                                 <div class="col-md-3"><br>
                                                 <div class="input-group">
                                                        <div class="form-group label-floating">
                                                               <label class="control-label">อายุ<small>*</small></label>
                                                               {{Form::text('age','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}   
                                                       </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">

                                                       
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                       <label class="control-label">เพศ<small>*</small></label><br>
                                                                       <input type="radio" name="gender"  value="ชาย" required /> ชาย  
                                                                       <input type="radio" name="gender"  value="หญิง" required> หญิง
                                                                       
                                                               </div>
                                                            </div>



                                                </div>

                                        </div>
                                        
                                        <div class="row">
                                              <div class="col-md-1"></div>
                                              <div class="col-md-4">

                                                    <div class="input-group">
                                                            <div class="form-group label-floating">
                                                                   <label class="control-label">นำหนัก<small>*</small></label>
                                                                   {{Form::text('weight','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$"])}}   
                                                           </div>
                                                        </div>
                                                     
                                              </div>

                                              <div class="col-md-4">
                                                    <div class="input-group">
                                                            <div class="form-group label-floating">
                                                                   <label class="control-label">ส่วนสูง/ซม.<small >*</small></label>
                                                                   {{Form::text('height','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"3"])}}
                                                           </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <hr>


                                        <div class="row">


                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
                                                        <label>สัญชาติ</label><label class="text-danger">*</label>  
                                                        {{ Form::select('nationality', ['ไทย' => 'ไทย','คริสต์' => 'คริสต์','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control','required']) }}
                                                        <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                                        </div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group {{ $errors->has('race') ? 'has-error' : '' }}" >
                                                        <label>เชื้อชาติ</label><label class="text-danger">*</label>  
                                                        {{ Form::select('race', ['ไทย' => 'ไทย','คริสต์' => 'คริสต์','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control','required']) }}
                                                        <span class="text-danger">{{ $errors->first('race') }}</span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group {{ $errors->has('religion') ? 'has-error' : '' }}" >
                                                        <label>ศาสนา</label><label class="text-danger">*</label>  
                                                        {{ Form::select('religion', ['พุทธ' => 'พุทธ','อิสลาม' => 'อิสลาม','อื่นๆ'=> 'อื่นๆ'],null, ['class' => 'form-control']) }}
                                                        <span class="text-danger">{{ $errors->first('religion') }}</span>
                                                        </div>
                                                </div>
                                                </div>
                                                <hr>


                                                <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-4">

                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                                <label class="control-label">พี่น้องกี่คน</label>
                                                                                {{Form::text('brothers','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}  
                                                                       </div>
                                                                    </div>
                                                           
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-4">
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                                <label class="control-label">เป็นคนที่</label>
                                                                                {{Form::text('number','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"2"])}}  
                                                                       </div>
                                                                    </div>
                                                            
                                                        </div>
                                                        </div>



                                                        <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                        <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                        <label class="control-label">เลขบัตรประชาชน*</label>
                                                                                        {{Form::text('idcard','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"13"])}}   
                                                                               </div>
                                                                            </div>
                                                                  
                                                                </div>
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-3">
                                                                        <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                        <label class="control-label">ออกให้ ณ อำเภอ/เขต*</label>
                                                                                     {{ Form::text('issued','' , ['class' => 'form-control','id'=>'issued','required']) }}    
                                                                               </div>
                                                                            </div>
                                                                    
                                                                </div>
                                                                </div>


                                                                <div class="row">
                                                                        <div class="col-md-1"></div>
                                                                        <div class="col-md-3">
                                                                                <div class="input-group">
                                                                                        <div class="form-group label-floating">
                                                                                                <label class="control-label">จังหวัด*</label>
                                                                                                {{ Form::text('province_crad','', ['class' => 'form-control','id'=>'province_crad','required']) }}     
                                                                                       </div>
                                                                                    </div>
                                                                        </div>
                                                                        </div>

<hr>
                                    <div class="row">
                                                                                <div class="col-md-1"></div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group {{ $errors->has('issueddate') ? 'has-error' : '' }}" >
                                                                                            <label class="control-label"><h4>วันนออกบัตร*</h4></label>
                                                                                        {{Form::date('issueddate','',['class'=>'form-control','required'])}}   
                                                                                        <span class="text-danger">{{ $errors->first('issueddate') }}</span>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-2"></div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group {{ $errors->has('expid') ? 'has-error' : '' }}" >
                                                                                            <label class="control-label"><h4>บัตรหมดอายุ*</h4></label>
                                                                                        {{Form::date('expid','',['class'=>'form-control','required'])}}   
                                                                                        <span class="text-danger">{{ $errors->first('expid') }}</span>
                                                                                        </div>
                                                                                </div>
                                                                                </div> 




                                                                                <div class="row">
                                                                                        <div class="col-md-1"></div>
                                                                                        <div class="col-md-4">
                                                                                        

                                                                                                <div class="input-group">
                                                                                                        <div class="form-group label-floating">
                                                                                                                <label class="control-label">บัตรประจำตัวผู้เสียภาษี*</label>
                                                                                                                {{Form::text('texid','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"13"])}}      
                                                                                                       </div>
                                                                                                    </div>
                                                                                        </div>
                                                                                        <div class="col-md-2"></div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="form-group {{ $errors->has('military_service') ? 'has-error' : '' }}" >
                                                                                                    <label class="control-label"><h4>สถานะทางทหาร*</h4></label> 
                                                                                                    {{ Form::select('military_service', ['' =>'::เลือก::','-' =>'::ไม่มี::','ได้รับการยกเว้น' => 'ได้รับการยกเว้น','ศึกษาวิชาทหาร' => 'ศึกษาวิชาทหาร','ผ่านการเกณฑ์ทหาร' => 'ผ่านการเกณฑ์ทหาร'],null, ['class' => 'form-control','required']) }}
                                                                                                <span class="text-danger">{{ $errors->first('military_service') }}</span>
                                                                                                </div>
                                                                                        </div>
                                                                                        </div>



                                                                                        <div class="row">
                                                                                                <div class="col-md-1"></div>
                                                                                                <div class="col-md-4 ">
                                                                                                    


                                                                                                 <div class="input-group">
                                                                                                        <div class="form-group label-floating">
                                                                                                                <label class="control-label">ที่อยู่ปัจจุบันที่ติดต่อได้*</label>
                                                                                                                <textarea name="address1"  class="form-control"  rows="3"  required>{{ old('address1') }}</textarea>     
                                                                                                       </div>
                                                                                                    </div>





                                                                                                </div>
                                                                                                <div class="col-md-2"></div>
                                                                                                <div class="col-md-4">
                                                                                                        <div class="form-group label-floating">
                                                                                                                <label class="control-label">ที่อยู่ตามบัตรประชาชน*</label>
                                                                                                                <textarea name="address2" class="form-control"  rows="3" required >{{ old('address2') }}</textarea> 
                                                                                                       </div>

                                                                                                
                                                                                                </div>
                                                                                                </div>


                                                                                                <div class="row">
                                                                                                        <div class="col-md-1"></div>
                                                                                                        <div class="col-md-4">
                                                                                                                <div class="form-group label-floating">
                                                                                                                        <label class="control-label">โทรศัพท์ที่ติดต่อ*</label>
                                                                                                                        {{Form::text('tel','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}   
                                                                                                               </div>
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="col-md-2"></div>
                                                                                                             <div class="col-md-4">
                                                                                                                <div class="form-group label-floating">
                                                                                                                        <label class="control-label">โทรศัพท์บ้าน</label>
                                                                                                                        {{Form::text('home','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}   
                                                                                                               </div>
                                                                                                          
                                                                                                            </div>
                                                                                                        </div>




                                                                                                        <div class="row">
                                                                                                                <div class="col-md-1"></div>
                                                                                                                <div class="col-md-4">
                                                                                                                        <div class="form-group label-floating">
                                                                                                                                <label class="control-label">โทรศัพท์มือถือ*</label>
                                                                                                                                {{Form::text('moblie','',['class'=>'form-control','required','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}    
                                                                                                                       </div>
                                                                                                                  
                                                                                                                </div>
                                                                                                                <div class="col-md-2"></div>
                                                                                                                <div class="col-md-3">
                                                                                                                        <div class="form-group label-floating">
                                                                                                                                <label class="control-label">โทรศัพท์สำนักงาน</label>
                                                                                                                                {{Form::text('office','',['class'=>'form-control','pattern'=>"^[0-9]{1,}$","maxlength"=>"10"])}}    
                                                                                                                       </div>
                                                                                                                       
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                        <div class="col-md-1"></div>
                                                                                                                        <div class="col-md-4">
                                                                                                                                <div class="form-group label-floating">
                                                                                                                                        <label class="control-label">อีเมล*</label>
                                                                                                                                        {{Form::email('email','',['class'=>'form-control','required'])}}   
                                                                                                                               </div>
                                                                                                                               
                                                                                                                         
                                                                                                                        </div>
                                                                                                                        </div>
                                                                                                                        <hr>
                                                                                                                        <div class="row">
                                                                                                                                <div class="col-md-1"></div>
                                                                                                                                <div class="col-md-3">
                                                                                                                                    <div class="form-group {{ $errors->has('living_status') ? 'has-error' : '' }}" >
                                                                                                                                        <label >สถานะความเป็นอยู่:</label><label class="text-danger">*</label>  
                                                                                                                                            {{ Form::select('living_status', ['' => '::เลือก::', 
                                                                                                                                                                        'บ้านส่วนตัว' => 'บ้านส่วนตัว',
                                                                                                                                                                        'บ้านเช่า' => 'บ้านเช่า',
                                                                                                                                                                        'อาศัยกับบิดามารดา'=> 'อาศัยกับบิดามารดา',
                                                                                                                                                                        'อาศัยกับผู้อื่น'=>'อาศัยกับผู้อื่น'
                                                                                                                                                            ],null, ['class' => 'form-control','required']) }}
                                                                                                                                                    <span class="text-danger">{{ $errors->first('living_status') }}</span>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-3"></div>
                                                                                                                                <div class="col-md-3">
                                                                                                                                    <div class="form-group {{ $errors->has('marital_status') ? 'has-error' : '' }}" >
                                                                                                                                        <label >สถานะครอบครัว</label><label class="text-danger">*</label>  
                                                                                                                                            {{ Form::select('marital_status', [
                                                                                                                                                                        '' => '::เลือก::', 
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
                                                                                                                                              <hr>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-1"></div>
                                                                                                                                                <div class="col-md-4">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label">  ชื่อบิดา*</label>
                                                                                                                                                                {{Form::text('namefather','',['class'=>'form-control','required'])}}   
                                                                                                                                                       </div>
                                                                                                                                                
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-2"></div>
                                                                                                                                                <div class="col-md-4">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label"> นามสกุล*</label>
                                                                                                                                                                {{Form::text('lastfather','',['class'=>'form-control','required'])}}   
                                                                                                                                                       </div>
                                                                                                                                                   
                                                                                                                                                </div>
                                                                                                                                                </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-1"></div>
                                                                                                                                                <div class="col-md-4">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label"> อาชีพ*</label>
                                                                                                                                                                {{Form::text('occupation_father','',['class'=>'form-control','required'])}}   
                                                                                                                                                       </div>
                                                                                                                                                
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-2"></div>
                                                                                                                                                <div class="col-md-3">
                                                                                                                                                        <div class="form-group label-floating"> 
                                                                                                                                                            <label class="control-label"><h4>สถานะ*</h4></label><br>
                                                                                                                                                        <input type="radio" name="alivef"  value="ยังมีชีวิตอยู่" required />ยังมีชีวิตอยู่
                                                                                                                                                        <input type="radio" name="alivef"  value="ถึงแก่กรรม" required/> ถึงแก่กรรม                                
                                                                                                                                                       
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-1"></div>
                                                                                                                                                <div class="col-md-4">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label">ชื่อมารดา*</label>
                                                                                                                                                                {{Form::text('namemother','',['class'=>'form-control','required'])}} 
                                                                                                                                                       </div>
                                                                                                                                                  
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-2"></div>
                                                                                                                                                <div class="col-md-5">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label">นามสกุล*</label>
                                                                                                                                                                {{Form::text('lasrmother','',['class'=>'form-control','required'])}}  
                                                                                                                                                       </div>
                                                                                                                                                 
                                                                                                                                                </div>
                                                                                                                                                </div>
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-md-1"></div>
                                                                                                                                                <div class="col-md-4">
                                                                                                                                                        <div class="form-group label-floating">
                                                                                                                                                                <label class="control-label">อาชีพ*</label>
                                                                                                                                                                {{Form::text('occupationm','',['class'=>'form-control','required'])}} 
                                                                                                                                                       </div>
                                                                                                                                                  
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-2"></div>
                                                                                                                                                <div class= "col-md-3">
                                                                                                                                                    <div class="form-group label-floating"> 
                                                                                                                                                            <label class="control-label"><h4>สถานะ*</h4></label><br>
                                                                                                                                                        <input type="radio" name="alivem"  value="ยังมีชีวิตอยู่" required />ยังมีชีวิตอยู่
                                                                                                                                                        <input type="radio" name="alivem"  value="ถึงแก่กรรม" required/> ถึงแก่กรรม
                                                                                                                                                       
                                                                                                                                                       
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                </div>
                                             


                                    </div>
                                    

		                            <div class="tab-pane" id="account">
                                            
                                            <div class="row">
                                                   
                                                <h4 class="info-text" >ประถมศึกษา</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน*</label>
                                                                    {{Form::text('primary','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 



                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year1','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year2','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                
                                                </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เกรดเฉลี่ย</label>
                                                                    {{Form::text('gpa','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 

                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">สาขา</label>
                                                                        {{Form::text('major','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 


                                                       
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">วุฒิที่ได้รับ</label>
                                                                    {{Form::text('degree1','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                </div>
                                                </div>
                                          <hr>
                                            <div class="row"><h4 class="info-text">มัธยมศึกษา</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน*</label>
                                                                    {{Form::text('secondary','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                        {{Form::text('year3','',['class'=>'form-control','required'])}}
                                                                   </div>
                                                                </div> 
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">จบปีการศึกษา*</label>
                                                                            {{Form::text('year4','',['class'=>'form-control','required'])}}
                                                                       </div>
                                                                 </div> 
                                                        </div>
                                                </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">

                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เกรดเฉลี่ย*</label>
                                                                    {{Form::text('gpas','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">สาขา*</label>
                                                                        {{Form::text('majors','',['class'=>'form-control','required'])}}
                                                                   </div>
                                                                </div> 
                                                   
                                                    
                                                    </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">วุฒิที่ได้รับ*</label>
                                                                    {{Form::text('degree2','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 

                                                  
                                                </div>
                                                </div>
                                         <hr>
                                            <div class="row"><h4 class="info-text">อาชีวะศึกษา</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน*</label>
                                                                    {{Form::text('vocation','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year5','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year6','',['class'=>'form-control'])}}
                                                                   </div>
                                                             </div> 
                                                </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>เกรดเฉลี่ย :</label>
                                                            {{Form::text('gpav','',['class'=>'form-control'])}}
                                                        </div>
                                                        <div class="form-group">
                                                                <label>สาขา :</label>
                                                                    {{Form::text('majorv','',['class'=>'form-control'])}}
                                                                </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>วุฒิที่ได้รับ :</label>
                                                            {{Form::text('degree3','',['class'=>'form-control'])}}
                                                        </div>
                                                </div>
                                                </div>
                                          <hr>
                                            <div class="row"><h4 class="info-text">อนุปริญญา </h4></div>
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

                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year7','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year8','',['class'=>'form-control'])}}
                                                                   </div>
                                                             </div> 
                                                </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>เกรดเฉลี่ย :</label>
                                                            {{Form::text('gpad','',['class'=>'form-control'])}}
                                                        </div>
                                                        <div class="form-group">
                                                                <label>สาขา :</label>
                                                                {{Form::text('majord','',['class'=>'form-control'])}}
                                                                </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>วุฒิที่ได้รับ :</label>
                                                        {{Form::text('degree4','',['class'=>'form-control'])}}
                                                        </div>
                                                </div>
                                                </div>
                                           <hr>
                                            <div class="row"><h4  class="info-text" >ปริญญาตรี</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน *</label>
                                                                    {{Form::text('bachelor','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year9','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year10','',['class'=>'form-control','required'])}}
                                                                   </div>
                                                             </div> 
                                              
                                                </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เกรดเฉลี่ย*</label>
                                                                    {{Form::text('gpab','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                  
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">สาขา *</label>
                                                                    {{Form::text('bachelor','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                    
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">วุฒิที่ได้รับ*</label>
                                                                    {{Form::text('degree5','',['class'=>'form-control','required'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                    </div>
                                                </div>
                                            <hr>
                                            <div class="row"><h4 class="info-text">ปริญญาโท</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน</label>
                                                                    {{Form::text('master','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                   
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">

                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year11','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year12','',['class'=>'form-control'])}}
                                                                   </div>
                                                             </div> 
                                                     </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-3">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">เกรดเฉลี่ย</label>
                                                                        {{Form::text('gpam','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">สาขา</label>
                                                                            {{Form::text('majorm','',['class'=>'form-control'])}}
                                                                       </div>
                                                                    </div> 
                                                          
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-2">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">วุฒิที่ได้รับ</label>
                                                                        {{Form::text('degree6','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                      
                                                    </div>
                                                    </div>
                                            <hr>
                                            <div class="row"><h4 class="info-text" >อื่นๆ</h4></div>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-4">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">ชื่อสถาบัน</label>
                                                                    {{Form::text('otherE','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                 
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">


                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เริ่มปีการศึกษา*</label>
                                                                    {{Form::text('year13','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">จบปีการศึกษา*</label>
                                                                        {{Form::text('year14','',['class'=>'form-control'])}}
                                                                   </div>
                                                             </div> 

                                                  
                                                </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-md-1"></div>
                                                <div class="col-md-3">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">เกรดเฉลี่ย</label>
                                                                    {{Form::text('gpao','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">สาขา</label>
                                                                        {{Form::text('majoro','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                        
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-2">
                                                        <div class="input-group">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">วุฒิที่ได้รับ</label>
                                                                    {{Form::text('degree7','',['class'=>'form-control'])}}
                                                               </div>
                                                            </div> 
                                                    </div>
                                                </div>
                                    </div>
		                            <div class="tab-pane" id="language">
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
                                                        <td>อังกฤษ *</td>
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
                                        
                                    </div>
                                    <div class="tab-pane" id="work">
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
                                                    <div class="col-md-5">
                                                            
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >สาเหตุที่ออก</label>
                                                                        {{Form::text('reasonLeaving1','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div>   
                                                    </div>
                                                    <div class="col-md-1"></div>    
                                                    <div class="col-md-5">

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
                                                    </div>
                                                <div class="row">
                                                        <div class="col-md-1"></div>
                                                    <div class="col-md-3">

                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label>ระยะงานเริ่ม</label>
                                                                        {{Form::text('start_job_duration3','',['class'=>'form-control'])}}
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
                                                    <div class="col-md-5">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >สาเหตุที่ออก</label>
                                                                        {{Form::text('reasonLeaving2','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                         
                                                    </div>
                                                    <div class="col-md-1"></div>    
                                                    <div class="col-md-5">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                        {{Form::text('lastsalary2','',['class'=>'form-control'])}}
                                                                   </div>
                                                                </div> 
                                                     
                                                        </div>
                                                    </div>
                                               
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
                                                    <div class="col-md-5">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >สาเหตุที่ออก</label>
                                                                        {{Form::text('reasonLeaving3','',['class'=>'form-control'])}} 
                                                                   </div>
                                                        </div> 
                                                       
                                                    </div>
                                                    <div class="col-md-1"></div>    
                                                    <div class="col-md-5">
                                                            <div class="input-group">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label" >เงินเดือนครั้งสุดท้าย</label>
                                                                        {{Form::text('lastsalary3','',['class'=>'form-control'])}} 
                                                                   </div>
                                                        </div> 
                                                       
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="tab-pane" id="another">
                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">ชื่อ-นามสกุล*</label>
                                                                            {{Form::text('namecm','',['class'=>'form-control'])}}        
                                                                       </div>
                                                                    </div> 
                                                          
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-5">
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">ความสัมพันธ์*</label>
                                                                            {{Form::text('namecm','',['class'=>'form-control'])}}        
                                                                       </div>
                                                                    </div> 
                                                         
                                                        </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-5">   
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">โทรศัพท์*</label>
                                                                            {{Form::text('namecm','',['class'=>'form-control'])}}        
                                                                       </div>
                                                                </div>        
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">สถานที่ทำงาน/ที่อยู่ *่</label>
                                                                            {{Form::text('firm','',['class'=>'form-control'])}}   
                                                                       </div>
                                                                </div>
                                                        </div>
                                                       
                                                        <div class="col-md-3">   
                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">ตำแหน่ง*</label>
                                                                            {{Form::text('positioncm','',['class'=>'form-control'])}}
                                                                       </div>
                                                                </div>                   
                                                        </div>                        
                                                        </div>
                                                   <hr>
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                                <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">ความรู้พิเศษ คอมพิวเตอร์  ระบุ:*</label>
                                                                            {{Form::text('computer','',['class'=>'form-control'])}}      
                                                                       </div>
                                                                </div> 
                                                          </div>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-5">
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
                                                        <div class="col-md-3"></div>
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
                                            </div>
    













		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='ถัดไป' />
		                                <input type="submit" class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='บันทึก' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='ย้อนกลับ' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
                                {{ Form::close()}}
                         
		                </div>
		            </div> <!-- wizard container -->
		        </div>
              
	    </div> <!--  big container -->

	    <br> <br> <br>
	</div>

</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/material-bootstrap-wizard.js') }}" defer></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" defer></script>
    

	<!--  Plugin for the Wizard -->
	

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->


</html>
