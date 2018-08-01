@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
              
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                      แก้ไขข้อมูล
                      </h3>
                </div>
                  <div class="box-body">
                      
                             {{Form::open(['route'=>['department.update', $department->id],'method'=>'PUT','files' => true])}}
                       
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label(' department_name','ชื่อแผนก')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('  department_name') ? 'has-error' : '' }}">
                                
                                  {{Form::text('department_name',$department->department_name,['class'=>'form-control'])}}
                               
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

                                 @if($department->department_head_id==0)
                                      {{Form::text('department_name','Head Department',['class'=>'form-control','readonly' => 'true'])}}
                                       @else
                                       
                                      @foreach($departments as $li)

                                      @if($li['id']==$department->department_head_id)

                                       {{Form::text('department_name',$li['department_name'],['class'=>'form-control','readonly' => 'true'])}}

                                      @endif

                                      @endforeach

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
                                           
                   
                                        @foreach($companys as $li)

                                      @if($li['id']==$department->company_id)

                                       {{Form::text('department_name',$li['company_Name'],['class'=>'form-control','readonly' => 'true'])}}

                                      @endif

                                      @endforeach
                                     
                                     
                                  

                                        </div>
                                    </div>
                                  </div>
                          <div class="row">
                              <div class="col-md-2">
                                {{Form::label('remark','หมายเหตุ')}}
                              </div>
                                <div class="col-md-5">
                                    <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                   
                                      {{Form::text('remark',$department->remark,['class'=>'form-control'])}}
                  
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
                       
                        {{Form::close()}}
                  </div>
                </div>
              </div>
        </div>
       
    </div>
  </div>

  
  @endsection