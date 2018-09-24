@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="col-md-5">
      <div class="content container-fluid">
      <div class="box box-info">
          <div class="box-header with-border">
            การทดลองงาน
          </div>
         
       
          <div class="form-horizontal">
            <div class="box-body">
               <?php  $degree =  $_POST["degree"] ?>
               
           @if($degree == '0')
        
           @foreach ($employee  as $e)
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '0')))
              {{Form::open(['url'=>'operate_employstaff','method'=>'POST' ])}}
            <input type="hidden"  value="{{$e->name}}" name="name" >
            <input type="hidden"  value="{{$e->lastname}}" name="lastname" >
            <input type="hidden"  value="{{$e->id}}" name="id_2" >
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn btn-info"><i class="fa  fa-pencil"></i> คลิก</button>
                </div>
              </div>
              {{Form::close()}}
              @endif
            
            
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '1')))
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
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
                        @if(($e->id ==  $id =  $_POST["id"]) && $e->recheck_Oper_90 == '0')
                      
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                  <div class="col-sm-7">
                      <div class="alert alert-danger">
                              <i class="fa fa-close"></i> ยังไม่สามารถประเมิน 90 วันได้
                      </div>
                  </div>
                </div>
             
               @endif
               @if(($e->id ==  $id =  $_POST["id"]) && $e->recheck_Oper_90 == '1')
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                        <div class="alert alert-success">
                            <i class="fa fa-check"></i> ประเมินแล้ว
                    </div>
                    </div>
                  </div>
                @endif
                @endif

                
                @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_conduct == '1')))
                   
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                      @foreach ($operate_staff as $operate_staffs)
                      @if($operate_staffs->id_posinal ==  $id =  $_POST["id"])
                      <a href="{{'Operate_staff/'.$operate_staffs['id'].'/edit'}}" class="btn btn-info" ><i class="fa fa-pencil"></i> คลิก</a>
                      @endif
                      @endforeach
                  
                    </div>
                  </div>
                   @endif
                @endforeach
          
          
          
                @endif

      @if($degree == '1')

           @foreach ($employee  as $e)
              
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '0')))
           
              {{Form::open(['url'=>'operate_employsup','method'=>'POST' ])}}
              <input type="hidden"  value="{{$e->name}}" name="name" >
              <input type="hidden"  value="{{$e->lastname}}" name="lastname" >
              <input type="hidden"  value="{{$e->id}}" name="id_2" >
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
                <div class="col-sm-7"> 
                    <button type="submit" class="btn btn btn-warning"><i class="fa  fa-pencil"></i> คลิก</button>
                </div>
              </div>
              {{Form::close()}}
              @endif
              @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_Oper == '1')))
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 60 วัน</label>
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
              @if(($e->id ==  $id =  $_POST["id"]) && $e->recheck_Oper_90 == '0')
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                  <div class="col-sm-7">
                      <div class="alert alert-danger">
                              <i class="fa fa-close"></i> ยังไม่สามารถประเมิน 90 วันได้
                      </div>
                  </div>
                </div>
                @endif
                @if(($e->id ==  $id =  $_POST["id"]) && $e->recheck_Oper_90 == '1')
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                        <div class="alert alert-success">
                            <i class="fa fa-check"></i> ประเมินแล้ว
                    </div>
                    </div>
                  </div>
                @endif
                @endif
                @if((($e->id ==  $id =  $_POST["id"]) && ($e->recheck_conduct == '1')))
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ระยะเวลา 90 วัน</label>
                    <div class="col-sm-7">
                        @foreach ($operate_sup as $operate_sup)
                        @if($operate_sup->id_posinal ==  $id =  $_POST["id"])
                        <a href="{{'Operate_sup/'.$operate_sup['id'].'/edit'}}" class="btn btn-warning" ><i class="fa fa-pencil"> คลิก</i></a>
                        @endif
                        @endforeach
                       


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