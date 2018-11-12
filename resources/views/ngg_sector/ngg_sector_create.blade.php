@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-10">
        {{Form::open(['url'=>'sectorsmanage'])}}
        @csrf
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เพิ่มsector</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body"">

          <div class="row">
            <div class="col-md-3"></div>
             <div class="col-md-3"> 
                        <div class="form-group label-floating">
                                <label class="control-label">ชื่อsector</label>
                                 {{Form::text('name','',['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                   <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">หมายเหตุ</label>
                            {{Form::text('remark','',['class'=>'form-control'])}}
                        </div>  
                </div>
  
          </div>
           


          </div>
        </div>
        <div class="row">
            <div class="col-md-3"> 
              {{ Html::link('sectorsmanage','Back',array('class ' => 'btn btn-primary')) }}
              {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
              {{ Form::close()}} 
                                    </div>
            
          </div>
      </div>
    </div>
  </div>
</div>
    



    


@endsection