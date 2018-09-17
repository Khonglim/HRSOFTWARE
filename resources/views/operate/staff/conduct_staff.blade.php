@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
      <div class="col-md-5">
      <div class="content container-fluid">
      <div class="box box-info">
          <div class="box-header with-border">
            การทดลองงาน
          </div>
          <!-- /.box-header -->
          <!-- form start -->
       
          <div class="form-horizontal">
            <div class="box-body">

               <?php  $name =  $_POST["employee"] ?>
               <?php  $degree =  $_POST["degree"] ?>
           @if($degree == '1')
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>

                <div class="col-sm-7">
                    <a href="Operate_staff" class="btn btn-success" ><i class="fa fa-eye"></i> 60 วัน</a>
                </div>
              </div>
          
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>

                  <div class="col-sm-7">
                      <a href="Operate_staff" class="btn btn-success" ><i class="fa fa-eye"></i> 90 วัน</a>
                  </div>
                </div>

                @endif
            
            
                @if($degree == '0')
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>
                 
                  <div class="col-sm-7">
                      <a href="employee/create" class="btn btn btn-warning" ><i class="fa fa-eye"></i> 60วัน</a>
                  </div>
                </div>
            
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ระยะเวลา</label>
  
                    <div class="col-sm-7">
                        <a href="employee/create" class="btn btn-warning" ><i class="fa fa-eye"></i> 90วัน</a>
                    </div>
                  </div>
  
                  @endif
            
            
            
            
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
          <center>
              <a href="employee/create" class="btn btn-default" >ยกเลิก</a> 
          </center>

            </div>
          
            <!-- /.box-footer -->
          </div>
        </div>



    
  
  
  
      </div>
      </div>
  </div>
    @endsection