@extends('layouts.main')
@section('content')
<style>
body {

  font-size: 16px;
}
</style>
<?php $c=1; $x=1; $h=0; $k=1; ?>
<?php $resultArray = array(); ?>
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
                    <?php  $col=4; $i=0;?>   
                  @foreach($_POST as $choice => $answer) 
                      @if($choice != '_token')
                             @if($i==0) 
                                  <?php echo "<tr align=center>"; ?>
                               @endif
                         <?php $i++; ?>
                                     @if($i <=  $col) 
                                             <td>ข้อ{{$choice}} คะแนน  {{$answer}} </td>   
                                    @endif
                                           @if($i==$col)
                                                  <?php $i=0; ?>
                                                   <?php echo "</tr>"; ?>
                                            @endif
                       @endif

                
                     @endforeach
                       
                        
                     
                     
                     
                       
                    </tbody>
                  
                  </table>



                  
                  @foreach($_POST as $choice => $answer)
               
                  @if($choice != '_token' )
                  
                
                 
	
                    <?php array_push($resultArray,$answer); ?>
                    
               

              

  @endif 

  @endforeach
        @foreach ($resultArray as $item)
        
      
        @endforeach    
     



                  
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