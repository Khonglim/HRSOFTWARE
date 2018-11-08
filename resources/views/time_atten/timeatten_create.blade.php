@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="content container">
    <div class="row">
      <div class="col-md-12">
            {{Form::open(['url'=>'timeattendant'])}}
            @csrf
          <br><br>
        <div class="box">
          <div class="box-header" style="text-align: center;">
            <h3 class="box-title">ข้อมูลเวลาพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" >
            <div class="row">
              <div class="col-md-6">
                <label>ชื่อพนักงาน::</label>
                <select name="employee"  class="js-example-basic-single  form-control">
                  @foreach($ngg_employee as $ngg_emp)
                    @forelse($timeattendant as $timeatten)
                      @if($timeatten->net_employee_id==$ngg_emp->nem_id)
                        <option value={{$ngg_emp->nem_id}} disabled="true">{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                      @else
                      <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                      @endif
                    @empty
                    <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                    @endforelse
                  @endforeach
                </select>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-4">
                <label>ลาป่วย::</label>
                  <input type="number" name="sick_leave" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>ลากิจ::</label>
                  <input type="number" name="personal_leave" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>มาสาย::</label>
                  <input type="number" name="lated" class=" form-control" required="true">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-4">
                <label>ขาดงาน::</label>
                  <input type="number" name="miss_work" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>ลาพักร้อน::</label>
                  <input type="number" name="annual_leave" class=" form-control" required="true">
              </div>
              
            </div>
        </div>
      </div>
       {{ Html::link('timeattendant','Back',array('class ' => 'btn btn-primary')) }}
      {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
                                      {{ Form::close()}} 
    </div>
  </div>
</div>
@endsection