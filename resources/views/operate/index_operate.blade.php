@extends('layouts.main') 
@section('content')

<div class="content-wrapper">
  <div class="content container-fluid">

    

   @if(Session::has('flash_message') )
   <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
   @endif

   <div class="box box-danger">
            <div class="box-header with-border">
                  <h3 class="box-title">ตารางข้อมูลการแสดงประเมินผลทดลองงาน</h3>
            </div>
            <div class="box-body">
             <h3> หมายเหตุ: link ที่คัดลอกไม่เหมือนกัน โปรดระมัดระวัง <br>
            
            กรุณากรอก Time Attendance ก่อนการคัดลอก link !!!
            </h3>  
                        <table id="operate" class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th>วันที่บันทึกข้อมูล</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ต้นสังกัดรอบที่1</th>
                                        <th>ต้นสังกัดรอบที่2</th>
                                        <th>ผู้จัดการฝ่าย</th>
                                        <th>ผู้จัดการฝ่ายบุคคล</th>
                                        <th>กรรมการผู้จัดการ/ผู้จัดการทั่วไป</th>
                                        <th>เพิ่มเติม</th>
                                        <th>ระดับ</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($operater as $item)
                                     <tr>

                                        <td style="width:30px; ">{{$item->dateC}}</td>
                                                <td style="width: 150px; ">{{$item->first_name}}</td> 
                                                <td style="width: 250px; ">
                                                            
                                                      @if ($item->signa1_60_enable == 1)
                                                      <i class="fa  fa-check text-success"></i> คัดลอก Link แล้ว
                                                      <button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#send11{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกอีกครั้ง</button>
                                                      <div id="send11{{$item['id']}}" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">ยืนยัน</h4>
                                                              </div>
                                                              <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter1">
                                                                @csrf
                                                              <div class="modal-body">
                                                          
                                                              
                                                                <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                <label for="">https://www.hr.ngg.link/public_html/send1/{{$item->id}}</label>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <span id="sendData1">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                              </div>
                                                            </form>
                                                            </div>
                                                        
                                                          </div>
                                                        </div>
                                                      @else
                                                      <i class="fa  fa-close text-danger"></i> ยังไม่คัดลอก
                                                     
                                                      <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send1{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกlink</button>
                                                      <div id="send1{{$item['id']}}" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">link ประเมิน</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter1">
                                                                  @csrf
                                                                  <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                       <input type="hidden" name="id" value="{{$item['id']}}">
                                                                  <label for="">https://www.hr.ngg.link/public_html/send1/{{$item->id}}</label>
                                                                       
                                                              </div>
                                                              <div class="modal-footer">
                                                                <span id="sendData1">    <button type="summit" class="btn btn-danger">ยืนยัน</button>  
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button></span>
                                                              </div>
                                                            </form>
                                                            </div>
                                                        
                                                          </div>
                                                        </div>
                                                      @endif
                                                     


                                                </td>
                                                <td style="width: 250px; ">
                                                            @if ($item->signa1_90_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> คัดลอก Link แล้ว
                                                            <button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#send22{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกอีกครั้ง</button>
                                                            <div id="send22{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter2">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                     
                                                                            
                                                                      <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                             <label for="">https://www.hr.ngg.link/public_html/send2/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData2">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                              
                                                                </div>
                                                              </div>
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่คัดลอก
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send2{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกlink</button>
                                                            <div id="send2{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter2">
                                                                      @csrf 
                                                                    <div class="modal-body">
                                                                  
                                                                      <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                      <input type="hidden" name="id" value="{{$item['id']}}">
                                                                      <label for="">https://www.hr.ngg.link/public_html/send2/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData2">   <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            @endif
                                                </td>
                                                <td style="width: 250px; ">
                                                            @if ($item->signa2_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            <button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#send3{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกอีกครั้ง</button>
                                                            <div id="send3{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter3">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                     
                                                                      <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                             <label for="">https://www.hr.ngg.link/public_html/send3/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData3">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                              
                                                                </div>
                                                              </div>
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่คัดลอก
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send3{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกlink</button>
                                                            <div id="send3{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter3">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                      
                                                                        <input type="hidden" name="id" value="{{$item['id']}}">
                                                                        <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                        <label for="">https://www.hr.ngg.link/public_html/send3/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData3">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                          
                                                                </div>
                                                              </div>
                                                            @endif
                                                
                                                </td>  
                                                <td style="width: 250px; ">
                                                            @if ($item->signa3_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            <button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#send44{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกอีกครั้ง</button>
                                                            <div id="send44{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter4">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                     
                                                                      <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                             <label for="">https://www.hr.ngg.link/public_html/send4/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData4">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                              
                                                                </div>
                                                              </div>
                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่คัดลอก
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send4{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกlink</button>
                                                            <div id="send4{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter4">
                                                                      @csrf
                                                                    <div class="modal-body">
      
                                                                        <input type="hidden" name="id" value="{{$item['id']}}">
                                                                        <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                        <label for="">https://www.hr.ngg.link/public_html/send4/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData4">      <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                          
                                                                </div>
                                                              </div>
                                                            @endif
                                                
                                                
                                                </td>   
                                                <td style="width: 250px; ">
                                                            @if ($item->signa4_enable == 1)
                                                            <i class="fa  fa-check text-success"></i> ส่งประเมินเเล้ว
                                                            <button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#send55{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกอีกครั้ง</button>
                                                            <div id="send55{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter5">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                     
                                                                             
                                                                        <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                        <label for="">https://www.hr.ngg.link/public_html/send5/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData5">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                              
                                                                </div>
                                                              </div>





                                                            @else
                                                            <i class="fa  fa-close text-danger"></i> ยังไม่คัดลอก
                                                            <button type="button" class="btn btn-info btn-xs " data-toggle="modal" data-target="#send5{{$item['id']}}"><i class=" fa  fa-send-o"></i>คัดลอกlink</button>
                                                            <div id="send5{{$item['id']}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                      <h4 class="modal-title">ยืนยัน</h4>
                                                                    </div>
                                                                    <form action=" {{url('Email_send_oper')}}" method="POST" id="inviter5">
                                                                      @csrf
                                                                    <div class="modal-body">
                                                                      <p>กรุณาคัดลอกลอกนี้ส่งผ่านเมลล์คนที่จะประเมิน</p>
                                                                             <input type="hidden" name="id" value="{{$item['id']}}">
                                                                      
                                                                        <label for="">https://www.hr.ngg.link/public_html/send5/{{$item->id}}</label>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <span id="sendData5">     <button type="summit" class="btn btn-danger">ยืนยัน</button>  </span>
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                    </div>
                                                                  </form>
                                                                  </div>
                                                              
                                                                </div>
                                                              </div>
                                                            
                                                            @endif
                                                
                                                </td>   
                                                <td style="width: 100px; ">
                                                            <a href="{{'Operate/'.$item['id'].'/edit'}}" class="btn btn-success btn-xs "><i class="fa   fa-pencil-square-o"></i></a>
                                                            <a href="{{url('pdfcon_sup/'.$item['id'])}}" class="btn btn-success btn-xs " ><i class="fa fa-download"></i></a>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#de{{$item['id']}}"><i class=" fa fa-trash"></i></button>
                                                            <div id="de{{$item['id']}}" class="modal fade" role="dialog">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">ลบข้อมูล</h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    {{ Form::open(['route' => ['Operate.destroy',$item['id'], 'method' => "DELETE"] ]) }}
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
                                                        @if($item['degree_enable']==1)
                                                        บังคับบัญชา
                                                        @else
                                                        ปฏิบัติการ
                                                        @endif

                                                    
                                                 
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
                                                      <th>ระดับ</th>
                                            </tr>
                                          </tfoot>
                                        </table>
            </div>
   </div>




   <script>

    $("#inviter1").submit(function(){    
        
        $("#sendData1").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });
    
         $("#inviter2").submit(function(){    
        
        $("#sendData2").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });

          $("#inviter3").submit(function(){    
        
        $("#sendData3").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });

          $("#inviter4").submit(function(){    
        
        $("#sendData4").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });

        $("#inviter5").submit(function(){    
        
        $("#sendData5").html("ระบบกำลังทำการส่งโปรดรอสักครู่.....");    
        
         return true; });
    
    
    
    </script>





















      </div>
</div>

@endsection