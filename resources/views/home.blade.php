@extends('layouts.main')
@section('content')

<div class="content-wrapper">
  <div class="content container">
    <div class="alert alert-warning">
      <h3><strong>โปรดทราบ!</strong> แถบเมนูบ้างหัวข้อยังไม่สามารถใช้งานได้อยู่ระหว่างการดำเนินการ.</h3>
    </div>
    @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

    @endif




    <div class="box">
        <div class="box-header">
          <h3 class="box-title">ข้อมูลพนักงาน</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">


        </div>
    </div>
























  </div>
  
@endsection
