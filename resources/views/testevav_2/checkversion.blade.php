@extends('layouts.main')
@section('content')

<div class="content-wrapper">
  <style type="text/css">
    th{
      font-size: 18px;
      background-color: #83b8fc;
        color: black;
    }
    td{
      font-size: 18px;
    }
    p{
      color: red;
    }
    div.box-header{
      text-align: center;
      font-size:35px;


    }

  </style>

  

 <div class="content container">
  <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบประเมิน</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="text-align: center;">
            {{ Html::link('evatestingv2','แบบประเมิน',array('class ' => 'btn btn-primary')) }}
            <div style="display: none;">
              {{ Html::link('evatesting','แบบประเมินv1.1',array('class ' => 'btn btn-primary')) }}
            </div>
            
              
         </div>
        </div>
      </div>
    </div>


</div>
</div>
 
  @endsection