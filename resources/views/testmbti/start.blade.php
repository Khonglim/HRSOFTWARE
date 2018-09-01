@extends('layouts.test')
@section('content')
<div class="container">
  <br>
  
      <center>
          <div class="panel panel-success" style="width:100%">
              <div class="panel-heading">การทดสอบบุคลิกภาพ</div>
              <div class="panel-body">
                  {{Form::open(['url'=>'start','method'=>'POST'])}}
                <div class="row">
                  <div class="col-xs-12">
                      <div align="right">
                          <label class="col-xs-3">ชื่อ :</label>
                      </div>
                      <div class="col-xs-3">
                          {{Form::text('name','',['class'=>'form-control','required','placeholder'=>"กรุณาระบุชื่อ"])}}   
                         
                      </div>
                      <div class="col-xs-3">
                          {{Form::text('lastname','',['class'=>'form-control','required','placeholder'=>"กรุณาระบุนามสกุล"])}}   
                   
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="col-xs-6 col-xs-offset-3">
                          <div align="left">
                              <center>         {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}} </center>
                              {{Form::close()}}
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="col-md-12">
                  <label>หมายเหตุ:ในแต่ละข้อให้เลือกเพียงตัวเลือก "ก" หรือ "ข" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด  <br>(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)
                  <br> <br><center>(จับเวลา 5 นาที)  </center>
                
                </label>
              </div>
              </div>
          </div>
      </center>

</div> 
  @endsection