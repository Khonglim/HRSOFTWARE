@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
              
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> @if(isset( $department))
                      แก้ไขข้อมูล
                       @else
                       เพิ่มแผนก
                      @endif</h3>
                </div>
                  <div class="box-body">
                      @if(isset($department))
                             {{Form::open(['route'=>['department.update', $department->id],'method'=>'PUT','files' => true])}}
                       @else
                                  {{Form::open(['url'=>'department','files' => true,'enctype'=>'multipart/form-data'])}}
                                       @endif
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('	department_name','ชื่อบริษัท')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('	department_name') ? 'has-error' : '' }}">
                                @if(isset($department->department_name))
                                  {{Form::text('department_name',$department->department_name,['class'=>'form-control'])}}
                                @else
                                  {{Form::text('department_name','',['class'=>'form-control'])}}
                                @endif
                                <span class="text-danger">{{ $errors->first('company_Name') }}</span>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                                <div class="col-md-2">
                                  {{Form::label('department_head_id','ID เริ่มต้นแผนก')}}
                                </div>
                                  <div class="col-md-5">
                                    <div class="form-group ">

                                            @if(isset($department->department_head_id))
                                            <select name="department_head_id" id="department_head_id">
                                                    @if( $department->department_head_id == 0) 
                                                          <option value="" selected="true" disabled="true" ></option>
                                                       @forelse($department as $l)
                                                          <option value={{$l['id']}} >{{$l['department_name']}}</option>
                                                       @empty
                                                       @endforelse
                                                    @else
                                                          <option value="" selected="true" disabled="true"  >{{$department->department_name}}</option>
                                                       @forelse($department as $l)
                                                          <option value={{$l['id']}} >{{$l['department_name']}}</option>
                                                       @empty
                                                       @endforelse
                                                    @endif
                                                   </select>
                                             @else

                             <select name="department_head_id" id="department_head_id">
                      <option value="0"></option>
                          @forelse($company as $l)
                              <option value={{$l['id']}}>  {{$l['company_Name']}}</option>
                              @empty
                          @endforelse
                      </select>
                                          @endif
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-2">
                                    {{Form::label('company_id','ID บริษัท')}}
                                  </div>
                                    <div class="col-md-5">
                                      <div class="form-group ">
                                            @if(isset($department->company_id))
                                         <select name="company_id" id="company_id">
                                              
                                              <option value="" selected="true" disabled="true">{{$department->company_id}}</option>
                                          @forelse($company as $l)
                                              <option value={{$l['id']}}>{{$l['company_Name']}}</option>
                                              @empty
                                          @endforelse
                                          @else
                                          <select name="department_head_id" id="department_head_id">
                                                <option value="0"></option>
                                                    @forelse($company as $l)
                                                        <option value={{$l['id']}}> {{$l['company_Name']}}</option>
                                                        @empty
                                                    @endforelse
                                                </select>
                                          
                                      </select>
                                      @endif
                                        </div>
                                    </div>
                                  </div>
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('remark','หมายเหตุ')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                    @if(isset($department->remark))
                                      {{Form::text('remark',$company->remark,['class'=>'form-control'])}}
                  
                                    @else
                                      {{Form::text('remark','',['class'=>'form-control'])}}
                                    @endif
                                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                                    </div>
                                </div>
                            </div>
                  <div class="box-footer">
                      <div class="row">
                          <div class="col-md-5">
                            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                           {{ Html::link('department','Back',array('class ' => 'btn btn-primary')) }}
                          </div>
                          
                        </div>
                        {{Form::close()}}
                  </div>
                </div>
              </div>
        </div>
       
    </div>
  </div>

  
  @endsection