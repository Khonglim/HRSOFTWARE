@extends('layouts.test')
@section('content')

<div class="container">
    <br>
    
        <center>
            <div class="panel panel-success" style="width:100%">
                <div class="panel-heading">การทดสอบบุคลิกภาพ</div>
                <div class="panel-body">
                    {{Form::open(['url'=>'testdisc','method'=>'POST'])}}
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
                                <center>        {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}}  </center>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="form-group">
                        <br>
                        <label>วิธีทำแบบทดสอบ<br>เรียงลำดับแต่ละข้อตามแนวนอนทีละบรรทัดโดยใช้เลข 4,3,2,1 โดยที่เลข 4 แสดงถึงสิ่งที่อธิบายตัวตนของคุณได้ดีที่สุด และเลข 1 
                          แสดงสิ่งที่เป็นตัวตนของคุณน้อยที่สุด คุณสามารถใช้ตัวเลขแต่ละตัวได้เพียงหนึ่งครั้งในแต่ละบรรทัด คำตอบในแต่ละคำตอบไม่มีถูกหรือ ผิด คำตอบ ในแต่ละข้อควรคำนึงถึงลักษณะตัวตนที่แท้จริง
                          ของคุณมากกว่าการคำนึงสิ่งที่ต้องการเป็น.  (จับเวลา5นาที)
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
                    </div>
                </div>
             
         
        </center>
      </div>
 

  @endsection