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
                                     
                                                      <form  class="form-horizontal" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                            <div class="box-body">
                                                @if( auth()->user()->isAdmin == '010')
                                                      <div class="form-group">
                                                                  <label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้/username</label>
                                                
                                                                  <div class="col-sm-5">
                                                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{$user->name}}">
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน/Password</label>
                                                
                                                                  <div class="col-sm-5">
                                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="ค่าเริ่มต้นคือเลขบัตรประชาชน">
                                                                  </div>
                                                                </div>
                                                            
                                                              </div>
                                                              <!-- /.box-body -->
                                                              <div class="box-footer">
                                                                <button  class="btn btn-default">Cancel</button>
                                                                <button type="submit" class="btn btn-info pull-right">Sign in</button>
                                                              </div>
                                                              <!-- /.box-footer -->




                                                      @else
                                                         คุณไม่มีสิทธิ์แก้ไข
                                                         @endif
                                           
                                          </form>
                                        </div>
                         
                  </div>






      </div>
</div>
@endsection