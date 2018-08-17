
   @extends('layouts.main')
   @section('content')
   <div class="content-wrapper">
     <section class="content">
   <script type="text/javascript">
   $(document).ready(function(){
     $("select.nodup").change(function(){
         var curSelection = $(this).attr("for")-1,
             curOption = $("option:selected",this).val();
         $("select.nodup").each(function(index,value){
             if(curSelection != index){
                 $("option[value='"+curOption+"']",this)
                 .attr("disabled","disabled");
             }
         });
     });
   });
   </script>
   <select class='nodup' for='1'>
     <option>please select</option>
     <option value='AAAAA'>AAAAA</option>
     <option value='BBBBB'>BBBBB</option>
     <option value='CCCCC'>CCCCC</option>
     <option value='DDDDD'>DDDDD</option>
   </select>  <br /> 
   <select class='nodup' for='2'>
     <option>please select</option>
     <option value='AAAAA'>AAAAA</option>
     <option value='BBBBB'>BBBBB</option>
     <option value='CCCCC'>CCCCC</option>
     <option value='DDDDD'>DDDDD</option>
   </select>  <br /> 
   <select class='nodup' for='3'>
     <option>please select</option>
     <option value='AAAAA'>AAAAA</option>
     <option value='BBBBB'>BBBBB</option>
     <option value='CCCCC'>CCCCC</option>
     <option value='DDDDD'>DDDDD</option>
   </select>  
   <br /> 
   <select class='nodup' for='4'>
     <option>please select</option>
     <option value='AAAAA'>AAAAA</option>
     <option value='BBBBB'>BBBBB</option>
     <option value='CCCCC'>CCCCC</option>
     <option value='DDDDD'>DDDDD</option>
   </select>  
   
   <br/> 


   {{Form::open(['url'=>'ansdisc','method'=>'POST'])}}





     </section>
   </div>
   @endsection