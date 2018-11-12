@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-10">
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ระดับ</h3>
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
                                {{$com_title}}
                        </div>  
                </div>  
                   <div class="col-md-3"> 
                                 <div class="form-group label-floating">
                            <label class="control-label">หมายเหตุ</label>
                                {{$com_remark}}
                        </div>  
                </div>
  
          </div>
           


          </div>
        </div>
        <div class="row">
            <div class="col-md-3"> 
              {{ Html::link('levelsmanage','Back',array('class ' => 'btn btn-primary')) }}
                                    </div>
            
          </div>
      </div>
    </div>
  </div>
</div>
    



    


@endsection