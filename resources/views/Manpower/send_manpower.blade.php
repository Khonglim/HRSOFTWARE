<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>คำขอระบบ</title>


      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
      <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
      <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
      <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
      <script  src="http://code.jquery.com/jquery-1.10.2.min.js"  integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg="  crossorigin="anonymous"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
      <link rel="stylesheet"  type="text/css" href="{{ asset('all/jquery-ui.css') }}" />
      <link rel="stylesheet" media="all" type="text/css" href="{{ asset('all/jquery-ui-timepicker-addon.css') }}" />
      <script type="text/javascript" src="{{ asset('all/jquery-ui.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('all/jquery-ui-timepicker-addon.js') }}"></script>
      <script type="text/javascript" src="{{ asset('all/jquery-ui-sliderAccess.js') }}"></script>
</head>
<body class="hold-transition skin-red layout-top-nav">
            <header class="main-header">
                        <nav class="navbar navbar-static-top">
                          <div class="container">
                            <div class="navbar-header">
                            
                            </div>
                    
                          
                        </nav>
                      </header>
            <div class="content-wrapper">
                        <div class="content container">



                                    <div class="box box-danger">
                                                <div class="box-header with-border">
                                                  <h3 class="box-title">เรียนผู้บริหารโปรดลงนาม</h3>
                                                </div>
                                                <div class="box-body">
                                              









                                                </div>
                                                <!-- /.box-body -->
                                              </div>






























                        </div>
            </div>
</body>
<div class="control-sidebar-bg"></div>

 
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" defer></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}" defer></script>
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}" defer></script>
<script src="{{ asset('bower_components/PACE/pace.min.js') }}" defer></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.js') }}" defer></script>
<script src="{{ asset('js/jquery.simple.timer.js') }}" defer></script>
<script>
  $(function () {
    $('#company').DataTable()
    $('#department').DataTable()
    $('#position').DataTable()
    $('#employee').DataTable()
    $('#testmbti').DataTable()
    $('#conall').DataTable()
    $('#user_setting').DataTable()
    $('#manpower').DataTable()
   
  });
</script>


<script type="text/javascript">
    $(document).ajaxStart(function() { Pace.restart(); }); 


</script>





















<footer class="main-footer">
<div class="container">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</div>
<!-- /.container -->
</footer>

</body>
</html>
