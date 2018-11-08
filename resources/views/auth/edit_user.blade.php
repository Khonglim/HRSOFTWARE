@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
      <div class="content container">

                  <div class="col-md-12">
                              <div class="box box-info">
                                          <div class="box-header with-border">
                                            <h3 class="box-title">แก้ไขผู้ใช้</h3>
                                          </div>
                                          <!-- /.box-header -->
                                          <!-- form start -->
                                     
                                                 
                                                          {{Form::open(['route'=>['user_setting.update',$user->id],'method'=>'PUT','class' => 'form-horizontal'])}}
                                            <div class="box-body">
                                                @if( auth()->user()->isAdmin == '010')
                                                      <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้/username</label>
                                                
                                                                  <div class="col-sm-5">
                                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="name" value="{{$user->name}}">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                 
                                                                        <label for="password-confirm" class="col-sm-2 col-form-label ">{{ __('สิทธิ์การเข้าถึง/rule') }}</label>
                                            
                                                                        <div class="col-md-5">
                                                                        <select name="isAdmin" id="isAdmin" class="form-control">
                                                                        <option value="000">เลือก</option>
                                                                         <option value="000">ผู้ใช้ทั่วไป</option>
                                                                         <option value="001">admin</option>
                                                                         <option value="010">admin_Master</option>
                                                                         <option value="100">หัวหน้าส่วนงานสรรหาว่าจ้าง/Sup.HR Recruitment  (สำหรับขอกำลังคน)</option>
                                                                         <option value="011">ประธานกรรมการ MD (สำหรับขอกำลังคน)</option>
                                                                         <option value="101">ผู้บังคับบัญชาต้นสังกัด  (สำหรับการประเมินทดลองงาน)</option>
                                                                         <option value="110">ผู้จัดการฝ่าย  (สำหรับการประเมินทดลองงาน)</option>
                                                                         <option value="111">ฝ่ายทรัพยากรบุคคล  (สำหรับการประเมินทดลองงาน)</option>
                                                                         <option value="111">กรรมการผู้จัดการ/ผู้จัดการทั่วไป (สำหรับการประเมินทดลองงาน)</option>
                                                                           </select>
                                                                        </div>
                                                                    
                                                                </div>
                                                            
                                                              </div>
                                                              <!-- /.box-body -->
                                                              <div class="box-footer">
                                                              
                                                               <center><button type="submit" class="btn btn-info pull-center">บันทึก</button></center> 
                                                              </div>
                                                              <!-- /.box-footer -->




                                                      @else
                                                         คุณไม่มีสิทธิ์แก้ไข
                                                         @endif
                                           
                                                         {{ Form::close()}}    
                                        </div>
                         
                  </div>






      </div>
</div>
@endsection