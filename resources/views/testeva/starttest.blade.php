@extends('layouts.main')
@section('content')
<div class="content-wrapper">
	<style type="text/css">
		th{
			font-size: 18px;
			background-color: #83b8fc;
    		color: black;
		}
		td{
			font-size: 16.5px;
		}
		p{
			color: red;
		}
		div.box-header{
			text-align: center;
			font-size:35px;


		}

	</style>

	

 <section class="content">
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
            	 
              <thead>

              	<tr>
              		<th>{{ Html::link('evatesting/create','ไปทำเเบบtest',array('class ' => 'btn btn-primary')) }}</th>
              		<th colspan="9" style="text-align: center;">ด้านที่ 1 การประเมินด้านคุณสมบัติของพนักงาน (Core compentency )</th>
              	</tr>

              	<tr>
              		<th colspan="5" rowspan="2" style="text-align: center;" >หัวข้อ</th>
					<th colspan="5" style="text-align: center;" >ระดับคะแนนการประเมิน </th>

              	</tr>

              <tr>
                <th style="text-align: center;">1<br>(ต้องปรับปรุง)</th>
                <th style="text-align: center;">2<br>(พอใช้)</th>
                <th style="text-align: center;">3<br>(ดี)</th>
                <th style="text-align: center;">4<br>(ดีมาก)</th>
                <th style="text-align: center;">5<br>(ดีเลิศ)</th>
             </tr>
             

             </thead>

             <tbody>
             	@foreach($evatest as $evatests)
             	<tr><th>{{$evatests['part1_1']}} </th></tr>
             	@endforeach
             	
            

             </tbody>
             <tfoot>
             	<tr>
            		
             	</tr>
             </tfoot>
            
            </table>
            <br><br>
           
            <br><br>
         </div>
        </div>
      </div>
    </div>


</section>
</div>
@endsection