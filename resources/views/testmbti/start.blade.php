@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">

        <div class="col-md-5">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">แบบประเมินบุคลิกภาพ</h3>
            </div>
          
          
              <div class="box-body">
                  <div class="col-md-7">
                <div class="form-group">
                  {{Form::open(['url'=>'start','method'=>'POST'])}}
                   
                    {{Form::label('ชื่อ')}}   
                    {{Form::text('name','',['class'=>'form-control','required'])}}   
                    {{Form::label('นามสกุล')}}   
                    {{Form::text('lastname','',['class'=>'form-control','required'])}}   
                   
                  </div>
                  <p> หมายเหตุ:ในแต่ละข้อให้เลือกเพียงตัวเลือก "ก" หรือ "ข" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด<br>(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น) </p>
                </div>
               

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
             
                {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}}
              </div>
              <!-- /.box-footer -->
              {{Form::close()}}
            
          </div>
        </div>
      











      
       
        
        

    
        
</div>
  </div>
 
  @endsection