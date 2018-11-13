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
                                     @foreach ($operater as $item)
                                     <tr>

                                                
                                                <td>{{$item->first_name}}</td> 
                                                <td>
                                                            
                                                      @if ($item->signa1_60_enable == 1)
                                                      <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                      @else
                                                      <i class="fa  fa-close text-danger"></i> ยังไม่ส่ง
                                                      @endif
                                                     


                                                </td>
                                                <td>
                                                            @if ($item->signa1_90_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่ส่ง
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send{{$item['id']}}"><i class=" fa  fa-send-o"></i>ส่ง</button>
                                                            <div id="send{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ส่งเมลล์</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{Form::open(['route'=>['Operate.update',$item->id],'method'=>'PUT','id'=>'inviter'])}}
                                                                          
                                                                      <p>คุณต้องการส่งเมลล์ใช่หรือไม่จะไม่สามารถส่งได้อีกครั้ง คำขอกำลังคนของ{{$item->requested}}</p>
                                                                      <input type="hidden" name="mail" value="http://hr.ngg.link/public_html/Operate/{{$item->id}}/edit">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                     <button type="summit" class="btn btn-danger">ส่งเมลล์</button>  
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                    {{ Form::close() }}
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            @endif
                                                </td>
                                                <td>
                                                            @if ($item->signa2_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่ส่ง
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send{{$item['id']}}"><i class=" fa  fa-send-o"></i>ส่ง</button>
                                                            <div id="send{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ส่งเมลล์</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{Form::open(['route'=>['Operate.update',$item->id],'method'=>'PUT','id'=>'inviter'])}}
                                                                          
                                                                      <p>คุณต้องการส่งเมลล์ใช่หรือไม่จะไม่สามารถส่งได้อีกครั้ง คำขอกำลังคนของ{{$item->requested}}</p>
                                                                      <input type="hidden" name="mail" value="http://hr.ngg.link/public_html/Operate/{{$item->id}}/edit">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                     <button type="summit" class="btn btn-danger">ส่งเมลล์</button>  
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                    {{ Form::close() }}
                                                                  </div>
                                          
                                                                </div>
                                                              </div>
                                                            @endif
                                                
                                                </td>  
                                                <td>
                                                            @if ($item->signa3_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่ส่ง
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send{{$item['id']}}"><i class=" fa  fa-send-o"></i>ส่ง</button>
                                                            <div id="send{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ส่งเมลล์</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{Form::open(['route'=>['Operate.update',$item->id],'method'=>'PUT','id'=>'inviter'])}}
                                                                          
                                                                      <p>คุณต้องการส่งเมลล์ใช่หรือไม่จะไม่สามารถส่งได้อีกครั้ง คำขอกำลังคนของ{{$item->requested}}</p>
                                                                      <input type="hidden" name="mail" value="http://hr.ngg.link/public_html/Operate/{{$item->id}}/edit">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                     <button type="summit" class="btn btn-danger">ส่งเมลล์</button>  
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                    {{ Form::close() }}
                                                                  </div>
                                          
                                                                </div>
                                                              </div>
                                                            @endif
                                                
                                                
                                                </td>   
                                                <td>
                                                            @if ($item->signa4_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่ส่ง
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send{{$item['id']}}"><i class=" fa  fa-send-o"></i>ส่ง</button>
                                                            <div id="send{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ส่งเมลล์</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{Form::open(['route'=>['Operate.update',$item->id],'method'=>'PUT','id'=>'inviter'])}}
                                                                          
                                                                      <p>คุณต้องการส่งเมลล์ใช่หรือไม่จะไม่สามารถส่งได้อีกครั้ง คำขอกำลังคนของ{{$item->requested}}</p>
                                                                      <input type="hidden" name="mail" value="http://hr.ngg.link/public_html/Operate/{{$item->id}}/edit">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                     <button type="summit" class="btn btn-danger">ส่งเมลล์</button>  
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                    {{ Form::close() }}
                                                                  </div>
                                                                  
                                          
                                                                </div>
                                                              </div>
                                                            
                                                            @endif
                                                
                                                </td>   
                                                <td>
                                                            <a href="{{'Operate/'.$item['id'].'/edit'}}" class="btn btn-success btn-xs "><i class="fa   fa-pencil-square-o"></i></a>


                                                </td>
                                                     

                                     </tr>
                                 
                                     @endforeach









                                    </tbody>
                                          <tfoot>
                                            <tr>
                                                      
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