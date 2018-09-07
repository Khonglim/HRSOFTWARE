@extends('layouts.main')
@section('title','| Supervisory Level')
@section('content')
<style>
        #customers {
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 100%;
            
        }
        
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #FFCCCC;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF3333;
            color:  black;
        }
        </style>
         <div class="content-wrapper">
                <div class="content container-fluid">
          {{Form::open(['url'=>'rate_sup'])}}
          <div class="box-body table-responsive no-padding">
            <table  id="customers">
                   
                      <tr>
                        <th style="text-align:center" colspan="2">แบบประเมินผลการสัมภาษณ์ (Interview Appraisal Form)
                               <br> ระดับบังคับบัญชาขึ้นไป (Supervisory Level)
                                </th>
                        <th  style="text-align:center" colspan="2" >ฝ่ายทัรพยากรบุคคล <br>(Human Resources Dept.)
                               <br> วันที่ (Date)  <br>  <input type="date" name="dateinterviwe_sup" >
                               <input type="radio" name="chioce200" value="200" checked  hidden />
                                </th>
                        
                      </tr>
                   
                    <tbody>
                      <tr>
                        <td style="text-align:center" colspan="2" >ชื่อผู้สมัคร (Applicant’s Name)
                            <select id="country" name="employee" required >
                            <option value="">--เลือกชื่อผู้สมัคร--</option>
                            @foreach ($employee  as $e)
                            <option value="{{$e->id}}"> {{$e->name }} {{$e->lastname }}</option>   
                            @endforeach
                        </select>

                        <td  style="text-align:center" >
                             ตำแหน่งผู้สมัคร (Position)    {{ Form::text('ngg_position', '', ['id'=>'ngg_position',' required']) }}  </td>
                            <input type= "hidden" name="chioce101" value="101"  />
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="2" style="text-align:center">ข้อพิจารณา (OBSERVATIONS)</td>
                        <td style="text-align:center"   >RATING (Please circle)</td>
                        <td rowspan="2" style="text-align:center">ความคิดเห็น (COMMENT)</td>
                      </tr>
                      <tr>
                            <td style="text-align:center">LOW<---------->HIGH</td>
                      </tr>
                      <tr>
                            <th colspan="3">บุคลิคลักษณะ (Appearance) </th>
                     </tr>
                     <?php  $s=0;  ?>
                     @foreach ($interview as $i)
                     @if ($i->id_head == 1)
                     <?php $s++ ?>
                     <tr>
                            <input type= "hidden" name="chioce{{$s}}"  value="{{$s}}"   />
                            <td  style="width:40% " >{{ $i->choice}}
                            <td  colspan="1" style="text-align:center " >
                                    @foreach ($scoreinterviewp as $item)
                                      <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required/> {{$item->score_interview}}&ensp;
                                    @endforeach
                                   


                            </td>
                            <td   style="width:30% "> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>

                   
                      </tr>
                      @endif
                      @endforeach
            
                      <tr>
                            <th colspan="3" >คุณสมบัติ (Qualification) </th>
                     </tr>
                    
                     @foreach ($interview as $i)
                     @if ($i->id_head == 2) 
                     <?php $s++ ?>
                     <input type= "hidden" name="chioce{{$s}}" value="{{$s}}" />
                     <tr>
                    
                            <td  style="width:20% " >{{ $i->choice   }}
                            <td  style="text-align:center" >

                                    @foreach ($scoreinterviewp as $item)
                                    <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required/> {{$item->score_interview}}&ensp;
                                  @endforeach


                            </td>
                        <td><textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
                          
                      </tr>
                 
                      @endif
                      @endforeach
  
                      
                        <tr>
                                <th colspan="3" >สมรรถนะความสามารถ (Competencies)</th>
                         </tr>
                        <tr>
                                @foreach ($interview as $i)
                                @if ($i->id_head == 3)
                                <?php $s++ ?>
                                <input type= "hidden" name="chioce{{$s}}" value="{{$s}}"  />
                                <tr>
                                       <td  style="width:20% " >{{ $i->choice}}
                                       <td  style="text-align:center " >
                                               @foreach ($scoreinterviewp as $item)
                                                 <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required/> {{$item->score_interview}}&ensp;
                                               @endforeach
                                              
           
           
                                       </td>
                                       <td> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
           
                              
                                 </tr>
                                 @endif
                                 @endforeach
                       
                         </tr>
                             <tr>
                                    <th  colspan="3">ความรู้เกี่ยวบริษัท และตำแหน่งงาน (Company & Position Knowledge)</th>
                             </tr>
                             <tr>
                                    @foreach ($interview as $i)
                                    @if ($i->id_head == 4)
                                    <?php $s++ ?>
                                    <input type= "hidden" name="chioce{{$s}}" value="{{$s}}"  />
                                    <tr>
                                           <td  style="width:20% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required/> {{$item->score_interview}}&ensp;
                                                   @endforeach
                                                  
               
               
                                           </td>
                                           <td> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
               
                                  
                                     </tr>
                                     @endif
                                     @endforeach
                               </tr>
                               <tr>
                                      <th  colspan="3">ความเหมาะสมกับวัฒนธรรมองค์กร (Cultural Fit-Core Values)</th>
                               </tr>
                               <tr>
                                    @foreach ($interview as $i)
                                    @if ($i->id_head == 5)
                                    <?php $s++ ?>
                                    <input type= "hidden" name="chioce{{$s}}" value="{{$s}}" />
                                    <tr>
                                           <td  style="width:20% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required/> {{$item->score_interview}}&ensp;
                                                   @endforeach
                                                  
               
               
                                           </td>
                                           <td> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
               
                                  
                                     </tr>
                                     @endif
                                     @endforeach
                                
                                  </tr>
                        
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td  >รวมคะแนนสัมภาษณ์ (Grand Total)
                                              
                                               </td>
                                        <td style="text-align:center" >
                                            
                                                <input  type= "hidden" name="chioce107" value="107"  />
                                         
                                                <input  name="total" type="text" id="total" readonly style="text-align:center"/>
                                              
            
                                        </td>
                                        <td >
                                                <input  type= "hidden" name="chioce100" value="100"  />
                                                แนะนำ: <textarea  name="conclusion" type="text" id="conclude" readonly style="text-align:center"></textarea>
                                               
                                            </td>
                                
                                  </tr>
                    </tbody>
                  </table>
          </div>

<br><br>
<input type="radio" name="chioce199" value="199" checked  hidden />
    ความคิดเห็น:
<textarea class="form-control" rows="3" name="ansinterview"></textarea>
<br><br>
<div class="row">
        <div class="col-md-4">ชิ่อผู้ประเมิน: 
        
        <input type="text" name="nametest"   class="form-control" required>
        <input type="hidden"  name="chioce320"  value="320" >
        </div>
        </div>
<br><br>
<center>
      
        <table border="2" bordercolor="black"  >
                <tr>
                        <th style="text-align:center" >หัวข้อ</th>
                        <th style="text-align:center" >คะแนนที่ได้</th>
                    </tr>
                <tr>
                        <td style="text-align:center" >บุคลิกลักษณะ</td>
                        <td style="text-align:center" >  <input type="text" name="group1"  id="group1" style="text-align:center"  readonly >     
                            <input type="hidden" name="chioce232" value="232"  />
                        
                        </td>
                </tr>
                <tr>
                        <td style="text-align:center" >คุณสมบัติ</td>
                        <td style="text-align:center" >  <input type="text" name="group2"  id="group2" style="text-align:center"   readonly >
                            <input type="hidden" name="chioce233" value="233"  />
                        </td>
                </tr>
        
                <tr>
                        <td style="text-align:center" >สมรรถนะความสามารถ</td>
                        <td style="text-align:center" > <input type="text" name="group3"  id="group3" style="text-align:center"  readonly > 
                        
                            <input type="hidden" name="chioce234" value="234"  />
                        </td>
                </tr>
                <tr>
                        <td style="text-align:center" >ความรู้เกี่ยวบริษัท</td>
                        <td style="text-align:center" > <input type="text" name="group4"  id="group4" style="text-align:center" readonly > 
                            <input type="hidden" name="chioce235" value="235"  />
                        </td>
                </tr>
                <tr>
                        <td style="text-align:center" >ความเหมาะสมกับวัฒนธรรมองค์กร</td>
                        <td style="text-align:center" > <input type="text" name="group5"  id="group5" style="text-align:center"  readonly >
                            <input type="hidden" name="chioce236" value="236"  />
                        </td>
                </tr>
                 
            </table>

            <br><br>
        <table border="2" bordercolor="black"  >
            <tr>
                <th style="text-align:center" >ตัวเลือก</th>
                <th style="text-align:center" >จำนวน</th>
                <th style="text-align:center" >คะแนน</th>
            </tr>
            <tr>
                <td style="text-align:center" >5</td>
                <td style="text-align:center"  > <input type="text" id="ch5" readonly style="text-align:center" /></td>
                <td style="text-align:center"><input type="text" id="rs5"  readonly style="text-align:center" name="rs5"/>
                    <input  type= "hidden" name="chioce102" value="102"  />
                    
                
                </td>
            </tr>
            <tr>
                <td style="text-align:center">4</td>
                <td style="text-align:center"><input type="text" id="ch4"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs4"  readonly style="text-align:center" name="rs4"/>
                

                    <input  type= "hidden" name="chioce103" value="103"  />
                 
                </td>
            <tr>
            <tr>
                <td style="text-align:center">3</td>
                <td style="text-align:center"><input type="text" id="ch3"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs3" readonly style="text-align:center" name="rs3"/>
                 
                    <input  type= "hidden" name="chioce104" value="104"  />
            
                </td>
            </tr>
            <tr>
                <td style="text-align:center">2</td>
                <td style="text-align:center"><input type="text" id="ch2" readonly style="text-align:center" />
                </td >
                <td style="text-align:center"><input type="text" id="rs2" readonly style="text-align:center" name="rs2"/>
                   
                    <input  type= "hidden"  name="chioce105" value="105"  />
                    
                
                </td>
            </tr>
            <tr>
                <td style="text-align:center">1</td>
                <td style="text-align:center"><input type="text" id="ch1" readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs1" readonly style="text-align:center" name="rs1"/>
                
                   
                    <input  type= "hidden" name="chioce106" value="106"  />
                  
                </td>
            </tr>
           
        </table>
      
    </center>
    <br>
    <div class="form-group" style="text-align:center">
            {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
        </div>


    </div>
        <script type='text/javascript'>
   
        var add_value = [];
        var  vb  = 0;
        var xCnt5 = 0 ;
        var xCnt4 = 0 ;
        var xCnt3 = 0 ;
        var xCnt2 = 0 ;
        var xCnt1 = 0 ;
        var pont = 0 ;
        $('input[type=radio]').change(function(){
        // add value
        add_value[this.name] = this.value;
        
        // reset sum
       
        xCnt5 = 0 ;
        xCnt4 = 0 ;
        xCnt3 = 0 ;
        xCnt2 = 0 ;
        xCnt1 = 0 ;
        for(var key in add_value){
            if(add_value[key] == 5){
                xCnt5++;
                
            }
            if(add_value[key] == 4){
                xCnt4++;
                
            }
            if(add_value[key] == 3){
                xCnt3++;
                
            }
            if(add_value[key] == 2){
                xCnt2++;
                
            }
            if(add_value[key] == 1){
                xCnt1++;
                
            }
        } 
        var xScore5 = 5 * xCnt5;
        var xScore4 = 4 * xCnt4;
        var xScore3 = 3 * xCnt3;
        var xScore2 = 2 * xCnt2;
        var xScore1 = 1 * xCnt1;
        var xconclude = 1 * xCnt1;
       $('#ch5').val(xCnt5);
       $('#rs5').val(xScore5 );

       $('#ch4').val(xCnt4);
       $('#rs4').val(xScore4 );

       $('#ch3').val(xCnt3);
       $('#rs3').val(xScore3 );

       $('#ch2').val(xCnt2);
       $('#rs2').val(xScore2 );


       $('#ch1').val(xCnt1);
       $('#rs1').val(xScore1 );

       pont =  xCnt1+ xCnt2 +xCnt3 + xCnt4+ xCnt5;

       xconclude = xScore5 + xScore4 + xScore3 + xScore2 + xScore1;
       $('#total').val(xconclude);
      
            
       


       if( xconclude >= 70 &&   pont == 20){
        $('#conclude').val("ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)");
        alert(' แนะนำ ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)');
    }

    if( xconclude >= 51 && xconclude <= 69 &&   pont == 20 ){
        $('#conclude').val("รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)");
        alert('แนะนำ รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)');
    }

    if( xconclude < 50  &&   pont == 20 ){
        $('#conclude').val("ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)");
        alert('แนะนำ ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)');
    }

 if( xconclude == 50  &&   pont == 20 ){
        $('#conclude').val("เหมาะสมกับตำแหน่งอื่น (For other position)");
        alert(' แนะนำเหมาะสมกับตำแหน่งอื่น (For other position)');
    }

    var    group1 =0;

var    group2 =0;
var    group2_1 =0;
var    group2_2 =0;
var    group2_3 =0;
var    group2_4 =0;

var    group3 =0;
var    group3_1 =0;
var    group3_2 =0;
var    group3_3 =0;
var    group3_4 =0;
var    group3_5 =0;


var    group4 =0;
var    group4_1 =0;
var    group4_2 =0;


var    group5 =0;
var    group5_1 =0;
var    group5_2 =0;
var    group5_3 =0;
var    group5_4 =0;
var    group5_5 =0;
var    group5_6 =0;
var    group5_7 =0;
var    group5_8 =0;


 if( score_1[0].checked ){
     group1 =  score_1[0].value
    
      
 }
 if( score_1[1].checked ){
     group1 =  score_1[1].value
      
      
 }
 if( score_1[2].checked ){
     group1 =  score_1[2].value
     
      
 } 
  if( score_1[3].checked ){
     group1 =  score_1[3].value
  
      
 }
 if( score_1[4].checked ){
     group1 =  score_1[4].value
    
      
 }
 $('#group1').val(parseInt(group1));





  if( score_2[0].checked ){
     add_value[this.name] = this.value;
    
      
 }
 if( score_2[1].checked ){
     group2_1 =  score_2[1].value
    
      
 }
 if( score_2[2].checked ){
     group2_1 =  score_2[2].value
    
      
 } 
  if( score_2[3].checked ){
     group2_1 =  score_1[3].value
    
 }
 if( score_2[4].checked ){
     group2_1 =  score_2[4].value
    
      
 }


if( score_3[0].checked ){
     group2_2 =  score_3[0].value
    
      
 }
 if( score_3[1].checked ){
     group2_2 =  score_3[1].value
    
      
 }
 if( score_3[2].checked ){
     group2_2 =  score_3[2].value
    
      
 } 
  if( score_3[3].checked ){
     group2_2 =  score_3[3].value
    
 }
 if( score_3[4].checked ){
     group2_2 =  score_3[4].value
    
      
 }



  if( score_4[0].checked ){
     group2_3 =  score_4[0].value
    
      
 }
 if( score_4[1].checked ){
     group2_3 =  score_4[1].value
    
      
 }
 if( score_4[2].checked ){
     group2_3 =  score_4[2].value
    
      
 } 
  if( score_4[3].checked ){
     group2_3 =  score_4[3].value
    
 }
 if( score_4[4].checked ){
     group2_3 =  score_4[4].value
    
      
 }


   if( score_5[0].checked ){
     group2_4 =  score_2[0].value
    
      
 }
 if( score_5[1].checked ){
     group2_4 =  score_5[1].value
    
      
 }
 if( score_5[2].checked ){
     group2_4 =  score_5[2].value
    
      
 } 
  if( score_5[3].checked ){
     group2_4 =  score_5[3].value
    
 }
 if( score_5[4].checked ){
     group2_4 =  score_5[4].value
    
     
 }
 group2 = parseInt(group2_1)+parseInt(group2_2)+parseInt(group2_3)+parseInt(group2_4); 
 $('#group2').val( group2);





   if( score_6[0].checked ){
     group3_1 =  score_6[0].value
    
      
 }
 if( score_6[1].checked ){
     group3_1 =  score_6[1].value
    
      
 }
 if( score_6[2].checked ){
     group3_1 =  score_6[2].value
    
      
 } 
  if( score_6[3].checked ){
     group3_1 =  score_6[3].value
    
 }
 if( score_6[4].checked ){
     group3_1 =  score_6[4].value
    
     
 }


 if( score_7[0].checked ){
     group3_2 =  score_7[0].value
    
      
 }
 if( score_7[1].checked ){
     group3_2 =  score_7[1].value
    
      
 }
 if( score_7[2].checked ){
     group3_2 =  score_7[2].value
    
      
 } 
  if( score_7[3].checked ){
     group3_2 =  score_7[3].value
    
 }
 if( score_7[4].checked ){
     group3_2 =  score_7[4].value
    
     
 }




 if( score_8[0].checked ){
     group3_3 =  score_8[0].value
    
      
 }
 if( score_8[1].checked ){
     group3_3 =  score_8[1].value
    
      
 }
 if( score_8[2].checked ){
     group3_3 =  score_8[2].value
    
      
 } 
  if( score_8[3].checked ){
     group3_3 =  score_8[3].value
    
 }
 if( score_8[4].checked ){
     group3_3 =  score_8[4].value
    
     
 }


 if( score_9[0].checked ){
     group3_4 =  score_9[0].value
    
      
 }
 if( score_9[1].checked ){
     group3_4 =  score_9[1].value
    
      
 }
 if( score_9[2].checked ){
     group3_4 =  score_9[2].value
    
      
 } 
  if( score_9[3].checked ){
     group3_4 =  score_9[3].value
    
 }

 if( score_9[4].checked ){
     group3_4 =  score_9[4].value
    
     
 }

if( score_10[0].checked ){
     group3_5 =  score_10[0].value
    
      
 }
 if( score_10[1].checked ){
     group3_5 =  score_10[1].value
    
      
 }
 if( score_10[2].checked ){
     group3_5 =  score_10[2].value
    
      
 } 
  if( score_10[3].checked ){
     group3_5 =  score_10[3].value
    
 }
 
 if( score_10[4].checked ){
     group3_5 =  score_10[4].value
    
     
 }

 group3 = parseInt(group3_1)+parseInt(group3_2)+parseInt(group3_3)+parseInt(group3_4)+parseInt(group3_5); 
 $('#group3').val( group3);







if( score_11[0].checked ){
     group4_1 =  score_11[0].value
    
      
 }
 if( score_11[1].checked ){
     group4_1 =  score_11[1].value
    
      
 }
 if( score_11[2].checked ){
     group4_1 =  score_11[2].value
    
      
 } 
  if( score_11[3].checked ){
     group4_1 =  score_11[3].value
    
 }
 
 if( score_11[4].checked ){
     group4_1 =  score_11[4].value
    
     
 }




if( score_12[0].checked ){
     group4_2 =  score_12[0].value
    
      
 }
 if( score_12[1].checked ){
     group4_2 =  score_12[1].value
    
      
 }
 if( score_12[2].checked ){
     group4_2 =  score_12[2].value
    
      
 } 
  if( score_12[3].checked ){
     group4_2 =  score_12[3].value
    
 }
 
 if( score_12[4].checked ){
     group4_2 =  score_12[4].value
    
     
 }

group4 = parseInt(group4_1)+parseInt(group4_2); 
 $('#group4').val( group4);







if( score_13[0].checked ){
   group5_1 =  score_13[0].value 
 }
 if( score_13[1].checked ){
     group5_1 =  score_13[1].value 
 }
 if( score_13[2].checked ){
     group5_1 =  score_13[2].value
    
 } 
  if( score_13[3].checked ){
     group5_1 =  score_13[3].value
    
 }
 if( score_13[4].checked ){
     group5_1 =  score_13[4].value  
 }


if( score_14[0].checked ){
   group5_2 =  score_14[0].value 
 }
 if( score_14[1].checked ){
     group5_2 =  score_14[1].value 
 }
 if( score_14[2].checked ){
     group5_2 =  score_14[2].value
    
 } 
  if( score_14[3].checked ){
     group5_2 =  score_14[3].value
    
 }
 if( score_14[4].checked ){
     group5_2 =  score_14[4].value  
 }



if( score_15[0].checked ){
   group5_3 =  score_15[0].value 
 }
 if( score_15[1].checked ){
     group5_3 =  score_15[1].value 
 }
 if( score_15[2].checked ){
     group5_3 =  score_15[2].value
    
 } 
  if( score_15[3].checked ){
     group5_3 =  score_15[3].value
    
 }
 if( score_15[4].checked ){
     group5_3 =  score_15[4].value  
 }



if( score_16[0].checked ){
   group5_4 =  score_16[0].value 
 }
 if( score_16[1].checked ){
     group5_4 =  score_16[1].value 
 }
 if( score_16[2].checked ){
     group5_4 =  score_16[2].value
    
 } 
  if( score_16[3].checked ){
     group5_4 =  score_16[3].value
    
 }
 if( score_16[4].checked ){
     group5_4 =  score_16[4].value  
 }




if( score_17[0].checked ){
   group5_5 =  score_17[0].value 
 }
 if( score_17[1].checked ){
     group5_5 =  score_17[1].value 
 }
 if( score_17[2].checked ){
     group5_5 =  score_17[2].value
    
 } 
  if( score_17[3].checked ){
     group5_5 =  score_17[3].value
    
 }
 if( score_17[4].checked ){
     group5_5 =  score_17[4].value  
 }



if( score_18[0].checked ){
   group5_6 =  score_18[0].value 
 }
 if( score_18[1].checked ){
     group5_6 =  score_18[1].value 
 }
 if( score_18[2].checked ){
     group5_6 =  score_18[2].value
    
 } 
  if( score_18[3].checked ){
     group5_6 =  score_18[3].value
    
 }
 if( score_18[4].checked ){
     group5_6 =  score_18[4].value  
 }



if( score_19[0].checked ){
   group5_7 =  score_19[0].value 
 }
 if( score_19[1].checked ){
     group5_7 =  score_19[1].value 
 }
 if( score_19[2].checked ){
     group5_7 =  score_19[2].value
    
 } 
  if( score_19[3].checked ){
     group5_7 =  score_19[3].value
    
 }
 if( score_19[4].checked ){
     group5_7 =  score_19[4].value  
 }






if( score_20[0].checked ){
   group5_8 =  score_20[0].value 
 }
 if( score_20[1].checked ){
     group5_8 =  score_20[1].value 
 }
 if( score_20[2].checked ){
     group5_8 =  score_20[2].value
    
 } 
  if( score_20[3].checked ){
     group5_8 =  score_20[3].value
    
 }
 if( score_20[4].checked ){
     group5_8 =  score_20[4].value  
 }


group5 = parseInt(group5_1)+parseInt(group5_2)+parseInt(group5_3)+parseInt(group5_4)+parseInt(group5_5)+parseInt(group5_6)+parseInt(group5_7)+parseInt(group5_8); 
 $('#group5').val( group5);














        });
       
        
        
        </script>
       
        
        
        
@endsection
