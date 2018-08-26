@extends('layouts.main')
@section('content')
<div class="content-wrapper">

 <section class="content">
  <div class="row">
      <div class="col-xs-5">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <div class="col-md-4">
                <div class="form-group">
                  {{Form::open(['url'=>'istestertotest','method'=>'POST'])}}

                    {{Form::label('id_employee','รหัส พนักงาน')}}   
                    {{Form::text('id_employee','',['class'=>'form-control','required'])}}   
                   
                  </div>
                 <div class="col-md-20">
                  <p> หมายเหตุ:โปรดอ่านข้อความอย่างระเอียดก่อนลงมือทำ </p>
                </div>
                </div>
                
         </div>
          <div class="box-footer">
             
                {{ Form::submit('เริ่มทำแบบประเมิน',['class'=> 'btn btn-primary'])}}
              </div>
              <!-- /.box-footer -->
        </div>
      </div>
      <div class="col-xs-7">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ผลการประเมิน</h3>
          </div>
           <?php    $i=''; $j=''; $k=''; $l='';  $m='';?>
          <!-- /.box-header -->
          <div class="box-body">
           <table id="vy_evaluate" class="table table-bordered table-striped">


              <thead>
              <tr>
                <th style="text-align: center;width: 6.5%;height: 40px;">รหัส พนักงาน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อ</th>
                 <th style="text-align: center;width: 6.5%;height: 40px;">เข้าดูข้อมูล</th>
                
              </tr>
              </thead>

              <tbody>
             @foreach($employeetotests as $empl)
              <?php    $i=$empl->nee_by_employee; ?>
 @foreach($ngg_employees as $ngg_emp) 
  
               

                @if($empl->nee_by_employee == $ngg_emp->nem_id && $j!=$i)
                <?php  $j = $i; ?>
                <tr>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{$ngg_emp->nem_code}}</td>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{$ngg_emp->nem_nickname}}</td>
                   <td style="text-align: center;width: 6.5%;height: 40px;"> <a href="{{'evareport/'.$ngg_emp->nem_id.'/report'}}" class="btn btn-primary btn-xs" ><i class="fa fa-eye"></i></a></td> 
                 
                </tr>
                @endif 
                
               
               

               
                   @endforeach

                   
                  
               @endforeach


 



              </tbody>
 
            </table>
          </div>
        </div>
      </div>

</section>
</div>
@endsection