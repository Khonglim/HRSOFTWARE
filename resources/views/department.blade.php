@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">  
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
           แผนก
           </div>
          <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                     <th>ID</th>
                     <th>ชื่อแผนก</th>
                     <th>ID เริ่มต้นแผนก</th>
                     <th>ID บริษัท</th>
                     <th>หมายเหตุ</th>
                     <th>เพิ่มเติ่ม</th>
                  </tr>
                </thead>
                <tbody>
                        @forelse($department as $l)
                           @if($l['enable']==1)
                          <tr>
                        <td> {{$l['id']}} </td>
                        <td> {{$l['department_name']}} </td>
                        <td> {{$l['department_head_id']}} </td>
                        <td> {{$l['company_id']}} </td>
                        <td> {{$l['remark']}} </td>
                        <td>  
                            {{ Form::open(['route' => ['department.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                            <input type="hidden" name="_method" value="delete" />
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#department{{$l['id']}}">แก้ไข</button>
                            {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                            {{ Form::close() }}   
                    
    <div id="department{{$l['id']}}" class="modal fade" role="dialog">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">แก้ไข</h4>
              </div>
              <div class="modal-body">
          {{Form::open(['route'=>['department.update',$l['id']],'method'=>'PUT','files' => true,'id' => 'newModalFormD'])}}
          <div class="row">
              <div class="col-md-2">
                {{Form::label('department_name','ชื่อแผนก')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group ">
                      {{Form::text('department_name',$l['department_name'],['class'=>'form-control','required','id' => 'department_name'])}}
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('department_head_id','ID เริ่มต้นแผนก')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                          <select name="department_head_id" id="department_head_id">
                       @if($l['department_head_id'] == 0) 
                             <option value="" selected="true" disabled="true" ></option>
                          @forelse($department as $l)
                             <option value={{$l['id']}} >{{$l['department_name']}}</option>
                          @empty
                          @endforelse
                       @else
                             <option value="" selected="true" disabled="true"  >{{$l['department_name']}}</option>
                          @forelse($department as $l)
                             <option value={{$l['id']}} >{{$l['department_name']}}</option>
                          @empty
                          @endforelse
                       @endif
                      </select>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('company_id','ID บริษัท')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group ">
                         <select name="company_id" id="company_id">
                          
                              <option value="" selected="true" disabled="true">{{$l['company_id']}}</option>
                          @forelse($company as $l)
                              <option value={{$l['id']}}>{{$l['company_Name']}}</option>
                              @empty
                          @endforelse
                      </select>
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
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เพิ่ม</button>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">เพิ่มแผนก</h4>
          </div>
          <div class="modal-body">
              {{Form::open(['url'=>'department','files' => true,'enctype'=>'multipart/form-data','id' => 'addFormD'])}}
            <div class="row">
              <div class="col-md-2">
                {{Form::label('department','ชื่อแผนก')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group ">
                      {{Form::text('department_name','',['class'=>'form-control','id' => 'department_name'])}}
                    <span class="text-danger"></span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('department_head_id','ID แผนก')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                         <select name="department_head_id" id="department_head_id">
                      <option value="0"></option>
                          @forelse($company as $l)
                              <option value={{$l['id']}}>  {{$l['company_Name']}}</option>
                              @empty
                          @endforelse
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('company_id','ID บริษัท')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group">
                          <select name="company_id" id="company_id">
                          @forelse($company as $l)
                              <option value={{$l['id']}}>{{$l['company_Name']}}</option>
                              @empty
                          @endforelse
                      </select>
                        <span class="text-danger"></span>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('Remark','หมายเหตุ')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            {{Form::text('Remark','',['class'=>'form-control'])}}
                          <span class="text-danger"></span>
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
             
          
            </div>      
          </footer>
          <ul class="pagination pagination-sm no-margin pull-right">
           <li>
               {{ $department->links() }}
           </li>
         </ul>
         </div>
   </div>
 </div>
</div>
@endsection