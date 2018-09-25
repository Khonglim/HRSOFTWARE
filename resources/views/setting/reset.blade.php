@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
          รีเซ็ตการประเมินทดลองงาน
          </button>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">คืนค่าการประเมิน</h4>
                </div>
                <div class="modal-body">
                    {{Form::open(['url'=>'reset'])}}
                   
                       
      
                        <div class="col-md-5">
                            <select id="country" name="id" required  class="form-control">
                                <option value=""  >--เลือกชื่อพนักงาน--</option>
                                @foreach ($employee  as $e)
                                <option value="{{$e->id}}"> {{$e->name }} {{$e->lastname }}</option>   
                                @endforeach
                                </select>
                        </div>
                     
                </div>
                <div class="modal-footer">
                 
                  <button type="summit" class="btn btn-primary">คืนค่า</button>
                  {{Form::close()}}
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
  

</div>
  </div>
 
  @endsection