@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
      <div class="content container">

                  <div class="col-md-12">
                              <div class="box box-info">
                                          <div class="box-header with-border">
                                            <h3 class="box-title">เพิ่มผู้ใช้</h3>
                                          </div>
                                          <!-- /.box-header -->
                                          <!-- form start -->
                                     
                                                    
                                            <div class="box-body">
                                                    @if( auth()->user()->isAdmin == '010')
                                                       <form method="POST" action="{{ url('user_setting') }}" aria-label="{{ __('Register') }}">
                                                            @csrf
                                                       <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                                    <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('สิทธิ์การเข้าถึง') }}</label>
        
                                    <div class="col-md-6">
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












                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('บันทึก') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    @else
                               
                       คุณไม่มีสิทธิ์ในหน้านี้

                    @endif
                                        </div>

                         
                  </div>






      </div>
</div>
@endsection