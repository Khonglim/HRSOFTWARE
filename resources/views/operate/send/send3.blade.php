<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Operate</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
      <style>
      body {
        font-family: 'Prompt', sans-serif;
       
      }
      </style>
  <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
  

    </head>
<body>
      <div class="container">
      <style>
            #customers {
                font-family:'Prompt', sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
    
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #customers tr:nth-child(even){background-color: #F6B7AE;}
    
            #customers tr:hover {background-color: #99ffff;}
    
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #E96060;
                color: white;
            }
            .table-wrapper-scroll-y {
  display: block;
  max-height: 100%;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
            </style>
    
    <div class="container-fluid">
            @if ($operate->degree_enable == 1)
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับบังคับบัญชา</h2>
            @else
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับปฏิบัติการ</h2>
            @endif
           
            <div class="font" style="text-align:center;"><b>คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน</b></div>
            <b>1. ระดับในการประเมินผล</b><br>
            <input type="hidden" value="{{$operate->signa1_60}}" id="sig0">
            <input type="hidden" value="{{$operate->signa1_90}}" id="sig1">
            
            &emsp;&emsp;4 ดีมาก = ผลการปฎิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
            &emsp;&emsp;3 ดี = ผลการปฎิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br></dd>
            &emsp;&emsp;2 พอใช้ = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
            &emsp;&emsp;1 ต้องปรับปรุง = ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>
            <b>2.การประเมินผลให้แยกประเมินผลตามหัวข้อประเมิน และคิดคะแนนรวมดังนี้</b><br>
            &emsp;&emsp;2.1. ระดับพนักงานทั่วไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-15. <u>ได้ผลรวมคะแนนเท่าไหร่ ให้คูณด้วย 100หาร60</u><br>
            &emsp;&emsp;2.2. ระดับหัวหน้างานขึ้นไป ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-25 <br>
            <b>3. ผู้ถูกประเมินจะต้องได้ 60คะแนน ขึ้นไป จึงจะผ่านเกณฑ์การประเมินผลการทดลองงาน</b><br>
            <b>4. เขียนเครื่องหมาย <input type="checkbox" checked="checked"> ลงในช่องประเมินผล ตามผลการปฏิบัติงานที่ประเมินได้</b><br>
            <b>5. ผู้ประเมินแจ้งให้ผู้ถูกประเมินทราบล่วงหน้าก่อนวันครบรอบกำหนดทดลองงาน 119วัน <u>โดยให้แจ้งผู้ถูกประเมินไม่น้อยกว่า30วัน ก่อนการจ่ายค่าจ้างในรอบถัดไป</u></b><br><br><br>
            <div class="font"><b>บริษัท ในเครือ เอ็น จี จี กรุ๊ป </b></div>
            <div class="card">
                        <div class="card-header">การประเมินผลการทดลองงาน</div>
                        <div class="card-body">
                        <div class="form-group">
                        <div class="row">
                                    <div class="col-md-4 ">
                                                <div class="form-group ">
                                                    <label class="control-label ">ชื่อ-สกุล:</label>
                                                   
                                                <input type="text" class="form-control"  readonly value="{{$operate->first_name}}">
                                                   </div>
                                
                                            </div>
                                            <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label">รหัสพนักงาน:</label>
                                                      <input type="text" class="form-control" name="id_employ"  readonly  value="{{$operate->new_id_employ}}">
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">ตำแหน่ง:</label>
                                                                <input type="text" class="form-control" name="position" readonly value="{{$operate->new_position}}" >
                                                      
                                                               </div>
                                            
                                                        </div>
                              </div>
                              <div class="row">
                                          <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label ">แผนก/ฝ่าย:</label>
                                                          <input type="text" class="form-control" name="department"   readonly value="{{$operate->new_department}}" >
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">วันเริ่มงาน:</label>
                                                            <input type="text" name="dateStart2" id="dateStart2" class="form-control" readonly value="{{$operate->starttime}}">
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ครบการทดลองงาน:</label>
                                                                  <input type="text" name="dateEnd2" id="dateEnd2"  class="form-control" readonly value="{{$operate->endtime}}">
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                    </div>
                                    <div class="row">
                                                <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label ">จำนวนวัน:</label>
                                                            <input type="text" name="totolDay2" id="totolDay2"   readonly class="form-control" readonly value="{{$operate->number}}"/>
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ระดับ:</label>
                                                                  <input type="text" name="degree" id="degree"  class="form-control"  readonly value="{{$operate->degree}}" />
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                              <div class="col-md-4 ">
                                                                        <div class="form-group ">
                                                                            <label class="control-label">ประเมินครั้งที่ 1 : วันที่ :</label>
                                                                            <input type="text" name="totolDay_60" id="totolDay_60"   class="form-control" readonly value="{{$operate->date_60}}"/>
                                                                  
                                                                           </div>
                                                        
                                                                    </div>
                                          </div>

                                          <div class="row">
                                                      <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label ">ประเมินครั้งที่ 2 : วันที่:</label>
                                                                      <input type="text" name="totolDay_90" id="totolDay_90"  class="form-control"  readonly value="{{$operate->date_90}}"/>
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                  
                                                </div>
                                             
                        </div>
                   
                        <div class="form-group">
                                <div class="col-sm-12">
                                        <div  class="table-wrapper-scroll-y">        
                    <table id="customers">
                            <tr>
                              <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสายครั้งที่ 1</th>
                            </tr>
                            <tr>
                              <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                              <td style="text-align:center">ลาป่วย(วัน )</td>
                              <td style="text-align:center">ลากิจ (วัน )</td>
                              <td style="text-align:center">ขาดงาน (วัน )</td>
                              <td style="text-align:center">พักร้อน (วัน )</td>
                              <td style="text-align:center">สาย (ครั้ง)</td>
                              <td style="text-align:center">สาย (นาที)</td>
    
                            </tr>
                            <tr>
                              <td style="text-align:center">ตั้งแต่วันที่ {{$operate->startwork_60}} <br><br>
                                ถึงวันที่    {{$operate->endwork_60}}
    
    
                            </td>
                              <td style="text-align:center"> {{$operate->sick_leave_60}}</td>
                              <td style="text-align:center">{{$operate->errand_leave_60}}</td>
                              <td style="text-align:center">{{$operate->absence_60}}</td>
                              <td style="text-align:center">{{$operate->vacation_60}}</td>
                              <td style="text-align:center">{{$operate->line_terms_60}}</td>
                              <td style="text-align:center">{{$operate->line_min_60}}</td>
    
                            </tr>
                          </table>
                                        </div>
    
                                </div>
                         </div>  
                         
                         
                         <div class="form-group">
                                <div class="col-sm-12">
                                        <div  class="table-wrapper-scroll-y">        
                                                <table id="customers">
                                                        <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย (การประเมิน 90 วัน)</th></tr>
                                                        <tr>
                                                            <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                                                            <td style="text-align:center">ลาป่วย(วัน )</td>
                                                            <td style="text-align:center">ลากิจ (วัน )</td>
                                                            <td style="text-align:center">ขาดงาน (วัน )</td>
                                                            <td style="text-align:center">พักร้อน (วัน )</td>
                                                            <td style="text-align:center">สาย (ครั้ง)</td>
                                                            <td style="text-align:center">สาย (นาที)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ตั้งแต่วันที่ :{{$operate->startwork_90}} <br>ถึงวันที่ :{{$operate->endtwork_90}}</td>
                                                            <td style="text-align:center">{{$operate->sick_leave_90}}</td>
                                                            <td style="text-align:center">{{$operate->errand_leave_90}}</td>
                                                            <td style="text-align:center">{{$operate->absence_90}}</td>
                                                            <td style="text-align:center">{{$operate->vacation_90}}</td>
                                                            <td style="text-align:center">{{$operate->line_terms_90}}</td>
                                                            <td style="text-align:center">{{$operate->line_min_90}}</td>
                                                        </tr>
                                                    </table>
                            
                                        </div>
    
                                </div>
                         </div>  
                  
                         @if ($operate->degree_enable == 1)
                         <div class="form-group">
                                <div class="col-sm-12">
                                    <div  class="table-wrapper-scroll-y">     
                         <table id="customers">
                                <tbody>
                                    <tr>
                                        <td align="center" rowspan="2">หัวข้อการประเมิน (100 คะแนน)<br>เงื่อนไขการให้คะแนนจะจัดแบ่งดังนี้<br>4 ดีมาก 3 ดี 2 พอใช้ 1 ต้องปรับปรุง</td>
                                        <td align="center" colspan="2">ระดับคะแนนการประเมินผล</td>
                                    </tr>
                                    <tr>
                                        <td align="center">ประเมินรอบ {{$operate->NumberDate_60}} วัน</td>
                                        <td align="center">ประเมินรอบ {{$operate->NumberDate_90}} วัน</td>
                                    </tr>
                                    <tr><td colspan="3"><b>ระดับผู้บังคับบัญชา (Supervisory Level)</b></td></tr>
                                    <tr>
                                        <td>1. คุณภาพของงานที่ปฏิบัติ</td>
                                        <td align="center">{{$operate->chioce1_60}}</td>
                                        <td align="center">{{$operate->chioce1_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน</td>
                                        <td align="center">{{$operate->chioce2_60}}</td>
                                        <td align="center">{{$operate->chioce2_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>3. ความรับผิดชอบและไว้วางใจในการทำงาน</td>
                                        <td align="center">{{$operate->chioce3_60}}</td>
                                        <td align="center">{{$operate->chioce3_90}}</td>
                                    </tr>    
                                    <tr>
                                        <td>4. การปฏิบัติตามคำสั่ง และ คำแนะนำ</td>
                                        <td align="center">{{$operate->chioce4_60}}</td>
                                        <td align="center">{{$operate->chioce4_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>5. การประพฤติตามระเบียบข้อบังคับของบริษัท</td>
                                        <td align="center">{{$operate->chioce5_60}}</td>
                                        <td align="center">{{$operate->chioce5_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ</td>
                                        <td align="center">{{$operate->chioce6_60}}</td>
                                        <td align="center">{{$operate->chioce6_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ</td>
                                        <td align="center">{{$operate->chioce7_60}}</td>
                                        <td align="center">{{$operate->chioce7_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>8. ความสามารถในการเรียนรู้งาน</td>
                                        <td align="center">{{$operate->chioce8_60}}</td>
                                        <td align="center">{{$operate->chioce8_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์</td>
                                        <td align="center">{{$operate->chioce9_60}}</td>
                                        <td align="center">{{$operate->chioce9_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง</td>
                                        <td align="center">{{$operate->chioce10_60}}</td>
                                        <td align="center">{{$operate->chioce10_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น</td>
                                        <td align="center">{{$operate->chioce11_60}}</td>
                                        <td align="center">{{$operate->chioce11_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง</td>
                                        <td align="center">{{$operate->chioce12_60}}</td>
                                        <td align="center">{{$operate->chioce12_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>13. ทัศนคติที่มีต่อบริษัท</td>
                                        <td align="center">{{$operate->chioce13_60}}</td>
                                        <td align="center">{{$operate->chioce13_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย</td>
                                        <td align="center">{{$operate->chioce14_60}}</td>
                                        <td align="center">{{$operate->chioce14_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน</td>
                                        <td align="center">{{$operate->chioce15_60}}</td>
                                        <td align="center">{{$operate->chioce15_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>16. ความสามารถในการทำงานบังคับบัญชา การควบคุมระเบียบวินัย</td>
                                        <td align="center">{{$operate->chioce16_60}}</td>
                                        <td align="center">{{$operate->chioce16_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>17. การมอบหมายงาน/ควบคุมงาน/ติดตามงาน</td>
                                        <td align="center">{{$operate->chioce17_60}}</td>
                                        <td align="center">{{$operate->chioce17_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>18. การสอนงาน และการพัฒนาผู้ใต้บังคับบัญชา</td>
                                        <td align="center">{{$operate->chioce18_60}}</td>
                                        <td align="center">{{$operate->chioce18_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>19. การกระตุ้นและการสร้างสรรค์การทำงานเป็นทีม</td>
                                        <td align="center">{{$operate->chioce19_60}}</td>
                                        <td align="center">{{$operate->chioce19_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>20. ความสามารถด้านวางแผน/จัดระบบงาน/ขั้นตอนการทำงาน การบริหารเวลา</td>
                                        <td align="center">{{$operate->chioce20_60}}</td>
                                        <td align="center">{{$operate->chioce20_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>21. ความสามารถในการแก้ไขปัญหาและการตัดสินใจในการบริหารงาน</td>
                                        <td align="center">{{$operate->chioce21_60}}</td>
                                        <td align="center">{{$operate->chioce21_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>22. การมีมุมมอง/การปฏิบัติตามนโยบาย/เป้าหมาย โดยภาพรวมบริษัท</td>
                                        <td align="center">{{$operate->chioce22_60}}</td>
                                        <td align="center">{{$operate->chioce22_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>23. ความสามารถในการรับแรงกดดัน สภาพบีบบังคับ</td>
                                        <td align="center">{{$operate->chioce23_60}}</td>
                                        <td align="center">{{$operate->chioce23_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>24. ความสามารถในการเจรจาต่อรองและการโน้มน้าวจูงใจผู้ใต้บังคับบัญชา</td>
                                        <td align="center">{{$operate->chioce24_60}}</td>
                                        <td align="center">{{$operate->chioce24_90}}</td>
                                    </tr>
                                    <tr>
                                        <td>25. ความสามารถในการสรุปงานและการนำเสนองาน</td>
                                        <td align="center">{{$operate->chioce25_60}}</td>
                                        <td align="center">{{$operate->chioce25_90}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>รวมคะแนนทั้งสิ้น</b> ประเมินครั้งที่ 1 : {{$operate->NumberDate_60}} วัน <u><font color="red">{{$operate->subtotal_60}}</font></u> คะแนน ประเมินครั้งที่ 2 : 90 วัน <u><font color="red">{{$operate->subtotal_90}}</font></u> คะแนน <b>(รวมกันหาร2) = <u><font color="red">{{$operate->subtotal_final}}</font></u> </b></td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
            </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-12">
                            <div  class="table-wrapper-scroll-y">         
                        <table id="customers">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <b>จุดเด่นของพนักงาน :</b> {{$operate->comments_featured}}<br>
                                            <b>จุดด้อยของพนักงาน :</b> {{$operate->comments_weakness}} <br>
                                                @if($operate->experimental == 'ไม่ผ่านทดลองงาน')
                                            <input type="checkbox" checked="checked" disabled>{{$operate->experimental}} ให้มีผลบังคับตั้งแต่วันที่ : {{$operate->experimental_date}} <br>
                                            @endif 
                                                @if($operate->full_time_worker == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                                            <input type="checkbox" checked="checked" disabled>{{$operate->full_time_worker}} ตั้งแต่วันที่ : {{$operate->full_time_worker_date}} ตำแหน่ง : {{$operate->full_time_worker_position}} <br>
                                            @endif 
                                                @if($operate->modify == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                                            <input type="checkbox" checked="checked" disabled>{{$operate->modify}} และปรับตำแหน่ง จากตำแหน่ง : {{$operate->modify_position1}} เป็นตำแหน่ง : {{$operate->modify_position2}} ตั้งแต่วันที่ : {{$operate->modify_date}} <br>
                                             @endif 
                                                @if($operate->other_90 == 'อื่นๆ')
                                            <input type="checkbox" checked="checked" disabled>{{$operate->other_90}} : {{$operate->other_com_90}}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                            <td align="center">
                                                    <br>
                                                    <div class="sig0">
                                                            <div class="sigWrapper">
                                                            
                                                              <canvas class="pad" width="220" height="77"></canvas>
                                                            </div>
                                                       
                                                          </div>
                                                    <br> ( คุณ{{$operate->name_rate_60}} ) 
                                                    <br>ผู้บังคับบัญชาต้นสังกัด
                                                    <br>วันที่การประเมิน {{$operate->date60T}} น.
                                                    <br>การประเมิน 60 วัน	
                                                        
                                                </td>
                                        <td align="center">
                                            <br>
                                            <div class="sig1">
                                                    <div class="sigWrapper">
                                                    
                                                      <canvas class="pad" width="220" height="77"></canvas>
                                                    </div>
                                               
                                                  </div>
                                            <br> ( คุณ{{$operate->name_rate_90}} ) 
                                            <br>ผู้บังคับบัญชาต้นสังกัด
                                            <br>วันที่การประเมิน {{$operate->date90T}} น.
                                            <br>การประเมิน 90 วัน	
                                                
                                        </td>
                                        <td align="center">
                                            <br>
                                            <br> ผู้ถูกประเมิน : ........................................... <br> 
                                            ( คุณ {{$operate->first_name}} 	) <br>พนักงานผู้ถูกประเมิน<br>วันที่การประเมิน....../....../......</td>
                                    </tr>  
                                </tbody>
                                </table> 
                    </div>
                    </div>
                    </div>
@else
<div class="form-group">
        <div class="col-sm-12">
            <div  class="table-wrapper-scroll-y">              
<table id="customers">
<tr>
<th ROWSPAN="3" style="text-align:center">หัวข้อการประเมิน<br>
    ( 100 คะแนน )
    </th>
<th COLSPAN="2" style="text-align:center" >ระดับคะแนนการประเมินผล</th>
</tr>
<tr>
<td align="center" colspan="2">ประเมินรอบ</td>
</tr>
<tr>
    <td style="text-align:center" colspan="2">ระดับคะแนน</td>
  </tr>
  <tr>
    <td COLSPAN="4" style="text-align:center">ระดับปฏิบัติการ ( Operational Level )</td>
  </tr>
  <tr>
      <td></td>
      <td style="text-align:center">การประเมินรอบที่ 1 60 วัน</td>
      <td style="text-align:center">การประเมินรอบที่ 2 90 วัน</td>
  </tr>
<tr>
    <td>1. คุณภาพของงานที่ปฏิบัติ</td>
    <td align="center">{{$operate->chioce1_60}}</td>
    <td align="center">{{$operate->chioce1_90}}</td>
</tr>
<tr>
    <td>2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน</td>
    <td align="center">{{$operate->chioce2_60}}</td>
    <td align="center">{{$operate->chioce2_90}}</td>
</tr>
<tr>
    <td>3. ความรับผิดชอบและไว้วางใจในการทำงาน</td>
    <td align="center">{{$operate->chioce3_60}}</td>
    <td align="center">{{$operate->chioce3_90}}</td>
</tr>
<tr>
    <td>4. การปฏิบัติตามคำสั่ง และ คำแนะนำ</td>
    <td align="center">{{$operate->chioce4_60}}</td>
    <td align="center">{{$operate->chioce4_90}}</td>
</tr>
<tr>
    <td>5. การประพฤติตามระเบียบข้อบังคับของบริษัท</td>
    <td align="center">{{$operate->chioce5_60}}</td>
    <td align="center">{{$operate->chioce5_90}}</td>
</tr>
<tr>
    <td>6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ</td>
    <td align="center">{{$operate->chioce6_60}}</td>
    <td align="center">{{$operate->chioce6_90}}</td>
</tr>
<tr>
    <td>7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ</td>
    <td align="center">{{$operate->chioce7_60}}</td>
    <td align="center">{{$operate->chioce7_90}}</td>
</tr>
<tr>
    <td>8. ความสามารถในการเรียนรู้งาน</td>
    <td align="center">{{$operate->chioce8_60}}</td>
    <td align="center">{{$operate->chioce8_90}}</td>
</tr>
<tr>
    <td>9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์</td>
    <td align="center">{{$operate->chioce9_60}}</td>
    <td align="center">{{$operate->chioce9_90}}</td>
</tr>
<tr>
    <td>10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง</td>
    <td align="center">{{$operate->chioce10_60}}</td>
    <td align="center">{{$operate->chioce10_90}}</td>
</tr>
<tr>
    <td>11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น</td>
    <td align="center">{{$operate->chioce11_60}}</td>
    <td align="center">{{$operate->chioce11_90}}</td>
</tr>
<tr>
    <td>12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง</td>
    <td align="center">{{$operate->chioce12_60}}</td>
    <td align="center">{{$operate->chioce12_90}}</td>
</tr>
<tr>
    <td>13. ทัศนคติที่มีต่อบริษัท</td>
    <td align="center">{{$operate->chioce13_60}}</td>
    <td align="center">{{$operate->chioce13_90}}</td>
</tr>
<tr>
    <td>14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย</td>
    <td align="center">{{$operate->chioce14_60}}</td>
    <td align="center">{{$operate->chioce14_90}}</td>
</tr>
<tr>
    <td>15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน</td>
    <td align="center">{{$operate->chioce15_60}}</td>
    <td align="center">{{$operate->chioce15_90}}</td>
</tr>



<tr>
    <td colspan="3"><b>รวมคะแนนทั้งสิ้น</b> ประเมินครั้งที่ 1 : {{$operate->NumberDate_60}} วัน <u><font color="red">{{$operate->subtotal_60}}</font></u> คะแนน ประเมินครั้งที่ 2 : 90 วัน <u><font color="red">{{$operate->subtotal_90}}</font></u> คะแนน <b>(รวมกันหาร2) = <u><font color="red">{{$operate->subtotal_final}}</font></u> </b></td>
</tr>
</table>


</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<table id="customers">
<tbody >
<tr>
    <td align="center"  style="width: 30px; ">ความคิดเห็นการประเมิน 60 วัน</td>
    <td  style="width: 100px; ">{{$operate->comments_60}}</td>
</tr>
<tr>
    <td align="center"  style="width: 30px; ">ความคิดเห็นการประเมิน 90 วัน</td>
    <td  style="width: 100px; ">{{$operate->comments_90}}</td>
</tr>
</tbody>
</table> 
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
        <div  class="table-wrapper-scroll-y">         
    <table id="customers">
            <tbody>
                <tr>
                    <td colspan="3">
                        <b>จุดเด่นของพนักงาน :</b> {{$operate->comments_featured}}<br>
                        <b>จุดด้อยของพนักงาน :</b> {{$operate->comments_weakness}} <br>
                            @if($operate->experimental == 'ไม่ผ่านทดลองงาน')
                        <input type="checkbox" checked="checked" disabled>{{$operate->experimental}} ให้มีผลบังคับตั้งแต่วันที่ : {{$operate->experimental_date}} <br>
                        @endif 
                            @if($operate->full_time_worker == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                        <input type="checkbox" checked="checked" disabled>{{$operate->full_time_worker}} ตั้งแต่วันที่ : {{$operate->full_time_worker_date}} ตำแหน่ง : {{$operate->full_time_worker_position}} <br>
                        @endif 
                            @if($operate->modify == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                        <input type="checkbox" checked="checked" disabled>{{$operate->modify}} และปรับตำแหน่ง จากตำแหน่ง : {{$operate->modify_position1}} เป็นตำแหน่ง : {{$operate->modify_position2}} ตั้งแต่วันที่ : {{$operate->modify_date}} <br>
                         @endif 
                            @if($operate->other_90 == 'อื่นๆ')
                        <input type="checkbox" checked="checked" disabled>{{$operate->other_90}} : {{$operate->other_com_90}}
                        @endif
                    </td>
                </tr>
                <tr>
                        <td align="center">
                                <br>
                                <div class="sig0">
                                        <div class="sigWrapper">
                                        
                                          <canvas class="pad" width="220" height="77"></canvas>
                                        </div>
                                   
                                      </div>
                                <br> ( คุณ{{$operate->name_rate_60}} ) 
                                <br>ผู้บังคับบัญชาต้นสังกัด
                                <br>วันที่การประเมิน {{$operate->date60T}} น.
                                <br>การประเมิน 60 วัน	
                                    
                            </td>
                    <td align="center">
                        <br>
                        <div class="sig1">
                                <div class="sigWrapper">
                                
                                  <canvas class="pad" width="220" height="77"></canvas>
                                </div>
                           
                              </div>
                        <br> ( คุณ{{$operate->name_rate_90}} ) 
                        <br>ผู้บังคับบัญชาต้นสังกัด
                        <br>วันที่การประเมิน {{$operate->date90T}} น.
                        <br>การประเมิน 90 วัน	
                            
                    </td>
                    <td align="center">
                        <br>
                        <br> ผู้ถูกประเมิน : ........................................... <br> 
                        ( คุณ {{$operate->first_name}} 	) <br>พนักงานผู้ถูกประเมิน<br>วันที่การประเมิน....../....../......</td>
                </tr>  
            </tbody>
            </table> 
</div>
</div>
</div>



@endif





                         

                        {{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
                        @csrf
                        <input type="hidden"  name="dateL"  id="dateL" value="<?php echo date("d/m/Y H:i:s");?>"/>
<div class="form-group">
      <div class="col-sm-12">
                  <div class="alert alert-danger">
                              <strong>โปรดทราบ!</strong> แต่ละหัวข้อเลือกคะแนนเพียงช่องเดียว
                            </div>
              <div  class="table-wrapper-scroll-y">        
          <table id="customers">
              <tr>
                <th COLSPAN="4" style="text-align:center">เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน(100 คะแนน )</th>
              </tr>
              <tr>
                <td style="text-align:center">หัวข้อการประเมิน</td>
                <td style="text-align:center">10-8
                      ดี
                      </td>
                <td style="text-align:center">7-5
                      พอใช้
                      </td>
                <td style="text-align:center">4-1
                      ปรับปรุง
                      </td>

              </tr>
              <?php $a = 1;
              $b = 50;
              $c = 100;
              ?>
          @foreach ($manager as $managers)

              <tr>
                      <td  style="width:43%"  > {{  $managers->manager  }} </td>
                      <td style="text-align:center">
                       
                      <select name="staaff_one{{$a++}}"      style="text-align:center">

                              <option value="0" >เลือก</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>

                                    </select>


                      </td>
                      <td style="text-align:center" >
                       
                      <select name="staaff_one{{$b++}}"   style="text-align:center">

                              <option value="0" >เลือก</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                    </select>
                          </td>
                          <td style="text-align:center">
                         
                          <select    name="staaff_one{{$c++}}"     style="text-align:center" >

                                          <option value="0">เลือก</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>

                              </td>
              </tr>




          @endforeach

          <tr>

                  <td style="text-align:center" >
      รวมคะแนน

                  </td>
                  <td  COLSPAN="3" style="text-align:center">

                      <input type="text" name="sum_chioce_suitability10"  id="sum_chioce_suitability10" style="width:50px" style="text-align:center" >
                      </td>

           </tr>

            </table>
              </div>


      </div>
  </div>
<div class="row">
  <div class="form-group">
          <label  class="col-md control-label">ความคิดเห็นเพิ่มเติม: (สำหรับผู้ประเมิน)</label>
          <div class="col-md">
          <textarea class="form-control" rows="3" name="comment_suitability10" required></textarea>
          </div> <br>
          <div class="col-md">
              <div class="checkbox">
                <label><input type="checkbox"  name="ok_suitability" id="ok_suitability"  value="อนุมัติตามผู้บังคับบัญชาเสนอ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
              </div>
            </div>
            <div class="col-md">
                    <div class="checkbox">
                            <label><input type="checkbox" name="other_suitability" id="other_suitability" value="อื่นๆ">อื่นๆ</label>
                            <textarea class="form-control" rows="3" name="other_com_suitability" id="other_com_suitability"  disabled required></textarea>
                          </div>
                        </div>  
    </div>
 
</div>
  <div class="form-group">
          <label  class="col-sm-2 control-label">ชื่อผู้จัดการฝ่าย:</label>

          <div class="col-sm-4">
              <input type="text"  name="namerate_suitability" id="namerate_suitability"  class="form-control" required>
          </div>
  </div>
  <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-5">
                  <div class="sigPad">
                          <ul class="sigNav">
                            <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                            <li class="clearButton"><a href="#clear">Clear</a></li>
                          </ul>
                          <div class="sig sigWrapper">
                            <div class="typed"></div>
                            <canvas class="pad" width="220" height="70"></canvas>
                            <input type="hidden" name="signa2" class="output">

                          </div>
                        </div>
      </div>
  </div>
  <span id="sendData">   <center><button type="submit" class="btn btn-info pull-right">ตกลง</button></center>  </span>
  {{Form::close()}}
                            

                                      












                        </div>
                        </div>
                              

                        
                      </div>
    </div>


                     

















    
    
     
    
    
    
    
    

    
    
    
    
    </div>






      </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
  <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>

@if( $operate->degree_enable == 1)
<script>
        $(document).ready(function() {
          $('.sigPad').signaturePad({drawOnly:true});
                 
        });
      </script>

<script>
        $(document).ready(function() {
    
            var  sing0  = document.getElementById("sig0").value;
            var  sing1  = document.getElementById("sig1").value;
           
       
        $('.sig0').signaturePad({displayOnly:true}).regenerate(sing0);
    
        $('.sig1').signaturePad({displayOnly:true}).regenerate(sing1);
    
        
    
        });
      </script>






    
    <script type='text/javascript'>
          var add_value = [];
          var pont = 0 ;
            $('select').change(function(){
    
                add_value[this.name] = this.value;
                var pont = 0 ;
    
    
                for(var key in add_value){
                   pont=parseInt(pont)+parseInt(add_value[key]);
    
    
                }
                if(pont >100){
                    alert("คุณกรอกคะแนนเกิน 100 กรุณาตรวจสอบ");
                }
                $('#sum_chioce_suitability10').val(pont);
                $('#scoremp').val(pont);
            });
        </script>

@else


<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
             
    });
  </script>
<script>
        $(document).ready(function() {
    
            var  sing0  = document.getElementById("sig0").value;
            var  sing1  = document.getElementById("sig1").value;
           
       
        $('.sig0').signaturePad({displayOnly:true}).regenerate(sing0);
    
        $('.sig1').signaturePad({displayOnly:true}).regenerate(sing1);
    
        
    
        });
      </script>

<script type='text/javascript'>
      var add_value = [];
      var pont = 0 ;
        $('select').change(function(){

            add_value[this.name] = this.value;
            var pont = 0 ;


            for(var key in add_value){
               pont=parseInt(pont)+parseInt(add_value[key]);


            }
            if(pont >100){
                alert("คุณกรอกคะแนนเกิน 100 กรุณาตรวจสอบ");
            }
            $('#sum_chioce_suitability10').val(pont);
            $('#scoremp').val(pont);
        });
    </script>
           @endif



           <script language="javascript">
  
                function fncSubmit()
                {
     if(document.form1.ok_suitability.checked == false && document.form1.other_suitability.checked == false)
                      {
                            
                            alert('กรุณา ติก เลือก  อนุมัติตามผู้บังคับบัญชาเสนอ หรือ อื่นๆ');
                           
                            return false;
                      }
                    else if(document.form1.staaff_one1.value == "0"  && document.form1.staaff_one50.value == "0"   && document.form1.staaff_one100.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 1');
                    document.form1.staaff_one1.focus();   document.form1.staaff_one50.focus();    document.form1.staaff_one100.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one2.value == "0"  && document.form1.staaff_one51.value == "0"   && document.form1.staaff_one101.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 2');
                    document.form1.staaff_one2.focus();   document.form1.staaff_one51.focus();    document.form1.staaff_one101.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one3.value == "0"  && document.form1.staaff_one52.value == "0"   && document.form1.staaff_one102.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 3');
                    document.form1.staaff_one3.focus();   document.form1.staaff_one52.focus();    document.form1.staaff_one102.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one4.value == "0"  && document.form1.staaff_one53.value == "0"   && document.form1.staaff_one103.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 4');
                    document.form1.staaff_one4.focus();   document.form1.staaff_one53.focus();    document.form1.staaff_one103.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one5.value == "0"  && document.form1.staaff_one54.value == "0"   && document.form1.staaff_one104.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 5');
                    document.form1.staaff_one5.focus();   document.form1.staaff_one54.focus();    document.form1.staaff_one104.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one6.value == "0"  && document.form1.staaff_one55.value == "0"   && document.form1.staaff_one105.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 6');
                    document.form1.staaff_one6.focus();   document.form1.staaff_one55.focus();    document.form1.staaff_one105.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one7.value == "0"  && document.form1.staaff_one56.value == "0"   && document.form1.staaff_one106.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 7');
                    document.form1.staaff_one7.focus();   document.form1.staaff_one56.focus();    document.form1.staaff_one106.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one8.value == "0"  && document.form1.staaff_one57.value == "0"   && document.form1.staaff_one107.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 8');
                    document.form1.staaff_one8.focus();   document.form1.staaff_one57.focus();    document.form1.staaff_one107.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one9.value == "0"  && document.form1.staaff_one58.value == "0"   && document.form1.staaff_one108.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 9');
                    document.form1.staaff_one9.focus();   document.form1.staaff_one58.focus();    document.form1.staaff_one108.focus();
                    return false;
                    }
                    else if(document.form1.staaff_one10.value == "0"  && document.form1.staaff_one59.value == "0"   && document.form1.staaff_one109.value == "0" ){ 
                    alert('ท่านไม่ได้ประเมินข้อ 10');
                    document.form1.staaff_one10.focus();   document.form1.staaff_one59.focus();    document.form1.staaff_one109.focus();
                    return false;
                    }
                  






                    else
                      {
                              $("#sendData").html("ระบบกำลังทำการบันทึกโปรดรอสักครู่.....");    
                              
                      }	
                      
                      document.form1.submit();
                }
                </script>

<script>
    $(document).ready(function() {
   
         $('#other_suitability').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#other_com_suitability").removeAttr('disabled', 'disabled');
       
     }else {
        
         $("#other_com_suitability").attr('disabled', 'disabled'); 
         document.getElementById('other_com_suitability').value = "";
         
         
     }
   });
   
   
     
   
       });
   
   
   </script>
   

          
</body>
</html>