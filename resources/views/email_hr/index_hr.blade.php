@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-xs-12">

        <a href="Email_HR/create" class="btn btn-success">เพิ่ม E-mail</i></a>
        <br> <br>
        @if(Session::has('flash_message') )
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
        @endif
      

     
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">อีเมลล์การส่งข้อมูลแจ้งเตือนขอกำลังคน</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="emailhr" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th style="width: 5% ">ลำดับ</th>
            <th style="width: 20% ">email</th>
            <th style="width: 4% ">จัดการ</th>
            <th style="width: 20% ">สถานะ</th>
          </tr>
          </thead>
          <tbody>
              <?php $b=0;  ?>

   @foreach ($email as $emails )
   <?php $b++ ?>
   <tr>
      <td> {{$b}}</td>
      <td>{{$emails->email_hr}}</td>
      <td><a href="{{'Email_HR/'.$emails['id'].'/edit'}}" class="btn btn-warning btn-xs "><i class="fa fa-pencil"></i></a>
        <a href="{{'Email_HR/'.$emails['id']}}" class="btn btn-primary btn-xs "><i class="fa fa-exclamation-triangle"></i></a>
        
        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$emails['id']}}"><i class=" fa fa-trash"></i></button>
        <div id="myModal{{$emails['id']}}" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ลบข้อมูล</h4>
              </div>
              <div class="modal-body">
                {{ Form::open(['route' => ['Email_HR.destroy',$emails['id'], 'method' => "DELETE"] ]) }}
                <input type="hidden" name="_method" value="delete" />
                <p>คุณต้องการลบ{{$emails['email_hr']}}ใช่หรือไม่!!!!</p>
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
      <td>@if($emails->email_enable==1)
          <i class="text-success">  ส่งถึงอีเมลล์นี้ได้ </i>
               @else
               <i class="text-danger">      ระงับการส่ง</i>
          
      @endif  </td>
      </tr>
   @endforeach


          </tbody>
          <tfoot>
            <tr>
              <th>ลำดับ</th>
            <th>email</th>
            <th>จัดการ</th>
            <th >สถานะ</th>
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