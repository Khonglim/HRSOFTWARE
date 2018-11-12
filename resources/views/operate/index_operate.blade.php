@extends('layouts.main') 
@section('content')

<div class="content-wrapper">
      <div class="content container">



   @if(Session::has('flash_message') )
   <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
   @endif

   <div class="box box-danger">
            <div class="box-header with-border">
                  <h3 class="box-title">ตารางข้อมูลการแสดงประเมินผลทดลองงาน</h3>
            </div>
            <div class="box-body">
                        <table id="operate" class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th>วันที่ส่ง ปี-เดือน-วัน</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ต้นสังกัดรอบที่1</th>
                                        <th>ต้นสังกัดรอบที่2</th>
                                        <th>ผู้จัดการฝ่าย</th>
                                        <th>ผู้จัดการฝ่ายบุคคล</th>
                                        <th>กรรมการผู้จัดการ/ผู้จัดการทั่วไป</th>
                                        <th>เพิ่มเติม</th>
                                      </tr>
                                    </thead>
                                    <tbody>










                                    </tbody>
                                          <tfoot>
                                            <tr>
                                                      <th>วันที่ส่ง ปี-เดือน-วัน</th>
                                                      <th>ชื่อ-สกุล</th>
                                                      <th>ต้นสังกัดรอบที่1</th>
                                                      <th>ต้นสังกัดรอบที่2</th>
                                                      <th>ผู้จัดการฝ่าย</th>
                                                      <th>ผู้จัดการฝ่ายบุคคล</th>
                                                      <th>กรรมการผู้จัดการ/ผู้จัดการทั่วไป</th>
                                                      <th>เพิ่มเติม</th>
                                            </tr>
                                          </tfoot>
                                        </table>
            </div>
   </div>


























      </div>
</div>

@endsection