
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HR | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Ionicons -->
  <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
 
  <!-- Theme style -->
  <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
 
  <!-- iCheck -->
  <link href="{{ asset('plugins/iCheck/square/blue.css') }}" rel="stylesheet">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a ><b>HR</b>NGG</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">เข้าระบบ</p>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        @if(session()->has('login_error'))
          <div class="alert alert-warning">
            {{ session()->get('login_error') }}
          </div>
        @endif
        <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
          <label for="identity" class="col-md-3 control-label">ผู้ใช้</label>

          <div class="col-md-8">
            <input id="identity" type="identity" class="form-control" name="identity"
                   value="{{ old('identity') }}" autofocus>

            @if ($errors->has('identity'))
              <span class="help-block">
                                  <strong>{{ $errors->first('identity') }}</strong>
                              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-3 control-label">รหัสผ่าน</label>

          <div class="col-md-8">
            <input id="password" type="password" class="form-control" name="password">

            @if ($errors->has('password'))
              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
            @endif
          </div>
        </div>

      
        <div class="form-group">
          <div class="col-md-8 col-md-offset-5">
            <button type="submit" class="btn btn-primary">
              Login
            </button>

            
          </div>
        </div>
      </form>
          
           
                </div>
                <!-- /.login-box-body -->
              </div>
              <!-- /.login-box -->
              
              <!-- jQuery 3 -->
              <script src="/bower_components/jquery/dist/jquery.min.js"></script>
              <!-- Bootstrap 3.3.7 -->
              <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
              <!-- iCheck -->
              <script src="/plugins/iCheck/icheck.min.js"></script>
              <script>
                $(function () {
                  $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                  });
                });
              </script>
              </body>