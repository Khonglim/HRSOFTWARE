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
            #customers tr:nth-child(even){background-color: #f2f2f2;}
    
            #customers tr:hover {background-color: #99ffff;}
    
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            </style>
    
    <div class="container-fluid">
            <div class="card">
                    {{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true])}}
                    @csrf
                        <div class="card-header">ตรวจสอบการประเมิน</div>
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
                                                                                    <input type="text" name="totolDay_60" id="totolDay_60"   class="form-control"  value="{{$operate->date_60}}"/>
                                                                          
                                                                                   </div>
                                                                
                                                                            </div>
                                                  </div>
        
                                                  <div class="row">
                                                              <div class="col-md-4 ">
                                                                          <div class="form-group ">
                                                                              <label class="control-label ">ประเมินครั้งที่ 2 : วันที่:</label>
                                                                              <input type="text" name="totolDay_90" id="totolDay_90"  class="form-control"   value="{{$operate->date_90}}"/>
                                                                    
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
                                  <td style="text-align:center">ตั้งแต่วันที่  <input type="text" name="startrate_60_2" id="startrate_60_2"  > <br><br>
                                    ถึงวันที่    <input type="text" name="endrate_60_2" id="endrate_60_2" >


                                </td>
                                  <td style="text-align:center"> <input type="text" name="sick"   id="sick"   style="width:50px" > </td>
                                  <td style="text-align:center"><input type="text" name="errand"  id="errand"  style="width:50px" ></td>
                                  <td style="text-align:center"><input type="text" name="absence"  id="absence"  style="width:50px" ></td>
                                  <td style="text-align:center"><input type="text"   name="vacation" id="vacation"  style="width:50px"></td>
                                  <td style="text-align:center"><input type="text"  name="line"  id="line"   style="width:50px"></td>
                                  <td style="text-align:center"><input type="text"  name="min"   id="min"  style="width:50px"></td>

                                </tr>
                              </table>
                                            </div>

                                    </div>
                             </div>

                             <div class="form-group">
                                <div class="col-sm-12">
                                        <div  class="table-wrapper-scroll-y">        
                                    <table id="customers">
                                            <tr>
                                              <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสายครั้งที่2</th>
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
                                              <td style="text-align:center">ตั้งแต่วันที่  <input type="text" id="startrate_90" name="startrate_90"  required > <br><br>
                                                ถึงวันที่    <input type="text" id="endrate_90"  name="endrate_90"  required >


                                            </td>
                                              <td style="text-align:center"> <input type="text" name="sick_90"   id="sick_90"     style="width:50px" required> </td>
                                              <td style="text-align:center"><input type="text" name="errand_90"    id="errand_90"   style="width:50px" required ></td>
                                              <td style="text-align:center"><input type="text" name="absence_90"     id="absence_90"    style="width:50px" required></td>
                                              <td style="text-align:center"><input type="text"   name="vacation_90"   id="vacation_90"   style="width:50px"  required></td>
                                              <td style="text-align:center"><input type="text"  name="line_90"    id="line_90"   style="width:50px"  required></td>
                                              <td style="text-align:center"><input type="text"  name="min_90"    id="min_90"  style="width:50px"  required></td>

                                            </tr>






                                          </table>
                                        </div>







                                </div>

                          </div>
                          @if( $operate->degree_enable == 1)

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
                        <td align="center" colspan="2">ประเมินรอบ <input type="text" name="NumberDate_60" id="NumberDate_60" class="form-control"   style="width:100px" required> วัน</td>


                      </tr>
                      <tr>
                        <td style="text-align:center" colspan="2">ระดับคะแนน</td>
                      </tr>
                      <tr>
                        <td COLSPAN="4" style="text-align:center">ระดับผู้บังคับบัญชา ( Supervisory Level )</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td style="text-align:center">การประเมินรอบที่ 1</td>
                          <td style="text-align:center">การประเมินรอบที่ 2</td>
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
                       <td style="text-align:center">
                       รวมคะแนน
                       </td>
                       <td style="text-align:center" colspan="2">
                       <input type="text" name="total_60" id="total_60" readonly>

                        </td>


                    </tr>


                    <tr>


                            <td  COLSPAN="4" >

                                    รวมคะแนนทั้งสิ้น  ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly > คะแนน <br><br>
                                                  ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly> คะแนน
                                  </td>





                     </tr>









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
                    <th COLSPAN="1" style="text-align:center" >ระดับคะแนนการประเมินผล</th>
                  </tr>
                  <tr>
                    <td align="center" colspan="2">ประเมินรอบ <input type="text" name="NumberDate_60" id="NumberDate_60" class="form-control"   style="width:100px" required> วัน</td>
                   </tr>
                   <tr>
                        <td style="text-align:center" colspan="2">ระดับคะแนน</td>
                      </tr>
                      <tr>
                        <td COLSPAN="4" style="text-align:center">ระดับปฏิบัติการ ( Operational Level )</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td style="text-align:center">การประเมินรอบที่ 1</td>
                          <td style="text-align:center">การประเมินรอบที่ 2</td>
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
                        <td style="text-align:center">

                        รวมคะแนน

                        </td>

                        <td style="text-align:center" colspan="2">

                     <input type="text" name="total_60" id="total_60" style="text-align:center" readonly>

                         </td>







                     </tr>

                     <tr>


                            <td  COLSPAN="3" >

                                    รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly style="text-align:center"  > คะแนน  <br><br>
                                                  ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly style="text-align:center"> คะแนน<br><br>
                                                  (รวมกันหาร 2) =  <input type="text" name="rate_all" id="rate_all" readonly style="text-align:center"> คะแนน
                                  </td>





                     </tr>

                </table>


            </div>
            </div>
        </div>



                          @endif
                          
                            <table id="customers">
                                    <tbody>
                                        <th style="text-align:center" colspan="4"><b>เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน (100 คะแนน)</b></th>
                                        <tr>
                                            <td align="center" rowspan="2"><b>หัวข้อการประเมิน</b></td>   
                                            <td align="center" colspan="3"><b>ระบุคะแนน</b></td>
                                        </tr>    
                                        <tr>
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
                                </table>











                        </div>
                        <div class="card-footer">ผู้ถูกประเมินจะต้องได้ 60 คะแนน ขึ้นไป จึงจะถือว่าผ่านเกณฑ์การประเมินผลการทดลองงาน
                                <button type="submit" class="btn btn-info pull-right">ตกลง</button>
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

<script>
    
            $('input[type=radio]').change(function(){
                var group_60_1=0;
                var group_60_2=0;
                var group_60_3=0;
                var group_60_4=0;
                var group_60_5=0;
                var group_60_6=0;
                var group_60_7=0;
                var group_60_8=0;
                var group_60_9=0;
                var group_60_10=0;
                var group_60_11=0;
                var group_60_12=0;
                var group_60_13=0;
                var group_60_14=0;
                var group_60_15=0;
                var group_60_16=0;
                var group_60_17=0;
                var group_60_18=0;
                var group_60_19=0;
                var group_60_20=0;
                var group_60_21=0;
                var group_60_22=0;
                var group_60_23=0;
                var group_60_24=0;
                var group_60_25=0;
                var group_total =0;
    
    
                var group_90_1=0;
                var group_90_2=0;
                var group_90_3=0;
                var group_90_4=0;
                var group_90_5=0;
                var group_90_6=0;
                var group_90_7=0;
                var group_90_8=0;
                var group_90_9=0;
                var group_90_10=0;
                var group_90_11=0;
                var group_90_12=0;
                var group_90_13=0;
                var group_90_14=0;
                var group_90_15=0;
                var group_90_16=0;
                var group_90_17=0;
                var group_90_18=0;
                var group_90_19=0;
                var group_90_20=0;
                var group_90_21=0;
                var group_90_22=0;
                var group_90_23=0;
                var group_90_24=0;
                var group_90_25=0;
                var group_90_total =0;
    
               var group_all_total =0;
    
    
    
    
               if(score60_1[0].checked ){
                   group_60_1 =  score60_1[0].value
                           }
                           if( score60_1[1].checked ){
                               group_60_1 =  score60_1[1].value
                           }
                           if( score60_1[2].checked ){
                               group_60_1 =  score60_1[2].value
    
                           }
                            if( score60_1[3].checked ){
                               group_60_1 =  score60_1[3].value
    
                           }
    
    
            if(score60_2[0].checked ){
                   group_60_2 =  score60_2[0].value
                           }
                           if( score60_2[1].checked ){
                               group_60_2 =  score60_2[1].value
                           }
                           if( score60_2[2].checked ){
                               group_60_2 =  score60_2[2].value
    
                           }
                            if( score60_2[3].checked ){
                               group_60_2 =  score60_2[3].value
    
                           }
    
            if(score60_3[0].checked ){
                   group_60_3 =  score60_3[0].value
                           }
                           if( score60_3[1].checked ){
                               group_60_3 =  score60_3[1].value
                           }
                           if( score60_3[2].checked ){
                               group_60_3 =  score60_3[2].value
    
                           }
                            if( score60_3[3].checked ){
                               group_60_3 =  score60_3[3].value
    
                           }
    
    
            if(score60_4[0].checked ){
                   group_60_4 =  score60_4[0].value
                           }
                           if( score60_4[1].checked ){
                               group_60_4 =  score60_4[1].value
                           }
                           if( score60_4[2].checked ){
                               group_60_4 =  score60_4[2].value
    
                           }
                            if( score60_4[3].checked ){
                               group_60_4 =  score60_4[3].value
    
                           }
    
            if(score60_5[0].checked ){
                   group_60_5 =  score60_5[0].value
                           }
                           if( score60_5[1].checked ){
                               group_60_5 =  score60_5[1].value
                           }
                           if( score60_5[2].checked ){
                               group_60_5 =  score60_5[2].value
    
                           }
                            if( score60_5[3].checked ){
                               group_60_5 =  score60_5[3].value
    
                           }
    
    
    
            if(score60_6[0].checked ){
                   group_60_6 =  score60_6[0].value
                           }
                           if( score60_6[1].checked ){
                               group_60_6 =  score60_6[1].value
                           }
                           if( score60_6[2].checked ){
                               group_60_6 =  score60_6[2].value
    
                           }
                            if( score60_6[3].checked ){
                               group_60_6 =  score60_6[3].value
    
                           }
    
    
            if(score60_7[0].checked ){
                   group_60_7 =  score60_7[0].value
                           }
                           if( score60_7[1].checked ){
                               group_60_7 =  score60_7[1].value
                           }
                           if( score60_7[2].checked ){
                               group_60_7 =  score60_7[2].value
    
                           }
                            if( score60_7[3].checked ){
                               group_60_7 =  score60_7[3].value
    
                           }
    
    
            if(score60_8[0].checked ){
                   group_60_8 =  score60_8[0].value
                           }
                           if( score60_8[1].checked ){
                               group_60_8 =  score60_8[1].value
                           }
                           if( score60_8[2].checked ){
                               group_60_8 =  score60_8[2].value
    
                           }
                            if( score60_8[3].checked ){
                               group_60_8 =  score60_8[3].value
    
                           }
    
            if(score60_9[0].checked ){
                   group_60_9 =  score60_9[0].value
                           }
                           if( score60_9[1].checked ){
                               group_60_9 =  score60_9[1].value
                           }
                           if( score60_9[2].checked ){
                               group_60_9 =  score60_9[2].value
    
                           }
                            if( score60_9[3].checked ){
                               group_60_9 =  score60_9[3].value
    
                           }
    
    
           if(score60_10[0].checked ){
                   group_60_10 =  score60_10[0].value
                           }
                           if( score60_10[1].checked ){
                               group_60_10 =  score60_10[1].value
                           }
                           if( score60_10[2].checked ){
                               group_60_10 =  score60_10[2].value
    
                           }
                            if( score60_10[3].checked ){
                               group_60_10 =  score60_10[3].value
    
                           }
    
           if(score60_11[0].checked ){
                   group_60_11 =  score60_11[0].value
                           }
                           if( score60_11[1].checked ){
                               group_60_11 =  score60_11[1].value
                           }
                           if( score60_11[2].checked ){
                               group_60_11 =  score60_11[2].value
    
                           }
                            if( score60_11[3].checked ){
                               group_60_11 =  score60_11[3].value
    
                           }
    
           if(score60_12[0].checked ){
                   group_60_12 =  score60_12[0].value
                           }
                           if( score60_12[1].checked ){
                               group_60_12 =  score60_12[1].value
                           }
                           if( score60_12[2].checked ){
                               group_60_12 =  score60_12[2].value
    
                           }
                            if( score60_12[3].checked ){
                               group_60_12 =  score60_12[3].value
    
                           }
    
           if(score60_13[0].checked ){
                   group_60_13 =  score60_13[0].value
                           }
                           if( score60_13[1].checked ){
                               group_60_13 =  score60_13[1].value
                           }
                           if( score60_13[2].checked ){
                               group_60_13=  score60_13[2].value
    
                           }
                            if( score60_13[3].checked ){
                               group_60_13 =  score60_13[3].value
    
                           }
    
           if(score60_14[0].checked ){
                   group_60_14 =  score60_14[0].value
                           }
                           if( score60_14[1].checked ){
                               group_60_14 =  score60_14[1].value
                           }
                           if( score60_14[2].checked ){
                               group_60_14=  score60_14[2].value
    
                           }
                            if( score60_14[3].checked ){
                               group_60_14 =  score60_14[3].value
    
                           }
    
           if(score60_15[0].checked ){
                   group_60_15 =  score60_15[0].value
                           }
                           if( score60_15[1].checked ){
                               group_60_15=  score60_15[1].value
                           }
                           if( score60_15[2].checked ){
                               group_60_15=  score60_15[2].value
    
                           }
                            if( score60_15[3].checked ){
                               group_60_15 =  score60_15[3].value
    
                           }
    
    
                           if(score60_16[0].checked ){
                   group_60_16 =  score60_16[0].value
                           }
                           if( score60_16[1].checked ){
                               group_60_16=  score60_16[1].value
                           }
                           if( score60_16[2].checked ){
                               group_60_16=  score60_16[2].value
    
                           }
                            if( score60_16[3].checked ){
                               group_60_16 =  score60_16[3].value
    
                           }
    
                           if(score60_17[0].checked ){
                                     group_60_17 =  score60_17[0].value
                           }
                           if( score60_17[1].checked ){
                               group_60_17=  score60_17[1].value
                           }
                           if( score60_17[2].checked ){
                               group_60_17=  score60_17[2].value
    
                           }
                            if( score60_17[3].checked ){
                               group_60_17 =  score60_17[3].value
    
                           }
    
    
    
     if(score60_18[0].checked ){
                   group_60_18 =  score60_18[0].value
                           }
                           if( score60_18[1].checked ){
                               group_60_18=  score60_18[1].value
                           }
                           if( score60_18[2].checked ){
                               group_60_18=  score60_18[2].value
    
                           }
                            if( score60_18[3].checked ){
                               group_60_18 =  score60_18[3].value
    
                           }
    
    
    
     if(score60_19[0].checked ){
                   group_60_19 =  score60_19[0].value
                           }
                           if( score60_19[1].checked ){
                               group_60_19=  score60_19[1].value
                           }
                           if( score60_19[2].checked ){
                               group_60_19=  score60_19[2].value
    
                           }
                            if( score60_19[3].checked ){
                               group_60_19 =  score60_19[3].value
    
                           }
    
    
    
     if(score60_20[0].checked ){
                   group_60_20 =  score60_20[0].value
                           }
                           if( score60_20[1].checked ){
                               group_60_20=  score60_20[1].value
                           }
                           if( score60_20[2].checked ){
                               group_60_20=  score60_20[2].value
    
                           }
                            if( score60_20[3].checked ){
                               group_60_20 =  score60_20[3].value
    
                           }
    
    
     if(score60_21[0].checked ){
                   group_60_21 =  score60_21[0].value
                           }
                           if( score60_21[1].checked ){
                               group_60_21=  score60_21[1].value
                           }
                           if( score60_21[2].checked ){
                               group_60_21=  score60_21[2].value
    
                           }
                            if( score60_21[3].checked ){
                               group_60_21 =  score60_21[3].value
    
                           }
    
    
     if(score60_22[0].checked ){
                   group_60_22 =  score60_22[0].value
                           }
                           if( score60_22[1].checked ){
                               group_60_22=  score60_22[1].value
                           }
                           if( score60_22[2].checked ){
                               group_60_22=  score60_22[2].value
    
                           }
                            if( score60_22[3].checked ){
                               group_60_22 =  score60_22[3].value
    
                           }
    
    
    
    
     if(score60_23[0].checked ){
                   group_60_23 =  score60_23[0].value
                           }
                           if( score60_23[1].checked ){
                               group_60_23=  score60_23[1].value
                           }
                           if( score60_23[2].checked ){
                               group_60_23=  score60_23[2].value
    
                           }
                            if( score60_23[3].checked ){
                               group_60_23 =  score60_23[3].value
    
                           }
    
    
           if(score60_24[0].checked ){
                   group_60_24 =  score60_24[0].value
                           }
                           if( score60_24[1].checked ){
                               group_60_24=  score60_24[1].value
                           }
                           if( score60_24[2].checked ){
                               group_60_24=  score60_24[2].value
    
                           }
                            if( score60_24[3].checked ){
                               group_60_24 =  score60_24[3].value
    
                           }
    
    
           if(score60_25[0].checked ){
                   group_60_25 =  score60_25[0].value
                           }
                           if( score60_25[1].checked ){
                               group_60_25=  score60_25[1].value
                           }
                           if( score60_25[2].checked ){
                               group_60_25=  score60_25[2].value
    
                           }
                            if( score60_25[3].checked ){
                               group_60_25 =  score60_25[3].value
    
                           }
    
           group_total =(parseInt(group_60_1)+parseInt(group_60_2)+parseInt(group_60_3)+parseInt(group_60_4)+parseInt(group_60_5)+parseInt(group_60_6)+parseInt(group_60_7)+parseInt(group_60_8)+parseInt(group_60_9)+parseInt(group_60_10)+parseInt(group_60_11)+parseInt(group_60_12)+parseInt(group_60_13)+parseInt(group_60_14)+parseInt(group_60_15)
           +parseInt(group_60_16)+parseInt(group_60_17)+parseInt(group_60_18)+parseInt(group_60_19)+parseInt(group_60_20)+parseInt(group_60_21) +parseInt(group_60_22)+parseInt(group_60_23)+parseInt(group_60_24)+parseInt(group_60_25)                );
    
    
                           $('#total_60').val(group_total.toFixed( 2 ));
                           $('#rate_60').val(group_total.toFixed( 2 ));
    
    
    
    
    
    
    
           if(score90_1[0].checked ){
                   group_90_1 =  score90_1[0].value
                           }
                           if( score90_1[1].checked ){
                               group_90_1 =  score90_1[1].value
                           }
                           if( score90_1[2].checked ){
                               group_90_1 =  score90_1[2].value
    
                           }
                            if( score90_1[3].checked ){
                               group_90_1 =  score90_1[3].value
    
                           }
    
    
            if(score90_2[0].checked ){
                   group_90_2 =  score90_2[0].value
                           }
                           if( score90_2[1].checked ){
                               group_90_2 =  score90_2[1].value
                           }
                           if( score90_2[2].checked ){
                               group_90_2 =  score90_2[2].value
    
                           }
                            if( score90_2[3].checked ){
                               group_90_2 =  score90_2[3].value
    
                           }
    
            if(score90_3[0].checked ){
                   group_90_3 =  score90_3[0].value
                           }
                           if( score90_3[1].checked ){
                               group_90_3 =  score90_3[1].value
                           }
                           if( score90_3[2].checked ){
                               group_90_3 =  score90_3[2].value
    
                           }
                            if( score90_3[3].checked ){
                               group_90_3 =  score90_3[3].value
    
                           }
    
    
            if(score60_4[0].checked ){
                   group_90_4 =  score90_4[0].value
                           }
                           if( score90_4[1].checked ){
                               group_90_4 =  score90_4[1].value
                           }
                           if( score90_4[2].checked ){
                               group_90_4 =  score90_4[2].value
    
                           }
                            if( score90_4[3].checked ){
                               group_90_4 =  score90_4[3].value
    
                           }
    
            if(score90_5[0].checked ){
                   group_90_5 =  score90_5[0].value
                           }
                           if( score90_5[1].checked ){
                               group_90_5 =  score90_5[1].value
                           }
                           if( score90_5[2].checked ){
                               group_90_5 =  score90_5[2].value
    
                           }
                            if( score90_5[3].checked ){
                               group_90_5 =  score90_5[3].value
    
                           }
    
    
    
            if(score90_6[0].checked ){
                   group_90_6 =  score90_6[0].value
                           }
                           if( score90_6[1].checked ){
                               group_90_6 =  score90_6[1].value
                           }
                           if( score90_6[2].checked ){
                               group_90_6 =  score90_6[2].value
    
                           }
                            if( score90_6[3].checked ){
                               group_90_6 =  score90_6[3].value
    
                           }
    
    
            if(score90_7[0].checked ){
                   group_90_7 =  score90_7[0].value
                           }
                           if( score90_7[1].checked ){
                               group_90_7 =  score90_7[1].value
                           }
                           if( score90_7[2].checked ){
                               group_90_7 =  score90_7[2].value
    
                           }
                            if( score90_7[3].checked ){
                               group_90_7 =  score90_7[3].value
    
                           }
    
    
            if(score90_8[0].checked ){
                   group_60_8 =  score90_8[0].value
                           }
                           if( score90_8[1].checked ){
                               group_90_8 =  score90_8[1].value
                           }
                           if( score90_8[2].checked ){
                               group_90_8 =  score90_8[2].value
    
                           }
                            if( score90_8[3].checked ){
                               group_90_8 =  score90_8[3].value
    
                           }
    
            if(score90_9[0].checked ){
                   group_90_9 =  score90_9[0].value
                           }
                           if( score90_9[1].checked ){
                               group_90_9 =  score90_9[1].value
                           }
                           if( score90_9[2].checked ){
                               group_90_9 =  score90_9[2].value
    
                           }
                            if( score90_9[3].checked ){
                               group_90_9 =  score90_9[3].value
    
                           }
    
    
           if(score90_10[0].checked ){
                   group_90_10 =  score90_10[0].value
                           }
                           if( score90_10[1].checked ){
                               group_90_10 =  score90_10[1].value
                           }
                           if( score90_10[2].checked ){
                               group_90_10 =  score90_10[2].value
    
                           }
                            if( score90_10[3].checked ){
                               group_90_10 =  score90_10[3].value
    
                           }
    
           if(score90_11[0].checked ){
                   group_90_11 =  score90_11[0].value
                           }
                           if( score90_11[1].checked ){
                               group_90_11 =  score90_11[1].value
                           }
                           if( score90_11[2].checked ){
                               group_90_11 =  score90_11[2].value
    
                           }
                            if( score90_11[3].checked ){
                               group_90_11 =  score90_11[3].value
    
                           }
    
           if(score90_12[0].checked ){
                   group_90_12 =  score90_12[0].value
                           }
                           if( score90_12[1].checked ){
                               group_90_12 =  score90_12[1].value
                           }
                           if( score60_12[2].checked ){
                               group_90_12 =  score90_12[2].value
    
                           }
                            if( score90_12[3].checked ){
                               group_90_12 =  score90_12[3].value
    
                           }
    
           if(score90_13[0].checked ){
                   group_90_13 =  score90_13[0].value
                           }
                           if( score90_13[1].checked ){
                               group_90_13 =  score90_13[1].value
                           }
                           if( score90_13[2].checked ){
                               group_90_13=  score90_13[2].value
    
                           }
                            if( score90_13[3].checked ){
                               group_90_13 =  score90_13[3].value
    
                           }
    
           if(score90_14[0].checked ){
                   group_90_14 =  score90_14[0].value
                           }
                           if( score90_14[1].checked ){
                               group_90_14 =  score90_14[1].value
                           }
                           if( score60_14[2].checked ){
                               group_90_14=  score90_14[2].value
    
                           }
                            if( score90_14[3].checked ){
                               group_90_14 =  score90_14[3].value
    
                           }
    
           if(score90_15[0].checked ){
                   group_90_15 =  score90_15[0].value
                           }
                           if( score90_15[1].checked ){
                               group_90_15=  score90_15[1].value
                           }
                           if( score90_15[2].checked ){
                               group_90_15=  score90_15[2].value
    
                           }
                            if( score90_15[3].checked ){
                               group_90_15 =  score90_15[3].value
    
                           }
    
                       group_90_total =(parseInt(group_90_1)+parseInt(group_90_2)+parseInt(group_90_3)+parseInt(group_90_4)+parseInt(group_90_5)+parseInt(group_90_6)+parseInt(group_90_7)+parseInt(group_90_8)+parseInt(group_90_9)+parseInt(group_90_10)+parseInt(group_90_11)+parseInt(group_90_12)+parseInt(group_90_13)+parseInt(group_90_14)+parseInt(group_90_15))*100/60;
    
    
    
    
                           $('#total_90').val(group_90_total.toFixed( 2 ));
                           $('#rate_90').val(group_90_total.toFixed( 2 ));
    
    
    
                     $('#rate_all').val(( parseInt(group_90_total.toFixed( 2 ))+parseInt(group_total.toFixed( 2 )))/2);
    
    
    
           });
           </script>








</body>
</html>