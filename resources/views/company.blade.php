@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
          
          <a href="company/create" class="btn btn-success" ><i class="fa fa-plus"> เพิ่มข้อมูล</i></a>
          
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">รายชื่อบริษัท</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="company" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>ชื่อบริษัท</th>
                <th>หมายเหตุ</th>
                <th>เพิ่มเติ่ม</th>
              </tr>
              </thead>
              <tbody>
                @forelse($company as $l)
                @if($l['enable']==1)
               <tr>
             <td> {{$l['id']}} </td>
             <td> {{$l['company_Name']}} </td>
             <td> {{$l['Remark']}} </td>
             <td>  
                  <a href="{{'company/'.$l['id'].'/edit'}}" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$l['id']}}"><i class=" fa fa-trash"></i></button>
    
   
        <div id="myModal{{$l['id']}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['company.destroy',$l['id'], 'method' => "DELETE"] ]) }}
<input type="hidden" name="_method" value="delete" / >
<p>คุณต้องการลบ{{$l['company_Name']}}ใช่หรือไม่!!!!</p>  
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
@endif
 @empty
<tr>
<td colspan="6" > No data !!</td>
</tr>
  @endforelse
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>ชื่อบริษัท</th>
                <th>หมายเหตุ</th>
                <th>เพิ่มเติ่ม</th>
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