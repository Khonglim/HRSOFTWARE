@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-6">
         
          <a href="timeattendant/create" class="btn btn-success" ><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>
  
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="employee" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ชื่อพนักงาน</th>
                <th>ลาป่วย</th>
                <th>ลากิจ</th>
                <th>สาย</th>
                <th>ขาด</th>
                <th>ลาพักร้อน</th>
                <th>จัดการ</th>
              </tr>
              </thead>
              <tbody>
               @forelse($timeattendant as $timeatten)
               
              <tr>
              
              @foreach($ngg_employee as $ngg_emp)
                @if($timeatten->net_employee_id == $ngg_emp->nem_id)

              <td>{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</td>
              <td>{{$timeatten->net_sick_leave}}</td>
              <td>{{$timeatten->net_personal_leave}}</td>
              <td>{{$timeatten->net_late}}</td>
              <td>{{$timeatten->net_miss_work}}</td>
              <td>{{$timeatten->net_annual_leave}}</td>

                  @endif
               @endforeach

             
             <td>  
                  <a href="{{'timeattendant/'.$timeatten->net_id.'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class=" fa fa-trash"></i></button>
        <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['timeattendant.destroy',$timeatten->net_id, 'method' => "DELETE"] ]) }}
<input type="hidden" name="_method" value="delete" / >
<p>คุณต้องการลบใช่หรือไม่!!!!</p>  
</div>
<div class="modal-footer">
<button type="summit" class="btn btn-danger">ลบ</button>
<button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
</div>
{{ Form::close() }}  
</div>

</div>
</div>
</td>

</tr>

@empty
<tr>
<td colspan="6" > No data !!</td>
</tr>
@endforelse
              </tbody>
              <tfoot>
                <tr>
                <th>ชื่อพนักงาน</th>
                <th>ลาป่วย</th>
                <th>ลากิจ</th>
                <th>สาย</th>
                <th>ขาด</th>
                <th>ลาพักร้อน</th>
                <th>จัดการ</th>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
    



    


@endsection