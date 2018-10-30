@extends('layouts.main')
@section('content')
<div class="content-wrapper">
 <div class="content container">
  <div class="row">
<div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ผลการประเมิน</h3>
          </div>
           <?php    $i=''; $j=''; $k=''; $l='leader';  $m='';?>
          <!-- /.box-header -->
          <div class="box-body">
          <table id="employee" class="table table-bordered table-striped">
             <thead>
              <tr>
                <th style="text-align: center;width: 6.5%;height: 40px;">รหัส พนักงาน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อ</th>
                 <th style="text-align: center;width: 6.5%;height: 40px;">Leader/Officer/Manager</th>
                
              </tr>
              </thead>
              <tbody>
                  @foreach($employeetotests as $empl)
              <?php    $i=$empl->nee_by_employee; ?>
                
                @foreach($ngg_employees as $ngg_emp) 
                @if($empl->nee_by_employee == $ngg_emp->nem_id && $j!=$i && $empl->nee_id_form == '1')
                <?php  $j = $i; ?>
                <tr>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{$ngg_emp->nem_code}}</td>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{Form::label('คุณ','คุณ')}} {{$ngg_emp->nem_thai_firstname}}</td>
                   <td style="text-align: center;width: 6.5%;height: 40px;"> 
                    <a href="{{'evareportv2/'.$ngg_emp->nem_id.'/evareportblindnamev2_leader'}}" class="btn btn-primary btn-xs" ><i class="fa fa-eye"></i></a>
                    / 
                    <a href="{{'evareportv2/'.$ngg_emp->nem_id.'/evareportblindnamev2_officer'}}" class="btn  btn-info btn-xs" ><i class="fa fa-eye"></i></a>
                    / 
                    <a href="{{'evareportv2/'.$ngg_emp->nem_id.'/evareportblindnamev2_manager'}}" class="btn btn-success btn-xs" ><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                @endif 
                   @endforeach
               @endforeach
              </tbody>
              <tfoot>
               <tr>
                <th style="text-align: center;width: 6.5%;height: 40px;">รหัส พนักงาน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อ</th>
                 <th style="text-align: center;width: 6.5%;height: 40px;">Leader/Officer/Manager</th>
                
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

</div>
</div>
</div>
@endsection