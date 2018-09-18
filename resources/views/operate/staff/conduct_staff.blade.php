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
               <?php  $degree =  $_POST["degree"] ?>
           @if($degree == '0')
           @foreach ($employee  as $e)
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '1')))
              {{Form::open(['url'=>'operate_employstaff','method'=>'POST' ])}}
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
                <div class="col-sm-7">
                 
                    <button type="submit" class="btn btn btn-success"><i class="fa  fa-pencil"></i>คลิก</button>
                </div>
              </div>
              {{Form::close()}}
              @else 
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา</label>
                  <div class="col-sm-7">
                      <div class="alert alert-success">
                          <i class="fa fa-check"></i> ประเมินแล้ว
                  </div>
                  </div>
                </div>

              @endif
            @endforeach
              @foreach ($employee  as $e)
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_conduct == '0')))
              {{Form::open(['url'=>'operate_employsup','method'=>'POST' ])}}
              @if($e->recheck_Oper_90 == '1')
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                  <div class="col-sm-7">
                      <button type="submit" class="btn btn btn-success"><i class="fa  fa-pencil"></i>คลิก</button>
                  </div>
                </div>
                {{Form::close()}}
                @else
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา</label>
                    <div class="col-sm-7">
                        <div class="alert alert-success">
                            <i class="fa fa-check"></i> ประเมินแล้ว
                    </div>
                    </div>
                  </div>
                @endif
                @else
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                        <div class="alert alert-danger">
                                <i class="fa fa-close"></i> ยังไม่สามารถประเมิน 90 วันได้
                        </div>
                    </div>
                  </div>
                @endif
                @endforeach
            
                @endif

 @if($degree == '1')
           @foreach ($employee  as $e)
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '1')))
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
                <div class="col-sm-7">
                    <a href="Operate_sup/create" class="btn btn-warning" ><i class="fa  fa-pencil"></i> คลิก</a>
                </div>
              </div>
              @else 
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา</label>
                  <div class="col-sm-7">
                      <div class="alert alert-success">
                          <i class="fa fa-check"></i> ประเมินแล้ว
                  </div>
                  </div>
                </div>

              @endif
            @endforeach
              @foreach ($employee  as $e)
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_conduct == '0')))

              @if($e->recheck_Oper_90 == '1')
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                  <div class="col-sm-7">
                      <a href="Operate_sup" class="btn btn-warning" ><i class="fa  fa-pencil"></i> คลิก</a>
                  </div>
                </div>
                @else
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา</label>
                    <div class="col-sm-7">
                        <div class="alert alert-success">
                            <i class="fa fa-check"></i> ประเมินแล้ว
                    </div>
                    </div>
                  </div>
                @endif
                @else
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                        <div class="alert alert-danger">
                                <i class="fa fa-close"></i> ยังไม่สามารถประเมิน 90 วันได้
                        </div>
                    </div>
                  </div>
                @endif
                @endforeach
            
                @endif
            
            
            
            
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
          <center>
              <a href="{{url('/home') }}" class="btn btn-default" >ยกเลิก</a> 
          </center>

            </div>
          
            <!-- /.box-footer -->
          </div>
        </div>



    
  
  
  
      </div>
      </div>
  </div>
    @endsection