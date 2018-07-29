@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
            <div class="col-md-7">
                    {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}}
            <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">ประวัติส่วนตัว</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                       
                      </div>
                    </div>
                    <div class="box-body">
                    

                            <table >
 
                                    <tbody>
                                            <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >
                                                    <tr>
                                                      <td >
                                                          <select style="width:65px">
                                                              <option value="ได้รับการยกเว้น">นาย</option>
                                                              <option  value="ศึกษาวิชาทหาร">นางสาว</option>
                                                              <option  value="ผ่านการเกณฑ์ทหาร">นาง</option>
                                                            </select>
                                                        
                                                        ชื่อ:&nbsp; <input type="text"name="name" id="name" required="required"style="width:100px" />&nbsp;&nbsp;&nbsp;
                                                        นามสกุล :<input type="text" name="lastname" id="lastname" required="required" style="width:100px" />&nbsp;&nbsp;&nbsp;
                                                        ชื่อเล่น:<input type="text" name="nikname" id="nikname" required="required" style="width: 45px" />&nbsp;&nbsp;&nbsp;
                                                        เพศ:&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="male">หญิง <input type="radio" name="gender" value="female">ชาย
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td >วันเกิด:<input type="date"name="date" id="date" required="required"style="width:130px" />
                                                          สัญชาติ:<input type="text" name="nationality" id="nationality" required="required"style="width:45px" />
                                                          เชื้อชาติ:<input type="text" name="race" id="race" required="required"style="width:45px"/>
                                                          ศาสนา:<input type="text" name="religion" id="religion" required="required"style="width:45px"/>
                                                        </td> 
                                                   </tr>
                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                                   <tr>
                                                        <td>อายุ:<input type="text"name="age" id="age" required="required"style="width:45px" />ปี&nbsp;&nbsp;&nbsp;
                                                          ส่วนสูง:<input type="text" name="height" id="height" required="required"style="width:45px" />ซม.&nbsp;&nbsp;&nbsp;
                                                          น้ำหนัก:<input type="text" name="weight" id="weieht" required="required"style="width:45px" />กก.&nbsp;&nbsp;&nbsp;
                                                          พีน้อง:<input type="text" name="brothers" id="brothers" required="required"style="width:45px"/>&nbsp;คน
                                                         เป็นคนที่:<input type="text" name="number" id="number" required="required"style="width:45px" />
                                  
                                                        </td>     
                                                   </tr>
                                  
                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                  
                                                    <tr>
                                                        <td>โทรศัพท์ที่ติดต่อ:<input type="text"name="tel" id="tel" required="required"style="width:100px" />&nbsp;&nbsp;&nbsp;
                                                          ที่บ้าน:<input type="text" name="home" id="home" required="required"style="width:100px" />&nbsp;&nbsp;&nbsp;
                                                          โทรศัพท์มือถือ:<input type="text" name="mobile" id="mobile" required="required"style="width:100px" />&nbsp;&nbsp;&nbsp;
                                                        
                                                        </td>     
                                                   </tr>
                                  
                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                  
                                  
                                                        <td>
                                                          สำนักงาน:<input type="text" name="office" id="office" required="required"style="width:100px"/>
                                                          อีเมล:<input type="email" name="email" id="email" required="required"style="width:100px" />
                                                          ที่อยู่สามารถติดต่อได้:<textarea name="address1" id="address1" required="required"></textarea>
                                                        </td>     
                                  
                                  
                                                        
                                                   <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                                  
                                  
                                                    <td>
                                                       ที่อยู่ตามบัตรประชาชน:<textarea name="address2" id="address2" required="required"></textarea>
                                                       เลขบัตรประชาชน:<input type="text" name="IDcard" id="IDcard" required="required"style="width:120px"/>
                                                       
                                                      </td>      
                                  
                                                      <tr>
                                                          <td align="right" valign="middle">&nbsp;</td>
                                                          <td colspan="3">&nbsp;</td>
                                                        </tr>
                                  
                                                        <td>
                                                            ออกให้ ณ อำเภอ/เขต:<input type="text" name="issued" id="issued" required="required"style="width:60px"/>
                                                            จังหวัด:<input type="text" name="province" id="province" required="required"style="width:60px"/>
                                                            วันออกบัตร:<input type="date" name="issueddate" id="issueddate" required='requrired' style="width:123px"/>
                                                            บัตรหมดอายุ:<input type="date" name="expid" id="exp"      required="required" style="width:120px"/>  
                                                           </td>    
                                  
                                                           <tr>
                                                              <td align="right" valign="middle">&nbsp;</td>
                                                              <td colspan="3">&nbsp;</td>
                                                            </tr>
                                  
                                                            <td>
                                                              บัตรประจำตัวผู้เสียภาษี:<input type="text" name="texid" id="textid" required="required"style="width:80px"/>
                                                              สถานะความเป็นอยู่:
                                                                <select style="width:80px">
                                                                    <option value="">:: เลือก ::</option>
                                                                  <option value="owm_home">บ้านส่วนตัว </option>
                                                                  <option  value="rent_home">บ้านเช่า</option>
                                                                  <option  value="live_with_parents">อาศัยกับบิดามารดา</option>
                                                                  <option value="live_with_other">อาศัยกับผู้อื่น</option>
                                                                </select>
                                                                สถานะครอบครัว: 
                                                                
                                                              <select>
                                                                   <option value="">:: เลือก ::</option>
                                                                  <option value="single">โสด</option>
                                                                  <option  value="married">สมรส</option>
                                                                  <option  value="divorced">หย่า</option>
                                                                  <option value="live_with_parants">หม้าย</option>
                                                                  <option value="separated">แยกกันอยู่</option>
                                                                  
                                                                </select>
                                                               
                                                           
                                                              
                                                            </td>
                                  
                                                            <tr>
                                                                <td align="right" valign="middle">&nbsp;</td>
                                                                <td colspan="3">&nbsp;</td>
                                                              </tr>
                                  
                                                              <td>
                                                                กรณีแต่งงาน:
                                                                <select style="width:80px">
                                                                    <option value="">:: เลือก ::</option>
                                                                    <option value="registered">จดทะเบียนสมรส</option>
                                                                    <option  value="non_registered">ไม่ได้จดทะเบียนสมรส</option>
                                                                  </select>
                                  
                                                                  คู่สมรสมีเงินได้หรือไม่:
                                                                  <select style="width:80px">
                                                                      <option value="">:: เลือก ::</option>
                                                                      <option value="yes">มี</option>
                                                                      <option  value="no">ไม่มี</option>
                                                                    </select>
                                                              </td>
                                  
                                                              <tr>
                                                                  <td align="right" valign="middle">&nbsp;</td>
                                                                  <td colspan="3">&nbsp;</td>
                                                                </tr>
                                  
                                                                <td>
                                                                  ชื่อคู่สมรส: 
                                                                  <input type="text" name="name_spouse" id="name_spouse" required="required" style="width:100px"/>
                                                                  อาชีพคู่สมรส:
                                                                  <input type="text" name="spouse_occupation" id="spouse_occupation" required="required" style="width:100px"/>
                                                                  สถานที่ทำงาน:
                                                                  <input type="text" name="firm_address" id="firm_address" required="required" style="width:100px"/>
                                                                </td>
                                  
                                                                 <tr>
                                                                  <td align="right" valign="middle">&nbsp;</td>
                                                                  <td colspan="3">&nbsp;</td>
                                                                </tr>
                                  
                                                                <td>
                                                                  จำนวนบุตรทั้งหมด <input type="text" name="children" id="children" required="required" style="width:50px"/> คน
                                                                  ชาย:<input type="text" name="boy" id="boy" required="required" style="width:50px"/> คน
                                                                  หญิง:<input type="text" name="girls" id="girls" required="required" style="width:50px"/>คน
                                                                  จำนวนบุตรกำลังศึกษา:<input type="text" name="school" id="school" required="required" style="width:50px"/>คน
                                                                 
                                                                </td>
                                  
                                                                <tr>
                                                                    <td align="right" valign="middle">&nbsp;</td>
                                                                    <td colspan="3">&nbsp;</td>
                                                                  </tr>
                                  
                                                                  <td>
                                                                จำนวนบุตรที่อายุเกิน 21 ปี:<input type="text" name="over21" id="over21" required="required" style="width:50px"/>คน
                                                                สถานะทางทหาร:
                                                                <select style="width:110px">
                                                                    <option value="-">ไม่มี</option>
                                                                    <option value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
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
                                                                      <input type="text" name="father" id="father" required="required" style="width:100px"/>
                                                                      นามสกุล:
                                                                      <input type="text" name="lfather" id="lfather" required="required" style="width:100px"/>
                                                                      ชื่อมารดา:
                                                                      <input type="text" name="mother" id="mother" required="required" style="width:100px"/>
                                                                      นามสกุล:
                                                                      <input type="text" name="lmother" id="lmother" required="required" style="width:100px"/>
                                                                    </td>
                                  
                                                  </table> 
                                    </tbody>
                                  </table> 








                    </div>
                    <div class="box-footer">
                     
                    </div>
                  </div>
                  <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">ประวัติการศึกษา</h3>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="box-body">
                                <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >
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
                                           <input type="text" id="primary" name="primary" required="required" style="width:100px"/>
                                           &emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                           <select name="year" id="yearF" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearE" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpa" name="gpa" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="major" name="major" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                                      
                                    
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                   
                                     
                                      <tr>
                
                                          <td>
                                         มัธยมศึกษา:
                                           <input type="text" id="secondary" name="secondary" required="required" style="width:125px"/>
                                           &emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                           <select name="year" id="yearsF" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsE" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpas" name="gpas" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majors" name="majors" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                                      
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                   
                                     
                                      <tr>
                
                                          <td>
                                        อาชีวะศึกษา:
                                           <input type="text" id="vocation" name="vocation" required="required" style="width:122px"/>
                                           &emsp;&emsp;&nbsp;&nbsp;
                                           <select name="year" id="yearsV" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsV" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpav" name="gpav" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majorv" name="majorv" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                   
                                     
                                      <tr>
                
                                          <td>
                                         อนุปริญญา:
                                           <input type="text" id="diploma" name="diploma" required="required" style="width:129.5px"/>
                                           &emsp;&emsp;&nbsp;&nbsp;
                                           <select name="year" id="yearsD" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsD" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpad" name="gpad" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majord" name="majord" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                
                
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                      <tr>
                                          <td>
                                         ปริญญาตรี:
                                           <input type="text" id="bachelor" name="bachelor" required="required" style="width:131px"/>
                                           &emsp;&emsp;&nbsp;&nbsp;
                                           <select name="year" id="yearsB" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsB" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpab" name="gpab" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majorb" name="majorb" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                   
                                     
                                      <tr>
                
                                          <td>
                                         ปริญญาโท:
                                           <input type="text" id="master" name="master" required="required" style="width:129px"/>
                                           &emsp;&emsp;&nbsp;
                                           <select name="year" id="yearsM" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsM" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                              &emsp;&emsp;&emsp;
                                           <input type="text" id="gpam" name="gpam" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majorm" name="majorm" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                                   
                                     
                                      <tr>
                
                                          <td>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อื่นๆ:
                                           <input type="text" id="otherE" name="other" required="required" style="width:123px"/>
                                           &emsp;&emsp;
                                           <select name="year" id="yearsO" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                           ถึง:
                                           <select name="year" id="yearsO" >
                
                                              <option value="">:: ปี ::</option>
                                              
                                              <?php for($i=0; $i<=100; $i++) { ?>
                                              
                                              <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
                                              
                                              <?php } ?>
                                              
                                              </select>
                                            &emsp;&emsp;&emsp;
                                           <input type="text" id="gpao" name="gpao" required="required" style="width:50px"/>
                                           &emsp;&emsp;&emsp;
                                           <input type="text" id="majoro" name="majoro" required="required" style="width:150px"/>
                                          </td>
                                    </tr>
                
                
                                            </table> 
                        </div>
                        <div class="box-footer">
                        </div>
                      </div>


                      <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">ด้านภาษา</h3>
                    
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                             

                                    <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >
                                            <tr>
                                                <td >
                                                 ภาษาไทย:->การพูด: <select style="width:65px" id="ThaiS">
                                                    <option value="ดี">ดี</option>
                                                    <option  value="พอใช้">พอใช้</option>
                                                    <option  value="ไม่ดี">ไม่ดี</option>
                                                    </select>
                                                ->การฟัง: <select style="width:65px" id="ThaiL">
                                                        <option value="ดี">ดี</option>
                                                        <option  value="พอใช้">พอใช้</option>
                                                        <option  value="ไม่ดี">ไม่ดี</option>
                                                        </select>
                                                ->การอ่าน: <select style="width:65px" id="ThaiR">
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
                                                     ภาษาอังกฤษ:->การพูด: <select style="width:65px" id="EnglisS">
                                                        <option value="ดี">ดี</option>
                                                        <option  value="พอใช้">พอใช้</option>
                                                        <option  value="ไม่ดี">ไม่ดี</option>
                                                        </select>
                                                    ->การฟัง: <select style="width:65px" id="EnglisL">
                                                            <option value="ดี">ดี</option>
                                                            <option  value="พอใช้">พอใช้</option>
                                                            <option  value="ไม่ดี">ไม่ดี</option>
                                                            </select>
                                                    ->การอ่าน: <select style="width:65px" id="EnglisR">
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
                                                       <input type="text" name="otherr" id="otherr" style="width:100px"/>
                                                       การพูด: <select style="width:65px" id="OtheS">
                                                          <option value="ดี">ดี</option>
                                                          <option  value="พอใช้">พอใช้</option>
                                                          <option  value="ไม่ดี">ไม่ดี</option>
                                                          </select>
                                                      ->การฟัง: <select style="width:65px" id="OtheL">
                                                              <option value="ดี">ดี</option>
                                                              <option  value="พอใช้">พอใช้</option>
                                                              <option  value="ไม่ดี">ไม่ดี</option>
                                                              </select>
                                                      ->การอ่าน: <select style="width:65px" id="OtheR">
                                                                  <option value="ดี">ดี</option>
                                                                  <option  value="พอใช้">พอใช้</option>
                                                                  <option  value="ไม่ดี">ไม่ดี</option>
                                                                  </select>
                                  
                                                      </td>
                                                    </tr>
                            
                                            </table>
                            
                            <div class="box-footer">
                             
                            </div>
                          </div>          
        </div>


        <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">ประวัติการทำงาน</h3>
        
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
               
                  </div>
                </div>
           
                <div class="box-body">
            
                        <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >    

                                <tr>
                                    
                                    <td>
                                      ชื่อสถานที่ประกอบการ: 
                                       
                                    </td>
                                  </tr>
                                  <br>
            
                                <tr>
                                    <td align="right" valign="middle">&nbsp;</td>
                                    <td colspan="3">&nbsp;</td>
                                  </tr>
            
                                  <tr>
                                      <td>
                                  1.  <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                  ลักษณะงานที่รับผิดชอบ: <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                  โทร: <input type="text" name="p" id="p" style="width:150px"/>
            
                                      </td>
                                      
                                <tr>
                                    <td align="right" valign="middle">&nbsp;</td>
                                    <td colspan="3">&nbsp;</td>
                                  </tr>
            
                                  <tr>
                                      <td>
                                  ระยะเวลางาน:<input type="date" name="date" id="date" style="width:150px"/>
                                  ถึงวันที่: <input type="date" name="date" id="date" style="width:150px"/>
                                  ตำแหน่ง: <input type="text" name="p" id="p" style="width:150px"/>
            
                                      </td>
                                      <tr>
                                          <td align="right" valign="middle">&nbsp;  
                                           
                                          </td>
                                          <td colspan="3">&nbsp;</td>
                                        </tr>
            
                                        <td>
                                       สาเหตุที่ออก:<input type="text" name="ReasonLeaving" id="ReasonLeaving" style="width:150px"/>
                                        เงินเดือนครั้งสุดท้าย: <input type="text" name="LastSalary" id="LastSalary"style="width:150px"/> บาท
                                        </td>
                                <tr>
            
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                        
                                      </tr>
                        <tr> <td> ----------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
                           <tr>
                                      <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                    
                                  </tr>
                                      <tr>
                                         
                                          <td>
                                             
                                      2.  <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                      ลักษณะงานที่รับผิดชอบ: <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                      โทร: <input type="text" name="p" id="p" style="width:150px"/>
                
                                          </td>
                                          
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                      </tr>
                
                                      <tr>
                                          <td>
                                      ระยะเวลางาน:<input type="date" name="date" id="date" style="width:150px"/>
                                      ถึงวันที่: <input type="date" name="date" id="date" style="width:150px"/>
                                      ตำแหน่ง: <input type="text" name="p" id="p" style="width:150px"/>
                
                                          </td>
                                          <tr>
                                              <td align="right" valign="middle">&nbsp;</td>
                                              <td colspan="3">&nbsp;</td>
                                            </tr>
                
                                            <td>
                                           สาเหตุที่ออก:<input type="text" name="ReasonLeaving" id="ReasonLeaving" style="width:150px"/>
                                            เงินเดือนครั้งสุดท้าย: <input type="text" name="LastSalary" id="LastSalary"style="width:150px"/>บาท
                                            </td>
                                    <tr>
                                        <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                          </tr>
                                          <tr> <td> ----------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
                                          <tr>
                                                     <td align="right" valign="middle">&nbsp;</td>
                                                           <td colspan="3">&nbsp;</td>
                                   
                                                 </tr>
                                                     <tr>
                                          <tr>
                                              <td>
                                          3.  <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                          ลักษณะงานที่รับผิดชอบ: <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                          โทร: <input type="text" name="p" id="p" style="width:150px"/>
                    
                                              </td>
                                              
                                        <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                          </tr>
                    
                                          <tr>
                                              <td>
                                          ระยะเวลางาน:<input type="date" name="date" id="date" style="width:150px"/>
                                          ถึงวันที่: <input type="date" name="date" id="date" style="width:150px"/>
                                          ตำแหน่ง: <input type="text" name="p" id="p" style="width:150px"/>
                    
                                              </td>
                                              <tr>
                                                  <td align="right" valign="middle">&nbsp;</td>
                                                  <td colspan="3">&nbsp;</td>
                                                </tr>
                    
                                                <td>
                                               สาเหตุที่ออก:<input type="text" name="ReasonLeaving" id="ReasonLeaving" style="width:150px"/>
                                                เงินเดือนครั้งสุดท้าย: <input type="text" name="LastSalary" id="LastSalary"style="width:150px"/>บาท
                                                </td>
                                        <tr>
                                            <tr>
                                                <td align="right" valign="middle">&nbsp;</td>
                                                <td colspan="3">&nbsp;</td>
                                              </tr>
                                              <tr> <td> ----------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
                                              <tr>
                                                         <td align="right" valign="middle">&nbsp;</td>
                                                               <td colspan="3">&nbsp;</td>
                                       
                                                     </tr>
                                                         <tr>
                                              <tr>
                                                  <td>
                                             4.  <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                              ลักษณะงานที่รับผิดชอบ: <input type="text" name="listE1" id="listE1" style="width:150px"/>
                                              โทร: <input type="text" name="p" id="p" style="width:150px"/>
                        
                                                  </td>
                                                  
                                            <tr>
                                                <td align="right" valign="middle">&nbsp;</td>
                                                <td colspan="3">&nbsp;</td>
                                              </tr>
                        
                                              <tr>
                                                  <td>
                                              ระยะเวลางาน:<input type="date" name="date" id="date" style="width:150px"/>
                                              ถึงวันที่: <input type="date" name="date" id="date" style="width:150px"/>
                                              ตำแหน่ง: <input type="text" name="p" id="p" style="width:150px"/>
                        
                                                  </td>
                                                  <tr>
                                                      <td align="right" valign="middle">&nbsp;</td>
                                                      <td colspan="3">&nbsp;</td>
                                                    </tr>
                        
                                                    <td>
                                                   สาเหตุที่ออก:<input type="text" name="ReasonLeaving" id="ReasonLeaving" style="width:150px"/>
                                                    เงินเดือนครั้งสุดท้าย: <input type="text" name="LastSalary" id="LastSalary"style="width:150px"/>บาท
                                                    </td>
                                            <tr>
                                    
                                </table>
                </div>
         
                <div class="box-footer">
                 
                </div>
              </div>
              

              
              <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title">บุคคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</h3>
            
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   
                      </div>
                    </div>
               
                    <div class="box-body">
                
                        <table style="width:1300px" border="0"  cellpadding="0" cellspacing="0"  >   
                            <tr>
                                <td>  
                                   ชื่อ:<input type="text" name="namecm" id="namecm" required="required" style="width=100px"/>
                                   นามสกุล:<input type="text" name="lastnamecm" id="lastnamecm" required="required" style="width=100px"/>
                                   สถานที่ทำงาน:<input type="text" name="firm" id="firm" required="required" style="width=200px"/> 
                                 
                                
                                </td>  
                            </tr>
                       
                            <tr>
                                    <td align="right" valign="middle">&nbsp;</td>
                                    <td colspan="3">&nbsp;</td>
                                  </tr>
                       
                       
                            <tr>
                                    <td>  
                                       
                                       เบอร์โทรศัพท์:<input  type="text" name="tele" id="tele" required="required" style="width=100px"/>
                                       ตำแหน่ง:<input  type="text" name="position" id="position" required="required" style="width=100px"/>
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
                                                    
                                                            
                                     <input type="checkbox" class="form-check-input" id="computer">คอมพิวเตอร์ ระบุ: <input  type="text" name="แนท" id="com" required="required" style="width=100px"/>
                                     &nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="to">เครื่องโทรสาร
                             &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input" id="do">เครื่องพิมพ์ดีดไทย<input  type="text" name="dot" id="dot" required="required" style="width=50px"/>คำ/นาที
                                                                   
                                                           
                                                     
                                                   
                                            </td>
                                    </tr>      
                
                                    <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                    </tr>  
                               
            
            
            
                                    <tr>
                                            <td>
            
                                    ระบุ: <input  type="text" name="แนท" id="com" required="required" style="width=100px"/>
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" id="to">เครื่องโทรสาร
                                     <input type="checkbox" class="form-check-input" id="do">เครื่องพิมพ์ดีดไทย<input  type="text" name="dot" id="dot" required="required" style="width=50px"/>คำ/นาที
            
                                    </td>
                                </tr>             
            
                                     <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                    </tr>  
                                    <tr>
                                            <td>
                                                    ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ): &emsp;&emsp;&emsp;&emsp;&emsp;
                                                    <input type="checkbox" class="form-check-input" id="yesS"> ขัดข้อง
                                                    <input type="checkbox" class="form-check-input" id="yesS"> ไม่ขัดข้อง
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                    </tr>  
                               
                                    <tr>
                                            <td>
                                                  ชื่อ:  <input type="text" name="compd" id="compa"  style="width:100px"/>
                                                  สถานที่ทำงาน:  <input type="text" name="compd" id="compa"  style="width:100px"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                    </tr>  
                                    <tr>
                                            <td>
                                                ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                                    <input type="checkbox" class="form-check-input" id="pop"> ขัดข้อง
                                                    <input type="checkbox" class="form-check-input" id="pop"> ไม่ขัดข้อง        
            
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td align="right" valign="middle">&nbsp;</td>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>      
                                    <tr>
                                        <td>
                                             ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม&emsp;&emsp;&emsp;&emsp;&emsp;
                                                <input type="checkbox" class="form-check-input" id="pop"> ขัดข้อง
                                                <input type="checkbox" class="form-check-input" id="pop"> ไม่ขัดข้อง        
            
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right" valign="middle">&nbsp;</td>
                                    <td colspan="3">&nbsp;</td>
                                </tr>  
                                <tr>
                                    <td>
                                         ท่านสามารถขับรถยนต์ได้หรือไม่&emsp;&emsp;&emsp;&emsp;&emsp;
                                            <input type="checkbox" class="form-check-input" id="car"> ได้
                                            <input type="checkbox" class="form-check-input" id="carno"> ไม่ได้      
            
                                </td>
                            </tr>
                           
                           
                            <tr>
                                <td align="right" valign="middle">&nbsp;</td>
                                <td colspan="3">&nbsp;</td>
                            </tr> 
                            
                            
                            
                            <tr>
                                <td>
                                    ท่านมีรถยนต์ส่วนตัวหรือไม่&emsp;&emsp;&emsp;&emsp;&emsp;
                                        <input type="checkbox" class="form-check-input" id="owncar"> มี
                                        <input type="checkbox" class="form-check-input" id="owncar"> ไม่มี        
            
                            </td>
                        </tr>
            
                        <tr>
                            <td align="right" valign="middle">&nbsp;</td>
                            <td colspan="3">&nbsp;</td>
                        </tr> 
                        <tr>
                            <td>
                                บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:<input type="text" id="workk" name="workk" style="width=150px"/>
                                
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
                                           ท่านเป็นเจ้าของรถประเภทใด: <input type="cardec" id="cardec" name="cardec" style="width=150px"/>
                                           ทะเบียน:<input type="License" id="License" name="License" style="width=150px"/>
                                        </td>
                                    </tr> 
            
                                    <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
            
                                        <td>
                                                ท่านเคยให้ถูกออกจากงานหรือไม่: &emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exitwork">เคย
                                                <input type="checkbox" class="form-check-input" id="exitwork">ไม่เคย  เพราะ<input type="ans" id="ans" name="License" style="width=150px"/>
            
                                             </td>
                                         </tr> 
                                       <tr>
                                            <td align="right" valign="middle">&nbsp;</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="ill">เคย
                                                <input type="checkbox" class="form-check-input" id="ill">ไม่เคย
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td align="right" valign="middle">&nbsp;</td>
                                                    <td colspan="3">&nbsp;</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                            ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="offense">เคย
                                                        <input type="checkbox" class="form-check-input" id="offense">ไม่เคย
                                                        </td>
                                                    </tr>   
                                                    <tr>
                                                            <td align="right" valign="middle">&nbsp;</td>
                                                            <td colspan="3">&nbsp;</td>
                                                        </tr>
            
                                                        <tr>
                                                                <td>
                                                                       ขณะนี้คุณตั้งครรภ์หรือไม่?&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="pregnant">ใช่
                                                                    <input type="checkbox" class="form-check-input" id="pregnant">ไม่ใช่
                                                                    </td>
                                                                </tr>   
            
            
                        </table>
             
                    <div class="box-footer">
                     
                    </div>
            </div>
           
    </div>
    {{ Form::submit('บันทึก',['class'=> 'btn btn-primary'])}}
</div>
  
  @endsection