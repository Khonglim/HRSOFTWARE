@extends('layouts.main')
@section('content')

<div class="content-wrapper">
  <div class="content container">
      @if(auth()->user()->isAdmin == '001' || auth()->user()->isAdmin == '010')
    <div class="alert alert-warning">
      <strong   >เรียนพี่ฝ่าย HR !</strong> <br>
            -อัพฐานข้อมูลพนักงานแล้วค่ะ (ใช้งานได้:>) <br>
            -เพิ่มสำหรับบุคคลติดต่อฉุกเฉินหน้าเว็บสมัครงานแล้วค่ะ (ใช้งานได้:>)<br>
            -ในส่วนขอกำลังคนเหลือการปรับหน้า PDF (อยู่ระหว่างรอพี่มาคุยครับ:>) 90% <br>
            -ประเมินการทดลองงานต้องมีการสอนการทำงานเนื่องจากทีมนักศึกษาฝึกงานได้เปลี่ยนรูปแบบการทำงานของระบบใหม่ค่ะ (อยู่ระหว่างรอพี่มาคุยครับ:>) 90% <br>
      หากเกิดข้อผิดพลาดสามารถติดต่อได้ทันที<strong> ไม่เว้นวันหยุดครับ </strong>
    </div>
    @endif
    @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

    @endif



    @if(auth()->user()->isAdmin == '001' || auth()->user()->isAdmin == '010')
    <div class="box">
        <div class="box-header">
           <h3>กรุณาเลือกการทำงาน จากเมนูด้านบน</h3> 
          <font size=3><b>- ข้อมูลผู้สมัคร</b></font> <br>
          &emsp;&emsp;<b>ข้อมูลผู้สมัคร</b> สำหรับดูรายชื่อผู้สมัคร พร้อมทั้งสามารถดูประวัติ แก้ไข ปริ้นReport หรือลบข้อมูลผู้สมัครได้ <br>
          <font size=3><b>- แบบประเมินต่างๆ</b></font> <br>
          &emsp;&emsp;<b>แบบประเมินการสัมภาษณ์</b> สำหรับประเมินผลการสัมภาษณ์ ทั้งระดับแบบบังคับบัญชา และ ระดับปฏิบัติการ <br>
          &emsp;&emsp;<b>แบบประเมินผลการปฏิบัติงาน</b> สำหรับประเมินผลการทดลองงานของพนักงาน <br>
          <font size=3><b>- รายงานผลต่างๆ</b></font> <br>
          &emsp;&emsp;<b>รายงานผลทดสอบ MBTI</b> สำหรับทำแบบทดสอบ MBTI <br>
          &emsp;&emsp;<b>รายงานผลทดสอบ DISC</b> สำหรับทำแบบทดสอบ DISC <br>
          &emsp;&emsp;<b>รายงานทดลองงานปฏิบัติการ</b> สำหรับดูผลการประเมินการทดลองงานระดับปฏิบัติการ <br>
          &emsp;&emsp;<b>รายงานทดลองงานบังคับบัญชา</b> สำหรับดูผลการประเมินการทดลองงานระดับบังคังบัญชา <br>
          &emsp;&emsp;<b>รายงานการทดสอบทั้งหมด</b> รวมผลการประเมินทั้งหมด <br>
          <font size=3><b>- การจัดการแบบประเมิน</b></font> <br>
          &emsp;&emsp;<b>จัดการผู้ประเมิน</b> สำหรับแก้ไขรายชื่อผู้ประเมิน และผู้ถูกประเมินว่าใครประเมินใคร <br>
          &emsp;&emsp;<b>จัดการพนักงาน</b> สำหรับเพิ่ม แก้ไข ข้อมูลของพนักงานในบริษัท <br>
          &emsp;&emsp;<b>จัดการเวลาผู้ประเมิน</b> สำหรับบันทึกเวลา ขาด ลา สาย ของพนักงาน
        </div>
        <!-- /.box-header -->
        <div class="box-body">


        </div>
    </div>
    @endif

    @if(auth()->user()->isAdmin == '100')
    <div class="col-md-12">
        <div class="box">
              <div class="box-header">
                    <h3 class="box-title">ขอกำลังคน</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
    <table id="user_setting" class="table table-bordered table-striped">
        <thead>
              <tr>

                    <th>บริษัท</th>


                    <th>แก้ไขการเข้าถึงข้อมูล</th>
              </tr>
        </thead>
        <tbody>
          
              <tr>

                    <td>
                        
                    </td>
                    <td>

                         







                    </td>



              </tr>
           
        </tbody>
        <tfoot>
              <tr>

                  <th>บริษัท</th>

                    <th>แก้ไขการเข้าถึงข้อมูล</th>
              </tr>
        </tfoot>
  </table>
              </div>
        </div>
    @endif

























  </div>
  
@endsection
