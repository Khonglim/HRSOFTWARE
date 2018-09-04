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

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                      

                         <input id="identity" type="identity" class="input100" name="identity"  placeholder="USERNAME"
    value="{{ old('identity') }}" autofocus/>

                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        @if ($errors->has('identity'))
    <span class="help-block"><strong>{{ $errors->first('identity') }}</strong></span>
    @endif
 <input id="password" type="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }} " name="password" required   placeholder="PASSWORD" />
 @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                  

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" value="Sign In" name="login">
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
@endsection
    
     
           
           
     