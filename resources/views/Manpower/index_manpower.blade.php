@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
            <div class="row">
                        <div class="col-xs-12">
                  
                         
                  
                          <br><br>
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">คำขอกำลังคน/Manpower Requisition</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="manpower" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>วันที่ร้องขอ ปี-เดือน-วัน</th>
                                    <th>บริษัท</th>
                                    <th>ตำแหน่ง</th>
                                    <th>ผู้ขอจ้าง</th>
                  
                                    <th>เพิ่มเติ่ม</th>
                                    <th>สถานะ</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manpower as $item)
                                    <tr>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->company}}</td>
                                    <td>{{$item->position_required}}</td>
                                    <td>{{$item->requested}}</td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                                        
                                    @endforeach
















                                </tbody>
                                <tfoot>
                                  <tr>
                                          <th>วันที่ร้องขอ ปี-เดือน-วัน</th>
                                          <th>บริษัท</th>
                                          <th>ตำแหน่ง</th>
                                          <th>ผู้ขอจ้าง</th>
                        
                                          <th>เพิ่มเติ่ม</th>
                                          <th>สถานะ</th>
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