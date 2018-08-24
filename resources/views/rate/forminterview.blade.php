@extends('layouts.main')
@section('content')
<style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
            <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                           
                    
                  
                     

            <table  id="customers">
                    <thead>
                      <tr>
                        <th style="text-align:center" colspan="2">แบบประเมินผลการสัมภาษณ์ (Interview Appraisal Form)
                               <br> ระดับปฎิบัติการ (Operational Level)
                                </th>
                        <th  style="text-align:center" colspan="2" >ฝ่ายทัรพยากรบุคคล (Human Resources Dept.)
                               <br> วันที่ (Date) <input type="date" name="dateinterviwe" />
                                </th>
                        
                      </tr>
                   
                    <tbody>
                      <tr>
                        <td style="text-align:center" colspan="3" >ชื่อผู้สมัคร (Applicant’s Name) <input type="text" name="aname"  /> ตำแหน่งผู้สมัคร (Position)  <input type="text" name="alastname"  /></td>
                        
                      </tr>
                      <tr>
                        <td rowspan="2" style="text-align:center">ข้อพิจารณา (OBSERVATIONS)</td>
                        <td style="text-align:center">RATING (Please circle)</td>
                        <td rowspan="2" style="text-align:center">ความคิดเห็น (COMMENT)</td>
                      </tr>
                      <tr>
                            <td style="text-align:center">LOW<---------->HIGH</td>
                      </tr>
                      <tr>
                            <th colspan="3">บุคลิคลักษณะ (Appearance) </th>
                     </tr>
                     @foreach ($interview as $i)
                     @if ($i->id_head == 1)
                     <tr>
                            <td  style="width:50% " >{{ $i->choice}}
                            <td  colspan="1" style="text-align:center " >
                                    @foreach ($scoreinterviewp as $item)
                                      <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"/> {{$item->score_interview}}&emsp;
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
                     <tr>
                           
                            <td  style="width:50% " >{{ $i->choice   }}
                            <td  style="text-align:center" >

                                    @foreach ($scoreinterviewp as $item)
                                    <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"/> {{$item->score_interview}}&emsp;
                                  @endforeach


                            </td>
                        <td><textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
                          
                      </tr>
                 
                      @endif
                      @endforeach
  
                      
                        <tr>
                                <th  colspan="3">สมรรถนะความสามารถ (Competencies)</th>
                         </tr>
                        <tr>
                                @foreach ($interview as $i)
                                @if ($i->id_head == 3)
                                <tr>
                                       <td  style="width:50% " >{{ $i->choice}}
                                       <td  colspan="1" style="text-align:center " >
                                               @foreach ($scoreinterviewp as $item)
                                                 <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"/> {{$item->score_interview}}&emsp;
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
                                    <tr>
                                           <td  style="width:50% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"/> {{$item->score_interview}}&emsp;
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
                                    <tr>
                                           <td  style="width:50% " >{{ $i->choice}}
                                           <td  colspan="1" style="text-align:center " >
                                                   @foreach ($scoreinterviewp as $item)
                                                     <input type="radio" id="score_{{$i->id}}" name="score_{{$i->id}}" value="{{$item->score_interview}}"/> {{$item->score_interview}}&emsp;
                                                   @endforeach
                                                  
               
               
                                           </td>
                                           <td> <textarea class="form-control" rows="3" name="comment{{$i->id}}"></textarea></td>
               
                                  
                                     </tr>
                                     @endif
                                     @endforeach
                                
                                  </tr>
                        
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >รวมคะแนนสัมภาษณ์ (Grand Total)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                <input type="text" id="total" readonly style="text-align:center"/>
                                              
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                {{ Form::select('conclusion', [
                                                    '' => 'สรุปผล',
                                                    'ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)' => 'ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)', 
                                                    'รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)' => 'รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)',
                                                    'ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)' => 'ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)',
                                                    'เหมาะสมกับตำแหน่งอื่น (For other position)	'=> 'เหมาะสมกับตำแหน่งอื่น (For other position)	'
                                        ],null, ['class' => 'form-control']) }}
                                               
                                            </td>
                                
                                  </tr>
                    </tbody>
                  </table>

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
                <td style="text-align:center"><input type="text" id="rs5"  readonly style="text-align:center" /></td>
            </tr>
            <tr>
                <td style="text-align:center">4</td>
                <td style="text-align:center"><input type="text" id="ch4"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs4"  readonly style="text-align:center"/></td>
            <tr>
            <tr>
                <td style="text-align:center">3</td>
                <td style="text-align:center"><input type="text" id="ch3"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs3" readonly style="text-align:center"/></td>
            </tr>
            <tr>
                <td style="text-align:center">2</td>
                <td style="text-align:center"><input type="text" id="ch2" readonly style="text-align:center" />
                </td >
                <td style="text-align:center"><input type="text" id="rs2" readonly style="text-align:center"/></td>
            </tr>
            <tr>
                <td style="text-align:center">1</td>
                <td style="text-align:center"><input type="text" id="ch1" readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs1" readonly style="text-align:center"/></td>
            </tr>
           
        </table>
      
    </center>
    <br>
    <div class="form-group" style="text-align:center">
            {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
        </div>
    </div>
</div>
    </div>
</div>



        <script type='text/javascript'>
   
        var add_value = [];
        var xCnt5 = 0 ;
        var xCnt4 = 0 ;
        var xCnt3 = 0 ;
        var xCnt2 = 0 ;
        var xCnt1 = 0 ;
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
       xconclude = xScore5 + xScore4 + xScore3 + xScore2 + xScore1;
       $('#total').val(xconclude);
    if( xconclude >= 70){
        $('#conclude').val("ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)");

    }

        });
       
        
        
        </script>
       
        
        
        
@endsection
