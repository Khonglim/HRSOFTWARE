@extends('layouts.main')
@section('content')

<div class="content-wrapper">
  <div class="content container">
      @if(auth()->user()->isAdmin == 1)
    <div class="alert alert-success">
      <h4><strong>ประกาศ!</strong> <br><br> -การประเมินการทดลองงานสามารถทดสอบการใช้งานได้แล้วและลบการประเมินจากการทดสอบได้เลย สามารถเซ็นลายเซ็นบนเว็บและบนจอทัชสกรีนได้<br>
    -เพิ่มทราบข่าวสารการสมัครงานจากที่ใดแล้วครับ<br>
    -เพิ่มวันที่ลงPDFแล้วครับ</h4><br>
      หากเกิดข้อผิดพลาดสามารถติดต่อได้ทันที<strong> ไม่เว้นวันหยุดครับ </strong>
    </div>
    @endif
    @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

    @endif



    @if(auth()->user()->isAdmin == 1)
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
























  </div>
  
@endsection
