@extends('layouts.main')
@section('content')
<div class="content-wrapper">

 <section class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: none;">
             <div class="col-md-6">
                <div class="form-group">
                 
                   <?php    $i=Auth::user()->name; $j=0;?>
                 
                   {{Form::open(['url'=>'istestertotest','method'=>'POST'])}}

                    {{Form::label('id_employee','รหัส พนักงาน')}}   
                    {{Form::text('id_employee',$i,['class'=>'form-control','required'])}}   
                   
                  </div>
                 <div class="col-md-6">
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
      

</section>
</div>
@endsection