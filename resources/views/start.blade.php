@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">

        <div class="col-md-5">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">แบบประเมินบุคลิกภาพ</h3>
            </div>
            {{Form::open(['url'=>'start','method'=>'POST'])}}
              <div class="box-body">
                  <div class="col-md-7">
                <div class="form-group">
                   
                    {{Form::label('ชื่อ-สกุล')}}   
                      {{Form::text('name','',['class'=>'form-control'])}}   
                    
                  </div>
                 
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}}
              </div>
              <!-- /.box-footer -->
              {{Form::close()}}
            
          </div>
        </div>
        หมายเหตุ:ในแต่ละข้อให้เลือกเพียงตัวเลือก "ก" หรือ "ข" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด<br>(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)












      
       
        
        

    
        
</div>
  </div>
 
  @endsection