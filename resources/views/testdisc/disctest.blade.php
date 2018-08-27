@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-2">
          </div>
        <div class="col-md-7">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">แบบทดสอบบุคลิกภาพ</h3>
            </div>
            {{Form::open(['url'=>'testdisc','method'=>'POST'])}}
            {{ csrf_field() }}
              <div class="box-body">
                  
              <div class="row">
                <div class="form-group">
                    <div class="col-md-5">
                  {{Form::label('ชื่อ')}}   
                  {{Form::text('name','',['class'=>'form-control','required'])}}   
                  {{Form::label('นามสกุล')}}   
                  {{Form::text('lastname','',['class'=>'form-control','required'])}}   
                </div>
              </div>
             
            </div>
        
            <div class="form-group">
                <br>
                <label>วิธีทำแบบทดสอบ<br>เรียงลำดับแต่ละข้อตามแนวนอนทีละบรรทัดโดยใช้เลข 4,3,2,1 โดยที่เลข 4 แสดงถึงสิ่งที่อธิบายตัวตนของคุณได้ดีที่สุด และเลข 1 
                  แสดงสิ่งที่เป็นตัวตนของคุณน้อยที่สุด คุณสามารถใช้ตัวเลขแต่ละตัวได้เพียงหนึ่งครั้งในแต่ละบรรทัด คำตอบในแต่ละคำตอบไม่มีถูกหรือ ผิด คำตอบ ในแต่ละข้อควรคำนึงถึงลักษณะตัวตนที่แท้จริง
                  ของคุณมากกว่าการคำนึงสิ่งที่ต้องการเป็น.  (จับเวลา3นาที)
                </label>
                <div class="col-md-2">
                  </div>
                <div class="col-md-8">
                    <div class="alert alert-danger">
                        <center>   <strong>หมายเหตุ!</strong> ทำข้อสอบทางด้านซ้ายไปขวา &rarr; หรือคลิกดูตัวอย่าง </center>
                      </div>
                    </div>
                 
              </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  
               <center> {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}} 
             <!-- Trigger the modal with a button -->
    <!--  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">ตัวอย่าง</button>-->
</center>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ตัวอย่างการทำแบบทดสอบ</h4>
      </div>
      <div class="modal-body">
          <img src="{{URL::asset('dist/img/test.gif')}}" class="user-image" alt="User Image" width="880" height="550">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

             
              <!-- /.box-footer -->
              {{Form::close()}}
            </div>
          </div>
        </div>
        
     
</div>
  </div>
 
  @endsection