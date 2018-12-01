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
      .table-wrapper-scroll-y {
  display: block;
  max-height: 100%;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
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
            </style>
    
    <div class="container-fluid">
         
            @if ($operate->degree_enable == 1)
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับบังคับบัญชา</h2>
            @else
            <h2 style="text-align:center;">แบบประเมินผลการปฏิบัติงานระดับปฏิบัติการ</h2>
            @endif
           
            <div class="font" style="text-align:center;"><b>คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน</b></div>
            <b>1. ระดับในการประเมินผล</b><br>
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

                                 
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                    <div  class="table-wrapper-scroll-y">        
                <table id="customers">
                        <tr>
                          <th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสายครั้งที่ 1</th>
                        </tr>
                        <tr>
                          <td style="text-align:center" style="width:43px" >สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
                          <td style="text-align:center" style="width:43px" >ลาป่วย(วัน )</td>
                          <td style="text-align:center" style="width:43px" >ลากิจ (วัน )</td>
                          <td style="text-align:center" style="width:43px" >ขาดงาน (วัน )</td>
                          <td style="text-align:center" style="width:43px" >พักร้อน (วัน )</td>
                          <td style="text-align:center" style="width:43px" >สาย (ครั้ง)</td>
                          <td style="text-align:center" style="width:43px" >สาย (นาที)</td>

                        </tr>
                        <tr>
                          <td style="text-align:center">ตั้งแต่วันที่  {{$operate->startwork_60}} <br><br>
                            ถึงวันที่   {{$operate->endwork_60}}


                        </td>
                          <td style="text-align:center"> {{$operate->sick_leave_60}} </td>
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


@if( $operate->degree_enable == 1)
{{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
@csrf
<input type="hidden"  name="date60T"  id="date60T" value="<?php echo date("d/m/Y H:i:s");?>"/>
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
  <td align="center">ประเมินรอบ {{$operate->numberMN}} วัน</td>


</tr>
<tr>

  <td style="text-align:center">ระดับคะแนน</td>

</tr>
<tr>
  <td COLSPAN="4" style="text-align:center">ระดับผู้บังคับบัญชา ( Supervisory Level )</td>
</tr>
@foreach ($operate_qSup  as $operate_qSups)


<tr>


     <td  style="width:43%"  > {{  $operate_qSups->operate_qsup  }} </td>
     <td style="text-align:center" style="width:43%" >
                 @foreach ($operate_Chioce as $item)


                 <input type="radio" id="score60_{{$operate_qSups->id}}" name="score60_{{$operate_qSups->id}}" value={{$item->score_operate}} required > {{$item->score_operate}}  {{$item->meaning_operate}}&ensp;
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


</tr>


<tr>


      <td  COLSPAN="4" >

              รวมคะแนนทั้งสิ้น  ประเมินครั้งที่ 1   <input type="text" name="rate_60" id="rate_60" readonly > คะแนน <br><br>
                            ประเมินครั้งที่ 2    <input type="text" name="rate_90" id="rate_90" readonly> คะแนน
            </td>





</tr>









</table>
              </div>
</div>
</div>


<div class="row">
        <div class="form-group">
            <div class="col-md-12">
            <label >ความคิดเห็นเพิ่มเติม: (สำหรับผู้ประเมิน)</label>
                    <textarea class="form-control" rows="3" name="comments_60" required></textarea>
                  </div>
                </div>
             
                <div class="form-group">
                    <div class="col-md-12">
                    <label >จุดเด่นพนักงาน:</label>
                   
                            <textarea class="form-control" rows="3" name="comments_featured" required></textarea>
                          </div>
                       
    
              </div>
    
    
              <div class="form-group">
              <div class="col-md-12">
                <label >จุดด้อยพนักงาน:</label>
       
                  <textarea class="form-control" rows="3" name="comments_weakness" required></textarea>
                </div>
              </div>
    
    </div>

<div class="form-group">

      <label  class="col-sm control-label"> ชื่อผู้ประเมิน:</label>
      <div class="col-sm-4">
              <input type="text" name="namerate_60" id="namerate_60" required class="form-control">
            </div>
           </div>
 
           <div class="form-group">
                  <div class="col-sm-3"></div>
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
           </div>
              
           <center>    <span id="sendData">      ผู้ถูกประเมินจะต้องได้ 60 คะแนน ขึ้นไป จึงจะถือว่าผ่านเกณฑ์การประเมินผลการทดลองงาน <br>
                 <button type="submit" class="btn btn-info pull-right">ตกลง</button> </span></center> 
            {{Form::close()}}

@else
{{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true,'onSubmit'=>"JavaScript:return fncSubmit();", 'name'=>'form1'])}}
@csrf
<input type="hidden"  name="date60T"  id="date60T" value="<?php echo date("d/m/Y H:i:s");?>"/>
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
            <td align="center">ประเมินรอบ {{$operate->numberMN}} วัน</td>
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
<input type="radio" id="score60_{{$operate_qSef->id}}" name="score60_{{$operate_qSef->id}}" value="{{$item->score_operate}}"  required > {{$item->score_operate}}    {{$item->meaning_operate}} &ensp;
            
            
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
            
                          รวมคะแนนทั้งสิ้น <br><br> ประเมินครั้งที่ 1    <input type="text" name="rate_60" id="rate_60" readonly style="text-align:center"  > คะแนน  <br><br>
                                        ประเมินครั้งที่ 2     <input type="text" name="rate_90" id="rate_90" readonly style="text-align:center"> คะแนน<br><br>
                                        (รวมกันหาร 2) =  <input type="text" name="rate_all" id="rate_all" readonly style="text-align:center"> คะแนน
                        </td>
            
            
            
            
            
            </tr>
            
            </table>
            
            
            </div>
            </div>
            </div>
<div class="row">
    <div class="form-group">
        <div class="col-md-12">
        <label >ความคิดเห็นเพิ่มเติม: (สำหรับผู้ประเมิน)</label>
                <textarea class="form-control" rows="3" name="comments_60" required></textarea>
              </div>
            </div>
         
            <div class="form-group">
                <div class="col-md-12">
                <label >จุดเด่นพนักงาน:</label>
               
                        <textarea class="form-control" rows="3" name="comments_featured" required></textarea>
                      </div>
                   

          </div>


          <div class="form-group">
          <div class="col-md-12">
            <label >จุดด้อยพนักงาน:</label>
   
              <textarea class="form-control" rows="3" name="comments_weakness" required></textarea>
            </div>
          </div>

</div>
          
     
          <div class="form-group">

                <label  class="col-sm-2 control-label"> ชื่อผู้ประเมิน:</label>
                <div class="col-sm-4">
                        <input type="text" name="namerate_60" id="namerate_60" required class="form-control">
                      </div>



                     </div>
                     <div class="form-group">
                            <div class="col-sm-3"></div>
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

                    </div>
                    ผู้ถูกประเมินจะต้องได้ 60 คะแนน ขึ้นไป จึงจะถือว่าผ่านเกณฑ์การประเมินผลการทดลองงาน <br>
                    <center>   <span id="sendData">    <button type="submit" class="btn btn-info pull-right">ตกลง</button> </span></center> 
                    {{Form::close()}}
            
@endif
                            

                                      












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
    
    
    
    
    
    
    
         
    
    
           });
           </script>
<script>
        $(document).ready(function() {
          $('.sigPad').signaturePad({drawOnly:true});
                 
        });
      </script>
           @else

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







         


                



           });
           </script>

<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
             
    });
  </script>
           @endif




           <script language="javascript">
  
                function fncSubmit()
                {
                   
                              $("#sendData").html("ระบบกำลังทำการบันทึกโปรดรอสักครู่.....");    
                              
                     
                      
                      document.form1.submit();
                }
                </script>


          
</body>
</html>