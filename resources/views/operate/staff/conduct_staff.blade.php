@extends('layouts.main')
@section('content')
  <div class="content-wrapper">

      <div class="content container-fluid">
      <div class="box box-info">
          <div class="box-header with-border">
            การทดลองงาน
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {{Form::open(['url'=>'conduct_employs','method'=>'POST'])}}
          <div class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>

                <div class="col-sm-7">
                    <a href="employee/create" class="btn btn-success" ><i class="fa fa-desktop">60วัน</i></a>
                </div>
              </div>
          
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>

                  <div class="col-sm-7">
                      <a href="employee/create" class="btn btn-success" ><i class="fa fa-desktop">90วัน</i></a>
                  </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            
              <button type="submit" class="btn btn-info pull-right">ตกลง</button>
              {{Form::close()}}
              <button type="submit" class="btn btn-default">ยกเลิก</button>
            </div>
          
            <!-- /.box-footer -->
          </div>
        </div>



    
  
  
  
  
      </div>
  </div>
    @endsection