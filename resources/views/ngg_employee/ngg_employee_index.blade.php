@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-10">
         
          <a href="nggemployee/create" class="btn btn-success" ><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>
  
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
                <th style="width: 15% ">ลำดับ</th>
                <th style="width: 45% ">ชื่อพนักงาน</th>
                <th style="width: 40% ">จัดการ</th>
              </tr>
              </thead>
              <tbody>
               @forelse($ngg_employee as $ngg_emp)
               
              <tr>
              
              
              
              <td>{{$ngg_emp->nem_id}}</td>
              <td>{{$ngg_emp->nem_thai_firstname}} {{$ngg_emp->nem_thai_lastname}}</td>
              
             <td>  
                  <a href="{{'nggemployee/'.$ngg_emp->nem_id}}" class="btn btn-primary btn-xs" ><i class="fa fa-search"></i></a>
                  <a href="{{'nggemployee/'.$ngg_emp->nem_id.'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class=" fa fa-trash"></i></button>
        <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['nggemployee.destroy',$ngg_emp->nem_id, 'method' => "DELETE"] ]) }}
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
                  <th>ลำดับ</th>
                <th>ชื่อพนักงาน</th>
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