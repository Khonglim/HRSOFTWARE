@extends('layouts.operate') 
@section('content')

<div class="content-wrapper">
      <div class="content container">

            <div class="box box-danger">
                  <div class="box-header with-border">
                        <h3 class="box-title">ประเมินผลการทดลองงาน(สำหรับผู้ประเมินครั้งแรกเท่านั้น)</h3>
                  </div>
                  <div class="form-horizontal">
                        <div class="box-body">
                              {{Form::open(['url'=>'Operate','method'=>'POST','name'=>'frmMain' ])}} @csrf
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ค้นหาชื่อในระบบ: </label>

                                    <div class="col-sm-4">


                                          <select class="js-example-basic-single  form-control" id="country" name="id" required OnChange="resutName(this.value);">
                                                                        <option value=""  >--เลือกชื่อพนักงาน--</option>
                                                                        @foreach ($employee  as $e)
                                          <option value="{{$e->nem_thai_firstname}} {{$e->nem_thai_lastname }}|{{$e->nem_code}}|{{$e->nps_name}}|{{$e->ndp_name}}/{{$e->nst_name}}|{{$e->ncp_name}}"> {{$e->nem_thai_firstname }} {{$e->nem_thai_lastname }}</option>   
                                                                        @endforeach
                                                                        </select>
                                         
                                    </div>
                                    <label class="col-sm-2 control-label">บริษัท:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textCompany">
                                    </div>
                              </div>

                              <div class="form-group">
                                    <label class="col-sm-2 control-label">ชื่อ-สกุล:</label>

                                    <div class="col-sm-4">



                                          <input type="text" class="form-control" name="textName">
                                    </div>
                                    <label class="col-sm-2 control-label">รหัสพนักงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textNem_code">
                                    </div>


                              </div>

                              <div class="form-group">

                                    <label class="col-sm-2 control-label">ตำแหน่ง:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textPosition">
                                    </div>

                                    <label class="col-sm-2 control-label">แผนก/ฝ่าย:</label>
                                    <div class="col-sm-4">
                                          <input type="text" class="form-control" name="textDepartment" required>
                                    </div>
                              </div>

                              <div class="form-group">

                                    <label class="col-sm-2 control-label">วันเริ่มงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="dateStart2" id="dateStart2" class="form-control" required onchange="document.getElementById('startrate').value=document.getElementById('dateStart2').value"
                                          />
                                    </div>

                                    <label class="col-sm-2 control-label">ครบการทดลองงาน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="dateEnd2" id="dateEnd2" class="form-control" required/>
                                    </div>
                              </div>

                              <div class="form-group">

                                    <label class="col-sm-2 control-label">จำนวนวัน:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay2" id="totolDay2" class="form-control" required/>
                                    </div>

                                    <label class="col-sm-2 control-label">ระดับ:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="degree" class="form-control" />
                                    </div>
                              </div>

                              <div class="form-group">

                                    <label class="col-sm-2 control-label">ประเมินครั้งที่ 1 : วันที่ :</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay_60" id="totolDay_60" class="form-control" />
                                    </div>

                                    <label class="col-sm-2 control-label">  ประเมินครั้งที่ 2 :  วันที่:</label>
                                    <div class="col-sm-4">
                                          <input type="text" name="totolDay_90" id="totolDay_90" class="form-control" />
                                    </div>
                              </div>

                              <div class="form-group">

                                    <label class="col-sm-2 control-label">ระดับ</label>
                                    <div class="col-sm-4">
                                          <select name="degree" id="degree" class="form-control">
                                                      <option value="0">ปฏิบัติการ</option>
                                                      <option value="1">ผู้บังคับัญชา</option>

                                              </select>
                                    </div>
                                    <label class="col-sm-2 control-label">ส่งถึงต้นสังกัด(email)</label>
                                    <div class="col-sm-4">
                                          <input type="email" name="email" id="email" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-sm-2 control-label">จำนวนวันที่ประเมิน/วัน</label>
                                    <div class="col-sm-4">
                                          <input type="number" name="number" id="number" class="form-control">
                                    </div>

                              </div>
                              <center> <button type="submit" class="btn btn-info ">บันทึก/ส่งถึงผู้ประเมิน</button></center>
                              {{Form::close()}}
                        </div>
                  </div>
            </div>
      </div>
</div>





<script language="JavaScript">
      function resutName(strCusName)
            {
                        frmMain.textName.value = strCusName.split("|")[0];
                        frmMain.textNem_code.value = strCusName.split("|")[1];
                        frmMain.textPosition.value = strCusName.split("|")[2];
                        frmMain.textDepartment.value = strCusName.split("|")[3];
                        frmMain.textCompany.value = strCusName.split("|")[4];
                    
                       
            }
</script>
@endsection