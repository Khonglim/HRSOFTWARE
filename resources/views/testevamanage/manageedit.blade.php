@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-6">
          {{Form::open(['route'=>['management.update',''],'method'=>'PUT','files' => true])}}
          <br><br>
            @foreach($employee as $emp)
                  <?php  $id=$emp->nee_id;  $is_emp = $emp->nee_is_employee;  $by_emp = $emp->nee_by_employee; 
                     $id_form = $emp->nee_id_form; $recheck=$emp->nee_recheck; $enable= $emp->nee_enable;
                  ?>
                 @endforeach

                @foreach($formfor as $forms)
                  @if( $forms->id ==  $id_form)
                    <?php $formname =  $forms->form ?>
                  @endif
                @endforeach
                  
                @foreach($ngg_employee as $ngg_emp)
                  @if($ngg_emp->nem_id == $is_emp)
                  <?php $is_emp_new =  $ngg_emp->nem_thai_firstname?>
                  @elseif($ngg_emp->nem_id == $by_emp)
                  <?php $by_emp_new =  $ngg_emp->nem_thai_firstname?>
                 @endif
                @endforeach
                
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="Responsive">
                    <table class="table table-bordered table-striped table-responsive">
             <thead>
                <tr>
                 <th>
                  แบบประเมิน
                 </th>
                 <td>
                  {{Form::text('formname',$formname,['class'=>'form-control','required'])}}  
                </td>
               </tr>
               <tr>
                 <th>
                   ชื่อผู้ถูกประเมิน
                 </th>
                 <th>
                   รายชื่อผู้ประเมิน
                 </th>
               </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width: 50% ; height: 70px">
                {{Form::text('is_emp_new',$is_emp_new,['class'=>'form-control','required'])}}  
               </td>
               <td>
                {{Form::text('by_emp_new',$by_emp_new,['class'=>'form-control','required'])}}  
               </td>
             </tr>
             </tbody>
             </table>
                </div>
                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
        {{ Html::link('management','Back',array('class ' => 'btn btn-primary')) }}
       {{Form::close()}}
       
    </div>
   
  </section>
</div>
    



    
<div style="display: none;">
                  {{Form::text('recheck',$recheck)}}  
                  {{Form::text('enable',$enable)}}  
                  {{Form::text('id$enable',$id)}}  
                </div>
      </div>

@endsection