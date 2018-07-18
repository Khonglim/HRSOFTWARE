<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    </head>
    <body>
    <div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
          <input id="identity" type="identity" class="ggg" name="identity"  placeholder="USERNAME"
    value="{{ old('identity') }}" autofocus>
    @if ($errors->has('identity'))
    <span class="help-block"><strong>{{ $errors->first('identity') }}</strong></span>
    @endif
    <input id="password" type="password" class="ggg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required   placeholder="PASSWORD" >
    
    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
                <span><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</span>
                <h6><a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
          </a></h6>
                    <div class="clearfix"></div>
                    <input type="submit" value="Sign In" name="login">
            </form>
            <p>Don't Have an Account ? <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
    </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    </body>
    </html>
    