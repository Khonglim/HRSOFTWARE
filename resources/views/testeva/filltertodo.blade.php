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
      <div class="col-md-6">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >แบบฟอร์มประเมินผลการปฏิบัติงาน ประจำปี 2561</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: none;">
             <div class="col-md-3">
                <div class="form-group">
                 
                   <?php    $i=Auth::user()->name; $j=0;?>
                 
                   {{Form::open(['url'=>'istestertotest','method'=>'POST'])}}

                    {{Form::label('id_employee','รหัส พนักงาน')}}   
                    {{Form::text('id_employee',$i,['class'=>'form-control','required'])}}   
                   
                  </div>
                 <div class="col-md-3">
                  <p> หมายเหตุ:โปรดอ่านข้อความอย่างระเอียดก่อนลงมือทำ </p>
                </div>
                </div>
                
         </div>

          <div class="box-footer">
            <h4>การประเมินประจำปี เป็นแนวทางปฏิบัติตามระเบียบ ในการประเมินของบริษัทในเครือ เอ็น จี จี กรุ๊ป  ซึ่งข้อมูลทุกอย่าง เป็นความลับ ห้ามพนักงานทำการเผยแพร่กับบุคคลอื่นโดยเด็ดขาด หากฝ่ายทรัพยากรบุคคลตรวจสอบพบการเผยแพร่จะลงโทษสถานหนักตามระเบียบข้อบังคับหมวดที่9  ข้อที่  2 ความผิดทางวินัยขั้นร้ายแรง</h4>
                <input type="checkbox" id="myCheck"  onclick="myFunction()"><p style="color: red;"> ข้าพเจ้าตกลงยอมรับและเข้าใจในระเบียบแนวทางปฏิบัติดังกล่าว</p>
                <input type="submit" value="เริ่มทำแบบประเมิน" id="mySubmit" class="btn btn-primary" disabled="true">
              </div>
              <!-- /.box-footer -->

        </div>
      </div>
      

</section>
</div>
@endsection