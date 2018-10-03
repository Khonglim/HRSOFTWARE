@extends('layouts.main')
@section('content')
 <style type="text/css">
    th{
      font-size: 18px;
      background-color: #ffbcbc;
        color: black;
        text-align: center;
    }
    td{
      font-size: 18px;
      text-align: center;
    }
    p{
      color: red;
    }
    div.box-header{
      text-align: center;
      font-size:35px;


    }

  </style>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-10">
         
            {{Form::open(['url'=>'management','enctype'=>'multipart/form-data'])}}
  
          <br><br>
        <div class="box">
          <div class="box-header" style="text-align: center;">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" >
            <div class="row">
              <div class="col-md-12">
             <table class="table table-bordered table-striped table-responsive">
             <thead>
                <tr>
                 <th>
                  แบบประเมิน
                 </th>
                 <td>
                   <select name="by_form" class="form-control"> 
                  @foreach($formfor as $form)
                  <option value={{$form->id}} >{{$form->form}}</option>
                  @endforeach
                </select>
                </td>
               </tr>
               <tr>
                 <th>
                   ชื่อผู้ถูกประเมิน
                 </th>
                 <th>
                   รายชื่อผู้ประเมิน
                 </th>

               </tr>
                  
             </thead>

             <tbody>
              
             <tr>
               <td style="width: 50% ; height: 70px">
                <select name="by_employee" class="form-control"> 
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select>
               </td>
               
               <td>
                 <select name="is_employee1" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee2" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select><br>
                <select name="is_employee3" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select><br>
                <select name="is_employee4" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select><br>
                <select name="is_employee5" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee6" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee7" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee8" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee9" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> <br>
                <select name="is_employee10" class="form-control">
                  @foreach($ngg_employee as $ngg_emp)
                  <option value={{$ngg_emp->nem_id}} >{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</option>
                  @endforeach
                </select> 
               </td>
             </tr>
             


             </tbody>

             </table>

              </div>
            </div>
        </div>
      </div>
      {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
                                      {{ Form::close()}} 
    </div>
  </section>
</div>
       
 
@endsection