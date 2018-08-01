@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
            <div class="col-md-7">
                    {{Form::open(['route'=>['employee.update',$personal->id],'method'=>'PUT','files' => true])}}
            <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">ประวัติส่วนตัว</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                <table>
                    <tbody>
                    <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >
                            <tr>
                                    <td >
                                                    <select style="width:65px" id="prefix1"  name="prefix1" >
                                                              <option  value="นาย">นาย</option>
                                                              <option   value="นางสาว">นางสาว</option>
                                                              <option   value="นาง">นาง</option>
                                                            </select>

                                                        ชื่อ:&nbsp; <input type="text"name="name" id="name" required="required"style="width:100px" value="{{$personal->name}}"/>&nbsp;&nbsp;&nbsp;
                                                        นามสกุล :<input type="text" name="lastname" id="lastname" required="required" style="width:100px" value="{{$personal->lastname}}"/>&nbsp;&nbsp;&nbsp;
                                                        ชื่อเล่น:<input type="text" name="nikname" id="nikname" required="required" style="width: 45px" value="{{$personal->nikname}}"/>&nbsp;&nbsp;&nbsp;
                                                        เพศ:&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="male">ชาย <input type="radio" name="gender" value="female">หญิง
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td >วันเกิด:<input type="date"name="birthday" id="birthday" required="required"style="width:130px" />
                                                          สัญชาติ:<input type="text" name="nationality" id="nationality" required="required"style="width:45px" value="{{$personal->nationality}}"/>
                                                          เชื้อชาติ:<input type="text" name="race" id="race" required="required"style="width:45px" value="{{$personal->race}}"/>
                                                          ศาสนา:<input type="text" name="religion" id="religion" required="required"style="width:45px" value="{{$personal->religion}}"/>
                                                        </td>
                                                   </tr>
                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                   <tr>
                                                        <td>อายุ:<input type="text"name="age" id="age" required="required"style="width:45px" value="{{$personal->age}}"/>ปี&nbsp;&nbsp;&nbsp;
                                                          ส่วนสูง:<input type="text" name="height" id="height" required="required"style="width:45px" value="{{$personal->height}}"/>ซม.&nbsp;&nbsp;&nbsp;
                                                          น้ำหนัก:<input type="text" name="weight" id="weieht" required="required"style="width:45px" value="{{$personal->weight}}"/>กก.&nbsp;&nbsp;&nbsp;
                                                          พีน้อง:<input type="text" name="brothers" id="brothers" style="width:45px" value="{{$personal->brothers}}"/>&nbsp;คน
                                                          เป็นคนที่:<input type="text" name="number" id="number" style="width:45px" value="{{$personal->number}}"/>

                                                        </td>
                                                   </tr>

                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td>โทรศัพท์ที่ติดต่อ:<input type="text"name="tel" id="tel" required="required"style="width:100px" value="{{$personal->tel}}"/>&nbsp;&nbsp;&nbsp;
                                                          ที่บ้าน:<input type="text" name="home" id="home" style="width:100px" value="{{$personal->home}}"/>&nbsp;&nbsp;&nbsp;
                                                          โทรศัพท์มือถือ:<input type="text" name="mobile" id="mobile" required="required"style="width:100px" value="{{$personal->moblie}}"/>&nbsp;&nbsp;&nbsp;

                                                        </td>
                                                   </tr>

                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>


                                                        <td>
                                                          สำนักงาน:<input type="text" name="office" id="office" style="width:100px" value="{{$personal->office}}"/>
                                                          อีเมล:<input type="email" name="email" id="email" required="required"style="width:100px" value="{{$personal->email}}"/>
                                                          ที่อยู่สามารถติดต่อได้:<textarea name="address1" id="address1" required="required" value="{{$personal->address1}}"></textarea>
                                                        </td>



                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>


                                                    <td>
                                                       ที่อยู่ตามบัตรประชาชน:<textarea name="address2" id="address2" required="required" value="{{$personal->address2}}"></textarea>
                                                       เลขบัตรประชาชน:<input type="text" name="idcard" id="idcard" required="required"style="width:120px" value="{{$personal->idcard}}"/>

                                                      </td>

                                                      <tr>
                                                          <td align="right" valign="middle">&nbsp;</td>
                                                          <td colspan="3">&nbsp;</td>
                                                        </tr>

                                                        <td>
                                                            ออกให้ ณ อำเภอ/เขต:<input type="text" name="issued" id="issued" required="required"style="width:60px" value="{{$personal->issued}}"/>
                                                            จังหวัด:<input type="text" name="province_crad" id="province_crad" required="required"style="width:60px" value="{{$personal->province_crad}}"/>
                                                            วันออกบัตร:<input type="date" name="issueddate" id="issueddate" required='requrired' style="width:123px" value="{{$personal->issueddate}}"/>
                                                            บัตรหมดอายุ:<input type="date" name="expid" id="expid" required="required" style="width:120px" value="{{$personal->expid}}"/>
                                                           </td>

                                                           <tr>
                                                              <td align="right" valign="middle">&nbsp;</td>
                                                              <td colspan="3">&nbsp;</td>
                                                            </tr>

                                                            <td>
                                                              บัตรประจำตัวผู้เสียภาษี:<input type="text" name="texid" id="textid" required="required"style="width:80px" value="{{personal->texid}}"/>
                                                              สถานะความเป็นอยู่:
                                                                <select style="width:80px"name="living_status"  >
                                                                <option value="-">:: เลือก ::</option>
                                                                  <option  value="owm_home">บ้านส่วนตัว </option>
                                                                  <option  value="rent_home">บ้านเช่า</option>
                                                                  <option value="live_with_parents">อาศัยกับบิดามารดา</option>
                                                                  <option  value="live_with_other">อาศัยกับผู้อื่น</option>
                                                                </select>
                                                                สถานะครอบครัว:

                                                              <select name="marital_status"  >
                                                                  <option  value="-">:: เลือก ::</option>
                                                                  <option  value="single">โสด</option>
                                                                  <option  value="married">สมรส</option>
                                                                  <option  value="divorced">หย่า</option>
                                                                  <option  value="live_with_parants">หม้าย</option>
                                                                  <option  value="separated">แยกกันอยู่</option>

                                                                </select>



                                                            </td>

                                                            <tr>
                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                <td colspan="3">&nbsp;</td>
                                                              </tr>

                                                              <td>
                                                                กรณีแต่งงาน:
                                                                <select style="width:80px" name="if_marricd" >
                                                                    <option      value="">:: เลือก ::</option>
                                                                    <option      value="จดทะเบียนสมรส">จดทะเบียนสมรส</option>
                                                                    <option      value="ไม่ได้จดทะเบียนสมรส">ไม่ได้จดทะเบียนสมรส</option>
                                                                  </select>

                                                                  คู่สมรสมีเงินได้หรือไม่:
                                                                  <select style="width:80px" name="spouse">
                                                                      <option  value="-">:: เลือก ::</option>
                                                                      <option   value="yes">มี</option>
                                                                      <option   value="no">ไม่มี</option>
                                                                    </select>
                                                              </td>

                                                              <tr>
                                                                  <td align="right" valign="middle">&nbsp;</td>
                                                                  <td colspan="3">&nbsp;</td>
                                                                </tr>

                                                                <td>
                                                                  ชื่อคู่สมรส:
                                                                  <input type="text" name="name_spouse" id="name_spouse"  style="width:100px" value="{{$personal->name_spouse}}"/>
                                                                  อาชีพคู่สมรส:
                                                                  <input type="text" name="spouse_occupation" id="spouse_occupation" style="width:100px" value="{{$personal->spouse_occupation}}"/>
                                                                  สถานที่ทำงาน:
                                                                  <input type="text" name="firm_address" id="firm_address"  style="width:100px" value="{{$personal->firm_address}}"/>
                                                                </td>

                                                                 <tr>
                                                                  <td align="right" valign="middle">&nbsp;</td>
                                                                  <td colspan="3">&nbsp;</td>
                                                                </tr>

                                                                <td>
                                                                  จำนวนบุตรทั้งหมด <input type="text" name="children" id="children"  style="width:50px" value="{{$personal->children}}"/> คน
                                                                  ชาย:<input type="text" name="boy" id="boy"  style="width:50px" value="{{$personal->boy}}"/> คน
                                                                  หญิง:<input type="text" name="girls" id="girls"  style="width:50px" value="{{$personal->girls}}"/>คน
                                                                  จำนวนบุตรกำลังศึกษา:<input type="text" name="school" id="school"  style="width:50px" value="{{$personal->school}}"/>คน

                                                                </td>

                                                                <tr>
                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                    <td colspan="3">&nbsp;</td>
                                                                  </tr>

                                                                  <td>
                                                                จำนวนบุตรที่อายุเกิน 21 ปี:<input type="text" name="over21" id="over21" required="required" style="width:50px" value="{{$personal->over21}}"/>คน
                                                                สถานะทางทหาร:
                                                                <select style="width:110px"name="military_service" >
                                                                    <option value="">ไม่มี</option>
                                                                    <option  value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
                                                                    <option  value="ศึกษาวิชาทหาร">ศึกษาวิชาทหาร</option>
                                                                    <option  value="ผ่านการเกณฑ์ทหาร">ผ่านการเกณฑ์ทหาร</option>
                                                                    <option  value="อื่นๆ">อื่นๆ</option>
                                                                  </select>
                                                                  </td>
                                                                  <tr>
                                                                      <td align="right" valign="middle">&nbsp;</td>
                                                                      <td colspan="3">&nbsp;</td>
                                                                    </tr>
                                                                    <td>
                                                                      ชื่อบิดา:
                                                                      <input type="text" name="namefather" id="father" required="required" style="width:100px" value="{{$personal->namefather}}"/>
                                                                      นามสกุล:
                                                                      <input type="text" name="lastfather" id="lfather" required="required" style="width:100px" value="{{$personal->lastfather}}"/>
                                                                     อาชีพ:
                                                                     <input type="text" name="occupation_father" id="occupation_father" required="required" style="width:100px" value="{{$personal->occupation_father}}"/>
                                                                     <input type="radio" name="alivef" value="ยังมีชีวิตอยู่">ยังมีชีวิตอยู่ <input type="radio" name="alivef" value="ถึงแก่กรรม">ถึงแก่กรรม
                                                                    </td>
                                                                    <tr>
                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                        <td colspan="3">&nbsp;</td>
                                                                      </tr>

                                                                    <td>

                                                                      ชื่อมารดา:
                                                                      <input type="text" name="namemother" id="mother" required="required" style="width:100px" value="{{$personal->namemother}}"/>
                                                                      นามสกุล:
                                                                      <input type="text" name="lastmother" id="lmother" required="required" style="width:100px" value="{{$personal->lastmother}}"/>
                                                                      อาชีพ:
                                                                      <input type="text" name="occupationm" id="occupationm" required="required" style="width:100px" value="{{$personal->occupationm}}"/>
                                                                      <input type="radio" name="alivem" value="ยังมีชีวิตอยู่">ยังมีชีวิตอยู่ <input type="radio" name="alivem" value="ถึงแก่กรรม">ถึงแก่กรรม


                                                                    <td>

                                                                            <tr>
                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                    <td colspan="3">&nbsp;</td>
                                                                                  </tr>

                                                                                  <tr>
                                                                                        <td>
                                                                                                &emsp;&emsp;&emsp;ระดับการศึกษา&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ปีการศึกษา
                                                                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;เกรด
                                                                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;สาขา
                                                                                        </td>
                                                                                      </tr>
                                                                                <tr>
                                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                                        <td colspan="3">&nbsp;</td>
                                                                                      </tr>
                                                                                <tr>

                                                                                  <td>
                                                                                   ประถมการศึกษา:
                                                                                   <input type="text" id="primary" name="primary" required="required" style="width:100px" value="{{$educational->primary}}"/>
                                                                                   &emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                                                                   <select name="year1" id="year1" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year2" id="year2" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpa" name="gpa" required="required" style="width:50px" value="{{$educational->gpa}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="major" name="major" required="required" style="width:150px" value="{{$educational->major}}"/>
                                                                                  </td>
                                                                            </tr>


                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>


                                                                              <tr>

                                                                                  <td>
                                                                                 มัธยมศึกษา:
                                                                                   <input type="text" id="secondary" name="secondary" required="required" style="width:125px" value="{{$educational->secondary}}"/>
                                                                                   &emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                                                                   <select name="year3" id="year3" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year4" id="year4" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpas" name="gpas" required="required" style="width:50px" value="{{$educational->gpas}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="majors" name="majors" required="required" style="width:150px" value="{{$educational->majors}}"/>
                                                                                  </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>


                                                                              <tr>

                                                                                  <td>
                                                                                อาชีวะศึกษา:
                                                                                   <input type="text" id="vocation" name="vocation" required="required" style="width:122px" value="{{$educational->vocation}}"/>
                                                                                   &emsp;&emsp;&nbsp;&nbsp;
                                                                                   <select name="year5" id="year5" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year6" id="year6" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpav" name="gpav" required="required" style="width:50px" value="{{$educational->gpav}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="majorv" name="majorv" required="required" style="width:150px" value="{{$educational->majorv}}"/>
                                                                                  </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>


                                                                              <tr>

                                                                                  <td>
                                                                                 อนุปริญญา:
                                                                                   <input type="text" id="diploma" name="diploma" required="required" style="width:129.5px" value="{{$educational->diploma}}"/>
                                                                                   &emsp;&emsp;&nbsp;&nbsp;
                                                                                   <select name="year7" id="year7" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year8" id="year8" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpad" name="gpad" required="required" style="width:50px" value="{{$educational->gpad}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="majord" name="majord" required="required" style="width:150px" value="{{$educational->majord}}"/>
                                                                                  </td>
                                                                            </tr>


                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td>
                                                                                 ปริญญาตรี:
                                                                                   <input type="text" id="bachelor" name="bachelor" required="required" style="width:131px" value="{{$educational->bachelor}}"/>
                                                                                   &emsp;&emsp;&nbsp;&nbsp;
                                                                                   <select name="year9" id="year9" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year10" id="year10" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpab" name="gpab" required="required" style="width:50px" value="{{$educational->gpab}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="majorb" name="majorb" required="required" style="width:150px" value="{{$educational->majorb}}"/>
                                                                                  </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>


                                                                              <tr>

                                                                                  <td>
                                                                                 ปริญญาโท:
                                                                                   <input type="text" id="master" name="master" required="required" style="width:129px" value="{{$educational->master}}"/>
                                                                                   &emsp;&emsp;&nbsp;
                                                                                   <select name="year11" id="year11" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                   ถึง:
                                                                                   <select name="year12" id="year12" >

                                                                                      <option value="">:: ปี ::</option>

                                                                                      <?php for($i=0; $i<=100; $i++) { ?>

                                                                                      <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                      <?php } ?>

                                                                                      </select>
                                                                                      &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="gpam" name="gpam" required="required" style="width:50px" value="{{$educational->gpam}}"/>
                                                                                   &emsp;&emsp;&emsp;
                                                                                   <input type="text" id="majorm" name="majorm" required="required" style="width:150px" value="{{$educational->majorm}}"/>
                                                                                  </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>

                                                                              <tr>

                                                                                <td>
                                                                                    &emsp;&emsp;&nbsp;&nbsp;&nbsp; อื่นๆ:
                                                                                 <input type="text" id="otherE" name="otherE" required="required" style="width:129px" value="{{$educational->otherE}}"/>
                                                                                  &emsp;&emsp;
                                                                                 <select name="year13" id="year13" >

                                                                                    <option value="">:: ปี ::</option>

                                                                                    <?php for($i=0; $i<=100; $i++) { ?>

                                                                                    <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                    <?php } ?>

                                                                                    </select>
                                                                                 ถึง:
                                                                                 <select name="year14" id="year14" >

                                                                                    <option value="">:: ปี ::</option>

                                                                                    <?php for($i=0; $i<=100; $i++) { ?>

                                                                                    <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>

                                                                                    <?php } ?>

                                                                                    </select>
                                                                                    &emsp;&emsp;&emsp;
                                                                                 <input type="text" id="gpao" name="gpao" required="required" style="width:50px" value="{{$educational->gpao}}"/>
                                                                                 &emsp;&emsp;&emsp;
                                                                                 <input type="text" id="majoro" name="majoro" required="required" style="width:150px" value="{{$educational->majoro}}"/>
                                                                                </td>
                                                                          </tr>

                                                                          <tr>
                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                            <td colspan="3">&nbsp;</td>
                                                                          </tr>




                                                                          <tr>
                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                            <td colspan="3">&nbsp;</td>
                                                                          </tr>

                                                                          <tr>
                                                                            <td >
                                                                             ภาษาไทย:->การพูด: <select style="width:65px" id="thais" name="thais">
                                                                                <option value="ดี">ดี</option>
                                                                                <option  value="พอใช้">พอใช้</option>
                                                                                <option  value="ไม่ดี">ไม่ดี</option>
                                                                                </select>
                                                                            ->การฟัง: <select style="width:65px" id="thail"  name="thail">>
                                                                                    <option value="ดี">ดี</option>
                                                                                    <option  value="พอใช้">พอใช้</option>
                                                                                    <option  value="ไม่ดี">ไม่ดี</option>
                                                                                    </select>
                                                                            ->การอ่าน: <select style="width:65px" id="thair"  name="thair">>
                                                                                        <option value="ดี">ดี</option>
                                                                                        <option  value="พอใช้">พอใช้</option>
                                                                                        <option  value="ไม่ดี">ไม่ดี</option>
                                                                                        </select>

                                                                            </td>
                                                                          </tr>
                                                                          <tr>
                                                                              <td align="right" valign="middle">&nbsp;</td>
                                                                              <td colspan="3">&nbsp;</td>
                                                                            </tr>


                                                                            <tr>
                                                                                <td >
                                                                                 ภาษาอังกฤษ:->การพูด: <select style="width:65px" id="engliss" name="engliss">
                                                                                    <option value="ดี">ดี</option>
                                                                                    <option  value="พอใช้">พอใช้</option>
                                                                                    <option  value="ไม่ดี">ไม่ดี</option>
                                                                                    </select>
                                                                                ->การฟัง: <select style="width:65px" id="englisl" name="englisl">
                                                                                        <option value="ดี">ดี</option>
                                                                                        <option  value="พอใช้">พอใช้</option>
                                                                                        <option  value="ไม่ดี">ไม่ดี</option>
                                                                                        </select>
                                                                                ->การอ่าน: <select style="width:65px" id="englisr" name="englisr">
                                                                                            <option value="ดี">ดี</option>
                                                                                            <option  value="พอใช้">พอใช้</option>
                                                                                            <option  value="ไม่ดี">ไม่ดี</option>
                                                                                            </select>

                                                                                </td>
                                                                              </tr>
                                                                            <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td >
                                                                                   อื่นๆ:->
                                                                                   <input type="text" name="otherr" id="otherr" style="width:100px" name="otherr" value="{{$languages->otherr}}"/>
                                                                                   การพูด: <select style="width:65px" id="othes" name="othes">
                                                                                      <option value="ดี">ดี</option>
                                                                                      <option  value="พอใช้">พอใช้</option>
                                                                                      <option  value="ไม่ดี">ไม่ดี</option>
                                                                                      </select>
                                                                                  ->การฟัง: <select style="width:65px" id="othel" name="othel">
                                                                                          <option value="ดี">ดี</option>
                                                                                          <option  value="พอใช้">พอใช้</option>
                                                                                          <option  value="ไม่ดี">ไม่ดี</option>
                                                                                          </select>
                                                                                  ->การอ่าน: <select style="width:65px" id="other" name="other">
                                                                                              <option value="ดี">ดี</option>
                                                                                              <option  value="พอใช้">พอใช้</option>
                                                                                              <option  value="ไม่ดี">ไม่ดี</option>
                                                                                              </select>

                                                                                  </td>
                                                                                </tr>




                                                                              <tr>
                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                <td colspan="3">&nbsp;</td>
                                                                              </tr>

                                                                              <tr>

                                                                                    <td>
                                                                                      ประวัติการทำงาน  ชื่อสถานที่ประกอบการ:

                                                                                    </td>
                                                                                  </tr>
                                                                                  <br>

                                                                                <tr>
                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                    <td colspan="3">&nbsp;</td>
                                                                                  </tr>

                                                                                  <tr>
                                                                                      <td>
                                                                                  1.  <input type="text" name="list_of_employed1" id="list_of_employed1" style="width:150px"/ value="{{$history->list_of_employed1}}">
                                                                                  ลักษณะงานที่รับผิดชอบ: <input type="text" name="job_description1" id="job_description1" style="width:150px" value="{{$history->job_description1}}"/>
                                                                                  โทร: <input type="text" name="call1" id="call1" style="width:150px" value="{{$history->call1}}"/>

                                                                                      </td>
                                                                                    </tr>
                                                                                <tr>
                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                    <td colspan="3">&nbsp;</td>
                                                                                  </tr>

                                                                                  <tr>
                                                                                      <td>
                                                                                  ระยะเวลางาน:<input type="date" name="start_job_duration1" id="job_duration1" style="width:150px"/>
                                                                                  ถึงวันที่: <input type="date" name="end_job_duration2" id="job_duration2" style="width:150px"/>
                                                                                  ตำแหน่ง: <input type="text" name="position1" id="position1" style="width:150px" value="{{$history->position1}}"/>

                                                                                      </td>
                                                                                    </tr>

                                                                                      <tr>
                                                                                          <td align="right" valign="middle">&nbsp;

                                                                                          </td>
                                                                                          <td colspan="3">&nbsp;</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                        <td>
                                                                                         สาเหตุที่ออก:<input type="text" name="reasonLeaving1" id="reasonleaving1" style="width:150px" value="{{$history->reasonLeaving1}}"/>
                                                                                         เงินเดือนครั้งสุดท้าย: <input type="text" name="lastsalary1" id="lastsalary1"style="width:150px" value="{{$history->lastsalary1}}"/> บาท
                                                                                        </td>
                                                                                    </tr>

                                                                                <tr>

                                                                            <td>
                                                                            ----------------------------------------------------------------------------------------------------------------------------------------------------
                                                                            </td>
                                                                               </tr>
                                                                           <tr>
                                                                                      <td align="right" valign="middle">&nbsp;</td>
                                                                                            <td colspan="3">&nbsp;</td>

                                                                                  </tr>
                                                                                      <tr>

                                                                                          <td>

                                                                                      2.  <input type="text" name="list_of_employed2" id="list_of_employed2" style="width:150px" value="{{$history->list_of_employed2}}"/>
                                                                                      ลักษณะงานที่รับผิดชอบ: <input type="text" name="job_description2" id="job_description2" style="width:150px" value="{{$history->job_description2}}"/>
                                                                                      โทร: <input type="text" name="call2" id="call2" style="width:150px" value="{{$history->call2}}"/>

                                                                                          </td>
                                                                                        </tr>
                                                                                    <tr>
                                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                                        <td colspan="3">&nbsp;</td>
                                                                                      </tr>

                                                                                      <tr>
                                                                                          <td>
                                                                                      ระยะเวลางาน:<input type="date" name="start_job_duration3" id="job_duration3" style="width:150px"/>
                                                                                      ถึงวันที่: <input type="date" name="end_job_duration4" id="job_duration4" style="width:150px"/>
                                                                                      ตำแหน่ง: <input type="text" name="position2" id="position2" style="width:150px"/ value="{{$history->position2}}">

                                                                                          </td>
                                                                                        </tr>

                                                                                          <tr>
                                                                                              <td align="right" valign="middle">&nbsp;

                                                                                              </td>
                                                                                              <td colspan="3">&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                            <td>
                                                                                             สาเหตุที่ออก:<input type="text" name="reasonleaving2" id="reasonleaving2" style="width:150px"/ value="{{$history->reasonLeaving2}}">
                                                                                            เงินเดือนครั้งสุดท้าย: <input type="text" name="lastsalary2" id="lastsalary2"style="width:150px" value="{{$history->lastsalary2}}"/> บาท
                                                                                            </td>
                                                                                        </tr>



                                                                                        <td> ----------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                            </td>
                                                                                        </tr>
                                                                                          <tr>
                                                                                                     <td align="right" valign="middle">&nbsp;</td>
                                                                                                           <td colspan="3">&nbsp;</td>

                                                                                                 </tr>

                                                                                          <tr>
                                                                                              <td>
                                                                                          3.  <input type="text" name="list_of_employed3" id="list_of_employed3" style="width:150px" value="{{$history->list_of_employed3}}"/>
                                                                                          ลักษณะงานที่รับผิดชอบ: <input type="text" name="job_description3" id="job_description3" style="width:150px" value="{{$history->job_description3}}"/>
                                                                                          โทร: <input type="text" name="call3" id="call3" style="width:150px" value="{{$history->call3}}"/>

                                                                                              </td>
                                                                                            </tr>
                                                                                        <tr>
                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                            <td colspan="3">&nbsp;</td>
                                                                                          </tr>

                                                                                          <tr>
                                                                                              <td>
                                                                                          ระยะเวลางาน:<input type="date" name="start_job_duration5" id="job_duration5" style="width:150px"/>
                                                                                          ถึงวันที่: <input type="date" name="end_job_duration6" id="job_duration6" style="width:150px"/>
                                                                                          ตำแหน่ง: <input type="text" name="position3" id="position3" style="width:150px" value="{{$history->position3}}"/>

                                                                                              </td>
                                                                                            </tr>

                                                                                              <tr>
                                                                                                  <td align="right" valign="middle">&nbsp;

                                                                                                  </td>
                                                                                                  <td colspan="3">&nbsp;</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                <td>
                                                                                                 สาเหตุที่ออก:<input type="text" name="reasonleaving3" id="reasonleaving3" style="width:150px" value="{{$history->reasonLeaving3}}"/>
                                                                                                เงินเดือนครั้งสุดท้าย: <input type="text" name="lastsalary3" id="lastsalary3"style="width:150px" value="{{$history->lastsalary3}}"/> บาท
                                                                                                </td>
                                                                                            </tr>
                                                                                              <tr>
                                                                                                  <td>

                                ----------------------------------------------------------------------------------------------------------------------------------------------------

                                                                                                </td>
                                                                                            </tr>
                                                                                              <tr>
                                                                                                         <td align="right" valign="middle">&nbsp;</td>
                                                                                                               <td colspan="3">&nbsp;</td>

                                                                                                     </tr>
                                                                                                    <tr>
                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                          </tr>
                                                                                                          <tr>
                                                                                                                <td>
                                                                                                                    บุคที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัท สามารถสอบถามได้

                                                                                                                </td>

                                                                                                      <tr>
                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                          </tr>
                                                                                                          <tr>
                                                                                                                <td>
                                                                                                                   ชื่อ:<input type="text" name="namecm" id="namecm" required="required" style="width:100px" value="{{$persons->namecm}}"/>
                                                                                                                   นามสกุล:<input type="text" name="lastnamecm" id="lastnamecm" required="required" style="width:100px" value="{{$persons->lastnamecm}}"/>
                                                                                                                   สถานที่ทำงาน:<input type="text" name="firm" id="firm" required="required" style="width:200px" value="{{$persons->firm}}"/>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                                                    <td colspan="3">&nbsp;</td>
                                                                                                                  </tr>
                                                                                                            <tr>
                                                                                                                    <td>

                                                                                                                       เบอร์โทรศัพท์:<input type="text" name="telecm" id="telecm" required="required" style="width:100px" value="{{$persons->telecm}}"/>
                                                                                                                       ตำแหน่ง:<input type="text" name="positioncm" id="positioncm" required="required" style="width:100px" value="{{$persons->positioncm}}"/>
                                                                                                                    </td>
                                                                                                                </tr>

                                                                                                                <tr>
                                                                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                                                                        <td colspan="3">&nbsp;</td>
                                                                                                                </tr>
                                                                                                                <tr>

                                                                                                                        <td>
                                                                                                                          ความรู้พิเศษ

                                                                                                                        </td>


                                                                                                                    </tr>



                                                                                                                    <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                    </tr>




                                                                                                                    <tr>
                                                                                                                            <td>

                                                                                                                 คอมพิวเตอร์   ระบุ: <input  type="text" name="computer" id="computer" required="required" style="width:100px" value="{{$persons->computer}}"/>
                                                                                                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="fax" name="fax">เครื่องโทรสาร
                                                                                                                     <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter">เครื่องพิมพ์ดีดไทย
                                                                                                                     <input type="text" name="dot" id="dot" required="required" style="width:30px" value="{{$persons->dot}}"/>คำ/นาที

                                                                                                                    </td>
                                                                                                                </tr>

                                                                                                                     <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                            <td>
                                                                                                                                    ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ): &emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                                                    <input type="checkbox" class="form-check-input" id="crash1" name="crash1"> ขัดข้อง
                                                                                                                                    <input type="checkbox" class="form-check-input" id="crash1" name="crash1"> ไม่ขัดข้อง
                                                                                                                            </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                    </tr>

                                                                                                                    <tr>
                                                                                                                            <td>
                                                                                                                                  ชื่อ:  <input type="text" name="compd" id="compd"  style="width:100px" value="{{$persons->compd}}"/>
                                                                                                                                  สถานที่ทำงาน:  <input type="text" name="compa" id="compa"  style="width:100px" value="{{$persons->compa}}"/>
                                                                                                                            </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                            <td>
                                                                                                                                ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                                                                                                <input type="checkbox" class="form-check-input" id="crash2" name="crash2" value=" ขัดข้อง"> ขัดข้อง
                                                                                                                                <input type="checkbox" class="form-check-input" id="crash2" name="crash2" value=" ไม่ขัดข้อง  "> ไม่ขัดข้อง

                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                                                                        <td colspan="3">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                             ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                                             <input type="checkbox" class="form-check-input" id="crash3" name="crash3"  value="ขัดข้อง"  > ขัดข้อง
                                                                                                                             <input type="checkbox" class="form-check-input" id="crash3" name="crash3"  value="ไม่ขัดข้อง" > ไม่ขัดข้อง

                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                                                    <td colspan="3">&nbsp;</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                         ท่านสามารถขับรถยนต์ได้หรือไม่&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                                         <input type="checkbox" class="form-check-input" id="yes" name="yes"  value="ได้"> ได้
                                                                                                                         <input type="checkbox" class="form-check-input" id="yes" name="yes"  value="ไม่ได้ "> ไม่ได้

                                                                                                                </td>
                                                                                                            </tr>


                                                                                                            <tr>
                                                                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                                                                <td colspan="3">&nbsp;</td>
                                                                                                            </tr>



                                                                                                            <tr>
                                                                                                                <td>
                                                                                                                    ท่านมีรถยนต์ส่วนตัวหรือไม่&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                                                        <input type="checkbox" class="form-check-input" id="owncar" name="owncar"> มี
                                                                                                                        <input type="checkbox" class="form-check-input" id="owncar" name="owncar"> ไม่มี

                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:<input type="text" id="workk" name="workk" style="width=150px" value="{{$persons->workk}}"/>

                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td>
                                                                                                                   ท่านพร้อมงานวันที่: <input type="date" id="dateworkk" name="dateworkk" style="width=150px"/>

                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                                                    <td colspan="3">&nbsp;</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                           ท่านเป็นเจ้าของรถประเภทใด: <input type="text" id="cardec" name="cardec" style="width=150px" value="{{$persons->cardec}}"/>
                                                                                                                           ทะเบียน:<input type="text" id="license" name="license" style="width=150px" value="{{$persons->license}}"/>
                                                                                                                        </td>
                                                                                                                    </tr>

                                                                                                                    <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                        </tr>

                                                                                                                        <td>
                                                                                                                                ท่านเคยให้ถูกออกจากงานหรือไม่: &emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exitwork" name="exitwork" >เคย เพราะ<input type="ans" id="ans" name="because" style="width=150px"/>
                                                                                                                                &emsp;&emsp;&emsp; <input type="checkbox" class="form-check-input" id="exitwork" name="exitwork">ไม่เคย

                                                                                                                             </td>
                                                                                                                         </tr>
                                                                                                                       <tr>
                                                                                                                            <td align="right" valign="middle">&nbsp;</td>
                                                                                                                            <td colspan="3">&nbsp;</td>
                                                                                                                        </tr>

                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                                ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="serious_ill" name="serious_ill">เคย
                                                                                                                                <input type="checkbox" class="form-check-input" id="serious_ill" name="serious_ill">ไม่เคย
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                                                                                    <td colspan="3">&nbsp;</td>
                                                                                                                                </tr>

                                                                                                                                <tr>
                                                                                                                                    <td>
                                                                                                                                        ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="offense" name="offense">เคย
                                                                                                                                    <input type="checkbox" class="form-check-input" id="offense" name="offense">ไม่เคย
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            <tr>
                                                                                                                        <td align="right" valign="middle">&nbsp;</td>
                                                                                                                 <td colspan="3">&nbsp;</td>
                                                                                                    </tr>

                                                                                        <tr>
                                                                                <td>
                                                                                    ขณะนี้คุณตั้งครรภ์หรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="pregnant" name="pregnant">ใช่
                                                                                <input type="checkbox" class="form-check-input" id="pregnant" name="pregnant">ไม่ใช่
                                                                                     </td>
                                                                    </tr>


                                             </td>
                                    </table>
                             </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                            {{ Form::submit('บันทึก',['class'=> 'btn btn-primary'])}}
                            {{ Form::close()}}
                    </div>
                  </div>

    </div>

 </div>
</div>
  @endsection
