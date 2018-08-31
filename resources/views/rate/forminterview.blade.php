@extends('layouts.interview')
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
           <div class="container">
          {{Form::open(['url'=>'rate'])}}
         
          <div class="box-body table-responsive no-padding">
            <table  id="customers" class="table table-stripe"  >
                  
                      <tr>
                        <th style="text-align:center" colspan="2"><br>แบบประเมินผลการสัมภาษณ์ (Interview Appraisal Form)
                               <br> ระดับปฎิบัติการ (Operational Level)
                                </th>
                        <th  style="text-align:center" colspan="2" >ฝ่ายทัรพยากรบุคคล <br>(Human Resources Dept.)
                               <br> วันที่ (Date) <br><input type="date" name="dateinterviwe" />
                               <input type="hidden" name="chioce123"  value="123" >
                         </th>
                        
                      </tr>
                   
                    <tbody>
                      <tr>
                        <td style="text-align:center">ชื่อผู้สมัคร (Applicant’s Name)
                            <select id="country" name="employee" required >
                            <option value="">--เลือกชื่อผู้สมัคร--</option>
                            @foreach ($employee  as $e)
                            <option value="{{$e->id}}"> {{$e->name }} {{$e->lastname }}</option>   
                            @endforeach
                      
                        <td style="text-align:center" colspan="1">
                            ตำแหน่งผู้สมัคร (Position)  
                        <input type="text" name="ngg_position" required>
                        
                        </td>
                        <td>
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
                            <input type="hidden" name="chioce{{$s}}"  value="{{$s}}"  >
                            <td  style="width:20% " >{{ $i->choice}}
                                
                            <td  colspan="1" style="text-align:center " >
                                    @foreach ($scoreinterviewp as $item)
                                      <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required> {{$item->score_interview}}&ensp;
                                    @endforeach
                                   


                            </td>
                            <td> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>

                   
                      </tr>
                      @endif
                      @endforeach
            
                      <tr>
                            <th colspan="3" >คุณสมบัติ (Qualification) </th>
                     </tr>
                    
                     @foreach ($interview as $i)
                     @if ($i->id_head == 2) 
                     <?php $s++ ?>
                     <input type="hidden" name="chioce{{$s}}" value="{{$s}}"  />
                     <tr>
                    
                            <td  style="width:40% " >{{ $i->choice   }}
                            <td  style="text-align:center" >

                                    @foreach ($scoreinterviewp as $item)
                                    
                                    <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"   required> {{$item->score_interview}}&ensp; 
                                  

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
                                <input type="hidden" name="chioce{{$s}}" value="{{$s}}"  >
                                <tr>
                                       <td  style="width:40% " >{{ $i->choice}}
                                       <td  style="text-align:center " >
                                               @foreach ($scoreinterviewp as $item)
                                   
                                    <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required> {{$item->score_interview}}&ensp; 
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
                                    <input type="hidden" name="chioce{{$s}}" value="{{$s}}"  />
                                    <tr>
                                           <td  style="width:40% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required> {{$item->score_interview}}&ensp; 
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
                                    <input type="hidden" name="chioce{{$s}}" value="{{$s}}"  />
                                    <tr>
                                           <td  style="width:40% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}" required > {{$item->score_interview}}&ensp; 
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
                                                <input type="hidden" name="chioce101" value="101"  >
                                                <input type="hidden" name="chioce102" value="102" >
                                                <input  name="total" type="text" id="total" readonly style="text-align:center"/>
                                              
            
                                        </td>
                                        <td >
                                                <input type="hidden" name="chioce103" value="103" checked  hidden >
                                                แนะนำ: <textarea  name="conclusion" type="text" id="conclude" readonly style="text-align:center"></textarea>
                                             
                                               
                                            </td>
                                
                                  </tr>
                    </tbody>
                  </table>
          </div>

<br><br>
ความคิดเห็น:
<input type="hidden" name="chioce169" value="169" >
<textarea class="form-control" rows="3" name="ans_sup"></textarea>
<br><br>
<div class="row">
<div class="col-md-4">ชิ่อผู้ประเมิน: 

<input type="text" name="nametest"   class="form-control" >
<input type="hidden"  name="chioce320"  value="320" >
</div>
</div>
<br><br>
<center>
        <table border="2" bordercolor="black"  >
            <tr>
                <th style="text-align:center" >ตัวเลือก</th>
                <th style="text-align:center" >จำนวน</th>
                <th style="text-align:center" >คะแนน</th>
            </tr>
            <tr>
                <td style="text-align:center" >5</td>
                <td style="text-align:center"  > <input type="text" id="ch5" readonly style="text-align:center" /></td>
                <td style="text-align:center">
                    
                        <input type="hidden" name="chioce104" value="104"  />
                    <input type="text" id="rs5"  readonly style="text-align:center" name="rs5"/>
                
                </td>
            </tr>
            <tr>
                <td style="text-align:center">4</td>
                <td style="text-align:center"><input type="text" id="ch4"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs4"  readonly style="text-align:center" name="rs4"/>
                
                    <input type="hidden" name="chioce105" value="105"  />
                </td>
            <tr>
            <tr>
                <td style="text-align:center">3</td>
                <td style="text-align:center"><input type="text" id="ch3"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs3" readonly style="text-align:center" name="rs3"/>
                
                    <input type="hidden" name="chioce106" value="106" >
                </td>
            </tr>
            <tr>
                <td style="text-align:center">2</td>
                <td style="text-align:center"><input type="text" id="ch2" readonly style="text-align:center" />
                </td >
                <td style="text-align:center"><input type="text" id="rs2" readonly style="text-align:center" name="rs2"/>
                
                    <input type="hidden" name="chioce107" value="107" >
                </td>
            </tr>
            <tr>
                <td style="text-align:center">1</td>
                <td style="text-align:center"><input type="text" id="ch1" readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs1" readonly style="text-align:center" name="rs1"/>
                
                    <input type="hidden" name="chioce108" value="108" >
                    <input type="hidden" name="chioce109" value="109" >
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
        alert('แนะนำ เหมาะสมกับตำแหน่งอื่น (For other position)');
    }

        });
       
        
        
        </script>
       
        
        
        
@endsection
