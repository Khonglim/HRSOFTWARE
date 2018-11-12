@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-12">
         @if(Session::has('flash_message') )
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
            @endif
          <a href="sectorsmanage/create" class="btn btn-success" ><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>
    
          <br><br>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลsector</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="employee" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width: 15% ">ลำดับ</th>
                <th style="width: 45% ">sector</th>
                <th style="width: 40% ">จัดการ</th>
              </tr>
              </thead>
              <tbody>
               @forelse($sector as $sec)
               <?php $idtemp = $sec->nst_id;?>
              <tr>
              <td>{{$idtemp}}</td>
              <td>{{$sec->nst_name}}</td>
              
             <td>  
                  <a href="{{'sectorsmanage/'.$idtemp}}" class="btn btn-primary btn-xs" ><i class="fa fa-search"></i></a>
                  <a href="{{'sectorsmanage/'.$idtemp.'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$sec['nst_id']}}"><i class=" fa fa-trash"></i></button>
        <div id="myModal{{$sec['nst_id']}}"class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล{{$sec->nst_name}}</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['sectorsmanage.destroy',$idtemp, 'method' => "DELETE"] ]) }}
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
                  <th>ลำดับ</th>
                <th>sector</th>
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