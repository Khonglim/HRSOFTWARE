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
                       เพิ่มแผนก
                      </h3>
                </div>
                  <div class="box-body">
                     
                                  {{Form::open(['url'=>'department','files' => true,'enctype'=>'multipart/form-data'])}}
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
                       <div class="row">
                           <div class="col-md-2">
                                  {{Form::label('add','เพิ่ม')}}
                                </div>
                            <div class="col-md-5">
                              
                               <div id="myRadioGroup">

                            
                             แผนก {{Form::radio('departtt', 'twoCarDiv')}}

                              หัวแผนก{{Form::radio('departtt', 'threeCarDiv')}}
                          </div>

                            </div>

                          </div>

                          <div class="row desc" id="twoCarDiv">
                           <div class="col-md-2">
                                        {{Form::label('department_head_id','แผนก')}}
                            </div>
                                <div class="col-md-5">
                                    <select id="state" name="department_head_id_1" class="form-control">
                                     <option value="">--แผนก--</option>
                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                               

                            </div>


                          <div class="row desc" id="threeCarDiv">
                           <div class="col-md-2">
                                      {{Form::label('department_head_id','หัวแผนก')}}
                                      </div>
                            <div class="col-md-5">
                             <select id="department" name="department_head_id_2" class="form-control">
                                     <option value="0">หัวแผนก</option>
                              </select>

                            </div>

                          </div>
                        <br>
                      <div class="row">
                          <div class="col-md-2">
                            {{Form::label(' department_name','ชื่อแผนก')}}
                          </div>
                            <div class="col-md-5">
                              <div class="form-group {{ $errors->has('  department_name') ? 'has-error' : '' }}">
                               
                                  {{Form::text('department_name','',['class'=>'form-control'])}}
                             
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

$(document).ready(function() {

    $("div.desc").hide();


    $("input[name$='departtt']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
   
});


            </script>
  
  @endsection