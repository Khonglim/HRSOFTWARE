@extends('layouts.main')
@section('content')
<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("mySubmit");
    if (checkBox.checked == true){
        text.disabled = false;
    } else {
      text.disabled = true;
    }
}
</script>
<div class="content-wrapper">

 <section class="content">
  <div class="row">
      <div class="col-md-10">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             <div class="col-md-6">
                <div class="form-group" style="display: none;">
                 
                   <?php    $i=Auth::user()->name; $j=0;?> 
                    {{Form::text('id_employee',$i,['class'=>'form-control','required'])}}   
                   
                  </div>
                
                </div>
                <h3 style=" color: red;">***โปรดอ่านทำความเข้าใจก่อนทำแบบประเมิน***</h3>
                 <div class="col-md-12 table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                       <tr>
                      <th style="width: 40%; height: 50px; text-align: center;">
                        ระดับ
                      </th>
                      <th style="width: 60%; height: 50px; text-align: center;">
                       Description / คำอธิบาย  
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 40%; height: 45px; text-align: center;">
                          5 = Outstanding / ดีเลิศ 
                        </td>
                        <td style="width: 60%; height: 45px; text-align: center;">
                           ดีเด่นในทุกๆ ด้านและปฏิบัติได้อย่างต่อเนื่อง เป็นตัวอย่างที่ดีให้แก่พนักงานในทีมงานได้ 
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 40%; height: 45px; text-align: center;">
                          4 = Very Competent / ดีมาก
                        </td>
                        <td style="width: 60%; height: 45px; text-align: center;">
                          ตรงตามเป้าหมายที่ต้องการเป็นส่วนใหญ่หรือเกินกว่าความคาดหวัง   
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 40%; height: 45px; text-align: center;">
                          3 = Competent / ดี
                        </td>
                        <td style="width: 60%; height: 45px; text-align: center;">
                          ตรงตามเป้าหมายที่ต้องการเป็นส่วนใหญ่หรือเกินกว่าความคาดหวังในบางครั้ง มีสิ่งที่จะต้องปรับปรุงเพิ่มเติมน้อยมาก 
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 40%; height: 45px; text-align: center;">
                          2 = Moderately Competent /พอใช้ 
                        </td>
                        <td style="width: 60%; height: 45px; text-align: center;">
                          ตรงตามเป้าหมายที่ต้องการในภาพรวม แต่อาจต้องเอาใจใส่ในงานให้มากขึ้น มีสิ่งที่จะต้องปรับปรุงเพิ่มเติมในบางประเด็น 
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 40%; height: 45px; text-align: center;">
                          1 = Improvement Required / ควรปรับปรุง 
                        </td>
                        <td style="width: 60%; height: 45px; text-align: center;">
                          ควรปรับปรุงแก้ไขการทำงานและอาจจำเป็นต้องมีผู้ให้คำแนะนำ  ในการปรับปรุงการทำงาน ต้องใช้ความพยายามในการทำงานให้มาก 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th  colspan="4" style=" color: width:100%; height: 50px; text-align: center;" bgcolor="#a9edf9" >
                          การแบ่งระดับผลงานตามเกณฑ์การประเมินผลการปฏิบัติงาน 
                        </th>
                      </tr>
                       <tr>
                      <th style="width: 15%; height: 50px; text-align: center;">
                        เกรด
                      </th>
                      <th style="width: 15%; height: 50px; text-align: center;">
                       ระดับศักยภาพ
                      </th>
                      <th style="width: 15%; height: 50px; text-align: center;">
                       คะแนน
                      </th>
                       <th style="width: 45%; height: 50px; text-align: center;">
                       การชี้แจงรายละเอียดการปฏิบัติงาน (ผู้บังคับบัญชา)
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          A+   
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          ดีเลิศ
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          91 - 100
                        </td>
                        <td rowspan="2" style="width: 45%; height: 45px; text-align: center;">
                          หรือแสดงให้เห็นผลงานที่ประสบความสำเร็จจริงที่มีหรือพฤติกรรมการปฏิบัติที่สนับสนุนให้งานประสบความสำเร็จ โดยอยู่ในระดับที่เกินความขาดหมายของผู้บังคับบัญชาต้องการ หรือเกินกว่ามาตรฐานของงานที่ปฏิบัติ
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         A   
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                           ดีเยี่ยม
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         81 - 90 
                        </td>
                        
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         B+ 
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          ดีมาก
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          71 - 80 
                        </td>
                        <td rowspan="2" style="width: 45%; height: 45px; text-align: center;">
                         แสดงให้เห็นผลงานที่ปฏิบัติสำเร็จ ซึ่งอยู่ในระดับปกติ/มาตรฐาน ที่ผู้บังคับบัญชากำหนดไว้ ทั้งส่วนของงานที่ปฏิบัติและพฤติกรรมแสดงออก
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         B    
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         ดี
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         61 - 70 
                        </td>
                        
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          C+  
                        </td>
                        <td rowspan="2" style="width: 15%; height: 45px; text-align: center;">
                          พอใช้ 
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         51 - 60
                        </td>
                        <td rowspan="2" style="width: 45%; height: 45px; text-align: center;">
                         การปฏิบัติงานที่สำเร็จโดยต้องอาศัยการควบคุมดูแลจากผู้บังคับบัญชาหรืออาศัยกระบวนการทำงานเข้าบังคับให้สำเร็จ โดยเทียบเท่ามาตรฐานการปฏิบัติปกติแต่ไม่อยู่ในระดับที่ผู้บังคับบัญชาคาดหวัง/ต้องการ
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         C    
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         41 - 50 
                        </td>
                       
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          D+  
                        </td>
                        <td rowspan="2" style="width: 15%; height: 45px; text-align: center;">
                          ควรปรับปรุง 
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         31 - 40
                        </td>
                        <td rowspan="3" style="width: 45%; height: 45px; text-align: center;">
                         ต้องชี้แจง ข้อผิดพลาด หรือข้อบกพร่องในการปฏิบัติงานที่ส่งผลให้เกิดความเสียหายในการปฏิบัติงาน ซึ่งหมายรวมถึงลักษณะวิธีการปฏิบัติงาน พฤติกรรมที่แสดงออก และความผิดพลาด/เสียที่เกิดขึ้นจริง อย่างชัดเจน
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          D    
                        </td>
                       
                        <td style="width: 15%; height: 45px; text-align: center;">
                         21 - 30 
                        </td>
                        
                      </tr>
                      <tr>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          E    
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                          ไม่มีประสิทธิภาพ 
                        </td>
                        <td style="width: 15%; height: 45px; text-align: center;">
                         1 - 20 
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                        
                
                </div>
         </div>

          <div class="box-footer">
            <div class="col-md-7">
            <h4>การประเมินประจำปี เป็นแนวทางปฏิบัติตามระเบียบ ในการประเมินของบริษัทในเครือ เอ็น จี จี กรุ๊ป  ซึ่งข้อมูลทุกอย่าง เป็นความลับ ห้ามพนักงานทำการเผยแพร่กับบุคคลอื่นโดยเด็ดขาด หากฝ่ายทรัพยากรบุคคลตรวจสอบพบการเผยแพร่จะลงโทษสถานหนักตามระเบียบข้อบังคับหมวดที่9  ข้อที่  2 ความผิดทางวินัยขั้นร้ายแรง</h4>
                <input type="checkbox" id="myCheck"  onclick="myFunction()"><p style="color: red;"> ข้าพเจ้าตกลงยอมรับและเข้าใจในระเบียบแนวทางปฏิบัติดังกล่าว</p>

                <a href="{{'istestertotestv2/'.$i}}" class="btn btn-xs " ><input type="submit" value="เริ่มทำแบบประเมิน" id="mySubmit" class="btn btn-primary" disabled="true"></a>
            </div>
              </div>
              <!-- /.box-footer -->
        </div>
      </div>
      

</section>
</div>
@endsection