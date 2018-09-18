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
        
        #customers tr:hover {background-color: #99ffff;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        </style>
<div class="content-wrapper">
        <div class="content container-fluid">
                <div class="box box-info">
                        <div class="box-header with-border">
                          การทดลองงานระดับผู้บังคับบัญชา
                        </div>
                        {{Form::open(['url'=>'Operate_sup','method'=>'POST'])}}
                        <div class="form-horizontal">
                          <div class="box-body">

                                
                                        <div class="form-group">
                                        
                                        <div class="row">
                                           
                                                <div class="col-md-3">
                                                    ชื่อ-สกุล: <input type="text" name="name" required >
                                                </div>
                                                <div class="col-md-4">
                                                    รหัสพนักงาน: <input type="text" name="name" required>
                                                </div>
                                
                                                <div class="col-md-4">
                                                    ตำแหน่ง: <input type="text" name="name" required> 
                                                </div> 
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="row">
                                        
                                            <div class="col-md-4">
                                                แผนก/ฝ่าย :    <input type="text" name="name" required>
                                            </div>
                                
                                            <div class="col-md-4">
                                                วันที่เริ่มงาน: <input type="text" name="dateStart" id="dateStart2" value="" /> 
                                            </div>
                                      
                                
                                        <div class="col-md-4">
                                            วันสิ้นสุด:<input type="text" name="dateEnd" id="dateEnd2" value="" /> 
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                  <div class="row">
                                
                                    ครบทดลองงาน:<input type="text" name="totolDay" id="totolDay2" value=""  readonly/> วัน
                                </div>    
                                    
                                    </div>
                                
                                    <div class="form-group">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                    ประเมินครั้งที่ 1 : 60 วันที่ <input type="text" name="totolDay_60" id="totolDay_60" value=""  />
                                                </div>  
                                
                                                <div class="col-md-5">
                                                        ประเมินครั้งที่ 2 : 90 วันที่ <input type="text" name="totolDay_90" id="totolDay_90" value=""  /> 
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
                                       <td style="text-align:center">
                                                   @foreach ($operate_Chioce as $item)
                                                       
                                                    
                                                   <input type="radio" id="score60_{{$operate_qSups->id}}" name="score60_{{$operate_qSups->id}}" value={{$item->score_operate}} required > {{$item->score_operate}}&ensp;
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
                                 
                                                รวมคะแนนทั้งสิ้น  ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly > คะแนน <br><br>
                                                              ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly> คะแนน
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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                                ชื่อผู้ประเมิน: <input type="text" name="namerate" id="namerate" required>
                                                        </div>
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
            </div>
      </div>
    </div>
   </div>
</div>
@endsection