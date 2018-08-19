
   @extends('layouts.main')
   @section('content')
   <style>
   body {
    
    font-size: 15px;
}

</style>
   <?php  $i=1;     $r=1; 
                  $l=45;  
          $y=1;   $w=30; 
          $h=1;    $t=15; 
          $q=1; 
   
   
   $a=0; $b=15; $c=30; $d=45; ?>
   <div class="content-wrapper">
        <div class="content container-fluid">
          
        <div class="col-md-12">
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
      
                      <td>
                      
                        <select name="chioe{{$r++}}"  class="uniqueSelection{{$i++}}">
                                <option value=0>เลือก</option>
                                <option value= 1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                              </select>{{$dis->choice1}}
                      </td>
                       <td>
           
                             
                    <select name="chioe{{$t++}}" class="uniqueSelection{{$y++}}">
                            <option value=0>เลือก</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                          </select>{{$dis->choice2}}
                          
                       </td>
                       <td>
                        <select name="chioe{{$w++}}"  class="uniqueSelection{{$h++}}">
                            <option value=0>เลือก</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                          </select>{{$dis->choice3}}
                       </td>
                       <td>
                          
                        <select name="chioe{{$l++}}"  class="uniqueSelection{{$q++}}">
                            <option value=0>เลือก</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                          </select>{{$dis->choice4}}
                        </td>

      
               
                

                </tr>
                @endforeach
              </tbody>
            </table>

             
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


   <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$(".uniqueSelection1").change(function(){
			var indx = $(".uniqueSelection1").index(this);
			var currentVal = $("option:selected",this).val();
			
			$(".uniqueSelection1").each(function(index,val){
				if(indx != index){
					$(this).find("option[value='"+currentVal+"']").hide();
				}
			});
		});
        
	});
  </script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".uniqueSelection2").change(function(){
			var indx = $(".uniqueSelection2").index(this);
			var currentVal = $("option:selected",this).val();
			
			$(".uniqueSelection2").each(function(index,val){
				if(indx != index){
					$(this).find("option[value='"+currentVal+"']").hide();
				}
			});
		});
	});
  </script>

<script type="text/javascript">
	$(document).ready(function() {
		

		$(".uniqueSelection3").change(function(){
			var indx = $(".uniqueSelection3").index(this);
			var currentVal = $("option:selected",this).val();
			
			$(".uniqueSelection3").each(function(index,val){
				if(indx != index){
					$(this).find("option[value='"+currentVal+"']").hide();
				}
			});
		});
	});
  </script>
<script type="text/javascript">
	$(document).ready(function() {
	

		$(".uniqueSelection4").change(function(){
			var indx = $(".uniqueSelection4").index(this);
			var currentVal = $("option:selected",this).val();
			
			$(".uniqueSelection4").each(function(index,val){
				if(indx != index){
					$(this).find("option[value='"+currentVal+"']").hide();
				}
			});
		});
	});
  </script>
    <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection5").change(function(){
                var indx = $(".uniqueSelection5").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection5").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
    <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection6").change(function(){
                var indx = $(".uniqueSelection6").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection6").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection7").change(function(){
                var indx = $(".uniqueSelection7").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection7").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection8").change(function(){
                var indx = $(".uniqueSelection8").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection8").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection9").change(function(){
                var indx = $(".uniqueSelection9").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection9").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
          
    
            $(".uniqueSelection10").change(function(){
                var indx = $(".uniqueSelection10").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection10").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection11").change(function(){
                var indx = $(".uniqueSelection11").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection11").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
           
    
            $(".uniqueSelection12").change(function(){
                var indx = $(".uniqueSelection12").index(this);
                var currentVal = $("option:selected",this).val();
                
                $(".uniqueSelection12").each(function(index,val){
                    if(indx != index){
                        $(this).find("option[value='"+currentVal+"']").hide();
                    }
                });
            });
        });
      </script>
   @endsection