@extends('layouts.main')
@section('title','| แบบประเมิน')
@section('content')
<div class="content-wrapper">
	<style type="text/css">
  table{
    width: 100%;
  }
		th{
			font-size: 18px;
			background-color: #83b8fc;
    		color: black;
        
		}
		td{
			font-size: 18px;

		}
		p{
			color: red;
		}
		div.box-header{
			text-align: center;
			font-size:35px;


		}

	</style>

 <?php    $i=0; $j=0;?>

 <section class="content">
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
               {{Form::open(['url'=>'evatesting'])}}
                <div style="display: none;" >
                     {{Form::text('nee_id2',$_POST["nee_id2"])}}
                     {{Form::text('nee_id1',$_POST["nee_id1"])}} <br>
                     {{Form::text('id_employee',$_POST["id_employee"])}}<br>
                     {{Form::text('nee_id',$_POST["nee_id"])}}
                     {{Form::text('forms1_id',$_POST["forms_id"])}}
                    </div>
               
           
              
            	 @foreach($partof as $partoftest)
               @if($partoftest->id_form == $_POST["forms_id"])
                <table class="table table-bordered table-striped">
              <thead>
                
              	 <tr>
                  <th colspan="10" style="text-align: center;width: 100%;height: 70px;">{{$partoftest->part}}</th>
                </tr>
               

                <tr> 
                 
                  <th colspan="5" rowspan="2" style="text-align: center;width: 60%;height: 70px;" >{{$partoftest->title}}
                    @if($partoftest['subpart']!='0')
                    <br>
                    <p>**ผู้ประเมินโปรดเลือก ข้อ A หรือ B อย่างใดอย่างหนึ่ง ในการประเมินเท่านั้น(Please select only Subject A or B for evaluation and score will be calculated only one subject) **</p>
                    @endif

                  </th>
                  
          <th colspan="5" style="text-align: center;width: 40%;height: 70px;" >ระดับคะแนนการประเมิน </th>

                </tr>
      
              <tr>
                <th style="text-align: center;width: 8%;height: 70px;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;width: 8%;height: 70px;">2<br>(พอใช้)</th>
                <th style="text-align: center;width: 8%;height: 70px;">3<br>(ดี)</th>
                <th style="text-align: center;width: 8%;height: 70px;">4<br>(ดีมาก)</th>
                <th style="text-align: center;width: 8%;height: 70px;">5<br>(ดีเลิศ)</th>
             </tr>
             
             

             </thead>
             <tbody>
@foreach($question as $questiontest)
 @if($questiontest->id_form ==  $_POST["forms_id"])
             
             	
               
                  @if($questiontest['id_part']==$partoftest['id_part']&&$questiontest['q_subpart']==$partoftest['subpart']&&$questiontest['point']=='0')
                  <tr>
                    <?php  $i=$questiontest->id_part; $j++;?>
                    <td colspan="5" style="width: 60%;height: 70px;">{{$questiontest->ask}}</td>

                    <td style="display: none;"><input name='t_{{$questiontest->id_part}}{{$questiontest->q_id}}' type="text" value={{$questiontest->id}}></td>

                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='1' required="true"></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='2' required="true"></td> 
                   
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='3'required="true"></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='4'required="true"></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='5' required="true"></td>
                    

                     
                    
                  </tr>
                  @elseif($questiontest['id_part']==$partoftest['id_part']&&$questiontest['q_subpart']==$partoftest['subpart']&&$questiontest['point']=='-')
                  <tr>
                     <td colspan="5" style="width: 60%;height: 70px;">{{$questiontest->ask}}</td>

                    <td style="display: none;"><input name='c_{{$questiontest->id_part}}{{$questiontest->q_id}}' type="text" value={{$questiontest->id}}></td>

                    <td colspan="5" style="width: 60%;height: 80px;">
                      <textarea class="form-control" style="resize: none;" name={{$questiontest->id_part}}{{$questiontest->q_subpart}}></textarea>
                    </td>
                    
                   
                  </tr>
                   
                  @endif

                   

             
       @endif 
             @endforeach
              </tbody>
            
            
            </table>

@endif
             @endforeach
         
            </div>
            <br><br>
           {{ Form::submit('ส่งแบบประเมิน',['class'=> 'btn btn-primary'])}}
{{Form::close()}}
            <br><br>
         </div>
        </div>
      </div>
    </div>


</section>
</div>
@endsection