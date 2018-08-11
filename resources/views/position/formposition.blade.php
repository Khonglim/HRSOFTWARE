@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">
                      แก้ไขข้อมูล
                      
                </div>
                  <div class="box-body">
                   
                             {{Form::open(['route'=>['position.update',$position->id],'method'=>'PUT','files' => true])}}
                             
                      
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('position_name','ชื่อต่ำแหน่ง')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('position_name') ? 'has-error' : '' }}">
                                
                                  {{Form::text('position_name',$position->position_name ,['class'=>'form-control'])}}
                                
                                <span class="text-danger">{{ $errors->first('position_name') }}</span>
                                </div>
                            </div>
                          </div>

                             <div class="row">
                                <div class="col-md-2">
                                  {{Form::label('position_name','แผนก')}}
                                </div>
                                  <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('Department_ID') ? 'has-error' : '' }}">
                                     @foreach($department as $de)
                                     @if($de['id']==$position->Department_ID) 
                                     {{Form::text('Department_ID',$de['department_name'] ,['class'=>'form-control','readonly' => 'true'])}}
                                     @endif
                                     @endforeach
                                       
                                     
                                      <span class="text-danger">{{ $errors->first('Department_ID') }}</span>
                                      </div>
                                  </div>
                                </div>

                                 <div class="row">
                                <div class="col-md-2">
                                  {{Form::label('company','บริษัท')}}
                                </div>
                                  <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('Department_ID') ? 'has-error' : '' }}">
                                        @foreach($department as $de)
                                      @foreach($company as $com)

                                     @if($com['id']==$de['company_id'] && $de['id']==$position->Department_ID)
                                     {{Form::text('Department_ID',$com['company_Name'] ,['class'=>'form-control','readonly' => 'true'])}}
                                     @endif
                                  

                                     @endforeach
                                        
                                     @endforeach
                                      <span class="text-danger">{{ $errors->first('Department_ID') }}</span>
                                      </div>
                                  </div>
                                </div>
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('Remark','หมายเหตุ')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('Remark') ? 'has-error' : '' }}">
                                    
                                      {{Form::text('Remark',$position->Remark,['class'=>'form-control'])}}
                  
                                   
                                    <span class="text-danger">{{ $errors->first('Remark') }}</span>
                                    </div>
                                </div>
                            </div>
                  <div class="box-footer">
                      <div class="row">
                          <div class="col-md-5">
                            {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                           {{ Html::link('position','Back',array('class ' => 'btn btn-primary')) }}
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