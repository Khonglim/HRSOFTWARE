@extends('layouts.main')

@section('content')
<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Pragma: no-cache"); // HTTP/1.0
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
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


.demo,
.demo p {
  margin: 4em 0;
  text-align: center;
}

/**
 * Tooltip Styles
 */

/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 80%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -200px;
  padding: 7px;
  width: 420px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 73%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 10px solid #000;
  border-top: 10px solid hsla(0, 0%, 20%, 0.9);
  border-right: 10px solid transparent;
  border-left: 10px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
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
               {{Form::open(['url'=>'evatestingv2'])}}
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
                      @foreach($descrip as $des) 
                        @if($des->dq_q_id == $questiontest->id )

                    
                       @if($des->dq_discription == '')
                    <td colspan="5" style="width: 60%;height: 70px;" >{{$questiontest->ask}} 
                    </td>
                       @else
                    <td colspan="5" style="width: 60%;height: 70px;" data-tooltip="{{$des->dq_discription}}">{{$questiontest->ask}} 
                    </td>
                       @endif
                       
                        @endif
                      @endforeach
                    <td style="display: none;"><input name='t_{{$questiontest->id_part}}{{$questiontest->q_id}}' type="text" value={{$questiontest->id}}></td>

                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='1' required="true" ></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='2' required="true" ></td> 
                   
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='3' required="true"></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='4'required="true"  ></td>
                    
                    <td style="text-align: center;width: 8%;height: 70px;">
                    <input name={{$questiontest->id_part}}{{$questiontest->q_id}} type="radio" value='5' required="true" ></td>
                    
                  </tr>
                  @elseif($questiontest['id_part']==$partoftest['id_part']&&$questiontest['q_subpart']==$partoftest['subpart']&&$questiontest['point']=='-')
                  <tr>
                     <td colspan="5" style="width: 60%;height: 70px;">{{$questiontest->ask}}</td>

                    <td style="display: none;"><input name='c_{{$questiontest->id_part}}{{$questiontest->q_id}}' type="text" value={{$questiontest->id}}></td>

                    <td colspan="5" style="width: 60%;height: 80px;">
                      <textarea class="form-control" style="resize: none;" name={{$questiontest->id_part}}{{$questiontest->q_subpart}}></textarea>
                    </td>
                    
                   
                  </tr>
                   @elseif($questiontest['id_part']==$partoftest['id_part']&&$questiontest['q_subpart']==$partoftest['subpart']&&$questiontest['point']=='0') 
                   <tr>
                     <td>
                       try
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