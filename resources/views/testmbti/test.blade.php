@extends('layouts.test')
@section('content')

<?php
$i=0;
$j=0;
$p=0;
$r=0;
$q=0;
$t=0;
$g=0;
?>

<div class="container">
    <br>
            <div class="panel panel-success" style="width:100%">
                <div class="panel-heading">แบบประเมินบุคลิกภาพตามตัวบ่งชี้ของมายเออร์-บริกส์(MBTI) </div>
                <div class="panel-body">
                        @forelse ($testemp as $c)
                    <?php  $r++; ?>
                    @if(($c->name ==  $name =  $_POST["name"]) && ($c->lastname ==  $lastname =  $_POST["lastname"]))
                    <?php  $j++; ?>
                    <div id="topbar">
                        <h3><p id="showTime" data-minutes-left="5"></p></h3>
                        <h3><p   class="text-danger"   id="showTime2" data-minutes-left="0.5"></p></h3>
                        </div>
                        {{Form::open(['url'=>'endtest','id'=>'test1','method'=>'POST'])}}
                        @csrf
                  <div class ="row">
                      <div class ="form-group">
                    <div class="col-md-3">

                    <label> ชื่อ::{{$c->name}}</label>   <input type="text" name="name" value="{{$c->name}}" hidden/>
                    <label> นามสกุล::{{$c->lastname}}</label> <input type="text" name="lastname" value="{{$c->lastname}}" hidden/>
                    <label> ไอดี::{{$c->id}}</label>      <input type="text" name="ID" value="{{$c->id}}" hidden/>
                  </div>  
                </div>   
              </div>  
                <div class ="form-group"></div> 
              
                
                    @foreach ($choice as $c)
                   <h3> {{$c->question}}  </h3>
                   <?php  $i++; ?>
                   <h4>  <input type="radio" name="question{{$c->id}}"  value="{{$c->answer1}}"    id="radio{{$c->id}}" required   />{{$c->choice1}} </h4> 
                   <h4> <input type="radio" name="question{{$c->id}}"  value="{{$c->answer2}}"  id="radio{{$c->id}}"  required  />{{$c->choice2}}</h4><br><br><br>
                 
              @endforeach    
           
              <div class="box-footer">
            
            <center>    {{ Form::submit('ส่งคำตอบ',['class'=> 'btn btn-primary'])}}     </center>
                {{Form::close()}}
       
   
        
       </div>
                
            @endif
            @empty
                        
            <div class="alert alert-warning">
                    <strong>หมายเหตุ!</strong> ในระบบไม่มีรายชื่อนี้กรุณาติดต่อเจ้าหน้าที่
                  </div>
                  {{ Html::link('disc','ยกเลิก',array('class ' => 'btn btn-danger')) }}
            @endforelse


            @if($j =='0' && $r >'0')
            <div class="alert alert-warning">
                    <strong>หมายเหตุ!</strong> ในระบบไม่มีรายชื่อนี้กรุณาติดต่อเจ้าหน้าที่
                  </div>
            <div class="box-footer">
                
          
           
          {{ Html::link('mbti','ย้อนกลับ',array('class ' => 'btn btn-danger')) }}
 
      
     </div>
            @endif
                </div>
            </div>
       
  
  </div> 













  

 

 
  @endsection