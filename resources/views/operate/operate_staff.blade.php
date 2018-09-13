@extends('layouts.operate')
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
</head>
<body>
    <div class="container">
            <br>
            <div class="panel panel-success" style="width:100%">
                    <div class="panel-heading">แบบประเมินผลการปฏิบัติงานระดับพนักงานปฏิบัติการ</div>
                    <div class="panel-body">
            <div class="form-group">

                <center> <b>บริษัท เอ็น จี จี ไทม์พีซ จำกัด</b><br>
                    แบบประเมินผลการปฏิบัติงานระดับพนักงานปฏิบัติการ
                
                </center> 
            </div>
                <div class="form-group">
                
                <div class="row">
                   
                        <div class="col-md-3">
                            ชื่อ-สกุล: <input type="text" name="name" id="name" required onchange="document.getElementById('nametest').value=document.getElementById('name').value">
                        </div>
                        <div class="col-md-4">
                            รหัสพนักงาน: <input type="text" name="idemploy" required>
                        </div>
        
                        <div class="col-md-4">
                            ตำแหน่ง: <input type="text" name="positionemploy"  id="positionemploy" required onchange="document.getElementById('t2').value=document.getElementById('positionemploy').value"> 
                        </div> 
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                
                    <div class="col-md-4">
                        แผนก/ฝ่าย :    <input type="text" name="name2" required>
                    </div>
        
                    <div class="col-md-4">
                        วันที่เริ่มงาน: <input type="text" name="dateStart2" id="dateStart2" value="" /> 
                    </div>
              
        
                <div class="col-md-4">
                    วันสิ้นสุด:<input type="text" name="dateEnd2" id="dateEnd2" value="" /> 
                </div>
            </div>
        </div>
            <div class="form-group">
          <div class="row">
                <div class="col-md-4">
            ครบทดลองงาน:<input type="text" name="totolDay2" id="totolDay2" value=""  readonly/> วัน

           
        </div>  
        </div>    
            
            </div>
        
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-5">
                            ประเมินครั้งที่ 1 : 60วัน วันที่ <input type="text" name="totolDay_60" id="totolDay_60" value=""  />
                        </div>  
        
                        <div class="col-md-5">
                                ประเมินครั้งที่ 2 : 90วัน วันที่ <input type="text" name="totolDay_90" id="totolDay_90" value=""  /> 
                            </div>
                  </div>    
                      
                      </div>
        
        
                      คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน<br>
                      1.  ระดับในการประเมินผล <br>
                      …….	ดีมาก		=	ผลการปฏิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
		…….	ดี		=	ผลการปฏิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br>
		…….	พอใช้		=	ผลการปฏิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
		…….	ต้องปรับปรุง	=     	ผลการปฏิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>

       2.	ผู้ถูกประเมินจะต้องได้ 60 คะแนน ขึ้นไป  จึงจะถือว่าผ่านเกณฑ์การประเมินผลการทดลองงาน  
<table id="customers">
 
  <tr>
    <th ROWSPAN="3" style="text-align:center">หัวข้อการประเมิน<br>
        ( 100 คะแนน )
        </th>
    <th COLSPAN="2" style="text-align:center" >ระดับคะแนนการประเมินผล</th>
    
  </tr>
  <tr>
    <td style="text-align:center">ประเมินรอบ 60 วัน</td>
    <td style="text-align:center">ประเมินรอบ 90 วัน</td>
   
  </tr>
  <tr>
    <td style="text-align:center">ระดับคะแนน</td>
    <td style="text-align:center">ระดับคะแนน</td>
   
  </tr>
  <tr>
    <td COLSPAN="4" style="text-align:center">ระดับปฏิบัติการ ( Operational Level )</td>
  </tr>
  @foreach ($operate_qSeff as $operate_qSef)
         
 
   <tr>


        <td  style="width:43%"  > {{  $operate_qSef->operate_qstaff  }} </td>
        <td style="text-align:center">
                    @foreach ($operate_Chioce as $item)
                        
                     
                    <input type="radio" id="score60_{{$operate_qSef->id}}" name="score60_{{$operate_qSef->id}}" value={{$item->score_operate}}  > {{$item->score_operate}}&ensp;


                    @endforeach
        </td>
        <td   style="text-align:center"  >


                @foreach ($operate_Chioce as $item2)
                        
                     
                <input type="radio" id="score90_{{$operate_qSef->id}}" name="score90_{{$operate_qSef->id}}" value={{$item2->score_operate}}  > {{$item2->score_operate}}&ensp;


                @endforeach



            </td>

   </tr>

   @endforeach

   <tr>
        <td style="text-align:center">
     
        รวมคะแนน
     
        </td>
     
        <td style="text-align:center">
     
     <input type="text" name="total_60" id="total_60" readonly>
     
         </td>
     
         <td  style="text-align:center">
     
                 <input type="text" name="total_60" id="total_60" readonly>
     
             </td>


            


     </tr>

     <tr>


            <td  COLSPAN="4" >
     
                    รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly > คะแนน  <br><br>
                                  ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly> คะแนน<br><br>  
                                  (รวมกันหาร 2) =  <input type="text" name="rate_all" id="rate_all" readonly> คะแนน  
                  </td>





     </tr>

</table>
<br>
<div class="form-group">
        <div class="row">
        
            <div class="col-md-4">
                    ความคิดเห็นเพิ่มเติม: (สำหรับผู้ประเมิน) <textarea class="form-control" rows="3" name="assessor"></textarea>
            </div>

            <div class="col-md-4">
                    จุดเด่นของพนักงาน: <textarea class="form-control" rows="3" name="featured" required></textarea>
            </div>
      

        <div class="col-md-4">
                จุดด้อยของพนักงาน:<textarea class="form-control" rows="3" name="weakness" required></textarea>
        </div>
    </div>
</div>

<div class="form-group">
<div class="checkbox">
        <label><input type="checkbox" value="ไม่ผ่านทดลองงาน">ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่ </label><input type="text"  name="clsdate"  id="clsdate" >
      </div>
    </div>
    <div class="form-group">
      <div class="checkbox">
        <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ">อนุมัติให้บรรจุเป็นพนักงานประจำ</label> ตั้งแต่วันที่:<input type="text"  name="dateinto"  id="dateinto" > ตำแหน่ง:<input type="text"  id="t2" value=""readonly="readonly" />
      </div>
    </div>


    <div class="form-group">
            <div class="checkbox">
              <label><input type="checkbox" value="อนุมัติให้บรรจุเป็นพนักงานประจำ">อนุมัติให้บรรจุเป็นพนักงานประจำ และปรับตำแหน่ง จากตำแหน่ง</label> ตั้งแต่วันที่:<input type="text"  name="dateinto"  id="dateinto" > เป็นตำแหน่ง:<input type="text"  id="t2" value=""readonly="readonly" />
            </div>
          </div>



          <div class="form-group">
                <div class="checkbox">
                  <label><input type="checkbox" value="อื่นๆ">อื่นๆ</label>  <textarea class="form-control" rows="3" name="etc"></textarea>
                </div>
              </div>



              <div class="form-group">
                    <div class="row">
                    
                        <div class="col-md-6">
                                ชื่อผู้ประเมิน: <input type="text" name="namerate" id="namerate" required>
                        </div>
            
                        <div class="col-md-6">
                                ชื่อผู้ถูกประเมิน: <input type="text"  name="nametest" id="nametest" readonly>
                        </div>
                  
            
                   
                </div>
            </div>


<br><br>
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
                @foreach ($manager as $managers)
                    
                    <tr>
                            <td  style="width:43%"  > {{  $managers->manager  }} </td>
                            <td style="text-align:center">
                                   <input type="text"   style="width:50px" >
                            </td>
                            <td style="text-align:center">
                                    <input type="text"   style="width:50px" >
                                </td>
                                <td style="text-align:center">
                                        <input type="text"   style="width:50px" >
                                    </td>
                    </tr>




                @endforeach

                <tr>

                        <td style="text-align:center" >
            รวมคะแนน
            
                        </td>
                        <td  COLSPAN="3">
            
            
                            </td>
                           
                 </tr>

                  </table>

     
                  <div class="form-group">
                        <div class="row">     
                                    ความคิดเห็นเพิ่มเติม: (สำหรับผู้ประเมิน) <textarea class="form-control" rows="3" name="assessor"></textarea>
                    </div>
                    <div class="row">
                            <div class="form-group">
                                    <div class="checkbox">
                                            <label><input type="checkbox"  name="ok"   value="อนุมัติตามผู้บังคับบัญชาเสนอ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                                <div class="checkbox">
                                                        <label><input type="checkbox" name="other1" value="อื่นๆ">อื่นๆ</label><textarea class="form-control" rows="3" name="auu"></textarea>
                                                      </div>
                                                    </div>
                        </div>

                </div>




                <div class="form-group">
                        <div class="row">
                        
                            <div class="col-md-6">
                                  
                            </div>
                
                            <div class="col-md-6">
                                    ชื่อผู้จัดการฝ่าย: <input type="text"  name="nametest" id="nametest2" >
                            </div>
                      
                
                       
                    </div>
                </div>


                <br><br>





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
                          <td style="text-align:center">ตั้งแต่วันที่  <input type="text" name="startrate" id="startrate" readonly > <br><br>
                            ถึงวันที่    <input type="text" name="endrate" id="endrate" readonly>
                        
                        
                        </td>
                          <td style="text-align:center"> <input type="text" name="sick"   id="sick"     style="width:50px" > </td>
                          <td style="text-align:center"><input type="text" name="errand"    id="errand"   style="width:50px" ></td>
                          <td style="text-align:center"><input type="text" name="absence"     id="absence"    style="width:50px" ></td>
                          <td style="text-align:center"><input type="text"   name="vacation"   id="vacation"   style="width:50px"></td>
                          <td style="text-align:center"><input type="text"  name="line"    id="line"   style="width:50px"></td>
                          <td style="text-align:center"><input type="text"  name="min"    id="min"  style="width:50px"></td>
                        
                        </tr>
                       
                      
                    
                     
                     
                      
                      </table>





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
                              <td style="text-align:center"> <input type="text"  name="scoresp"    id="scoresp"  style="width:50px"></td>
                            </tr>
                            <tr>
                              <td>2. การประเมินผลการปฏิบัติงาน
                                    โดย <b> ผู้จัดการฝ่าย </b></td>
                              <td style="text-align:center">100</td>
                              <td style="text-align:center"><input type="text"  name="scoremp"    id="scoremp"  style="width:50px"></td>
                            </tr>
                          
                          </table>
                      <br>
                         



                           
                                 
                                 
                                                                       
                                </div>





                        </div>

                        <div class="panel panel-success" style="width:100%">
                                <div class="panel-heading">เฉพาะฝ่ายทรัพยากรบุคคล</div>
                                <div class="panel-body">
                     
                        
                        
                                <div class="form-group"> 
                                      
                                          <div class="row">
                                              
                                                <div class="checkbox col-md-12">
                                                        <label><input type="checkbox" name="ok2" value="ให้บรรจุเป็นพนักงานประจำ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
                                                        <label><input type="checkbox" name="resara_1" value="ปรับอัตราเงินเดือน">ปรับอัตราเงินเดือน:  </label><input type="text" name="is_one">
                                                        <label><input type="checkbox" name="resara_2" value="ยังไม่ปรับเงินเดือน">ยังไม่ปรับเงินเดือน:  </label><input type="text" name="is_two">
                                                        
                                                      </div>
                                                    
                                                      
                                                            </div>
                                         
                                       
                                               
                                        </div>
                                   
                                            <div class="form-group">
                                                    <div class="row">
                                                    <div class="checkbox col-md-12">
                                                            <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">ให้ปรับตำแหน่งเป็น </label><input type="text"  name="is_posi">
                                                          </div>
                                                      
                                                        <div class="form-group">
                                                                <div class="checkbox col-md-12">
                                                                        <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่  </label><input type="date"  name="date_close">
                                                                      </div>
                                                                    </div>
                                                        <div class="form-group">
                                                                <div class="checkbox col-md-3">
                                                                        <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">อื่น ๆ </label><textarea class="form-control" rows="3" name="auu"></textarea>
                                                                      </div>
                                                                    </div>

                                                                </div>
                                                                    






                                                                    <div class="form-group">
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-6">
                                                                                      
                                                                                </div>
                                                                    
                                                                                <div class="col-md-6">
                                                                                        ลงนาม: <input type="text" name="is_name" >ผู้จัดการฝ่ายทรัพยากรบุคคล
                                                                                </div>
                                                                          
                                                                    
                                                                           
                                                                        </div>
                                                                    </div>








                             </div>

                             
                        </div>
                 </div>   
                 
                 




                 <div class="panel panel-success" style="width:100%">
                        <div class="panel-heading">เฉพาะกรรมการผู้จัดการ/ผู้จัดการทั่วไป</div>
                        <div class="panel-body">
             
                
                
                        <div class="form-group"> 
                              
                                  <div class="row">
                                      
                                        <div class="checkbox col-md-12">
                                                <label><input type="checkbox" value="ให้บรรจุเป็นพนักงานประจำ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
                                                <label><input type="checkbox" value="ปรับอัตราเงินเดือน">ปรับอัตราเงินเดือน:  </label><input type="text"  name="is_sara">
                                                <label><input type="checkbox" value="ยังไม่ปรับเงินเดือน">ยังไม่ปรับเงินเดือน:  </label><input type="text" name="is_stsara">
                                                
                                              </div>
                                            
                                              
                                                    </div>
                                 
                               
                                       
                                </div>
                           
                                    <div class="form-group">
                                            <div class="row">
                                            <div class="checkbox col-md-12">
                                                    <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">ให้ปรับตำแหน่งเป็น </label><input type="text" name="is_po">
                                                  </div>
                                              
                                                <div class="form-group">
                                                        <div class="checkbox col-md-12">
                                                                <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่  </label><input type="date" name="is_poyi">
                                                              </div>
                                                            </div>
                                                <div class="form-group">
                                                        <div class="checkbox col-md-3">
                                                                <label><input type="checkbox" value="ให้ปรับตำแหน่งเป็น ">อื่น ๆ </label><textarea class="form-control" rows="3" name="auu2"></textarea>
                                                              </div>
                                                            </div>

                                                        </div>
                                                            






                                                            <div class="form-group">
                                                                    <div class="row">
                                                                    
                                                                        <div class="col-md-6">
                                                                              
                                                                        </div>
                                                            
                                                                        <div class="col-md-6">
                                                                                ลงนาม: <input type="text" name="is_for" >ผู้จัดการฝ่ายทรัพยากรบุคคล
                                                                        </div>
                                                                  
                                                            
                                                                   
                                                                </div>
                                                            </div>








                     </div>

                     
                </div>
         </div>









    </div>





<br>

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
















                $('#total_60').val(group_60);      

});
</script>
    <br><br><br><br>
</body>
</html>
@endsection