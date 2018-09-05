@extends('layouts.logingin')
@section('content')

 <div class="limiter">
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        <div class="container-login100" style="background-image: url('{{URL::asset('img/NGG.jpg')}}')">
             @csrf
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-logo">
                        <i class="fa fa-user fa-6"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    {{ csrf_field() }}
        @if(session()->has('login_error'))
          <div class="alert alert-warning">
            {{ session()->get('login_error') }}
          </div>
        @endif
        <center>
                            <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                                    <label for="identity" class="col-md-4 control-label">ผู้ใช้</label>
                                   
                                    <div class="col-md-9">
                                      <input id="identity" type="identity" class="form-control" name="identity"
                                             value="{{ old('identity') }}" autofocus   placeholder="ชื่อผู้ใช้">
                          
                                      @if ($errors->has('identity'))
                                        <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('identity') }}</strong>
                                                        </span>
                                      @endif
                                    </div>
                                  </div>
                     
                   



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-3 control-label">รหัสผ่าน</label>
                                <div class="col-md-3"> </div>
                                <div class="col-md-9">
                                  <input id="password" type="password" class="form-control" name="password">
                      
                                  @if ($errors->has('password'))
                                    <span class="help-block">
                                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                    </span>
                                  @endif
                                </div>
                              </div>
                  
                            </center>
                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" value="Sign In" name="login">
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
@endsection
    
     
           
           
     