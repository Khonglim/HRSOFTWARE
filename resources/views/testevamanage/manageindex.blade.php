@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
         
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
                <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>ชุดการประเมิน</th>
                <th>จัดการ</th>
              </tr>
              </thead>
              <tbody>
               
               <tr>
               @forelse($employeetotest as $emp)
               @foreach($ngg_employee as $ngg_emp)
                @if($emp->nee_is_employee == $ngg_emp->nem_id)
                <td>{{$ngg_emp->nem_thai_firstname}}</td>
                @endif
               @endforeach
               @foreach($ngg_employee as $ngg_emp2)
                @if($emp->nee_by_employee == $ngg_emp2->nem_id)
                <td>{{$ngg_emp2->nem_thai_firstname}}</td>
                 @endif
              @endforeach
              @foreach($formfor as $form)
                @if($form->id== $emp->nee_id_form)
             <td>{{$form->form}}</td>
                @endif
              @endforeach 

             
             <td>  
                  <a href="{{'management/'.$emp['nee_id'].'/edit'}}" class="btn btn-warning btn-xs " ><i class="fa fa-pencil"></i></a>
                  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class=" fa fa-trash"></i></button>
        <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">ลบข้อมูล</h4>
</div>
<div class="modal-body">
{{ Form::open(['route' => ['management.destroy',$emp['nee_id'], 'method' => "DELETE"] ]) }}
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
                  <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>ชุดการประเมิน</th>
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