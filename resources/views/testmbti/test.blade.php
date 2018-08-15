@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">
      
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> แบบประเมินบุคลิกภาพตามตัวบ่งชี้ของมายเออร์-บริกส์(MBTI) </h3>
                </div>
             
                  <div class="box-body">
                      @foreach ($testemp as $c)
                      @if(($c->name ==  $name =  $_POST["name"]) && ($c->lastname ==  $lastname =  $_POST["lastname"]))
                      <div id="topbar">
                          <h3><p id="showTime" data-minutes-left="180"></p></h3>
                          </div>
                    <div class ="row">
                        <div class ="form-group">
                      <div class="col-md-5">
                          <label> ผู้ทำข้อสอบ::</label> {{Form::label($c->name)}}  {{Form::label($c->lastname)}}
                    </div>  
                  </div>   
                </div>  
                  <div class ="form-group"></div> 
                  {{Form::open(['url'=>'endtest','method'=>'POST' ,'id'=>'test1'])}}
                      @foreach ($choice as $c)
                     <h3> {{$c->question}}  </h3>
                   
                     <h4>  <input type="radio" name="{{$c->id}}" id="choice1" value="1" />{{$c->choice1}} </h4> 
                     <h4> <input type="radio" name="{{$c->id}}" id="choice2" value="2" />{{$c->choice2}}</h4><br><br><br>
                @endforeach    
              
              
               @else
              <h3> คุณไม่สามารถทำแบบทดสอบได้กรุณาตรวจสอบรายชื่อ-นามสกุล! </h3>
              @endif
              @endforeach
            
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                      @foreach ($testemp as $l)
                      @if(($l->name ==  $name =  $_POST["name"]) && ($l->lastname ==  $lastname =  $_POST["lastname"]))
                      
                    {{ Form::submit('ส่งคำตอบ',['class'=> 'btn btn-primary'])}}
                    @else
                               
                    {{ Html::link('answer','ย้อนกลับ',array('class ' => 'btn btn-danger')) }}
                    @endif
                    @endforeach
                  </div>
                  <!-- /.box-footer -->
               
                 
              </div>
            </div>
    






     
      
</div>
  </div>




 
  @endsection