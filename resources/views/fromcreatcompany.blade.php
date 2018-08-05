@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                       เพิ่มบริษัท
                      </h3>
                </div>
                  <div class="box-body">
                     
                                  {{Form::open(['url'=>'company','files' => true,'enctype'=>'multipart/form-data'])}}
                                      
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('company_Name','ชื่อบริษัท')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('company_Name') ? 'has-error' : '' }}">
                               
                                  {{Form::text('company_Name','',['class'=>'form-control'])}}
                              
                                <span class="text-danger">{{ $errors->first('company_Name') }}</span>
                                </div>
                            </div>
                          </div>
                    
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('remark','หมายเหตุ')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                   
                                      {{Form::text('remark','',['class'=>'form-control'])}}
                                   
                                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                                    </div>
                                </div>
                            </div>
                 
                      <div class="row">
                          <div class="col-md-5">
                            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                           {{ Html::link('company','Back',array('class ' => 'btn btn-primary')) }}
                          </div>
                        </div>
                        {{Form::close()}}
                 
                </div>
              </div>
        </div>
       
    </div>
  </div>

  
  @endsection