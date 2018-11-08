@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
            <div class="row">
                        <div class="col-xs-12">
                  
                         
                  
                          <br><br>
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">ข้อมูลพนักงาน</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="manpower" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>วันที่สมัคร ปี-เดือน-วัน</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ตำแหน่ง</th>
                  
                                    <th>เพิ่มเติ่ม</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>วันที่สมัคร ปี-เดือน-วัน</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ตำแหน่ง</th>
                                    <th>เพิ่มเติ่ม</th>
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