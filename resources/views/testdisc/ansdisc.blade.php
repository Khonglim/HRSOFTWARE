@extends('layouts.main')
@section('content')
<style>
body {
  font-family: "THSarabunNew";
  font-size: 16px;
}
</style>
<?php $c=0; $x=1; $h=0; ?>
<div class="content-wrapper">
        <div class="content container-fluid">
<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">รายงานผลการทดสอบ</div>
              <div class="box-body">
                  {{Form::open(['url'=>'disc',])}}
                    <h3>คะแนนที่คุณเลือก:</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                         @foreach($_POST as $choice => $answer)
                        
                    @if($choice != '_token')
                    <?php    $c++; ?>
                     ข้อ{{$x++}} คะแนน  {{$answer}} &emsp; 
                   
                      @if($c == '4')
                      <br>
                      <?php    $c='0'; ?>
                        @endif
                      @endif
                    @endforeach
                  </li>
                  </ul>  
                
                  
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