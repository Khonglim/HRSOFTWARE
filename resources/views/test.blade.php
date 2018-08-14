@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">
        


        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> แบบประเมินบุคลิกภาพตามตัวบ่งชี้ของมายเออร์-บริกส์(MBTI) </h3>
                </div>
                {{Form::open(['url'=>'answer','method'=>'POST','id'=>'test1'])}}
                  <div class="box-body">
                      <div id="topbar">
                          
                          <h3><p id="showTime" data-minutes-left="2"></p></h3>
                        
                          </div>
                    <div class ="row">
                        <div class ="form-group">
                      <div class="col-md-5">
                     <label> ผู้ทำข้อสอบ::</label> {{Form::text('name',$name =  $_POST["name"] ,['class'=>'form-control','readonly'])}}
                    </div>  
                  </div>   
                </div>  
                  <div class ="form-group"></div> 
                      
                      @foreach ($choice as $c)
                      {{$c->question}} <br>
                    <input type="radio" name="{{$c->id}}" id="choice1" value="1" />{{$c->choice1}}<br>
                    <input type="radio" name="{{$c->id}}" id="choice2" value="2" />{{$c->choice2}}<br><br><br>
                @endforeach    
                
               
                
        
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    {{ Form::submit('ตรวจคำตอบ',['class'=> 'btn btn-primary'])}}
                  </div>
                  <!-- /.box-footer -->
                  {{Form::close()}}
              </div>
            </div>
    






     
      
</div>
  </div>




 
  @endsection