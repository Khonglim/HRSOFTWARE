@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-10">
        {{Form::open(['route'=>['levelsmanage.update',$idd],'method'=>'PUT','files' => true])}}
        @csrf
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">แก้ไขระดับ</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body"">
             @foreach($level as $lev)
            <?php 
            $com_title = $lev->nlv_name;
            $com_remark = $lev->nlv_remark;
            ?>
            @endforeach
          <div class="row">
            <div class="col-md-3"></div>
             <div class="col-md-3"> 
                        <div class="form-group label-floating">
                                <label class="control-label">ชื่อระดับ</label>
                                 {{Form::text('name',$com_title,['class'=>'form-control','required'])}}
                        </div>  
                </div>  
                   <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">หมายเหตุ</label>
                            {{Form::text('remark',$com_remark,['class'=>'form-control'])}}
                        </div>  
                </div>
  
          </div>
           


          </div>
        </div>
        <div class="row">
            <div class="col-md-3"> 
              {{ Html::link('levelsmanage','Back',array('class ' => 'btn btn-primary')) }}
              {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}} 
              {{ Form::close()}} 
                                    </div>
            
          </div>
      </div>
    </div>
  </div>
</div>
    



    


@endsection