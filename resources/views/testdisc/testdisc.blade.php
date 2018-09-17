
   @extends('layouts.test')
   @section('content')
   <style>
   body {
    
    font-size: 16px;
}

</style>
   <?php  $i=1;     $r=1; 
                 $l=45;  
          $y=1;   $w=30; 
          $h=1;    $t=15; 
          $q=1; 
   
   
   $aa=0;     
   $tt=15;
   $ww=30;
   $ll=45;
   
   $a=0;   $b=15; $c=30; $d=45;  

  
   
   
   $r=0; $j=0; $k=0; $p=0; $k=0; ?>



<div class="container">
        <br>
        
            <center>
                <div class="panel panel-success" style="width:100%">
                    <div class="panel-heading">การทดสอบบุคลิกภาพ</div>
                    <div class="panel-body">

                            {{Form::open(['url'=>'ansdisc','method'=>'POST','id'=>'testdisc' , 'onSubmit'=>'JavaScript:return fncSubmit();'])}}
                            {{ csrf_field() }}
                            @forelse ($testemp as $c)
                            <?php  $r++; ?>
                            @if((($c->name ==  $name =  $_POST["name"]) && ($c->lastname ==  $lastname =  $_POST["lastname"] )))
                            <?php  $j++; ?>
                            <div  class="row">
                                <div class ="form-group">
                                        <div class="col-md-2">
                                                <div class="alert alert-success">
                                                       <p>  <strong id="showTimeDisc" data-minutes-left="5"></strong></p>
                                                       <p>   <strong id="showTimeDisc2" data-minutes-left="0.5"></strong></p>
                                      </div> 
                                    </div>  
                                    <div class="col-md-6
                                    ">
                                        <div class="alert alert-danger">
                                                <strong>หมายเหตุ!</strong> ทำข้อสอบทางด้านซ้ายไปขวา &rarr; <br>
                                                <strong>  เมื่อผู้ทดสอบให้คะแนนครบ 4 ตัวเลือกแล้วจะไม่สามารถเปลี่ยนคะแนนได้  </strong>
                                              </div>
                                            </div> 
                                              <div class="col-md-4">
                                              <div class="alert alert-info">
                                                    <strong>ผู้ทำข้อสอบ::</strong> {{$name =  $_POST["name"]}} {{$lastname =  $_POST["lastname"]}}
                                                    <input type="text" name="name" value="{{$name =$_POST['name']}}" hidden/>
                                                    <input type="text" name="lastname" value="{{$lastname= $_POST['lastname']}}" hidden/>
                                                    <input type="text" name="id_personal" value="{{$c->id}}" hidden/>
                                                  
                                                  </div>
                                                </div> 
                                            </div>
                                        </div>
    
                                        <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th style="text-align:center" >D</th>
                                    <th style="text-align:center">I</th>
                                    <th style="text-align:center">S</th>
                                    <th style="text-align:center" >C</th>
                                  </tr>
                                </thead>
                                <tbody>
                                        @foreach ( $disc as $dis )
                                         
                                  <tr>
                      
                                      <td >
                                      
                                      <select name="chioe{{$a++}}" id="chioe{{$aa++}}" class="uniqueSelection{{$i++}}"  required>
                                              
                                                <option value=1>1</option>
                                                <option value=2>2</option>
                                                <option value=3>3</option>
                                                <option value=4>4</option>
                                              </select>&emsp;{{$dis->choice1}}
                                      </td>
                                       <td>
                           
                                             
                                    <select name="chioe{{$t++}}"  id="chioe{{$tt++}}"  class="uniqueSelection{{$y++}}" required>
                                          
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                          </select>&emsp;{{$dis->choice2}}
                                          
                                       </td>
                                       <td>
                                        <select name="chioe{{$w++}}"  id="chioe{{$ww++}}"  class="uniqueSelection{{$h++}}" required>
                                          
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                          </select>&emsp;{{$dis->choice3}}
                                       </td>
                                       <td>
                                          
                                        <select name="chioe{{$l++}}" id="chioe{{$ll++}}"   class="uniqueSelection{{$q++}}" required>
                                          
                                            <option value=1>1</option>
                                            <option value=2>2</option>
                                            <option value=3>3</option>
                                            <option value=4>4</option>
                                          </select>&emsp;{{$dis->choice4}}
                                        </td>
                                </tr>
                              
                                @endforeach
                              </tbody>
                            </table>
    
                            <div class="box-footer">
    
                               
                                       {{ Form::submit('ส่งคำตอบ',['class'=> 'btn btn-primary'])}}
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
             <?php  $r--;   $j--; ?>
             <div class="box-footer">
    
                {{ Html::link('disc','ยกเลิก',array('class ' => 'btn btn-danger')) }}
                      
                 
                     
                         
                            
              </div>
                @endif           
                    </div>
                </div>
             
            </center>
          </div>
   <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">

jQuery(function($) {
    var backups = {};
    $(".uniqueSelection1").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection1").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});





  </script>









<script type="text/javascript">



jQuery(function($) {
    var backups = {};
    $(".uniqueSelection2").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection2").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});


  </script>

<script type="text/javascript">


jQuery(function($) {
    var backups = {};
    $(".uniqueSelection3").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection3").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

	
  </script>
<script type="text/javascript">

jQuery(function($) {
    var backups = {};
    $(".uniqueSelection4").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection4").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});




  </script>
    <script type="text/javascript">
 

jQuery(function($) {
    var backups = {};
    $(".uniqueSelection5").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection5").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});







      </script>
    <script type="text/javascript">
    

        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection6").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection6").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
  
        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection7").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection7").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
    

        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection8").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection8").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
   
        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection9").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection9").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
  
        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection10").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection10").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
  
        
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection11").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection11").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
      <script type="text/javascript">
     
jQuery(function($) {
    var backups = {};
    $(".uniqueSelection12").change(function() {
        var v = $(this).val();
        var f = false;
        $(".uniqueSelection12").not(this).each(function() {
            if($(this).val() == v) {
                f = true;
                return;                
            }
        });
        if(f) {
            $(this).val(backups[$(this).attr("id")]);
            alert("คุณไม่สามารถเลือกคะแนนซ้ำได้!!");
        }
        else {
            backups[$(this).attr("id")] = v;
        }
    }).val(null);
});

      </script>
   @endsection