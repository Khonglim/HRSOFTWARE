@extends('layouts.main')
@section('content')

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
        
        #customers tr:hover {background-color: #9966ff;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #6666ff;
            color: white;
        }
        </style>
      <div class="content-wrapper">
    
            <div class="content container-fluid">
        
                    <div class="box box-info">
                            <div class="box-header with-border">
                              การทดลองงานระดับปฏิบัติการ
                            </div>
                            {{Form::open(['route'=>['Operate_staff.update', $operate_staff->id],'method'=>'PUT' ])}}
                            <div class="form-horizontal">
                              <div class="box-body">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">ชื่อ-สกุล:</label>
                                        <div class="col-sm-4">
                                              @foreach ($employee as $employees)
                                                  @if ($employees->id == $operate_staff->id_posinal )
                                        <input type="text"  name="id_posinal" value="{{$employees->name}} {{$employees->lastname}}" class="form-control"  readonly>
                                        <input   type="hidden"  value="{{$employees->id}}" name="idemploy"  >
                                                  @endif
                                              @endforeach

                                        
                                             
                                            </div>
                                            <label  class="col-sm-2 control-label">รหัสพนักงาน:</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="id_employ" value="{{$operate_staff->id_employ}}" readonly >
                                                  </div>
                                                  
    
                                          </div>
    
                                          <div class="form-group">
    
                                                <label  class="col-sm-2 control-label">ตำแหน่ง:</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" name="position"   value="{{$operate_staff->position}}"   readonly>
                                                      </div> 
                                                      
                                                      <label  class="col-sm-2 control-label">แผนก/ฝ่าย:</label>
                                                      <div class="col-sm-4">
                                                      <input type="text" class="form-control" name="department"  value="{{$operate_staff->department}}" readonly>
                                                            </div>     
                                          </div>
                                   
                                          <div class="form-group">
    
                                                <label  class="col-sm-2 control-label">วันเริ่มงาน:</label>
                                                <div class="col-sm-4">
                                                <input type="text" name="dateStart2" value="{{$operate_staff->starttime}}" class="form-control" readonly /> 
                                                      </div> 
                                                      
                                                      <label  class="col-sm-2 control-label">ครบการทดลองงาน:</label>
                                                      <div class="col-sm-4">
                                                            <input type="text" name="dateEnd2"  value="{{$operate_staff->endtime}}" class="form-control"  readonly  /> 
                                                            </div>     
                                          </div>
    
                                          <div class="form-group">
    
                                                <label  class="col-sm-2 control-label">จำนวนวัน:</label>
                                                <div class="col-sm-4">
                                                        <input type="text" name="totolDay2"  value="{{$operate_staff->number}}"  readonly class="form-control" required/>
                                                      </div> 
                                                      
                                                      <label  class="col-sm-2 control-label">ระดับ:</label>
                                                      <div class="col-sm-4">
                                                      <input type="text" name="degree" value="{{$operate_staff->degree}}"   class="form-control" readonly/> 
                                                            </div>     
                                          </div>
    
                                          <div class="form-group">
    
                                                <label  class="col-sm-2 control-label">ประเมินครั้งที่ 1 : 60 วัน วันที่ :</label>
                                                <div class="col-sm-4">
                                                <input type="text" name="totolDay_60"  value="{{$operate_staff->date_60}}"  class="form-control"  readonly/>
                                                      </div> 
                                                      
                                                      <label  class="col-sm-2 control-label">  ประเมินครั้งที่ 2 : 90 วัน วันที่:</label>
                                                      <div class="col-sm-4">
                                                      <input type="text" name="totolDay_90"  value="{{$operate_staff->date_90}}" class="form-control" readonly/> 
                                                            </div>     
                                          </div>
    
                                              คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน<br>
                                              1.  ระดับในการประเมินผล <br>
                                              …….	ดีมาก		=	ผลการปฏิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
                            …….	ดี		=	ผลการปฏิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br>
                            …….	พอใช้		=	ผลการปฏิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
                            …….	ต้องปรับปรุง	=     	ผลการปฏิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>
                        
                               2.	ผู้ถูกประเมินจะต้องได้ 60 คะแนน ขึ้นไป  จึงจะถือว่าผ่านเกณฑ์การประเมินผลการทดลองงาน  
                        <div class="form-group">
                                <div class="col-sm-12">
                          <table id="customers">
                                <tr>
                                  <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย จาก 60 วัน</th>
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
                                  <td style="text-align:center">ตั้งแต่วันที่  <input type="text" name="startrate_60" value="{{$operate_staff->startwork_60}}"  readonly > <br><br>
                                    ถึงวันที่    <input type="text" name="endrate_60"  value="{{$operate_staff->endwork_60}}" readonly >
                                
                                
                                </td>
                                  <td style="text-align:center"> <input type="text" name="sick"     value="{{$operate_staff->sick_leave_60}}"   style="width:50px" readonly> </td>
                                  <td style="text-align:center"><input type="text" name="errand"      value="{{$operate_staff->errand_leave_60}}"   style="width:50px" readonly ></td>
                                  <td style="text-align:center"><input type="text" name="absence"    value="{{$operate_staff->absence_60}}"  style="width:50px" readonly></td>
                                  <td style="text-align:center"><input type="text"   name="vacation"  value="{{$operate_staff->vacation_60}}"   style="width:50px"  readonly></td>
                                  <td style="text-align:center"><input type="text"  name="line"   value="{{$operate_staff->line_terms_60}}"    style="width:50px"  readonly></td>
                                  <td style="text-align:center"><input type="text"  name="min" value="{{$operate_staff->line_min_60}}"    style="width:50px"  readonly></td>
                                
                                </tr>
                               
                              
                            
                             
                             
                              
                              </table>


                                </div>
                          </div>



                          <div class="form-group">
                            <div class="col-sm-12">
                                <table id="customers">
                                        <tr>
                                          <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</th>
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
                               <div class="form-group">
                                    <div class="col-sm-12">
                        <table id="customers">
                         
                          <tr>
                            <th ROWSPAN="3" style="text-align:center">หัวข้อการประเมิน<br>
                                ( 100 คะแนน )
                                </th>
                            <th COLSPAN="1" style="text-align:center" >ระดับคะแนนการประเมินผล</th>
                            
                          </tr>
                          <tr>
                            <td style="text-align:center">ประเมินรอบ 60 วัน</td>
                           
                           
                          </tr>
                          <tr>
                            <td style="text-align:center">ระดับคะแนน</td>
                         
                           
                          </tr>
                          <tr>
                            <td COLSPAN="2" style="text-align:center">ระดับปฏิบัติการ ( Operational Level )</td>
                          </tr>
                          @foreach ($operate_qSeff as $operate_qSef)
                                 
                         
                           <tr>
                        
                        
                                <td  style="width:43%"  > {{  $operate_qSef->operate_qstaff  }} </td>
                                <td style="text-align:center">
                                            @foreach ($operate_Chioce as $item)
                                                
                                             
                                            <input type="radio" id="score90_{{$operate_qSef->id}}" name="score90_{{$operate_qSef->id}}" value={{$item->score_operate}} required > {{$item->score_operate}}  {{$item->meaning_operate}}&ensp;
                        
                        
                                            @endforeach
                                </td>
                            
                        
                           </tr>
                        
                           @endforeach
                        
                           <tr>
                                <td style="text-align:center">
                             
                                รวมคะแนน
                             
                                </td>
                             
                                <td style="text-align:center">
                             
                             <input type="text" name="total_90" id="total_90" style="text-align:center" readonly>
                             
                                 </td>
                             
                             </tr>
                        
                             <tr>
                                <td  COLSPAN="2" >
                             
                                    รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" value="{{$operate_staff->rate_60}}" readonly style="text-align:center"  > คะแนน  <br><br>
                                                          ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly style="text-align:center"> คะแนน<br><br>  
                                                                 (รวมกันหาร 2) =  <input type="text" name="rate_all" id="rate_all" readonly style="text-align:center"> คะแนน  
                                 </td>
                             </tr>
                        </table>
                    </div>
                </div>
    
                <div class="form-group">
    
                        <label  class="col-sm-2 control-label">ความคิดเห็นเพิ่มเติม: <br>(สำหรับผู้ประเมิน)</label>
                        <div class="col-sm-4">
                                <textarea class="form-control" rows="3" name="assessor2" required></textarea>
                              </div> 


                              <label  class="col-sm-2 control-label">ความคิดเห็นเพิ่มเติม: <br>(จากผู้ประเมิน 60 วัน)</label>
                              <div class="col-sm-4">
                              <textarea class="form-control" rows="3" name="assessor" readonly>{{$operate_staff->comments_60}}</textarea>
                                    </div> 



                            </div> 
             
    
                  <div class="form-group">
    
                        <label  class="col-sm-2 control-label"> ชื่อผู้ประเมิน:</label>
                        <div class="col-sm-4">
                                <input type="text" name="namerate" id="namerate" required class="form-control">
                              </div> 
                             </div>   

                              <div class="form-group">
                                    <label  class="col-sm-2 control-label"></label>
                                          
                                            <div class="col-sm-4">
                                            <div class="checkbox">
                                                    <label><input type="checkbox" value="ไม่ผ่านทดลองงาน" name="experimental">ไม่ผ่านทดลองงาน  ให้มีผลบังคับ     ตั้งแต่วันที่: </label>   <input type="text"  name="clsdate"  id="clsdate" class="form-control">
                                                  </div>
                                                </div>


                                       
                                    </div>  
           
                                    
                                    <div class="form-group">
                                   
                                            <label  class="col-sm-2 control-label"></label>
                                            <div class="col-sm-4">
                                                    <div class="checkbox">
                                                            <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" name="full_time_worker">อนุมัติให้บรรจุเป็นพนักงานประจำ</label><br> ตั้งแต่วันที่:<input type="text"  name="dateinto"  id="dateinto" class="form-control" > ตำแหน่ง:<input type="text"  id="t2"  class="form-control" name="full_time_worker_position"/>
                                                          </div>
                                                </div>


                                       
                                    </div> 


                                    <div class="form-group">
                                   
                                            <label  class="col-sm-2 control-label"></label>
                                            <div class="col-sm-4">
                                                    <div class="checkbox">
                                                            <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ" name="modify">อนุมัติให้บรรจุเป็นพนักงานประจำ และปรับตำแหน่ง จากตำแหน่ง:</label> 
                                                            <input type="text" name="modify_position1" id="t1"   class="form-control"/>
                                                            
                                                            ตั้งแต่วันที่:<input type="text"  name="modify_date"  id="modify_date"  class="form-control"> เป็นตำแหน่ง:<input type="text" name="modify_position2" id="t2"   class="form-control"/>
                                                          </div>
                                                </div>


                                       
                                    </div> 




                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label"></label> 
                                            <div class="col-sm-4">
                                                    
                                    <div class="checkbox">
                                            <label><input type="checkbox" value="อื่นๆ"  name="other_90">อื่นๆ</label>  <textarea class="form-control" rows="3" name="other_com_90"></textarea>
                                          </div>
                                                </div>


                                       
                                    </div> 

                                    <div class="form-group">
                                        <div class="col-sm-12">
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

                                    <div class="form-group">

                                            <label  class="col-sm-2 control-label">ความคิดเห็นเพิ่มเติม: <br>(สำหรับผู้ประเมิน)</label>
                                            <div class="col-sm-6">

                                            <textarea class="form-control" rows="3" name="comment_suitability10" required></textarea>
                                            </div>


                                    </div>



                                    <div class="form-group">

                                            <label  class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                
                                            <div class="checkbox">
                                                    <label><input type="checkbox"  name="ok_suitability"   value="อนุมัติตามผู้บังคับบัญชาเสนอ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
                                                  </div>
                                               
        
                                             
                                                        <div class="checkbox">
                                                                <label><input type="checkbox" name="other_suitability" value="อื่นๆ">อื่นๆ</label><textarea class="form-control" rows="3" name="other_com_suitability"></textarea>
                                                              </div>
                                                            
                                            </div>
                                    </div>

                                    <div class="form-group">
                                            <label  class="col-sm-2 control-label">ชื่อผู้จัดการฝ่าย:</label>

                                            <div class="col-sm-4">
                                                <input type="text"  name="namerate_suitability" id="namerate_suitability"  class="form-control">
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
                              <td style="text-align:center"> <input type="text"  name="conclusions"    id="scoresp"  style="width:50px"></td>
                            </tr>
                            <tr>
                              <td>2. การประเมินผลการปฏิบัติงาน
                                    โดย <b> ผู้จัดการฝ่าย </b></td>
                              <td style="text-align:center">100</td>
                              <td style="text-align:center"><input type="text"  name="results_manager"    id="scoremp"  style="width:50px"></td>
                            </tr>
                          
                          </table>


            </div>
    </div>

    <div class="panel panel-info" style="width:100%">
            <div class="panel-heading">เฉพาะฝ่ายทรัพยากรบุคคล</div>
            <div class="panel-body">
                
                    <div class="form-group">
    
                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                    <input type="checkbox" name="human_resource_ok" value="อนุมัติตามผู้บังคับบัญชาเสนอ"> อนุมัติตามผู้บังคับบัญชาเสนอ
                                 
                                </div> 
                                
                                  <div class="col-sm-4">
                                        <input type="checkbox" name="human_resource_modi" value="ปรับอัตราเงินเดือน">ปรับอัตราเงินเดือน:  <input type="text" name="human_resource_commo" class="form-control"/>
                                     </div>     
                      
                    </div>
               
                <div class="form-group">
                        <label  class="col-sm-6 control-label"></label>
                        <div class="col-sm-4">
                        <input type="checkbox" name="human_resource_nodi" value="ยังไม่ปรับเงินเดือน">ยังไม่ปรับเงินเดือน:  <input type="text" name="human_resource_comno" class="form-control">
                    </div>
                    </div>

                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox"  name="human_resource_adjust"   value="ให้ปรับตำแหน่งเป็น "> ให้ปรับตำแหน่งเป็น: <input type="text"  name="human_resource_posi" class="form-control">
                                 
                                </div> 


                    </div>


                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox" name="human_resource_fail" value="ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่:"> ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่: <input type="text"  name="human_resource_date" class="form-control">
                                 
                                </div> 


                    </div>

                   
            

                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox" name="human_resource_other"  value="อื่นๆ">  อื่นๆ : <textarea class="form-control" rows="3" name="human_resource_othercom"></textarea>
                                 
                                </div> 


                    </div>
             
                    <div class="form-group">
                            <label  class="col-sm-3 control-label">ชื่อผู้จัดการฝ่ายทรัพยากรบุคคล:</label>

                            <div class="col-sm-4">
                                <input type="text"  name="human_resource_nre"    class="form-control">
                            </div>



                    </div>

                </div>
               
               
               

         
    </div>



    <div class="panel panel-info" style="width:100%">
            <div class="panel-heading">เฉพาะกรรมการผู้จัดการ/ผู้จัดการทั่วไป</div>
            <div class="panel-body">
                
                    <div class="form-group">
    
                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                    <input type="checkbox" name="manager_resource_ok" value="อนุมัติตามผู้บังคับบัญชาเสนอ"> อนุมัติตามผู้บังคับบัญชาเสนอ
                                 
                                </div> 
                                
                                  <div class="col-sm-4">
                                        <input type="checkbox" name="manager_resource_modi" value="ปรับอัตราเงินเดือน">ปรับอัตราเงินเดือน:  <input type="text" name="manager_resource_comdi" class="form-control"/>
                                     </div>     
                      
                    </div>
               
                <div class="form-group">
                        <label  class="col-sm-6 control-label"></label>
                        <div class="col-sm-4">
                        <input type="checkbox" name="manager_resource_nodi" value="ยังไม่ปรับเงินเดือน">ยังไม่ปรับเงินเดือน:  <input type="text" name="manager_resource_comno" class="form-control">
                    </div>
                    </div>

                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox" value="ให้ปรับตำแหน่งเป็น "  name="manager_resource_adjust"> ให้ปรับตำแหน่งเป็น: <input type="text"  name="manager_resource_posi" class="form-control">
                                 
                                </div> 


                    </div>


                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox"  name="manager_resource_fail"  value="ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่ "  name="nomodi_11"> ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่: <input type="text"  name="manager_resource_date" class="form-control">
                                 
                                </div> 


                    </div>



            

                    <div class="form-group">

                            <label  class="col-sm-2 control-label"></label>
                            <div class="col-sm-4 ">
                                
                                  <input type="checkbox" value="อื่นๆ" name="manager_resource_other">  อื่นๆ : <textarea class="form-control" rows="3" name="manager_resource_othercom"></textarea>
                                 
                                </div> 


                    </div>
             
                    <div class="form-group">
                            <label  class="col-sm-3 control-label">ชื่อกรรมการผู้จัดการ/ผู้จัดการทั่วไป:</label>

                            <div class="col-sm-4">
                                <input type="text"  name="manager_resource_nre"  class="form-control">
                            </div>



                    </div>

                </div>
               
               
               

         
    </div>












</div>  



                              <!-- /.box-body -->
                              <div class="box-footer">
                              
                                <button type="submit" class="btn btn-info pull-right">ตกลง</button>
                                {{Form::close()}}
                               
                              </div>
                            
                              <!-- /.box-footer -->
                            </div>
                          </div>
                        </div>
    
                    </div>
    
    
    
    
    
                        <script>
    
                            $('input[type=radio]').change(function(){
                
                           
                           
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
                                var group_90_total =0;
                           
                               var group_all_total =0;
                           
                           
                           
                     
                           
                           
                           
                           
                           
                           
                           
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
                           
                           
                            if(score90_4[0].checked ){
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
                                   group_90_8 =  score90_8[0].value 
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
                                           if( score90_12[2].checked ){
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
                                           if( score90_14[2].checked ){
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
                           
                           
                           
                                    $('#rate_all').val(( parseInt(group_90_total.toFixed( 2 ))+parseInt("{{$operate_staff->rate_60}}"))/2);   
                           
                                    $('#scoresp').val(( parseInt(group_90_total.toFixed( 2 ))+parseInt("{{$operate_staff->rate_60}}"))/2);   
    
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
            $('#sum_chioce_suitability10').val(pont);
            $('#scoremp').val(pont);
        });
    </script>
        @endsection
