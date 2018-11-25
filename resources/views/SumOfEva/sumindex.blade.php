@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-12">
         @if(Session::has('flash_message') )
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
            @endif
            <a href="exportExcel" class="btn btn-success" ><i class="fa fa-table">พิมพ์เอกสาร</i></a>
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลเบื้องต้น</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="employee" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="text-align: center;width: 6.5%;height: 40px;">อันดับ</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อผู้ประเมิน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อผู้ถูกประเมิน</th> 
                <th style="text-align: center;width: 6.5%;height: 40px;">คะเเนนรวม</th> 
                <th style="text-align: center;width: 6.5%;height: 40px;">แบบทดสอบ</th> 
                <th style="display: none; text-align: center;width: 6.5%;height: 40px;">การจัดการ</th> 
              </tr>
              </thead>
              <tbody>
               @forelse($sum_of_eva as $sum_of)
              <tr>
              <td>{{$sum_of->soe_id}}</td>
              <td>{{$sum_of->soe_name_is_employee}} </td>
              <td>{{$sum_of->soe_name_by_employee}} </td>
              <td>{{$sum_of->soe_point}} </td>
              <td>{{$sum_of->soe_form}} </td>
             <td style="display: none;">  
                  <a href="{{'nggemployee/'.$sum_of->soe_id}}" class="btn btn-primary btn-xs" ><i class="fa fa-search"></i></a>
                  <a href="{{'nggemployee/'.$sum_of->soe_id.'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$sum_of->soe_id}}"><i class=" fa fa-trash"></i></button>
        <div id="myModal{{$sum_of->soe_id}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล::{{$sum_of->nem_thai_firstname}} {{$sum_of->nem_thai_lastname}}</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['nggemployee.destroy',$sum_of->soe_id, 'method' => "DELETE"] ]) }}
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
                <th style="text-align: center;width: 6.5%;height: 40px;">อันดับ</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อผู้ประเมิน</th>
                <th style="text-align: center;width: 6.5%;height: 40px;">ชื่อผู้ถูกประเมิน</th> 
                <th style="text-align: center;width: 6.5%;height: 40px;">คะเเนนรวม</th> 
                <th style="text-align: center;width: 6.5%;height: 40px;">แบบทดสอบ</th>
                <th style="display: none; text-align: center;width: 6.5%;height: 40px;">การจัดการ</th>  
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