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

#customers tr:hover {background-color: #99ffff;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<div class="container">
    <br>
    <div class="form-group">

       
        <center> <b>บริษัท เอ็น จี จี ไทม์พีซ จำกัด</b><br>
            แบบประเมินผลการปฏิบัติงานระดับพนักงานปฏิบัติการ
        
        </center> 
    </div>
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
                วันที่เริ่มงาน: <input type="text" name="dateStart" id="dateStart" value="" /> 
            </div>
      

        <div class="col-md-4">
            วันสิ้นสุด:<input type="text" name="dateEnd" id="dateEnd" value="" /> 
        </div>
    </div>
</div>
    <div class="form-group">
  <div class="row">

    ครบทดลองงาน:<input type="text" name="totolDay" id="totolDay" value=""  readonly/> วัน
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
       <td   style="text-align:center"  >


               @foreach ($operate_Chioce as $item2)
                       
                    
               <input type="radio" id="score90_{{$operate_qSups->id}}" name="score90_{{$operate_qSups->id}}" value={{$item2->score_operate}} required > {{$item2->score_operate}}&ensp;


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
 
                รวมคะแนนทั้งสิ้น  ประเมินครั้งที่ 1 : 60 วัน   <input type="text" name="rate_60" id="rate_60" readonly > คะแนน
                              ประเมินครั้งที่ 2 : 90 วัน   <input type="text" name="rate_90" id="rate_90" readonly> คะแนน
              </td>





 </tr>









</table>

    </div>

    <br><br>
</body>
</html>
@endsection