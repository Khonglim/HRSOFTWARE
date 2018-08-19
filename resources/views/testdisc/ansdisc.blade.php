@extends('layouts.main')
@section('content')
<style>
body {

  font-size: 16px;
}
</style>
<?php $x=1; $h=0;  $d=0;  $i=0;  $s=0;   $c=0; ?>
<?php $resultArray = array(); ?>
@foreach($_POST as $choice => $answer)             
@if($choice != '_token' )
  <?php array_push($resultArray,$answer); ?>
@endif 

@endforeach
@for ($j =0 ; $j <=44; $j+=4)
<?php $d+=$resultArray[$j] ?> 
@endfor
{{$d}}
@for ($k=1 ; $k <=45; $k+=4)
<?php $i+=$resultArray[$k] ?> 
@endfor
{{$i}}
@for ($l=2 ; $l <=46; $l+=4)
<?php $s+=$resultArray[$l] ?> 
@endfor
{{$s}}
@for ($m=3 ; $m <=47; $m+=4)
<?php $c+=$resultArray[$m] ?> 
@endfor
{{$c}}

<div class="content-wrapper">
        <div class="content container-fluid">
<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">รายงานผลการทดสอบ</div>
              <div class="box-body">
                  {{Form::open(['url'=>'disc',])}}
                    <h3>คะแนนที่คุณเลือก:</h3>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="text-align:center">D</th>
                        <th style="text-align:center">I</th>
                        <th style="text-align:center">S</th>
                        <th style="text-align:center">C</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    <?php  $col=4; $u=0;?>   
                  @foreach($_POST as $choice => $answer) 
                      @if($choice != '_token')
                             @if($u==0) 
                                  <?php echo "<tr align=center>"; ?>
                               @endif
                         <?php $u++; ?>
                                     @if($i <=  $col) 
                                             <td>ข้อ{{$x++}}:: {{$answer}}  คะแนน  </td>   
                                    @endif
                                           @if($u==$col)
                                                  <?php $u=0; ?>
                                                   <?php echo "</tr>"; ?>
                                            @endif
                       @endif

                
                     @endforeach
                       
                   <tr>
                     <td align=center>
                      รวมคะแนน "D" {{$d}} คะแนน
                     </td>
                     <td align=center>
                        รวมคะแนน "I" {{$i}} คะแนน
                     </td>
                     <td align=center>
                        รวมคะแนน "S" {{$s}} คะแนน
                     </td>
                     <td align=center>
                        รวมคะแนน "C" {{$c}} คะแนน
                     </td>
                   </tr>
                     
                     
                       
                    </tbody>
                  
                  </table>


                 
                  
                 


 


                  
              <div class="box-footer">
                  {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
                  {{Form::close()}}
              </div>
            </div>
          </div>
    </div>
</div>
</div>
@endsection