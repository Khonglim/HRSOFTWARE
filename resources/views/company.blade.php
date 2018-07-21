@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
         บริษัท
         </div>
        <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                       <th>ID</th>
                       <th>ชื่อบริษัท</th>
                       <th>หมายเหตุ</th>
                       <th>เพิ่มเติ่ม</th>
                    </tr>
                  </thead>
                  <tbody>
                          @forelse($company as $l)
                             @if($l['enable']==1)
                            <tr>
                          <td> {{$l['id']}} </td>
                          <td> {{$l['company_Name']}} </td>
                          <td> {{$l['remark']}} </td>
                          <td>  
                              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#company{{$l['id']}}"><i class="fa  fa-pencil"></i></button>
                              <button type="button" class="btn  btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$l['id']}}"><i class="fa  fa-trash-o"></i></button>
                              <div id="delete{{$l['id']}}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">ลบ  </h4>
                                      </div>
                                      <div class="modal-body">
                                          {{ Form::open(['route' => ['company.destroy',$l['id'], 'method' => "DELETE"]]) }}
                                          <input type="hidden" name="_method" value="delete" />
                                          <p>คุณต้องการลบข้อมูลใช่หรือไม่!!</p>
                                      </div>
                                      <div class="modal-footer">
                                          {{ Form::submit('ลบ',array('class' => 'btn btn-danger ')) }}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                      {{ Form::close() }}  
                                    </div>
                                  </div>
                                </div>    
                          <div id="company{{$l['id']}}" class="modal fade" role="dialog">
         <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">แก้ไข</h4>
                </div>
                <div class="modal-body">
            {{Form::open(['route'=>['company.update',$l['id']],'method'=>'PUT','files' => true,'id' => 'newModalFormC'])}}
            <div class="row">
                <div class="col-md-2">
                  {{Form::label('company','ชื่อบริษัท')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {{Form::text('company_Name',$l['company_Name'],['class'=>'form-control','required','id' => 'company_Name'])}}
                      <span class="text-danger">{{ $errors->first('company') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('remark','หมายเหตุ')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                          {{Form::text('remark',$l['remark'],['class'=>'form-control'])}}
                        <span class="text-danger">{{ $errors->first('remark') }}</span>
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
                                   <h4 class="modal-title">เพิ่มบริษัท</h4>
                                  </div>
                     <div class="modal-body">
                         {{Form::open(['url'=>'company','files' => true,'id' => 'addFormC'])}}
                     <div class="row">
                           <div class="col-md-2">
                                 {{Form::label('company','ชื่อบริษัท')}}
                             </div>
                         <div class="col-md-5">
                                <div class="form-group ">
                                      {{Form::text('company_Name','',['class'=>'form-control','required','id'=>'company_Name'])}}
                                </div>
                         </div>
                       </div>
                  <div class="row">
                <div class="col-md-2">
              {{Form::label('remark','หมายเหตุ')}}
                 </div>
                    <div class="col-md-5">
                        <div class="form-group ">
                    {{Form::text('remark','',['class'=>'form-control'])}}
                  <span class="text-danger">{{ $errors->first('remark') }}</span>
                  </div>
                      </div>
                        </div>
                      <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                                            </div>
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
                  {{ $company->links() }}
              </li>
             
            </ul>
            </div>
      </div>
    </div>
  </div>
  @endsection