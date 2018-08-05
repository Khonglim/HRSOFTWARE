@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
               
            {{Form::open(['route'=>['employee.update',$position->id],'method'=>'PUT','files' => true])}}
        
          
        <div class="row">
                <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">ประวัติส่วนตัว</h3>
                    </div>
                    <div class="box-body">
                     
                        <div class="row">      
                                <div class="col-md-2">
                                        <div class="form-group">
                                    <label for="name">ชื่อ</label> 
                                    <input type="text" name ="name"  id="name"class="form-control" required="required" >
                                        </div>
                                </div> 
                                <div class="col-md-2">
                                        <div class="form-group">
                                        <label >นามสกุล</label> 
                                        <input type="text" name="lastname"  id="lastname" class="form-control"  required="required" >
                                    </div>
                                    </div> 
                                <div class="col-md-2">
                                        <div class="form-group">
                                            <label >ชื่อล่น</label> 
                                            <input type="text" class="form-control"  name="nikname"  id="nikname" required="required">
                                        </div>
                                 </div> 
                                 <div class="col-md-2">
                                        <label >เพศ</label><br>
                                        <input type="radio" name="gender" value="male">ชาย <input type="radio" name="gender" value="female" >หญิง
    
                                       
                                </div> 
    
                                <div class="col-md-2">
                                                <label >รูปภาพ</label><br>
                                                {{Form::file('image')}}
                                            
                              </div>
                              <div class="col-md-2">
                                        <label >วันเกิด</label><br>
                                        <input type="date"name="birthday" id="birthday" required="required" class="form-control" />
  
    
                      </div>
    
    
    
                             
                            </div>
                      
                            <div class="row">  
                                    <div class="form-group">
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >สัญชาติ</label>
                                            <input type="text" name="nationality" id="nationality" required="required" class="form-control"  />
                                            </div>
                                    </div> 
    
                                    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >เชื้อชาติ</label>
                                            <input type="text" name="race" id="race" required="required" class="form-control"/>
                                            </div>
                                    </div> 
                                    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >ศาสนา</label>
                                            <input type="text" name="religion" id="religion" required="required" class="form-control" />
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >อายุ</label>
                                            <input type="text"name="age" id="age" required="required" class="form-control"  class="form-control"/>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >ส่วนสูง</label>
                                            <input type="text" name="height" id="height" required="required"   class="form-control"/>
                                            </div>
                                    </div> 
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >น้ำหนัก</label>
                                            <input type="text" name="weight" id="weieht" required="required"   class="form-control"/>
                                            </div>
                                    </div> 
                                </div> 
                            </div>
      
                            <div class="row">  
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >พี่น้องกี่คน</label>
                                            <input type="text" name="brothers" id="brothers" required="required"   class="form-control"/>
                                            </div>
                                    </div> 
    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >เป็นคนที่</label>
                                            <input type="text" name="number" id="number" required="required"   class="form-control"/>
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์ที่ติดต่อ</label>
                                            <input type="text" name="tel" id="tel" required="required"   class="form-control" />
                                            </div>
                                    </div>
    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์บ้าน</label>
                                            <input type="text" name="home" id="home" required="required"   class="form-control" />
                                            </div>
                                    </div>
    
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์มือถือ</label>
                                            <input type="text" name="mobile" id="mobile" required="required"   class="form-control" />
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >โทรศัพท์สำนักงาน</label>
                                            <input type="text" name="office" id="office" required="required"  class="form-control" />
                                            </div>
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >อีเมล</label>
                                            <input type="email" name="email" id="email" required="required"  class="form-control" />
                                            </div>
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก</label>
                                            <textarea name="address1" id="address1" required="required" class="form-control"   ></textarea>
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label > ที่อยู่ตามบัตรประชาชน</label>
                                            <textarea name="address2" id="address2" required="required" class="form-control"    ></textarea>
                                            </div>
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >เลขบัตรประชาชน</label>
                                            <input type="text" name="idcard" id="idcard" required="required"   class="form-control" />
                                            </div>
                                    </div>
    
                                    
                            </div>
    
                            <div class="row">
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >ออกให้ ณ อำเภอ/เขต:</label>
                                            <input type="text" name="issued" id="issued" required="required"  class="form-control" />
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >จังหวัด</label>
                                            <input type="text" name="province_crad" id="province_crad" required="required"  class="form-control" />
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >วันออกบัตร</label>
                                            <input type="date" name="issueddate" id="issueddate" required="required"   class="form-control" />
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >บัตรหมดอายุ:</label>
                                            <input type="date" name="expid" id="expid" required="required"   class="form-control" />
                                            </div>
                                    </div>
                            </div>
    
    
                      <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                    <label >บัตรประจำตัวผู้เสียภาษี</label>
                                    <input type="text" name="้texid" id="texid" required="required"   class="form-control" />
                                    </div>
                            </div>
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <label >สถานะความเป็นอยู่</label>
                                            <select name="living_status"  class="form-control">
                                                    <option value="-">:: เลือก ::</option>
                                                      <option  value="owm_home">บ้านส่วนตัว </option>
                                                      <option  value="rent_home">บ้านเช่า</option>
                                                      <option value="live_with_parents">อาศัยกับบิดามารดา</option>
                                                      <option  value="live_with_other">อาศัยกับผู้อื่น</option>
                                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                            <label >สถานะครอบครัว</label>
                                            <select name="marital_status"  class="form-control" >
                                                    <option  value="-">:: เลือก ::</option>
                                                    <option  value="single">โสด</option>
                                                    <option  value="married">สมรส</option>
                                                    <option  value="divorced">หย่า</option>
                                                    <option  value="live_with_parants">หม้าย</option>
                                                    <option  value="separated">แยกกันอยู่</option>
    
                                                  </select>
                                    </div> 
                                </div>
    
                                <div class="col-md-2">
                                        <div class="form-group">
                                                <label >กรณีแต่งงาน</label>
                                                <select style="width:170px" name="if_marricd"  class="form-control" >
                                                        <option      value="">:: เลือก ::</option>
                                                        <option      value="จดทะเบียนสมรส">จดทะเบียนสมรส</option>
                                                        <option      value="ไม่ได้จดทะเบียนสมรส">ไม่ได้จดทะเบียนสมรส</option>
                                                      </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                            <label >คู่มสมรส</label>
                                            <select  name="spouse"  class="form-control">
                                                    <option  value="-">:: เลือก ::</option>
                                                    <option   value="มี">มี</option>
                                                    <option   value="ไม่มี">ไม่มี</option>
                                                  </select>
                                            </div>
                                    </div>
                                
                      </div>
                    <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                            <label >ชื่อคู่สมรส</label>
                                            <input type="text" name="name_spouse" id="name_spouse"  class="form-control"/>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                        <div class="form-group">
                                                <label >อาชีพคู่สมรส</label>
                                                <input type="text" name="spouse_occupation" id="spouse_occupation"  class="form-control" />
                                        </div> 
                                    </div>
    
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                    <label > สถานที่ทำงาน</label>
                                                    <input type="text" name="firm_address" id="firm_address"  class="form-control" />
                                            </div> 
                                        </div>
    
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >โทรศัพท์</label>
                                                        <input type="text" name="spouse_tel" id="spouse_tel"  class="form-control" />
                                                </div> 
                                            </div>
                          </div> 
                          
                          <div class="row">
                                <div class="col-md-2">
                                <div class="form-group">
                                        <label >จำนวนบุตรทั้งหมด</label>
                                        <input type="text" name="children" id="children"  class="form-control" />
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                    <div class="form-group">
                                            <label >หญิง</label>
                                            <input type="text" name="girls" id="girls"  class="form-control" />
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                        <div class="form-group">
                                                <label >ชาย</label>
                                                <input type="text" name="boy" id="girls"  class="form-control" />
                                        </div>
                                    </div>
        
                                    <div class="col-md-2">
                                            <div class="form-group">
                                                    <label > จำนวนบุตรกำลังศึกษา</label>
                                                    <input type="text" name="school" id="school"  class="form-control" />
                                            </div>
                                        </div>
    
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >จำนวนบุตรที่อายุเกิน21ปี</label>
                                                        <input type="text" name="over21" id="over21"  class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label > สถานะทางทหาร</label>
                                                    <select style="width:100px" name="military_service" class="form-control" >
                                                            <option value="">ไม่มี</option>
                                                            <option  value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
                                                            <option  value="ศึกษาวิชาทหาร">ศึกษาวิชาทหาร</option>
                                                            <option  value="ผ่านการเกณฑ์ทหาร">ผ่านการเกณฑ์ทหาร</option>
                                                            <option  value="อื่นๆ">อื่นๆ</option>
                                                          </select>
                                                        </div> 
                                                </div>
                                </div>
                                <div class="row">
                                      
    
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label > ชื่อบิดา</label>
                                                    <input type="text" name="namefather" id="namefather" required="required"  class="form-control"/>
                                                </div>
                                            </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label >นามสกุล</label>
                                                        <input type="text" name="lastfather" id="lastfather" required="required"  class="form-control" />
                                                    </div>
                                                </div>
                                                    <div class="col-md-3">
                                                            <div class="form-group">
                                                            <label >อาชีพ</label>
                                                            <input type="text" name="occupation_father" id="occupation_father" required="required"  class="form-control"/>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-3"><br>
                                                            <div class="form-group">
                                                                
                                                                <input type="radio" name="alivef" value="ยังมีชีวิตอยู่">ยังมีชีวิตอยู่ <input type="radio" name="alivef" value="ถึงแก่กรรม">ถึงแก่กรรม
                                                            </div>
                                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3">
                                                <div class="form-group">
                                                <label > ชื่อมารดา</label>
                                                <input type="text" name="namemother" id="namemother" required="required"  class="form-control"  placeholder="ชื่อมารดา"/>
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label >นามสกุล</label>
                                                    <input type="text" name="lasrmother" id="lasrmother" required="required"  class="form-control"  placeholder="นามสกุล"/>
                                                </div>
                                            </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label >อาชีพ</label>
                                                        <input type="text" name="occupationm" id="occupationm" required="required"  class="form-control"  placeholder="อาชีพ"/>
                                                    </div>
                                                </div>
                                                    <div class="col-md-3"><br>
                                                        <div class="form-group">
                                                            <input type="radio" name="alivem" value="ยังมีชีวิตอยู่">ยังมีชีวิตอยู่ <input type="radio" name="alivem" value="ถึงแก่กรรม">ถึงแก่กรรม
                                     </div>
                                </div>
                           </div>      
                      </div>
                  </div>
             </div>
        </div>


        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header">
                      <h3 class="box-title">ประวัติการศึกษา</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>ระดับการศึกษา</th>
                                            <th>ชื่อสถาบัน</th>
                                            <th>เริ่มปีการศึกษา</th>
                                            <th>จบปีการศึกษา</th>
                                            <th>เกรดเฉลี่ย</th>
                                            <th>สาขา</th>
                                            <th>วุฒที่ได้รับ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr >
                                            <td align="center" >ประถมศึกษา</td>
                                            <td><input type="text" id="primary" name="primary" required="required"  class="form-control"   /></td>
                                            <td> 
                                                   
                                                <select name="year1" id="year1" class="form-control">
        
                                                    <option value="">:: ปี ::</option>
        
                                                    <?php for($i=0; $i<=100; $i++) { ?>
        
                                                    <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                    <?php } ?>
        
                                                    </select>
                                                    
                                            
                                           
                                                </td>
                                                <td>
                                               
                                                     <select name="year2" id="year2" class="form-control" >
            
                                                        <option value="">:: ปี ::</option>
            
                                                        <?php for($i=0; $i<=100; $i++) { ?>
            
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
            
                                                        <?php } ?>
            
                                                        </select>
                                                    
                                                
                                               
                                                </td>
                                            <td><input type="text" id="gpa" name="gpa" required="required" class="form-control" /></td>
                                            <td><input type="text" id="major" name="major" required="required" class="form-control"  /></td>
                                            <td><input type="text" id="degree1" name="degree1" required="required1" class="form-control"/></td>
                                          </tr>
                                          <tr>
                                                <td>มัธยมศึกษา</td>
                                                <td> <input type="text" id="secondary" name="secondary" required="required"  class="form-control"  /></td>
                                                <td> <select name="year3" id="year3"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
        
                                                <td> <select name="year4" id="year4"  class="form-control">
        
                                                 <option value="">:: ปี ::</option>
        
                                                 <?php for($i=0; $i<=100; $i++) { ?>
        
                                             <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                 <?php } ?>
        
                                             </select></td>
                                                <td> <input type="text" id="gpas" name="gpas" required="required"  class="form-control"  /></td>
                                                <td>  <input type="text" id="majors" name="majors" required="required" class="form-control" /></td>
                                                <td><input type="text" id="degree2" name="degree2" required="required2"  class="form-control" /></td>
                                          </tr>
        
                                          <tr>
                                                <td>อาชีวะศึกษา</td>
                                                <td><input type="text" id="vocation" name="vocation" required="required"  class="form-control"/></td>
                                                <td><select name="year5" id="year5" class="form-control" >
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td> <select name="year6" id="year6" class="form-control" >
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td> <input type="text" id="gpav" name="gpav" required="required"  class="form-control"/></td>
                                                <td><input type="text" id="majorv" name="majorv" required="required" class="form-control"/></td>
                                                <td><input type="text" id="degree3" name="degree3" required="required1" class="form-control"/></td>
                                          </tr>
        
                                          <tr>
                                                <td>อนุปริญญา</td>
                                                <td><input type="text" id="diploma" name="diploma" required="required"  class="form-control"/></td>
                                                <td><select name="year7" id="year7"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td><select name="year8" id="year8" class="form-control" >
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td><input type="text" id="gpad" name="gpad" required="required"  class="form-control"  /></td>
                                                <td> <input type="text" id="majord" name="majord" required="required"  class="form-control"  /></td>
                                                <td><input type="text" id="degree4" name="degree4" required="required1"  class="form-control" /></td>
                                          </tr>
        
        
                                          <tr>
                                                <td>ปริญญาตรี</td>
                                                <td><input type="text" id="bachelor" name="bachelor" required="required"  class="form-control"/></td>
                                                <td><select name="year9" id="year9"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td> <select name="year10" id="year10"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td> <input type="text" id="gpab" name="gpab" required="required"  class="form-control" /></td>
                                                <td> <input type="text" id="majorb" name="majorb" required="required" class="form-control" /></td>
                                                <td><input type="text" id="degree5" name="degree5" required="required" class="form-control" /></td>
                                          </tr>
        
                                      
        
                                          <tr>
                                                <td>ปริญญาโท</td>
                                                <td><input type="text" id="master" name="master" required="required"  class="form-control" /> </td>
                                                <td> <select name="year11" id="year11"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select></td>
                                                <td><select name="year12" id="year12"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select>
                                                </td>
                                                <td> <input type="text" id="gpam" name="gpam" required="required" class="form-control"/></td>
                                                <td> <input type="text" id="majorm" name="majorm" required="required"  class="form-control"/></td>
                                                <td><input type="text" id="degree6" name="degree6" required="required"  class="form-control" /></td>
                                          </tr>
        
        
                                          <tr>
                                                <td>อื่นๆ</td>
                                                <td> <input type="text" id="otherE" name="otherE" required="required"  class="form-control" /></td>
                                                <td> <select name="year13" id="year13"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select>
                                                </td>
                                                <td><select name="year14" id="year14"  class="form-control">
        
                                                        <option value="">:: ปี ::</option>
        
                                                        <?php for($i=0; $i<=100; $i++) { ?>
        
                                                        <option value="<?php echo date("Y")-$i; ?>"><?php echo date("Y")-$i+543; ?></option>
        
                                                        <?php } ?>
        
                                                        </select>
                                                </td>
                                                <td> <input type="text" id="gpao" name="gpao" required="required"  class="form-control" /></td>
                                                <td><input type="text" id="majoro" name="majoro" required="required" class="form-control"  /></td>
                                                <td><input type="text" id="degree7" name="degree7" required="required"  class="form-control"/></td>
                                          </tr>
                                        </tbody>
                                      </table>
                              </div>



                  </div>  
           </div>            
     </div>
</div>


<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">ภาษา</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>ประเภทภาษา</th>
                                    <th>การพูด</th>
                                    <th>การเข้าใจ</th>
                                    <th>การเขียน</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>ไทย</td>
                                    <td><select style="width:65px" id="thais" name="thais" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="thail"  name="thail" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="thair"  name="thair" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                  </tr>
                                  <tr>
                                    <td>อังกฤษ</td>
                                    <td><select style="width:65px" id="engliss" name="engliss" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="englisl" name="englisl" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="englisr" name="englisr" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                  </tr>
                                  <tr>
                                    <td>อื่นๆ <input type="text" name="otherr" id="otherr" style="width:150px" name="otherr" class="form-control"/></td>
                                    <td><select style="width:65px" id="othes" name="othes" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="othel" name="othel" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                    <td><select style="width:65px" id="other" name="other" class="form-control">
                                            <option value="ดี">ดี</option>
                                            <option  value="พอใช้">พอใช้</option>
                                            <option  value="ไม่ดี">ไม่ดี</option>
                                            </select></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>  
                 </div>  
              </div>            
     </div>
</div>




<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">ประวัติการทำงาน</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>ชื่อสถานที่ประกอบการ</th>
                                    <th>ลักษณะงานที่รับผิดชอบ</th>
                                    <th>โทร</th>
                                    <th>ระยะงานเริ่ม</th>
                                    <th>ระยะงานสิ้นสุด</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สาเหตุที่ออก</th>
                                    <th>เงินเดือนครั้งสุดท้าย</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td> <input type="text" name="list_of_employed1" id="list_of_employed1" class="form-control"/></td>
                                    <td><input type="text" name="job_description1" id="job_description1" class="form-control"/></td>
                                    <td><input type="text" name="call1" id="call1" class="form-control"/></td>
                                    <td><input type="date" name="start_job_duration1" id="job_duration1" class="form-control"/></td>
                                    <td><input type="date" name="end_job_duration2" id="job_duration2" class="form-control"/></td>
                                    <td><input type="text" name="position1" id="position1" class="form-control"/></td>
                                    <td><input type="text" name="reasonLeaving1" id="reasonleaving1" class="form-control"/></td>
                                    <td><input type="text" name="lastsalary1" id="lastsalary1"class="form-control"/> </td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="list_of_employed2" id="list_of_employed2" class="form-control"/></td>
                                    <td><input type="text" name="job_description2" id="job_description2" class="form-control"/></td>
                                    <td> <input type="text" name="call2" id="call2" class="form-control"/></td>
                                    <td><input type="date" name="start_job_duration3" id="job_duration3" class="form-control"/></td>
                                    <td><input type="date" name="end_job_duration4" id="job_duration4" class="form-control"/></td>
                                    <td><input type="text" name="position2" id="position2" class="form-control"/></td>
                                    <td><input type="text" name="reasonleaving2" id="reasonleaving2" class="form-control"/></td>
                                    <td><input type="text" name="lastsalary2" id="lastsalary2"class="form-control"/></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="list_of_employed3" id="list_of_employed3" class="form-control"/></td>
                                    <td><input type="text" name="job_description3" id="job_description3" class="form-control"/></td>
                                    <td><input type="text" name="call3" id="call3" class="form-control"/></td>
                                    <td><input type="date" name="start_job_duration5" id="job_duration5" class="form-control"/></td>
                                    <td><input type="date" name="end_job_duration6" id="job_duration6" class="form-control"/></td>
                                    <td><input type="text" name="position3" id="position3" class="form-control"/></td>
                                    <td><input type="text" name="reasonleaving3" id="reasonleaving3" class="form-control"/></td>
                                    <td><input type="text" name="lastsalary3" id="lastsalary3"class="form-control"/> </td>
                                  </tr>
                                </tbody>
                              </table>
                         </div> 
                   </div>  
             </div>            
        </div>
</div>

<div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">อื่นๆ</h3>
            </div>
            <div class="box-body">
         
                <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>
                <div class="box-body table-responsive no-padding">
                        <div class="form-group">
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ความสัมพันธ์</th>
                            <th>สถานที่ทำงาน/ที่อยู่</th>
                            <th>โทรศัพท์</th>
                            <th>ตำแหน่ง</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="namecm" id="namecm" required="required" class="form-control"/></td>
                            <td><input type="text" name="lastnamecm" id="lastnamecm" required="required" class="form-control"/></td>
                            <td><input type="text" name="firm" id="firm" required="required" class="form-control"/></td>
                            <td><input  type="text" name="telecm" id="telecm" required="required" class="form-control"/></td>
                            <td><input  type="text" name="positioncm" id="positioncm" required="required" class="form-control"/></td>
                          </tr>
                         
                        </tbody>
                    
                      </table>
                    </div>
                       <div class="row">      
                    <div class="col-md-3">
                            <div class="form-group">
                        <label for="name">ความรู้พิเศษ</label> 
                        คอมพิวเตอร์   ระบุ: <input  type="text" name="computer" id="computer" required="required" style="width:100px"/>
                                
                            </div>
                    </div> 
                    <div class="col-md-5">
                            <div class="form-group">
                                    <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร" > เครื่องโทรสาร 
                                    <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย
                                    <input type="text" name="dot" id="dot" required="required" style="width:50px"/>คำ/นาที
                        </div>
                        </div> 
        
                </div>

                <div class="row">      
                        <div class="col-md-10">
                                <div class="form-group">
                                        <label>ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)</label> &emsp;&emsp;&emsp;&emsp;&emsp;
                                        <input type="checkbox" class="form-check-input" id="crash1" name="crash1"> ขัดข้อง
                                        <input type="checkbox" class="form-check-input" id="crash1" name="crash1"> ไม่ขัดข้อง
                                        ชื่อ:  <input type="text" name="compd" id="compd"  style="width:100px"/>
                                        สถานที่ทำงาน:  <input type="text" name="compa" id="compa"  style="width:100px"/>
                                    
                                </div>
                        </div>   
                    </div>

                    <div class="row">      
                            <div class="col-md-10">
                                    <div class="form-group">
                                            <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            <input type="checkbox" class="form-check-input" id="crash2" name="crash2" value=" ขัดข้อง"> ขัดข้อง
                                            <input type="checkbox" class="form-check-input" id="crash2" name="crash2" value=" ไม่ขัดข้อง  "> ไม่ขัดข้อง
                                    </div>
                            </div>   
                        </div>


                        <div class="row">      
                                <div class="col-md-6">
                                        <div class="form-group">
                                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                             <input type="checkbox" class="form-check-input" id="crash3" name="crash3"  value="ขัดข้อง"  > ขัดข้อง
                                              <input type="checkbox" class="form-check-input" id="crash3" name="crash3"  value="ไม่ขัดข้อง" > ไม่ขัดข้อง
                                            
                                        </div>
                                </div>   
                            </div>


                            <div class="row">      
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>ท่านสามารถขับรถยนต์ได้หรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    <input type="checkbox" class="form-check-input" id="yes" name="yes"  value="ได้"> ได้
                                                    <input type="checkbox" class="form-check-input" id="yes" name="yes"  value="ไม่ได้ "> ไม่ได้
                                            </div>
                                    </div>   
                                </div>

                                <div class="row">      
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>ท่านมีรถยนต์ส่วนตัวหรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                        <input type="checkbox" class="form-check-input" id="owncar" name="owncar"> มี
                                                        <input type="checkbox" class="form-check-input" id="owncar" name="owncar"> ไม่มี
                                                    
                                                </div>
                                        </div>   
                                    </div>
    



                                    <div class="row">      
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</label><input type="text" id="workk" name="workk" style="width=150px"/>
                                                        
                                                    </div>
                                            </div>   
                                        </div>
        


                                        <div class="row">      
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label>ท่านพร้อมงานวันที่<label>/ <input type="date" id="dateworkk" name="dateworkk" style="width=150px"/>
                                                            
                                                        </div>
                                                </div>   
                                            </div>




                                            <div class="row">      
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label>ท่านเป็นเจ้าของรถประเภทใด</label> <input type="text" id="cardec" name="cardec" style="width=150px"/>
                                                                    <label>ทะเบียน<label><input type="text" id="license" name="license" style="width=150px"/>
                                                                
                                                            </div>
                                                    </div>   
                                                </div>
                                                <div class="row">      
                                                        <div class="col-md-7">
                                                                <div class="form-group">
                                                                        <label>ท่านเคยให้ถูกออกจากงานหรือไม่</label> &emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exitwork" name="exitwork" >เคย เพราะ<input type="ans" id="ans" name="because" style="width=150px"/>
                                                                            &emsp;&emsp;&emsp; <input type="checkbox" class="form-check-input" id="exitwork" name="exitwork">ไม่เคย

                                                                </div>
                                                        </div>   
                                                    </div>
                                                    <div class="row">      
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                            <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="serious_ill" name="serious_ill">เคย
                                                                                                                        <input type="checkbox" class="form-check-input" id="serious_ill" name="serious_ill">ไม่เคย
                                                                        
                                                                    </div>
                                                            </div>   
                                                        </div>
                                                        <div class="row">      
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="offense" name="offense">เคย
                                                                                <input type="checkbox" class="form-check-input" id="offense" name="offense">ไม่เคย
                                                                            
                                                                        </div>
                                                                </div>   
                                                            </div>
                                                            <div class="row">      
                                                                    <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                    <label>ขณะนี้คุณตั้งครรภ์หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" class="form-check-input" id="pregnant" name="pregnant">ใช่
                                                                                    <input type="checkbox" class="form-check-input" id="pregnant" name="pregnant">ไม่ใช่
                                                                                
                                                                            </div>
                                                                    </div>   
                                                                </div>                                               
                                                           </div>      
                                                      </div>  
                                               </div>            
                                           </div>
                                      </div>
                                      <div class="form-group">
                                       <center> {{ Form::submit('บันทึก',['class'=> 'btn btn-primary'])}} </center>   
                                        </div>
                                      {{ Form::close()}}     
                </div>
</div>
  @endsection
