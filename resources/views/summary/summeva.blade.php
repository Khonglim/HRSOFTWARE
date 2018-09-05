@extends('layouts.main')
@section('title','| ผลการประเมิน')
@section('content')
<div class="content-wrapper">

 <section class="content">
<div class="col-xs-7">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ผลการประเมิน</h3>
          </div>
           <?php    $i=''; $j=''; $k=''; $l='';  $m='';?>
          <!-- /.box-header -->
          <div class="box-body">
           <table id="vy_evaluate" class="table table-bordered table-striped">


              <thead>
              <tr>
                <th style="text-align: center;width: 6.5%;height: 40px;">รหัส พนักงาน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อ</th>
                 <th style="text-align: center;width: 6.5%;height: 40px;">เข้าดูข้อมูล</th>
                
              </tr>
              </thead>

              <tbody>
             @foreach($employeetotests as $empl)
              <?php    $i=$empl->nee_by_employee; ?>
 @foreach($ngg_employees as $ngg_emp) 
  
               

                @if($empl->nee_by_employee == $ngg_emp->nem_id && $j!=$i)
                <?php  $j = $i; ?>
                <tr>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{$ngg_emp->nem_code}}</td>
                  <td style="text-align: center;width: 6.5%;height: 40px;">{{$ngg_emp->nem_nickname}}</td>
                   <td style="text-align: center;width: 6.5%;height: 40px;"> <a href="{{'evareport/'.$ngg_emp->nem_id.'/evareportblindname'}}" class="btn btn-primary btn-xs" ><i class="fa fa-eye"></i></a></td> 
                 
                </tr>
                @endif 
                
               
               

               
                   @endforeach

                   
                  
               @endforeach


 



              </tbody>
 
            </table>
          </div>
        </div>
      </div>

</section>
</div>
@endsection