@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> @if(isset($user))
                      แก้ไขข้อมูล
                       @else
                       เพิ่มผู้ใช้
                      @endif</h3>
                </div>
                  <div class="box-body">
                        {{Form::open(['url'=>'user','files' => true,'enctype'=>'multipart/form-data'])}}
                        @csrf
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('name','ชื่อผู้ใช้')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                @if(isset($user->name))
                                  {{Form::text('name',$user->name	,['class'=>'form-control'])}}
                                @else
                                  {{Form::text('name','',['class'=>'form-control'])}}
                                @endif
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                                </div>
                            </div>
                          </div>
                    
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('email','อีเมล')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    @if(isset($user->email))
                                      {{Form::text('email',$user->remark,['class'=>'form-control'])}}
                                    @else
                                      {{Form::text('email','',['class'=>'form-control'])}}
                                    @endif
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-2">
                                            {{Form::label('password','รหัสผ่าน')}}
                                    </div>
                                <div class="form-group ">
                                    <div class="col-md-5">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                         <br>
                         <div class="row">
                                <div class="col-md-2">
                                        {{Form::label('password_confirmation','ยืนยันรหัสผ่าน')}}
                                </div>
                                <div class="form-group ">
                                    <div class="col-md-5">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                  <div class="box-footer">
                      <div class="row">
                          <div class="col-md-5">
                            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                           {{ Html::link('home','Back',array('class ' => 'btn btn-primary')) }}
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