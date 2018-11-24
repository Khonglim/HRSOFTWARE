@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-md-12">
            @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

    @endif

          <a href="management/create" class="btn btn-success" ><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>
  
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
                <th>ลำดับ</th>
                <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>ชุดการประเมิน</th>
                <th>สถานะการประเมิน</th>
                <th>จัดการ</th>
              </tr>
              </thead>
              <tbody>
               
               <tr>
               @forelse($employeetotest as $emp)
                <td>{{$emp->nee_id}}</td>
               @forelse($ngg_employee as $ngg_empl)
                @if($ngg_empl->nem_id == $emp->nee_is_employee )
                <?php $emp_tepm1 = $ngg_empl->nem_thai_firstname?>
                <td>{{$ngg_empl->nem_thai_firstname}}</td>
                @endif
               @endforeach
               @forelse($ngg_employee as $ngg_empl)
                @if($ngg_empl->nem_id == $emp->nee_by_employee )
                <?php $emp_tepm2 = $ngg_empl->nem_thai_firstname?>
               <td>{{$ngg_empl->nem_thai_firstname}}</td>
                @endif
               @endforeach
                @forelse($formfor as $form)
                @if($form->id == $emp->nee_id_form )
               <td>{{$form->form}}</td>
                @endif
               @endforeach
               @if($emp->nee_recheck == false)
                 <td><span><i class="fa fa-check fa-lg" aria-hidden="true" style="color: #45e600"></i></span></td>
               @else
               <td><span><i class="fa fa-times fa-lg" aria-hidden="true" style="color: #ff3300"></i></span></td>
               @endif
               

                    
             <td>  
                  <a href="{{'management/'.$emp['nee_id'].'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$emp['nee_id']}}"><i class=" fa fa-trash"></i></button>
        <div id="myModal{{$emp['nee_id']}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูลคุณ :: "{{$emp_tepm1}}" ประเมินคุณ :: "{{$emp_tepm2}}"</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['management.destroy',$emp['nee_id'], 'method' => "DELETE"] ]) }}
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
                  <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>ชุดการประเมิน</th>
                <th>สถานะการประเมิน</th>
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