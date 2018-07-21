
@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading"> ตำแหน่ง</div>
          <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                       <th>ID</th>
                       <th>ชื่อตำแหน่ง</th>
                       <th>ID เริ่มต้นแผนก</th>
                       <th>หมายเหตุ</th>
                       <th>เพิ่มเติ่ม</th>
                    </tr>
                  </thead>
                  <tbody>
                          @forelse($position as $l)
                             @if($l['enable']==1)
                            <tr>
                          <td> {{$l['id']}} </td>
                          <td> {{$l['position_name']}} </td>
                          <td> {{$l['Department_ID']}} </td>
                          <td> {{$l['remark']}} </td>
                          <td>  
                              {{ Form::open(['route' => ['position.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                              <input type="hidden" name="_method" value="delete" />
                              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#position{{$l['id']}}">แก้ไข</button>
                              {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                              {{ Form::close() }}                      
      <div id="position{{$l['id']}}" class="modal fade" role="dialog">
         <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">แก้ไข</h4>
                </div>
                <div class="modal-body">
            {{Form::open(['route'=>['position.update',$l['id']],'method'=>'PUT','files' => true,'id'=>'newModalFormP'])}}
            <div class="row">
                <div class="col-md-2">
                  {{Form::label('position_name','ชื่อตำแหน่ง')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                        {{Form::text('position_name',$l['position_name'],['class'=>'form-control','required','id'=>'position_name'])}}
                      
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('Department_ID','ID ตำแหน่ง')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group ">
                          {{Form::text('Department_ID',$l['Department_ID'],['class'=>'form-control','required','id'=>'Department_ID'])}}
                        <span class="text-danger"></span>
                        </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('remark','หมายเหตุ')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group ">
                          {{Form::text('remark',$l['remark'],['class'=>'form-control'])}}
                        <span class="text-danger"></span>
                        </div>
                    </div>
                  </div>  
                </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
            </div>
            {{ Form::close() }}  
                </div>
            </div>
                </div>
            
            </td>
          </tr>
              @endif
           @empty
           <tr>
            <td colspan="6" > No data !!</td>
        </tr>
      @endforelse
        </tbody>
            </table>  
              </div>
            
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-5">
                      <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เพิ่ม</button>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เพิ่มตำแหน่ง</h4>
      </div>
      <div class="modal-body">
              {{Form::open(['url'=>'position','files' => true,'enctype'=>'multipart/form-data','id'=>'addFormP'])}}
            <div class="row">
              <div class="col-md-2">
                {{Form::label('position_name','ตำแหน่ง')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group ">
                      {{Form::text('position_name','',['class'=>'form-control','id'=>'position_name'])}}
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('Department_ID','ID แผนกเริ่มต้น')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                        {{Form::text('Department_ID','',['class'=>'form-control','id'=>'Department_ID'])}}
                      </div>
                  </div>
                </div>
             <div class="row">
                <div class="col-md-2">
                  {{Form::label('Remark','หมายเหตุ')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                        {{Form::text('Remark','',['class'=>'form-control'])}}
                      <span class="text-danger"></span>
                      </div>
                  </div>
               
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
          </div>
          {{ Form::close() }}
      </div>
    </div>
  </div>
    </div>
  </div>      
        </footer>
              <ul class="pagination pagination-sm no-margin pull-right">
      <li>
     {{ $position->links() }}
        </li>

        </ul>
      </div>
      </div>
    </div>
  </div>
  @endsection