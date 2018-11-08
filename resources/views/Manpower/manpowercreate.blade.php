้
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Manpower</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
    
     
            <script src='https://www.google.com/recaptcha/api.js'></script>
      <style>
            body {
                  font-family: 'Prompt', sans-serif;

            }
      </style>
</head>

<body>

      <div class="container">

            <form action="{{url('/manpower')}}"  id="inviter" method="POST" >
                  @csrf
                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">บริษัทต้นสังกัด/company<small class="text-danger">*</small></label>                                    
                                    {{Form::text('company','',['class'=>'form-control','id'=>'company'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">ตำแหน่งที่ต้องการ/Position Required<small class="text-danger">*</small></label>                                   
                                    {{Form::text('positionrequired','',['class'=>'form-control','id'=>'positionrequired'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">แผนก/ส่วน/Section/Dividion<small class="text-danger">*</small></label>                                    
                                    {{Form::text('section','',['class'=>'form-control','id'=>'section'])}}    
                              </div>

                        </div>



                  </div>
                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">วันที่ต้องการ/Date Required<small class="text-danger">*</small></label>                                   
                                    {{Form::date('daterequired','',['class'=>'form-control','id'=>'daterequired'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">จำนวนพนักงานที่ต้องการ/Number<small class="text-danger">*</small> </label>                                    
                                    {{Form::Number('number','',['class'=>'form-control','id'=>'number'])}}
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">อายุ/Age<small class="text-danger">*</small></label> 
                                    {{Form::Number('age','',['class'=>'form-control','id'=>'age'])}}
                              </div>

                        </div>
                  </div>

                  <div class="row">
                        <div class="col-md-5 ">
                              ประเภทของการจ้างงาน/Type of Employent
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="permanent" value="ประจำ">ประจำ/Permanent
                                                      </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="apprentie" value="ฝึกงาน">ฝึกงาน/Apprentie
                                                      </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                              <input type="checkbox" class="form-check-input" name="subcontract" value="สัญญาจ้างชั่วคราว">สัญญาจ้างชั่วคราว/Subcontract
                                                            </label>
                                    </div>





                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="daily" value="รายวัน">รายวัน/Daily
                                                                  </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"  name="monthly" value="รายเดือน">รายเดือน/Monthly
                                                                  </label>
                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                          <input type="checkbox" class="form-check-input" name="start" value="เริ่มต้น">เริ่มต้น 
                                                                          <input type="date" name="start1" class="form-control" >
                                                                          สิ้นสุด
                                                                          <input type="date" name="end" class="form-control" >
                                                                        </label>
                                    </div>


                              </div>



                        </div>
                        <div class="col-md-5 ">
                              ประเภทของความต้องการ/Type of Rquirement
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="hire" value="กรณีจ้างเพิ่ม">กรณีจ้างเพิ่ม/New
                                          </label>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="substitute" value="กรณีทดแทน">กรณีทดแทน/Replace
                                                  <input type="text" name="name_substitute" id="name_substitute" class="form-control" placeholder="ชื่อ-นามสกุล">
                                                </label>
                                    </div>
                              </div>
                        </div>
                  </div>


                  <div class="row">

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">อัตราจ้าง/Salary<small class="text-danger">*</small></label>                                    
                                    {{Form::text('ratesalary','',['class'=>'form-control','id'=>'ratesalary'])}}
                              </div>

                        </div>



                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">สวัสดิการอื่นๆ<small class="text-danger">*</small></label>                                    
                                    <textarea class="form-control" rows="1" id="benefits1" name="benefits1"></textarea>
                              </div>

                        </div>

                        <div class="col-md-4 ">
                              <div class="form-group ">
                                    <label class="control-label">ลักษณะงานที่ทำโดยสังเขป/Description<small class="text-danger">*</small></label>
                                    <textarea class="form-control" rows="1" id="description" name="description"></textarea>
                              </div>

                        </div>

                  </div>

                  <div class="row">
                        <div class="col-md-5 ">
                              คุณสมบัติ/Qualification : เพศ/Sex
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" name="gender" value="ชาย">ชาย/Male
                                                                  </label>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                                          <input type="checkbox" class="form-check-input" name="gender" value="หญิง">หญิง/Female
                                                                          
                                                                        </label>
                                    </div>
                              </div>
                        </div>

                        <div class="col-md-6 ">
                              การศึกษา/Education
                              <div class="form-group ">
                                    <div class="form-check">
                                          <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="primary" value="ป.6">ป.6/Primary School(P.6)
                                          </label>

                                    </div>
                                    <div class="form-check">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" name="high_school" value="ม.6">ม.6/High School(M.6)
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="high_vocational" value="ปวส.">ปวส./High Vocational School
                                          </label>
                                    </div>

                                    <div class="form-check">
                                          <label class="form-check-label">
                                         <input type="checkbox" class="form-check-input" name="othereducation" value="other">อื่นๆ (ส่วนสูง,น้ำหนัก,หน้าตา ฯลฯ/Other High,Weigh,Appearance etc)
                                                </label>
                                    </div>

                                    <div class="form-check">
                                                <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="secondary" value="ม.3">ม.3/Secondary
                                                </label>
                                          </div>
                                          <div class="form-check">
                                                      <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="vocational" value="ปวช.">ปวช./Vocational School
                                                      </label>
                                                </div>
                                                <div class="form-check">
                                                            <label class="form-check-label">
                                                       <input type="checkbox" class="form-check-input" name="undergraduate" value="ปริญญาตรี">ปริญญาตรี/Undergraduate
                                                            </label>
                                                      </div>
                              </div>

                        </div>
                  </div>

                  <div class="row">
                        ความสามารถพิเศษ/Special Skill
                        <div class="col-md-6 ">
                                    <div class="form-check">
                                                <label class="form-check-label">
                                           <input type="checkbox" class="form-check-input" name="foreign_lnguages" value="ภาษาต่างประเทศ">ภาษาต่างประเทศ/Foreign Languages Command <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                </label>
                                               
                                          </div>
                                          <div class="form-check">
                                                      <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input"  name="typing" value="พิมพ์ดีด">พิมพ์ดีดไทย & อังกฤษ/Thai & English Typing <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                                       </label>
                                          </div>
                                          <div class="form-check">
                                                 
                                                      <label class="form-check-label">
                                                                  <input type="checkbox" class="form-check-input" name="computer_knowledge" value="ความรู้ทางคอมพิวเตอร์">ความรู้ทางคอมพิวเตอร์/Computer Knowledge <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                            </label>
                                                </div>
                                                <div class="form-check">
                                                 
                                                            <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="other_skill" value="other2">อื่นๆ/Other <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                                  </label>
                                                      </div>

                        </div>
                  </div>

<br>
                  <div class="row">
                            ประสบการณ์/Experience &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="col-md-6 ">
                                          <div class="form-check">
                                                      <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" name="inexperience" value="ไม่มีประสบการณ์">ไม่มีประสบการณ์/Inexperience <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                      </label>
                                                     
                                                </div>
                                                <div class="form-check">
                                                            <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="minimum_experience" value="ประสบการณ์ขั้นต่ำ">ประสบการณ์ขั้นต่ำ/Minimum Experience <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                                             </label>
                                                </div>
                                                <div class="form-check">
                                                       
                                                            <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="additional_experience" value="additional">หมายเหตุเพิ่มเติม(ถ้ามี)/Additional Remark(if any) <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                                  </label>
                                                      </div>
                                                      <div class="form-check">
                                                       
                                                                  <label class="form-check-label">
                                                                              <input type="checkbox" class="form-check-input" name="other_experience" value="other3">อื่นๆ/Other <input type="text" name="" id="" class="form-control" placeholder="ระบุ">
                                                                        </label>
                                      </div>
                              </div>
                        </div>

<br><br>
                        <div class="row">
                                    <div class="col-md-4 "></div>
                                    <div class="col-md-4 ">
                                          <div class="form-group ">
                                               
                                                <div class="col-sm-4">

                                                            <div class="sigPad">
                                                                    <ul class="sigNav">
                                                                      <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                                                      <li class="clearButton"><a href="#clear">Clear</a></li>
                                                                    </ul>
                                                                    <div class="sig sigWrapper">
                                                                      <div class="typed"></div>
                                                                      <canvas class="pad" width="220" height="70"></canvas>
                                                                      <input type="hidden" name="signa1_60" class="output">
                            
                                                                    </div>
                                                                  </div>
                                                      </div>
                                                      <br>
                                                      <label class="control-label">ผู้ขอจ้าง/Requested<small class="text-danger">*</small></label>
                                                {{Form::text('requested','',['class'=>'form-control','id'=>'requested'])}}
            
                                          </div>
                                          {!! NoCaptcha::display() !!}

                                          @if ($errors->has('g-recaptcha-response'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                    
                              </div> <br>
                            <center> <span id="sendData"> <input type="submit" name="submit"  class="btn btn-success" value="ส่งคำร้อง"> </span> </center> 
      
            </form>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>
      <script type="text/javascript">
            function sizeFrame() {
                  $("#iframeid", top.document).css({ height: 0 });
                  // กำหนดความสูงของ iframe ให้เท่ากับ 0
                  var heightDiv=$(document).height(); 
                  // หาความสูงของเพจ pagecontent.html
                  $("#iframeid", top.document).height(heightDiv); 
                  // กำหนดความสูงของ iframe ให้เท่ากับความสูงของ pagecontent.html
                  }
                  $(function(){
                            sizeFrame(); 
                            // เรียกใช้ฟังก์ขันเมื่อไฟล์ pagecontent.html โหลดเสร็จแล้ว
                            $("#iframeid").load(sizeFrame); 
                           // เรียกใช้ฟังก์ขันเมื่อ iframe โหลด ไฟล์  pagecontent.html
                  });
      </script>




 
<script>
            $(document).ready(function() {
              $('.sigPad').signaturePad({drawOnly:true});
                     
            });
          


$("#inviter").submit(function(){    
    
      $("#sendData").html("ระบบกำลังทำการบันทึกโปรดรอสักครู่.....");    
      
       return true; });
 
 </script>

</body>

</html>