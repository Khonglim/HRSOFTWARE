@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
        <div class="col-md-5">
    <div class="content container-fluid">
     
            <div class="box box-info">
                    <div class="box-header with-border">
                      การทดลองงานระดับปฏิบัติการ
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{Form::open(['url'=>'conduct_employs','method'=>'POST'])}}
                    <div class="form-horizontal">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ-สกุล</label>
        
                          <div class="col-sm-7">
                              <select id="country" name="employee" required  class="form-control">
                                  <option value=""  >--เลือกชื่อพนักงาน--</option>
                                  @foreach ($employee  as $e)
                                  <option value="{{$e->id}}"> {{$e->name }} {{$e->lastname }}</option>   
                                  @endforeach
                                  </select>
                          </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">ระดับ</label>
          
                            <div class="col-sm-7">
                                <select id="country" name="degree" required  class="form-control">
                                    <option value=""  >--ระดับ--</option>
                                    <option value= 1  >ระดับปฏิบัติการ</option>
                                    <option value= 0 >ระดับผู้บังคับบัญชา</option>
                                    </select>
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
     </div>
 
  @endsection