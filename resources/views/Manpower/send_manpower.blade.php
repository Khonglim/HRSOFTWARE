<!DOCTYPE html>
<html lang="en">

            <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>Manpower</title>
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
                      
                       
                              <script src='https://www.google.com/recaptcha/api.js'></script>
                        <style>
                              body {
                                    font-family: 'Prompt', sans-serif;
                  
                              }
                        </style>
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
                                              


                                                            <div class="sigPad">
                                                                        <ul class="sigNav">
                                                                          <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                                                                          <li class="clearButton"><a href="#clear">Clear</a></li>
                                                                        </ul>
                                                                        <div class="sig sigWrapper">
                                                                          <div class="typed"></div>
                                                                          <canvas class="pad" width="220" height="70"></canvas>
                                                                          <input type="hidden" name="signa1_60" class="output" required>
                                
                                                                        </div>
                                                                      </div>






                                                </div>
                                                <!-- /.box-body -->
                                              </div>






























                        </div>
            </div>
</body>
<div class="control-sidebar-bg"></div>

 


<script src="{{ asset('dist/js/adminlte.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.js') }}" defer></script>



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
