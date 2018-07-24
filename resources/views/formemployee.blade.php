@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> @if(isset($employee))
                     แก้ไขข้อมูล
                       @else
                      เพิ่มข้อมูลพนักงาน
                      @endif</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
               
                  <div class="box-body">
                      @if(isset($employee))
                             {{Form::open(['route'=>['employee.update',$employee->id],'method'=>'PUT','files' => true])}}
                       @else
                                  {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}}
                                       @endif
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('name','Name')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                @if(isset($employee->name))
                                  {{Form::text('name',$employee->name,['class'=>'form-control'])}}
                                @else
                                  {{Form::text('name','',['class'=>'form-control'])}}
                                @endif
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                          </div>
                    
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('lastname','Lastname')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                    @if(isset($employee->lastname))
                                      {{Form::text('lastname',$employee->lastname,['class'=>'form-control'])}}
                  
                                    @else
                                      {{Form::text('lastname','',['class'=>'form-control'])}}
                                    @endif
                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                    </div>
                                </div>
                            </div>
                               
                            <div class="row">
                              <div class="col-md-2">
                                {{Form::label('nikname','Nikname')}}
                              </div>
                                <div class="col-md-5">
                                       <div class="form-group {{ $errors->has('nikname') ? 'has-error' : '' }}">
                                    @if(isset($employee->nikname))
                                      {{Form::text('nikname',$employee->nikname,['class'=>'form-control'])}}
                                    @else
                                      {{Form::text('nikname','',['class'=>'form-control'])}}
                                    @endif
                                      <span class="text-danger">{{ $errors->first('nikname') }}</span>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                              <div class="col-md-2">
                                {{Form::label('birthday','Birthday')}}
                              </div>
                                <div class="col-md-5">
                                   <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                                  @if(isset($employee->birthday))
                                    {{Form::date('birthday',$employee->birthday,['class'=>'form-control','id' => 'datepicker'])}}
                                  @else
                                    {{Form::date('birthday','',['class'=>'form-control','id' => 'datepicker'])}}
                                  @endif
                                    <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                    </div>
                                </div>
                            </div>
                              
                            <div class="row">
                              <div class="col-md-2">
                                {{Form::label('sex','Sex')}}
                              </div>
                                <div class="col-md-5">
                                  <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                                    @if(isset($employee->sex))
                                         @if($employee->sex == 'Male' )
                                      {{ Form::radio('sex', 'Male',['required']) }}Male
                                      {{ Form::radio('sex', 'Female') }}Female
                                        @else
                                        {{ Form::radio('sex', 'Male') }}Male
                                        {{ Form::radio('sex', 'Female',['required']) }}Female
                                      @endif
                                    @else
                                    {{ Form::radio('sex', 'Male') }}Male
                                    {{ Form::radio('sex', 'Female') }}Female
                                  @endif<br>
                                      <span class="text-danger">{{ $errors->first('sex') }}</span>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                              <div class="col-md-2">
                                {{Form::label('email','Email')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    @if(isset($employee->email))
                                      {{Form::text('email',$employee->email,['class'=>'form-control'])}}
                                    @else
                                      {{Form::text('email','',['class'=>'form-control'])}}
                                    @endif
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </div>
                                </div>
                            </div>
                  <div class="box-footer">
                      <div class="row">
                          <div class="col-md-5">
                            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                           {{ Html::link('employee','Back',array('class ' => 'btn btn-primary')) }}
                          </div>
                          {{Form::close()}}
                        </div>
                       
                  </div>
                </div>
              </div>
        </div>
       
    </div>
  </div>

  
  @endsection