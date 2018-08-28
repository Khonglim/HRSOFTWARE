@extends('layouts.main')
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
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="col-md-3">
      </div>
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> แบบประเมินบุคลิกภาพตามตัวบ่งชี้ของมายเออร์-บริกส์(MBTI) </h3>
                </div>
             
                  <div class="box-body">
                      @foreach ($testemp as $c)
                      <?php  $r++; ?>
                      @if(($c->name ==  $name =  $_POST["name"]) && ($c->lastname ==  $lastname =  $_POST["lastname"]))
                      <?php  $j++; ?>
                      <div id="topbar">
                          <h3><p id="showTime" data-minutes-left="180"></p></h3>
                          </div>
                          {{Form::open(['url'=>'endtest','id'=>'test1','method'=>'POST', 'onSubmit'=> "JavaScript:return fncSubmit();"])}}
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
                     <h4>  <input type="radio" name="question{{$c->id}}"  value="{{$c->answer1}}"    id="radio{{$c->id}}" required="required"   />{{$c->choice1}} </h4> 
                     <h4> <input type="radio" name="question{{$c->id}}"  value="{{$c->answer2}}"  id="radio{{$c->id}}"  required="required"  />{{$c->choice2}}</h4><br><br><br>
                   
                @endforeach    
             
                <div class="box-footer">
              
                  {{ Form::submit('ส่งคำตอบ',['class'=> 'btn btn-primary'])}}
                  {{Form::close()}}
         
     
          
         </div>
                  
              @endif
              @endforeach


              @if($j =='0' && $r >'0')
              <h3> คุณไม่สามารถทำแบบทดสอบได้กรุณาตรวจสอบรายชื่อ-นามสกุล! </h3>
              <div class="box-footer">
                  
            
             
            {{ Html::link('mbti','ย้อนกลับ',array('class ' => 'btn btn-danger')) }}
   
        
       </div>
              @endif
              
                  </div>
                  <!-- /.box-body -->

            
                  <!-- /.box-footer -->
               
                 
              </div>
            </div>
    






     
      
</div>
  </div>


  <script type="text/javascript">

    $('input[name=question1]').change(function(){




     
    
     });
    </script>

 
  @endsection