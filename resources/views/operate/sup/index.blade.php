@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
     
            @extends('layouts.main')
            @section('content')
              <div class="content-wrapper">
                    <div class="col-md-5">
                <div class="content container-fluid">
                 
                        <div class="box box-info">
                                <div class="box-header with-border">
                                  การทดลองงานระดับบังคับบัญชา
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="form-horizontal">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">ชื่อ-สกุล</label>
                    
                                      <div class="col-sm-7">
                                        <input type="text" class="form-control" id="text" >
                                      </div>
                                    </div>
                                
            
                                  </div>
                                  <!-- /.box-body -->
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-default">ยกเลิก</button>
                                    <button type="submit" class="btn btn-info pull-right">ตกลง</button>
                                  </div>
                                  <!-- /.box-footer -->
                                </div>
                              </div>
                            </div>
                      </div>
                 </div>
             
              @endsection

</div>
  </div>
 
  @endsection