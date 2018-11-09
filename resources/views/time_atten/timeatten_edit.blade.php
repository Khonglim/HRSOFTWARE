@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="content container">
    <div class="row">
      <div class="col-md-12">
          {{Form::open(['route'=>['timeattendant.update',$idd],'method'=>'PUT','files' => true])}}
          @csrf
          <br><br>
            @foreach($timeattendant as $timeatten)
                  <?php  $id = $timeatten->net_id;  
                         $employee =  $timeatten->net_employee_id;
                         $sick_leave = $timeatten->net_sick_leave;  
                         $personal_leave = $timeatten->net_personal_leave; 
                         $lated = $timeatten->net_late; 
                         $miss_work=$timeatten->net_miss_work; 
                         $annual_leave= $timeatten->net_annual_leave;
                  ?>
                 @endforeach

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลเวลาพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             
            <div class="row">
              <div class="col-md-8">
                <label>ชื่อพนักงาน::</label>
                <select name="employee" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                    @if($ngg_emp->nem_id ==  $employee)

                      <option value={{$ngg_emp->nem_id}} selected="true" >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>

                    @else
                       <option value={{$ngg_emp->nem_id}}>{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-4">
                <label>ลาป่วย::</label>
                  <input type="number" value={{$sick_leave}} name="sick_leave" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>ลากิจ::</label>
                  <input type="number" value={{$personal_leave}} name="personal_leave" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>มาสาย::</label>
                  <input type="number" value={{$lated}} name="lated" class=" form-control" required="true">
              </div>
            </div>
<br>
            <div class="row">
              <div class="col-md-4">
                <label>ขาดงาน::</label>
                  <input type="number" value={{$miss_work}} name="miss_work" class=" form-control" required="true">
              </div>
              <div class="col-md-4">
                <label>ลาพักร้อน::</label>
                  <input type="number" value={{$annual_leave}} name="annual_leave" class=" form-control" required="true">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        {{ Html::link('timeattendant','Back',array('class ' => 'btn btn-primary')) }}
        {{ Form::submit('Seve',['class'=> 'btn btn-success'])}}
        {{Form::close()}}
    </div>
   
  </div>
</div>
    

@endsection