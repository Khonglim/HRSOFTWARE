@extends('layouts.home')
@section('content')

<div class="container">
            <h3 class="tittle">คำขอกำลังคน/Manpower Requisition</h3>
          <br><br>
      <h4>     <center> กรณีไม่มีอยู่ใน  Job Description ตามไฟล์แนบ และส่งกลับมายัง E-mail ดังนี้ <br>
        1. hrrecruit@ciengems.com <br>
        2. hrrecruit1@ciengems.com <br>
        3. hrrecruit2@ciengems.com
        
        <br>
        
        <a href="https://drive.google.com/open?id=1PM9AW7PxOOj2yU_w2vPiarx7dsAcZ3wMLOnGfim6KMs">ไฟล์แนบคลิก</a> </center> </h4>
            <iframe  id="some" onload="iframeHeight(this)" src="{{url('/manpower/create')}}"   width="100%"   frameborder="0"  style="padding:20px 0 0 0;" scrolling="yes"></iframe>
</div>


















@endsection