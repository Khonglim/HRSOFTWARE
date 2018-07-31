@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-12">
            <br>
            @if(auth()->user()->isAdmin == 1)
            <a href="employee/create" class="btn btn-success" ><i class="fa fa-plus"> เพิ่มข้อมูล</i></a>
            @endif
            <br><br>
            <div class="panel panel-default">
            
              <div class="panel-heading">พนักงาน</div>
               <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                         <th>ชื่อ</th>
                         <th>นามสกุล</th>
                         <th>ชื่อเล่น</th>
                         <th>วันเกิด</th>
                         <th>เพศ</th>
                         <th>อีเมล</th>
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
        </div>   
    </div>
  </div>
</div>

@endsection