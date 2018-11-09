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
                                          <b>บริษัทต้นสังกัด/company :</b> {{ $manpower->company }} <br>
                                          <div class="table-wrapper-scroll-y">
                                                <table>
                                                        <tr>
                                                            <td colspan="4"align="center">
                                                               ใบขอกำลังคน / Manpower Requistion
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4">
                                                                @if ($manpower->internal_Recruit !='')
                                                                     {{ $manpower->internal_Recruit }}
                                                                @endif
                                                                @if ($manpower->external_Recruit !='')
                                                               {{ $manpower->external_Recruit }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><b>ตำแหน่งที่ต้องการ :</b> {{ $manpower->position_required }} <br> Position Required</td>
                                                            <td colspan="2"><b>แผนก/ส่วน :</b> {{ $manpower->section }} <br> Section/Dividion</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>วันที่ต้องการ :</b> {{ $manpower->date_required }} <br> Date Required</td>
                                                            <td colspan="2"><b>จำนวนพนักงานที่ต้องการ :</b> {{ $manpower->number }} <br> Number</td>
                                                            <td><b>อายุ :</b> {{ $manpower->age }} <br> Age</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>ประเภทของพนักงาน</b>
                                                                @if ($manpower->permanent!='')
                                                                    {{ $manpower->permanent }}
                                                                @endif &emsp;
                                                                @if ($manpower->apprentie!='')
                                                                    {{ $manpower->apprentie }}
                                                                @endif &emsp;
                                                                @if ($manpower->subcontract!='')
                                                                    {{ $manpower->subcontract }}
                                                                @endif
                                                                <br> Type of Employent &emsp;
                                                                @if ($manpower->daily!='')
                                                                    {{ $manpower->daily }}
                                                                @endif &emsp;
                                                                @if ($manpower->monthly!='')
                                                                    {{ $manpower->monthly }}
                                                                @endif &emsp;
                                                                @if ($manpower->checkstart!='')
                                                                    <b>เริ่มต้น :</b>{{ $manpower->timestart }} &emsp;
                                                                    <b>สิ้นสุด :</b>{{ $manpower->timeend }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>ประเภทของความต้องการ :</b>
                                                                @if ($manpower->hire!='')
                                                                    {{ $manpower->hire }}
                                                                @endif &emsp;&emsp;
                                                                @if ($manpower->substitute!='')
                                                                    {{ $manpower->substitute }}
                                                                    <b>ชื่อ-นามสกุล :</b> {{ $manpower->name_substitute }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><b>อัตราจ้าง/salary :</b> {{ $manpower->ratesalary }}</td>
                                                            <td colspan="2"><b>สวัสดิการอื่นๆ :</b> {{ $manpower->benefits }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>ลักษณะงานที่ทำโดยสังเขป/Description :</b> {{ $manpower->description }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>คุณสมบัติ/Qualification : เพศ/Sex </b>
                                                                @if ($manpower->gender=='ชาย')
                                                                    {{ $manpower->gender }}
                                                                @endif
                                                                @if ($manpower->gender=='หญิง')
                                                                    {{ $manpower->gender }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>การศึกษา/Education :</b>&emsp;
                                                                @if ($manpower->primary!='')
                                                                        {{ $manpower->primary }}
                                                                @endif 
                                                                @if ($manpower->secondary!='')
                                                        &emsp;&emsp;    {{ $manpower->secondary }}
                                                                @endif 
                                                                @if ($manpower->high_school!='')
                                                        &emsp;&emsp;    {{ $manpower->high_school }}
                                                                @endif
                                                                @if ($manpower->vocational!='')
                                                        &emsp;&emsp;    {{ $manpower->primary }}
                                                                @endif
                                                                @if ($manpower->high_vocational!='')
                                                        &emsp;&emsp;    {{ $manpower->high_vocational }}
                                                                @endif
                                                                @if ($manpower->undergraduate!='')
                                                        &emsp;&emsp;    {{ $manpower->undergraduate }}
                                                                @endif
                                                                @if ($manpower->other_education!='')
                                                        &emsp;&emsp;    {{ $manpower->other_education }} 
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>ความสามารถพิเศษ/Special Skill :</b> 
                                                                @if ($manpower->foreign_languages!='')
                                                                {{ $manpower->foreign_languages }} &emsp; {{ $manpower->languages_name }}
                                                                @endif
                                                                @if ($manpower->typing!='')
                                                        <br>        {{ $manpower->typing }} &emsp; {{ $manpower->typing_name }}
                                                                @endif
                                                                @if ($manpower->computer_knowledge!='')
                                                        <br>        {{ $manpower->computer_knowledge }} &emsp; {{ $manpower->knowledge_name }}
                                                                @endif
                                                                @if ($manpower->other_skill!='')
                                                        <br>        {{ $manpower->other_skill }} &emsp; {{ $manpower->other_skill_name }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><b>ประสบการณ์/Experience :</b>
                                                                @if ($manpower->inexperience!='')
                                                                {{ $manpower->inexperience }} 
                                                                @endif
                                                                @if ($manpower->minimum_experience!='')
                                                        <br>        {{ $manpower->minimum_experience }} {{ $manpower->minimum_experience_com }}
                                                                @endif
                                                                @if ($manpower->additional_experience!='')
                                                        <br>        {{ $manpower->additional_experience }} {{ $manpower->additional_com }}
                                                                @endif
                                                                @if ($manpower->other_experience='')
                                                        <br>        {{ $manpower->other_experience }} {{ $manpower->other_experience_com }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                  
                                                                
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
                                                                      
                                                                      
                                                                      </td>
                                                            <td align="center" colspan="2">
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
                                                                  
                                                                  </td>
                                                            <td align="center" colspan="2">
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
                                                                  
                                                                  
                                                                  </td>
          
                                                        </tr>
                                                    </table>
                                    </div>
                                          <input type="hidden" value="{{$manpower->signa1_requested}}" id="sig1">
                                          <input type="hidden" value="{{$manpower->signa1_md}}" id="sig2">
                                          <input type="hidden" value="{{$manpower->signa1_sup}}" id="sig3">
                                        <br> <br>
                                       @if($manpower->MD_enable == 1 && $manpower->Sup_enable == 1 )
                                               อนุมัติแล้ว
                                       @else 
                                       <center>     {{ Form::submit('อนุมัติ',['class'=> 'btn btn-success'])}}   </center>  
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