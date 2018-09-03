<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link href="{{ asset('img/icons/favicon.ico') }}" rel="icon">
<!--===============================================================================================-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">
<!--===============================================================================================-->  
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet">
<!--===============================================================================================-->  
    <link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<!--===============================================================================================-->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
<!--===============================================================================================-->

</head>
<body>

        <main>
            @yield('content')
        </main>



    
<!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}" defer></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}" defer></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>
</html>