@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
            <div class="row">
                        <div class="col-xs-12">
                            @if(Session::has('flash_message') )

                            <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
                        
                            @endif
                         
                  
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
                                    <td> 
                                        <a href="{{url('manpower/'.$item['id'])}}" class="btn btn-success btn-xs "><i class="fa  fa-search"></i></a>
                                        @if($item->Send_enable  == 0)
                                       
                                        <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send{{$item['id']}}"><i class=" fa  fa-send-o"></i></button>
                                        <div id="send{{$item['id']}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">ลบข้อมูล</h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{Form::open(['route'=>['Email_send.update',$item->id],'method'=>'PUT'])}}
                                                      
                                                  <p>คุณต้องการส่งเมลล์ใช่หรือไม่จะไม่สามารถส่งได้อีกครั้ง คำขอกำลังคนของ{{$item->requested}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="summit" class="btn btn-danger">ลบ</button>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                </div>
                                                {{ Form::close() }}
                                              </div>
                      
                                            </div>
                                          </div>






                                        @endif
                                      @if($item->Sup_enable && $item->MD_enable == 1)
                                        <a href="{{url('manpower/'.$item['id'])}}" class="btn btn-success btn-xs "><i class="fa fa-download"></i></a>
                                        @endif
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$item['id']}}"><i class=" fa fa-trash"></i></button>
                                        <div id="myModal{{$item['id']}}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">ลบข้อมูล</h4>
                                              </div>
                                              <div class="modal-body">
                                                {{ Form::open(['route' => ['manpower.destroy',$item['id'], 'method' => "DELETE"] ]) }}
                                                <input type="hidden" name="_method" value="delete" />
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
                                    <td>
                                    @if($item->Sup_enable && $item->MD_enable == 0)

                                   <b class="text-danger">ยังไม่อนุมัติลายเซ็น</b>  
                                   @elseif($item->Sup_enable && $item->MD_enable == 1)
                                   <b class="text-success">อนุมัติลายเซ็นแล้ว</b>  
                                        @else
                                        <b class="text-danger">ยังไม่อนุมัติลายเซ็น</b>  
                                    @endif





                                    </td>
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