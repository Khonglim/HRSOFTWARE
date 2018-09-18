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
                        {{Form::open(['url'=>'Operate_staff','method'=>'POST' ])}}
                        <div class="form-horizontal">
                          <div class="box-body">
                               
                                <div class="form-group">
                                        <label  class="col-sm-2 control-label">ชื่อ-สกุล:</label>
                      
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control" value="{{ $name =  $_POST["name"]}} {{ $name =  $_POST["lastname"]}}"  readonly>
                                        </div>
                                        <label  class="col-sm-2 control-label">รหัสพนักงาน:</label>
                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" name="id_employ" required>
                                              </div>
                                              

                                      </div>

                                      <div class="form-group">

                                            <label  class="col-sm-2 control-label">ตำแหน่ง:</label>
                                            <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="id_employ" required>
                                                  </div> 
                                                  
                                                  <label  class="col-sm-2 control-label">แผนก/ฝ่าย:</label>
                                                  <div class="col-sm-4">
                                                          <input type="text" class="form-control" name="id_employ" required>
                                                        </div>     
                                      </div>
                               
                                      <div class="form-group">

                                            <label  class="col-sm-2 control-label">วันเริ่มงาน:</label>
                                            <div class="col-sm-4">
                                                    <input type="text" name="dateStart2" id="dateStart2" value="" class="form-control" required onchange="document.getElementById('startrate').value=document.getElementById('dateStart2').value"/> 
                                                  </div> 
                                                  
                                                  <label  class="col-sm-2 control-label">ครบการทดลองงาน:</label>
                                                  <div class="col-sm-4">
                                                        <input type="text" name="dateEnd2" id="dateEnd2" value="" class="form-control" required/> 
                                                        </div>     
                                      </div>

                                      <div class="form-group">

                                            <label  class="col-sm-2 control-label">จำนวนวัน:</label>
                                            <div class="col-sm-4">
                                                    <input type="text" name="totolDay2" id="totolDay2" value=""  readonly class="form-control" required/>
                                                  </div> 
                                                  
                                                  <label  class="col-sm-2 control-label">ระดับ:</label>
                                                  <div class="col-sm-4">
                                                        <input type="text" name="dateEnd2" id="dateEnd2" value="" class="form-control" required/> 
                                                        </div>     
                                      </div>

                                      <div class="form-group">

                                            <label  class="col-sm-2 control-label">ประเมินครั้งที่ 1 : 60 วัน วันที่ :</label>
                                            <div class="col-sm-4">
                                                    <input type="text" name="totolDay_60" id="totolDay_60" value=""  class="form-control"/>
                                                  </div> 
                                                  
                                                  <label  class="col-sm-2 control-label">  ประเมินครั้งที่ 2 : 90 วัน วันที่:</label>
                                                  <div class="col-sm-4">
                                                        <input type="text" name="totolDay_90" id="totolDay_90" value="" class="form-control" /> 
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
                                            
                                         
                                        <input type="radio" id="score60_{{$operate_qSef->id}}" name="score60_{{$operate_qSef->id}}" value={{$item->score_operate}}  > {{$item->score_operate}}&ensp;
                    
                    
                                        @endforeach
                            </td>
                        
                    
                       </tr>
                    
                       @endforeach
                    
                       <tr>
                            <td style="text-align:center">
                         
                            รวมคะแนน
                         
                            </td>
                         
                            <td style="text-align:center">
                         
                         <input type="text" name="total_60" id="total_60" style="text-align:center" readonly>
                         
                             </td>
                         
                           
                    
                    
                                
                    
                    
                         </tr>
                    
                         <tr>
                    
                    
                                <td  COLSPAN="2" >
                         
                                        รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly style="text-align:center"  > คะแนน  <br><br>
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
                            <textarea class="form-control" rows="3" name="assessor"></textarea>
                          </div> 
                        </div> 
            <div class="form-group">

                    <label  class="col-sm-2 control-label">จุดเด่นพนักงาน:</label>
                    <div class="col-sm-4">
                            <textarea class="form-control" rows="3" name="featured" required></textarea>
                          </div> 
                          
                          <label  class="col-sm-2 control-label">จุดด้อยพนักงาน:</label>
                    <div class="col-sm-4">
                            <textarea class="form-control" rows="3" name="weakness" required></textarea>
                          </div> 
                                
              </div>
              <div class="form-group">

                    <label  class="col-sm-2 control-label"> ชื่อผู้ประเมิน:</label>
                    <div class="col-sm-4">
                            <input type="text" name="namerate" id="namerate" required class="form-control">
                          </div> 
                         </div>   
                               
            
                   
                    
                    
                    
                             
                    
                    
                 
                    
                    
                    
                 
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
                                              <td style="text-align:center">ตั้งแต่วันที่  <input type="text" name="startrate_60" id="startrate_60"  > <br><br>
                                                ถึงวันที่    <input type="text" name="endrate_60" id="endrate_60" >
                                            
                                            
                                            </td>
                                              <td style="text-align:center"> <input type="text" name="sick"   id="sick"     style="width:50px" required> </td>
                                              <td style="text-align:center"><input type="text" name="errand"    id="errand"   style="width:50px" required ></td>
                                              <td style="text-align:center"><input type="text" name="absence"     id="absence"    style="width:50px" required></td>
                                              <td style="text-align:center"><input type="text"   name="vacation"   id="vacation"   style="width:50px"  required></td>
                                              <td style="text-align:center"><input type="text"  name="line"    id="line"   style="width:50px"  required></td>
                                              <td style="text-align:center"><input type="text"  name="min"    id="min"  style="width:50px"  required></td>
                                            
                                            </tr>
                                           
                                          
                                        
                                         
                                         
                                          
                                          </table>
                    
                                       
                    
                    
                    
                                         
                                             
                    

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
                       
                       
                       group_total =(parseInt(group_60_1)+parseInt(group_60_2)+parseInt(group_60_3)+parseInt(group_60_4)+parseInt(group_60_5)+parseInt(group_60_6)+parseInt(group_60_7)+parseInt(group_60_8)+parseInt(group_60_9)+parseInt(group_60_10)+parseInt(group_60_11)+parseInt(group_60_12)+parseInt(group_60_13)+parseInt(group_60_14)+parseInt(group_60_15))*100/60;
                       
                       
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







  


    @endsection







