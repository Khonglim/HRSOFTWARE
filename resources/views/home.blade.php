@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="alert alert-danger">
       <h3><strong>โปรดทราบ!</strong> แถบเมนูบ้างหัวข้อยังไม่สาราถใช้งานได้อยู่ระหว่างการดำเนินการ.</h3> 
      </div>
    @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

	@endif


</div>
  </div>
 
  @endsection