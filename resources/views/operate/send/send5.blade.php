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
        <input type="hidden" value="{{$operate->signa2}}" id="sig2">
        <input type="hidden" value="{{$operate->signa3}}" id="sig3">
   
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
                        <div class="form-group">
                                    <div class="col-sm-12">
                    
                                            <table id="customers">
                                                    <tr>
                                                      <th COLSPAN="3" style="text-align:center">สรุปผลการประเมิน</th>
                    
                                                    </tr>
                                                    <tr>
                                                      <td style="text-align:center">ประเภทการประเมิน</td>
                                                      <td style="text-align:center">คะแนนเต็ม</td>
                                                      <td style="text-align:center">คะแนนที่ได้</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="width:35%" >1. การประเมินผลการปฏิบัติงาน
                                                            โดย <b> ผู้บังคับบัญชา </b>
                                                         </td>
                                                      <td style="text-align:center">100
                                                        </td>
                                                      <td style="text-align:center"> {{$operate->subtotal_final}}</td>
                                                    </tr>
                                                    <tr>
                                                      <td>2. การประเมินผลการปฏิบัติงาน
                                                            โดย <b> ผู้จัดการฝ่าย </b></td>
                                                      <td style="text-align:center">100</td>
                                                      <td style="text-align:center">{{$operate->sum_chioce_suitability10}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">   รวมคะแนน    </td>
                                                        <td style="text-align:center">100</td>
                                                        <td style="text-align:center">{{$operate->sum_chioce_suitability10 +  $operate->subtotal_final}}</td>
                                                      </tr>
                                                  </table>
                    
                    
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
                    <div  class="table-wrapper-scroll-y">   
               <div class="col-sm-12">
                   <table  id="customers">
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
                                                       
                                                         <canvas class="pad" width="220" height="78"></canvas>
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
                                               
                                                 <canvas class="pad" width="220" height="78"></canvas>
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
        <div  class="table-wrapper-scroll-y"> 
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
                                           
                                             <canvas class="pad" width="220" height="79"></canvas>
                                           </div>
                                      
                                         </div>
                                   <br> ( คุณ{{$operate->name_rate_60}} ) 
                                   <br>ผู้บังคับบัญชาต้นสังกัด
                                   <br>วันที่การประเมิน {{$operate->created_at}} น.
                                   <br>การประเมิน 60 วัน	
                                       
                               </td>
                       <td align="center">
                           <br>
                           <div class="sig1">
                                   <div class="sigWrapper">
                                   
                                     <canvas class="pad" width="220" height="79"></canvas>
                                   </div>
                              
                                 </div>
                           <br> ( คุณ{{$operate->name_rate_90}} ) 
                           <br>ผู้บังคับบัญชาต้นสังกัด
                           <br>วันที่การประเมิน {{$operate->updated_at}} น.
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
   
   
                <div class="form-group">
                        <div class="col-sm-12"> 
                <table  id="customers">
                        <tbody>
                            <tr><td align="center" colspan="4"><b>เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน (100 คะแนน)</b></td></tr>
                            <tr>
                                <td></td>    
                                <td align="center" colspan="3"><b>ระบุคะแนน</b></td>
                            </tr>    
                            <tr>
                                <td align="center"><b>หัวข้อการประเมิน</b></td>
                                <td align="center">10-8 ดี</td>
                                <td align="center">7-5 พอใช้</td>
                                <td align="center">4-1 ปรับปรุง</td>
                            </tr>
                            <tr>
                                <td>1.บุคลิกภาพ และการแต่งกาย</td>
                                <td align="center">@if($operate->chioce_suitability1 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability1}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability11 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability11}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability21 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability21}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>2.ความสุภาพ กิริยา มารยาท</td>
                                <td align="center">@if($operate->chioce_suitability2 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability2}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability12 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability12}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability22 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability22}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>3.ความเคร่งครัดต่อระเบียบวินัย</td>
                                <td align="center">@if($operate->chioce_suitability3 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability3}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability13 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability13}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability23 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability23}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>4.ความตรงต่อเวลา</td>
                                <td align="center">@if($operate->chioce_suitability4 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability4}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability14 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability14}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability24 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability24}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>5.การประพฤติต่อผู้บังคับบัญชา</td>
                                <td align="center">@if($operate->chioce_suitability5 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability5}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability15 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability15}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability25 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability25}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>6.ทัศนคติต่องาน / บริษัท</td>
                                <td align="center">@if($operate->chioce_suitability6 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability6}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability16 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability16}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability26 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability26}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>7.การช่วยเหลือเพื่อนร่วมงาน</td>
                                <td align="center">@if($operate->chioce_suitability7 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability7}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability17 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability17}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability27 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability27}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>8.ลักษณะความเป็นผู้นำ</td>
                                <td align="center">@if($operate->chioce_suitability8 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability8}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability18 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability18}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability28 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability28}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>9.ความคิดริเริ่ม สร้างสรรค์</td>
                                <td align="center">@if($operate->chioce_suitability9 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability9}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability19 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability19}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability29 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability29}}        
                                @endif</td>
                            </tr>
                            <tr>
                                <td>10.ความคิดเห็นโดยทั่วไป</td>
                                <td align="center">@if($operate->chioce_suitability10 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability10}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability20 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability20}}        
                                @endif</td>
                                <td align="center">@if($operate->chioce_suitability30 == 0)
                                    - 
                                @else
                                    {{$operate->chioce_suitability30}}        
                                @endif</td>
                            </tr>
                            <tr><td colspan="4"><b>รวมคะแนน :</b><font color="red"> {{$operate->sum_chioce_suitability10}}</font> คะแนน</td></tr>
                        </tbody>    
                    </table> <br>
                    <table id="customers">
                        <tr>
                            <td>
                                <b>ความคิดเห็นเพิ่มเติม : </b>{{$operate->comment_suitability10}} <br>
                        @if($operate->ok_suitability == 'อนุมัติตามผู้บังคับบัญชาเสนอ')
                            <input type="checkbox" checked="checked" disabled> {{$operate->ok_suitability}} <br>
                        @endif 
                        @if($operate->other_suitability == 'อื่นๆ')
                            <input type="checkbox"  checked="checked" disabled>{{$operate->other_suitability}} : {{$operate->other_com_suitability}} <br>
                        @endif
                        @if($operate->namerate_suitability != '')
                            <center><br>
                                
                                <div class="sig2">
                                        <div class="sigWrapper">
                                   
                                            <canvas class="pad" width="220" height="79"></canvas>
                                          </div>
                                     
                                        </div>
                           
                                <br>( คุณ{{$operate->namerate_suitability}} )<br>ผู้จัดการฝ่าย</p>
                            </center>
                        @endif  
                    </td>
                </tr>
            </table> 
        </div>
    </div>
                        
                    
                            <table id="customers">
                                    <tbody>
                                        <tr><td align="center"><b>เฉพาะฝ่ายทรัพยากรบุคคล</b></td></tr>
                                        <tr>
                                            <td>
                                                    @if($operate->human_resource_ok == 'บรรจุเป็นพนักงานประจำ')
                                                        <input type="checkbox" checked="checked" disabled>ให้บรรจุเป็นพนักงานประจำ
                                                    @endif
                                                    @if($operate->human_resource_modi == 'ปรับอัตราเงินเดือน')
                                                        <input type="checkbox" checked="checked" disabled>ปรับอัตราเงินเดือน <u>{{$operate->human_resource_commo}}</u>
                                                    <br>@endif
                                                    @if($operate->human_resource_nodi == 'ยังไม่ปรับเงินเดือน')
                                                        <input type="checkbox" checked="checked" disabled>ยังไม่ปรับอัตราเงินเดือน <u>{{$operate->human_resource_comno}}</u>
                                                    <br>@endif
                                                    @if($operate->human_resource_adjust == 'ให้ปรับตำแหน่งเป็น')
                                                    <input type="checkbox" checked="checked" disabled>ให้ปรับตำแหน่งเป็น <u>{{$operate->human_resource_posi}}</u> และปรับเงินเดือน
                                                    <br>@endif
                                                    @if($operate->human_resource_fail == 'ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่:')
                                                        <input type="checkbox" checked="checked"  disabled>ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่: <u> {{$operate->human_resource_date}}</u>
                                                    <br>@endif 
                                                    @if($operate->human_resource_other == 'อื่นๆ')
                                                        <input type="checkbox" checked="checked" disabled>อื่นๆ <u>{{$operate->human_resource_othercom}}</u>
                                                    <br>@endif 
                                            </td>
                                             <tr>
                                                 <td align="center">
                                                     <br> <br>
                                                        <div class="sig3">
                                                                <div class="sigWrapper">
                                                                
                                                                  <canvas class="pad" width="220" height="78"></canvas>
                                                                </div>
                                                           
                                                              </div>
                                                 @if($operate->human_resource_nre != '')
                                               ( คุณ{{$operate->human_resource_nre}} )
                                               <br>ฝ่ายทรัพยากรบุคคล
                                               <br>วันที่การประเมิน {{$operate->dateS}} น.
                                                @endif
                                            </td>
                                        </tr>       
                                    </tbody>
                                </table>

                        {{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
                        @csrf
                     
                    
                        <input type="hidden"  name="dateM"  id="dateM" value="<?php echo date("d/m/Y H:i:s");?>"/>                        
        <div class="panel panel-info" style="width:100%">
                  <div class="panel-heading">เฉพาะกรรมการผู้จัดการ/ผู้จัดการทั่วไป</div>
                  <div class="panel-body">
                    <div class="form-group"></div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <div class="col-md ">
                                            <label><input type="checkbox" name="manager_resource_ok" id="manager_resource_ok" value="อนุมัติตามผู้บังคับบัญชาเสนอ" > ให้บรรจุเป็นพนักงานประจำ</label>
                                        </div>
                                        <div class="col-md">
                                            <label><input type="checkbox" name="manager_resource_modi" id="manager_resource_modi" value="ปรับอัตราเงินเดือน"> ปรับอัตราเงินเดือน: </label> 
                                            
                                            <input type="text" name="manager_resource_comdi"  id="manager_resource_comdi"   class="form-control" required  disabled/>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <div class="checkbox">
                                    <div class="col-md">
                                    <label><input type="checkbox" name="manager_resource_nodi" id="manager_resource_nodi"  value="ยังไม่ปรับเงินเดือน"> ยังไม่ปรับเงินเดือน: </label> 
                                    <input type="text" name="manager_resource_comno" id="manager_resource_comno" class="form-control" required disabled>
                                </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group"></div>
                                <div class="form-group">
                                    
                                    <div class="checkbox">
                                        <div class="col-md">
                                                <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น " id="manager_resource_adjust" name="manager_resource_adjust"> ให้ปรับตำแหน่งเป็น:</label> 
                                                <input type="text"  name="manager_resource_posi" class="form-control" id="manager_resource_posi" required disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <div class="col-md">
                                                <label><input type="checkbox"  name="manager_resource_fail" id="manager_resource_fail"  value="ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่ "  name="nomodi_11"> ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่: </label>
                                                
                                                <input type="date"  name="manager_resource_date" id="manager_resource_date" class="form-control" required disabled >
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                          <div class="form-group">
                                <div class="checkbox">
                                  <label  class="col-sm-2 control-label"></label>
                                  <div class="col-sm-4 ">
  
                                        <label><input type="checkbox" value="อื่นๆ" name="manager_resource_other" id="manager_resource_other"> อื่นๆ : </label>
                                        
                                        <textarea class="form-control" rows="3" name="manager_resource_othercom"  id="manager_resource_othercom" required disabled></textarea>
  
                                      </div>
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
                                                    <input type="hidden" name="signa4" class="output">
  
                                                  </div>
                                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                                  <label  class="col-sm-3 control-label">ชื่อกรรมการผู้จัดการ/ผู้จัดการทั่วไป:</label>
  
                                  <div class="col-sm-4">
                                      <input type="text"  name="manager_resource_nre"  class="form-control" required>
                                  </div>
  
  
  
                          </div>
  
                      </div>
  
  
  
  
  
          </div>
  
                    
                    
          <center>    <span id="sendData">   <button type="submit" class="btn btn-info pull-right">ตกลง</button> </span></center> 
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



<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
             
    });
  </script>


       
<script>
        $(document).ready(function() {
    
            var  sing0  = document.getElementById("sig0").value;
            var  sing1  = document.getElementById("sig1").value;
            var  sing2  = document.getElementById("sig2").value;
            var  sing3  = document.getElementById("sig3").value;
          
       
        $('.sig0').signaturePad({displayOnly:true}).regenerate(sing0);
    
        $('.sig1').signaturePad({displayOnly:true}).regenerate(sing1);
    
          $('.sig2').signaturePad({displayOnly:true}).regenerate(sing2);
    
          $('.sig3').signaturePad({displayOnly:true}).regenerate(sing3);
    
     
    
        });
      </script>



<script>
    $(document).ready(function() {
   
         $('#manager_resource_modi').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#manager_resource_comdi").removeAttr('disabled', 'disabled');
       
     }else {
        
         $("#manager_resource_comdi").attr('disabled', 'disabled'); 
         document.getElementById('manager_resource_comdi').value = "";
         
         
     }
   });
   
   
     $('#manager_resource_nodi').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#manager_resource_comno").removeAttr('disabled', 'disabled');
         
       
     }else {
        
         $("#manager_resource_comno").attr('disabled', 'disabled'); 
         document.getElementById('manager_resource_comno').value = "";
       
         
     }
   });
   
   
    $('#human_resource_adjust').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#human_resource_posi").removeAttr('disabled', 'disabled');
        
     }else {
       $("#human_resource_posi").attr('disabled', 'disabled'); 
         document.getElementById('human_resource_posi').value = "";
         
     }
   });
   
   
   
   $('#manager_resource_adjust').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#manager_resource_posi").removeAttr('disabled', 'disabled');
        
     }else {
      
         $("#manager_resource_posi").attr('disabled', 'disabled'); 
         document.getElementById('manager_resource_posi').value = "";
        
         
     }
    });
$('#manager_resource_fail').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#manager_resource_date").removeAttr('disabled', 'disabled');
        
     }else {
      
         $("#manager_resource_date").attr('disabled', 'disabled'); 
         document.getElementById('manager_resource_date').value = "";
        
         
     }





   });
   
   $('#manager_resource_other').click(function() {
     
     if ($(this).is(':checked')) {
   
         $("#manager_resource_othercom").removeAttr('disabled', 'disabled');
        
     }else {
      
         $("#manager_resource_othercom").attr('disabled', 'disabled'); 
         document.getElementById('manager_resource_othercom').value = "";
        
         
     }





   });
});
     
   
   
   </script>
   
   
   
   <script language="javascript">
     
           function fncSubmit()
           {
                 if(document.form1.manager_resource_modi.checked == false && document.form1.manager_resource_nodi.checked == false
                 
                 &&  document.form1.manager_resource_fail.checked == false &&  document.form1.manager_resource_adjust.checked == false


                 &&  document.form1.manager_resource_other.checked == false &&  document.form1.manager_resource_ok.checked == false 
                 )
                 {
                       
                    alert('กรุณา ติก อย่างน้อย 1 ตัวเลือก ');
                      
                       return false;
                 }
                 else{
                         $("#sendData").html("ระบบกำลังทำการบันทึกโปรดรอสักครู่.....");    
                         
                 }	
                 
                 document.form1.submit();
           }
           </script>







          
</body>
</html>