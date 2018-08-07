@extends('layouts.main')
@section('content')
 <style>
   #loader{
   visibility:hidden;
   }
   </style>
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                       เพิ่มตำแหน่ง
                     </h3>
                </div>
                  <div class="box-body">
                     
                                  {{Form::open(['url'=>'position','files' => true,'enctype'=>'multipart/form-data'])}}
                        <div class="row">
                                <div class="col-md-2">
                                  {{Form::label('department_head_id','บริษัท')}}
                                </div>
                                    <div class="form-group ">
                            {{ csrf_field() }}
                                <div class="col-md-4">
                                    <select id="country" name="company_id" class="form-control">
                                        <option value="">--เลือกบริษัท--</option>
                                        @foreach ($company as $id => $company_Name)
                                        <option value="{{ $id }}"> {{ $company_Name }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                </div> 

                              </div>
                     
<br>
                          <div class="row" id="twoCarDiv">
                           <div class="col-md-2">
                                        {{Form::label('Department_ID','แผนก')}}
                            </div>
                                <div class="col-md-5">
                                    <select id="state" name="Department_ID" class="form-control">
                                     <option value="">--แผนก--</option>
                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                            </div>               
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label('position_name','ชื่อต่ำแหน่ง')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('position_name') ? 'has-error' : '' }}">
                               
                               
                                  {{Form::text('position_name','',['class'=>'form-control'])}}
                                
                                <span class="text-danger">{{ $errors->first('position_name') }}</span>
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

  <script >
    $(document).ready(function() {

    $('select[id="country"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/states/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[id="state"]').empty();

                    $.each(data, function(key, value){

                        $('select[id="state"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[id="state"]').empty();
        }


    });

    $('select[name="state"]').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: '/states2/get/'+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="state2"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="state2"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="state2"]').empty();
        }

    });

});




            </script>
  @endsection