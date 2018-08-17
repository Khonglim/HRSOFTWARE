
   @extends('layouts.main')
   @section('content')
   <style>
   body {
    font-family: "THSarabunNew";
    font-size: 15px;
}

</style>
   <?php  $i=1;  $w=1;   $h=1;   $l=1;  $q=1; $a=1; $b=15; $c=30; $d=45; ?>
   <div class="content-wrapper">
        <div class="content container-fluid">
          
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> แบบทดสอบบุคลิกภาพ DISC </h3>
                </div>
             
                  <div class="box-body">
            {{Form::open(['url'=>'ansdisc','method'=>'POST'])}}

            <table class="table table-bordered">
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
                    <td > <select class='nodup{{$w++}}' for='{{$i++}}' name="choice{{$a++}}"  >
                            <option>เลือก</option>
                              <option   value='{{$dis->answer1}}'>1</option>
                            <option  value='{{$dis->answer2}}'>2</option>
                            <option  value='{{$dis->answer3}}'>3</option>
                            <option  value='{{$dis->answer4}}'>4</option>
                          </select> {{$dis->choice1}}
                        
                        </td>
                    <td>  <select class='nodup{{$h++}}' for='{{$i++}}' name="choice{{$b++}}"  >
                            <option>เลือก</option>
                            <option   value='{{$dis->answer1}}'>1</option>
                            <option   value='{{$dis->answer2}}'>2</option>
                            <option   value='{{$dis->answer3}}'>3</option>
                            <option   value='{{$dis->answer4}}'>4</option>
                          </select>    {{$dis->choice2}}
                        
                        
                        </td>
                    <td><select class='nodup{{$l++}}' for='{{$i++}}' name="choice{{$c++}}"  >
                            <option>เลือก</option>
                            <option   value='{{$dis->answer1}}'>1</option>
                            <option  value='{{$dis->answer2}}'>2</option>
                            <option  value='{{$dis->answer3}}'>3</option>
                            <option  value='{{$dis->answer4}}'>4</option>
                          </select>      {{$dis->choice3}}</td>
                          
                    <td> <select class='nodup{{$q++}}' for='{{$i++}}' name="choice{{$d++}}"  >
                            <option>เลือก</option>
                            <option   value='{{$dis->answer1}}'>1</option>
                            <option  value='{{$dis->answer2}}'>2</option>
                            <option   value='{{$dis->answer3}}'>3</option>
                            <option  value='{{$dis->answer4}}'>4</option>
                          </select>  {{$dis->choice4}}
                          </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>


                <div class="form-group">
               
        
         
               
                     
                @if(($a=='12') &&($b=='26')&& ($c=='41')&& ($d='56'))
                <?php 
                $a=1;
                $b=15;
                $c=30;
                $d=45;
                ?>
        @endif
          
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                   



                    {{ Form::submit('ส่งคำตอบ',['class'=> 'btn btn-primary'])}}
                                            {{Form::close()}}
                
                  </div>
                  <!-- /.box-footer -->
               
                 
              </div>
            </div>
        </div>
    </div>
   </div>


   <script type="text/javascript">
    $(document).ready(function(){
      $("select.nodup1").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup1").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

    $(document).ready(function(){
      $("select.nodup2").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup2").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

$(document).ready(function(){
      $("select.nodup3").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup3").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });


$(document).ready(function(){
      $("select.nodup4").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup4").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });




$(document).ready(function(){
      $("select.nodup5").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup5").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });



$(document).ready(function(){
      $("select.nodup6").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup6").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });


$(document).ready(function(){
      $("select.nodup7").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup7").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

$(document).ready(function(){
      $("select.nodup8").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup8").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

$(document).ready(function(){
      $("select.nodup9").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup9").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

    $(document).ready(function(){
      $("select.nodup10").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup10").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

   $(document).ready(function(){
      $("select.nodup11").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup11").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

   $(document).ready(function(){
      $("select.nodup12").change(function(){
          var curSelection = $(this).attr("for")-1,
              curOption = $("option:selected",this).val();
          $("select.nodup12").each(function(index,value){
              if(curSelection != index){
                  $("option[value='"+curOption+"']",this)
                  .attr("disabled","disabled");
              }
          });
      });
    });

    </script>
















  

    
    
   @endsection