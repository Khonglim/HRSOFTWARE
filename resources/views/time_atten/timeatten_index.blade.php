@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <div class="content container">
    <div class="row" >
      <div class="col-md-12">
         
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
               @forelse($time_at as $time_atten)
               
              <tr>
              

              <td>{{$time_atten->nem_thai_firstname}} {{$time_atten->nem_thai_lastname}}</td>
              <td>{{$time_atten->net_sick_leave}}</td>
              <td>{{$time_atten->net_personal_leave}}</td>
              <td>{{$time_atten->net_late}}</td>
              <td>{{$time_atten->net_miss_work}}</td>
              <td>{{$time_atten->net_annual_leave}}</td>

               
             <td>  
                  <a href="{{'timeattendant/'.$time_atten->net_id.'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$time_atten->net_id}}"><i class=" fa fa-trash"></i></button>
        <div id="myModal{{$time_atten->net_id}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล {{$time_atten->nem_thai_firstname}} {{$time_atten->nem_thai_lastname}}</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['timeattendant.destroy',$time_atten->net_id, 'method' => "DELETE"] ]) }}
@csrf
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
  </div>
</div>
    



    


@endsection