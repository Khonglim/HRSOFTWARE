<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Manpower</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
      <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src='https://www.google.com/recaptcha/api.js'></script>
      <style>
            body {
                  font-family: 'Prompt', sans-serif;

            }
            .table-wrapper-scroll-y {
  display: block;
  max-height: 1000px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
      </style>
    <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            
            table, td, th {
                border: 1px solid black;
            }
            </style>
</head>

<body>
      <div class="container">
            <div class="row justify-content-center">

                  <div class="col-md-12 bg-light p-4 rounded mt-5">
                        <div class="card">
                              <div class="card-header card bg-danger text-white">เรียนคณะผู้บริหาร</div>
                              <div class="card-body">
                                    {{Form::open(['route'=>['manpower.update',$manpower->id],'method'=>'PUT'])}}
                                    @csrf
                                          <h2>บริษัทในเครือของ เอ็น จี จี กรุ๊ป</h2><hr>
                                          <div class="row">
                                                <div class="col-md-4 ">
                                                      <b>การสรรหา</b> <b class="text-danger">:</b>
                                                      <div class="form-group ">
                                                            <div class="form-check">
                                                                  <label class="form-check-label">
                                                                        @if ($manpower->internal_Recruit !='')
                                                                        <i class="material-icons">check_box</i>
                                                                        {{ $manpower->internal_Recruit }}
                                                                        @endif <br>
                                                                    </label>
                        
                                                                  <label class="form-check-label">
                                                                        @if ($manpower->external_Recruit !='')
                                                                        <i class="material-icons">check_box</i>
                                                                        {{ $manpower->external_Recruit }}
                                                                         @endif
                                                                    </label>
                                                            </div>
                                                      </div>
                        
                                                </div>
                                          </div>
                                          <div class="row">
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>บริษัทต้นสังกัด/company</b> <b class="text-danger">:</b></label> {{ $manpower->company }}
                                                      </div>
                        
                                                </div>
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>ตำแหน่งที่ต้องการ/Position Required</b> <b class="text-danger">:</b></label> {{ $manpower->position_required }}                                  
                                                      </div>
                        
                                                </div>
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>แผนก/ส่วน/Section/Dividion</b> <b class="text-danger">:</b></label> {{ $manpower->section }}
                                                      </div>
                        
                                                </div>
                    
                                          </div>
                                          <div class="row">
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>วันที่ต้องการ/Date Required</b> <b class="text-danger">:</b></label> {{ $manpower->date_required }}                                    
                                                      </div>
                        
                                                </div>
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>จำนวนพนักงานที่ต้องการ/Number</b> <b class="text-danger">:</b> </label> {{ $manpower->number }}                                  
                                                      </div>
                        
                                                </div>
                        
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>อายุ/Age</b> <b class="text-danger">:</b></label> {{ $manpower->age }}
                                                      </div>
                        
                                                </div>
                                          </div>
                        
                                          <div class="row">
                                                <div class="col-md-5 ">
                                                        <b>ประเภทของการจ้างงาน/Type of Employent</b> <b class="text-danger">:</b>
                                                      <div class="form-group ">
                                                            <div class="form-check">
                                                                  <label class="form-check-label">
                                                                        @if ($manpower->permanent!='')
                                                                        <i class="material-icons">check_box</i>ประจำ/Permanent
                                                                        @endif    
                                                                        </label>
                                                                  <div class="form-check">
                                                                        <label class="form-check-label" id="labe1">
                                                                        @if ($manpower->daily1!='')
                                                                            <i class="material-icons">check_box</i>รายวัน/Daily 
                                                                        @endif      
                                                                        </label>
                                                                  </div>
                                                                  <div class="form-check">
                                                                        <label class="form-check-label" id="labe2">
                                                                        @if ($manpower->monthly2!='')
                                                                            <i class="material-icons">check_box</i>รายเดือน/Monthly 
                                                                        @endif    
                                                                        </label>
                                                                  </div>
                                                            </div>        
                                                            <div class="form-check">
                                                                  <label class="form-check-label" >
                                                                        @if ($manpower->apprentie!='')
                                                                            <i class="material-icons">check_box</i>ฝึกงาน/Apprentie
                                                                        @endif
                                                                    </label>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label"  id="labe3">
                                                                            @if ($manpower->daily3!='')
                                                                                <i class="material-icons">check_box</i>รายวัน/Daily 
                                                                            @endif
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" id="labe4">
                                                                            @if ($manpower->monthly4!='')
                                                                                <i class="material-icons">check_box</i>รายเดือน/Monthly 
                                                                            @endif
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" id="labe5">
                                                                        @if ($manpower->checkstart1!='')
                                                                            <i class="material-icons">check_box</i>เริ่มต้น
                                                                        @endif
                                                                        @if ($manpower->timestart1!='')
                                                                            {{ $manpower->timestart1 }}
                                                                        @endif
                                                                        @if ($manpower->timeend1!='')
                                                                        สิ้นสุด  {{ $manpower->timeend1 }}
                                                                        @endif
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                            @if ($manpower->subcontract!='')            
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            
                                                                                <i class="material-icons">check_box</i>สัญญาจ้างชั่วคราว/Subcontract
                                                                            
                                                                        </label>
                                                                @endif
                                                                    @if ($manpower->daily5!='')
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" id="labe6">
                                                                                <i class="material-icons">check_box</i>รายวัน/Daily 
                                                                        </label>
                                                                    </div>
                                                                    @endif
                                                                    @if ($manpower->monthly6!='')
                                                                    <div class="form-check">
                                                                        <label class="form-check-label" id="labe7">
                                                                                <i class="material-icons">check_box</i>รายเดือน/Monthly 
                                                                        </label>
                                                                    </div>@endif
                                                                    <div class="form-check">
                                                                    <label class="form-check-label" id="labe8">
                                                                        @if ($manpower->checkstart2!='')
                                                                            <i class="material-icons">check_box</i>เริ่มต้น
                                                                        @endif
                                                                        @if ($manpower->timestart2!='')
                                                                            {{ $manpower->timestart2 }}
                                                                        @endif
                                                                        @if ($manpower->timeend2!='')
                                                                            สิ้นสุด  {{ $manpower->timeend2 }}
                                                                        @endif 
                                                                    </label>
                                                                    </div>
                                                                </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-5 ">
                                                      ประเภทของความต้องการ/Type of Rquirement<b class="text-danger">*</b>
                                                      <div class="form-group ">
                                                            <div class="form-check">
                                                                  <label class="form-check-label">
                                                                    @if ($manpower->hire!='')
                                                                        <i class="material-icons">check_box</i>กรณีจ้างเพิ่ม/New 
                                                                    @endif
                                                                    @if ($manpower->bec!='')
                                                                    <br>    {{ $manpower->bec }}
                                                                    @endif
                                                                  </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    @if ($manpower->substitute!='')
                                                                        <i class="material-icons">check_box</i>กรณีทดแทน/Replace 
                                                                    <br> <b>ชื่อ-นามสกุล :</b> {{ $manpower->name_substitute }}
                                                                    @endif    
                                                                </label>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>อัตราจ้าง/Salary</b> <b class="text-danger">:</b></label> {{ $manpower->ratesalary }} 
                                                      </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>สวัสดิการอื่นๆ</b> <b class="text-danger">:</b></label> {{ $manpower->benefits }}
                                                      </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                            <label class="control-label"><b>ลักษณะงานที่ทำโดยสังเขป/Description</b> <b class="text-danger">:</b></label> {{ $manpower->description }}
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-5 ">
                                                      <b>คุณสมบัติ/Qualification : เพศ/Sex</b> <b class="text-danger">:</b>
                                                      <div class="form-group ">
                                                            @if ($manpower->gender=='ชาย/Male')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" checked>ชาย/Male
                                                                </label>
                                                            </div>
                                                            @endif
                                                            @if ($manpower->gender=='หญิง/Female')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" checked>หญิง/Female
                                                                </label>
                                                            </div>
                                                            @endif
                                                      </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                      <b>การศึกษา/Education</b> <b class="text-danger">:</b></label>
                                                            @if ($manpower->primary!='')
                                                      <div class="form-group ">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ป.6/Primary School(P.6)
                                                                  </label>
                                                            </div>
                                                            @endif
                                                             @if ($manpower->secondary!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ม.6/High School(M.6)
                                                                  </label>
                                                            </div>
                                                            @endif
                                                            @if ($manpower->high_school!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ปวส./High Vocational School
                                                                  </label>
                                                            </div>
                                                            @endif
                                                            @if ($manpower->other_education!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>อื่นๆ (ส่วนสูง,น้ำหนัก,หน้าตา ฯลฯ/Other High,Weigh,Appearance etc)
                                                                </label>
                                                            </div>
                                                            @endif
                                                            @if ($manpower->vocational!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ม.3/Secondary
                                                                </label>
                                                            </div> 
                                                            @endif
                                                            @if ($manpower->high_vocational!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ปวช./Vocational School
                                                                </label>
                                                            </div>
                                                            @endif
                                                            @if ($manpower->undergraduate!='')
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    
                                                                        <i class="material-icons">check_box</i>ปริญญาตรี/Undergraduate
                                                                </label>
                                                            </div>
                                                            @endif
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <b>ความสามารถพิเศษ/Special Skill</b> <b class="text-danger">:</b></label>
                                                @if ($manpower->foreign_languages!='')     
                                                <div class="col-md-6 ">
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                        <i class="material-icons">check_box</i>ภาษาต่างประเทศ/Foreign Languages Command 
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->languages_name }}
                                                                        </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->typing!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                    <i class="material-icons">check_box</i>พิมพ์ดีดไทย & อังกฤษ/Thai & English Typing 
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->typing_name }}
                                                                </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->computer_knowledge!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                    <i class="material-icons">check_box</i>ความรู้ทางคอมพิวเตอร์/Computer Knowledge
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->knowledge_name }}
                                                                </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->other_skill!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                    <i class="material-icons">check_box</i>อื่นๆ/Other 
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->other_skill_name }}
                                                                </label>
                                                      </div>
                                                      @endif
                                                </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                                ประสบการณ์/Experience<b class="text-danger">*</b></label>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-md-6 ">
                                                      @if ($manpower->inexperience!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                    <i class="material-icons">check_box</i>ไม่มีประสบการณ์/Inexperience 
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->inexperience_com }}    
                                                            </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->minimum_experience!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                    <i class="material-icons">check_box</i>ประสบการณ์ขั้นต่ำ/Minimum Experience 
                                                                    <br> &nbsp;&nbsp;&nbsp; {{ $manpower->minimum_experience_com }}
                                                            </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->additional_experience!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                <i class="material-icons">check_box</i>หมายเหตุเพิ่มเติม(ถ้ามี)/Additional Remark(if any) 
                                                                <br> &nbsp;&nbsp;&nbsp; {{ $manpower->additional_com }}
                                                            </label>
                                                      </div>
                                                      @endif
                                                      @if ($manpower->other_experience!='')
                                                      <div class="form-check">
                                                            <label class="form-check-label">
                                                                <i class="material-icons">check_box</i>อื่นๆ/Other 
                                                                <br> &nbsp;&nbsp;&nbsp; {{ $manpower->other_experience_com }}
                                                            </label>
                                                      </div>
                                                      @endif
                                                </div>
                                          </div>
                        
                                          <br><br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <b>ผู้ขอจ้าง/Requested by</b> 
                                                    <br>     
                                                            <div class="table-wrapper-scroll-y">
                                                                <div class=" sig1">
                                                                            <div class="sigWrapper">
                                                                            
                                                                              <canvas class="pad" width="220" height="70"></canvas>
                                                                            </div>
                                                                       
                                                                          </div> 
                                                                </div>
                                                                     <br>
                                                                        <b>ชื่อ-นามสกุล:</b> {{$manpower->requested}} ผู้ร้องขอ
                                            </div>
                                            <div class="col-md-4">
                                                    <b>ประธานกรรมการ/MD.</b>
                                                    <br>
                                                    @if($manpower->signa1_md =='')
                                                    <div class="table-wrapper-scroll-y">
                                                    <div class="sigPad">
                                                                <ul class="sigNav">
                                                                  <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                                                  <li class="clearButton"><a href="#clear">Clear</a></li>
                                                                </ul>
                                                                <div class="sig sigWrapper">
                                                                  <div class="typed"></div>
                                                                  <canvas class="pad" width="220" height="70"></canvas>
                                                                  <input type="hidden" name="signa1_md" class="output" required>
                        
                                                                </div>
                                                              </div>
                                                            </div>
                                                            @else
                                                            <div class="table-wrapper-scroll-y">
                                                                    <div class="sig2">
                                                                                <div class="sigWrapper">
                                                                                
                                                                                  <canvas class="pad" width="220" height="70"></canvas>
                                                                                </div>
                                                                           
                                                                              </div> 
                                                                    </div>
                                                            @endif
                                                    
                                                    <br> 
                                                
                                                </div>
                                                <div class="col-md-4">
                                                        <div class="table-wrapper-scroll-y">
                                                                <b>หัวหน้าส่วนงานสรรหาว่าจ้าง/Sup.HR Recruitmunt</b><br>
                                                            @if($manpower->signa1_sup =='' && $manpower->MD_enable == 1)
                                                                <div class="sigPad">
                                                                            <ul class="sigNav">
                                                                              <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                                                              <li class="clearButton"><a href="#clear">Clear</a></li>
                                                                            </ul>
                                                                            <div class="sig sigWrapper">
                                                                              <div class="typed"></div>
                                                                              <canvas class="pad" width="220" height="70"></canvas>
                                                                              <input type="hidden" name="signa1_sup" class="output" required>
                                    
                                                                            </div>
                                                                          </div>
                                                                          @else
                    
                                                                          <div class="table-wrapper-scroll-y">
                                                                                <div class=" sig3">
                                                                                            <div class="sigWrapper">
                                                                                            
                                                                                              <canvas class="pad" width="220" height="70"></canvas>
                                                                                            </div>
                                                                                       
                                                                                          </div> 
                                                                                </div>
                                                                @endif
                                                                        </div>
                                                           <br> 
                                                    </div>
                                        </div>
                                         
                                          <input type="hidden" value="{{$manpower->signa1_requested}}" id="sig1">
                                          <input type="hidden" value="{{$manpower->signa1_md}}" id="sig2">
                                          <input type="hidden" value="{{$manpower->signa1_sup}}" id="sig3">
                                        <br> <br>
                                       @if($manpower->MD_enable == 1 && $manpower->Sup_enable == 1 )
                                <center>    <a href="{{url('manpower')}}">ย้อนกลับ</a>  อนุมัติแล้ว  </center>  
                                       @else 
                                       <center>    {{ Form::submit('อนุมัติ',['class'=> 'btn btn-success'])}}   </center>  
                                       @endif
                                  
                                        
                                          {{ Form::close()}}   


                              </div>

                             
                        </div>
                  </div>

            </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
      <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>

      <script>
            $(document).ready(function() {
              $('.sigPad').signaturePad({drawOnly:true});
                     
            });

    $(document).ready(function() {

        
        var  sing1  = document.getElementById("sig1").value;
        var  sing2  = document.getElementById("sig2").value;
        var  sing3  = document.getElementById("sig3").value;
       
      
    $('.sig1').signaturePad({displayOnly:true}).regenerate(sing1);
    $('.sig2').signaturePad({displayOnly:true}).regenerate(sing2);
    $('.sig3').signaturePad({displayOnly:true}).regenerate(sing3);
      

    });

      </script>
</body>

</html>