@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="col-md-12">
        <br>
        @if(auth()->user()->isAdmin == 1)
        <br><br>
        <div class="panel panel-default">
          <div class="panel-heading">ผู้ใช้งานในระบบ</div>
           <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                     <th>เลข ID</th>
                     <th>ชื่อผู้ใช้</th>
                     <th>อีเมล</th>
                     <th>สถานะ</th>
                     <th>เพิ่มเติ่ม</th>
                  </tr>
                </thead>
              
          </table> 
           </div>
          <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-5">
          </footer>
        </div>
<table>


    </div>         
</div>
  </div>
  @endif
  @endsection