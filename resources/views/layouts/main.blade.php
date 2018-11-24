<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>NGG</title>
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
 
  

 

 
  

  <script type="text/javascript">

    $(function(){
      $("#totolDay_60").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });
    
    </script>
  
  <script type="text/javascript">
  
    $(function(){
      $("#totolDay_90").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });


  $(function(){
      $("#startrate_60").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });


      $(function(){
      $("#endrate_60").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });




  $(function(){
      $("#startrate_60_2").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });


      $(function(){
      $("#endrate_60_2").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });



    $(function(){
      $("#startrate_90").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });


      $(function(){
      $("#endrate_90").datepicker({
        dateFormat: 'dd/M/yy'
      });
    });

    </script>
  
  
  
  
    
    <script type="text/javascript">
  
      $(function(){
      
        var startDateTextBox = $('#dateStart');
        var endDateTextBox = $('#dateEnd');
      
        startDateTextBox.datepicker({ 
          dateFormat: 'dd/M/yy',
          
          onClose: function(dateText, inst) {
            if (endDateTextBox.val() != '') {
              var testStartDate = startDateTextBox.datetimepicker('getDate');
              var testEndDate = endDateTextBox.datetimepicker('getDate');
              if (testStartDate > testEndDate)
                endDateTextBox.datetimepicker('setDate', testStartDate);
            }
            else {
              endDateTextBox.val(dateText);
            }
            displayDateDiff();
          },
          onSelect: function (selectedDateTime){
            endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
          }
        });
        endDateTextBox.datepicker({ 
          dateFormat: 'dd-M-yy',
          onClose: function(dateText, inst) {
            if (startDateTextBox.val() != '') {
              var testStartDate = startDateTextBox.datetimepicker('getDate');
              var testEndDate = endDateTextBox.datetimepicker('getDate');
              if (testStartDate > testEndDate)
                startDateTextBox.datetimepicker('setDate', testEndDate);
            }
            else {
              startDateTextBox.val(dateText);
            }
            displayDateDiff();
          },
          onSelect: function (selectedDateTime){
            startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
          }
        });
      
      });
      
      function displayDateDiff()
      {
        if($('#dateStart').val() != "" && $('#dateEnd').val() != "")
        {
              var dateStart = new Date($("#dateStart").val());
              var dateEnd =  new Date($("#dateEnd").val())
              var timeDiff = Math.abs(dateEnd.getTime() - dateStart.getTime());
              
              var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
              diffDays = diffDays + 1;
                          
  
  
              $("#totolDay").val(diffDays);
        }
      }
      
      </script>
      <script type="text/javascript">
  
        $(function(){
        
          var startDateTextBox = $('#dateStart2');
          var endDateTextBox = $('#dateEnd2');
        
          startDateTextBox.datepicker({ 
            dateFormat: 'dd/M/yy',
            
            onClose: function(dateText, inst) {
              if (endDateTextBox.val() != '') {
                var testStartDate = startDateTextBox.datetimepicker('getDate');
                var testEndDate = endDateTextBox.datetimepicker('getDate');
                if (testStartDate > testEndDate)
                  endDateTextBox.datetimepicker('setDate', testStartDate);
              }
              else {
                endDateTextBox.val(dateText);
              }
              displayDateDiff();
            },
            onSelect: function (selectedDateTime){
              endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
            }
          });
          endDateTextBox.datepicker({ 
            dateFormat: 'dd/M/yy',
            onClose: function(dateText, inst) {
              if (startDateTextBox.val() != '') {
                var testStartDate = startDateTextBox.datetimepicker('getDate');
                var testEndDate = endDateTextBox.datetimepicker('getDate');
                if (testStartDate > testEndDate)
                  startDateTextBox.datetimepicker('setDate', testEndDate);
              }
              else {
                startDateTextBox.val(dateText);
              }
              displayDateDiff();
            },
            onSelect: function (selectedDateTime){
              startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
            }
          });
        
        });
        
        function displayDateDiff()
        {
          if($('#dateStart2').val() != "" && $('#dateEnd2').val() != "")
          {
                var dateStart = new Date($("#dateStart2").val());
                var dateEnd =  new Date($("#dateEnd2").val())
                var timeDiff = Math.abs(dateEnd.getTime() - dateStart.getTime());
                
                var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
                diffDays = diffDays + 1;
                
    
    
                $("#totolDay2").val(diffDays);
          }
        }
        </script>
<style>
body {
  font-family: 'Prompt', sans-serif;
 
}
        <style>
            body {
                     
                      font-size: 15px;
                  }
              </style>
        
</head>
<body class="hold-transition skin-red layout-top-nav">
    <div id="main">
            <div class="wrapper">
                <header class="main-header">
                    <nav class="navbar navbar-static-top">
                      <div class="container">
                        <div class="navbar-header">
                          <a href="{{url('/home')}}" class="navbar-brand"><b>HR </b>system</a>
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                          </button>
                        </div>
                
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                              @if(auth()->user()->isAdmin == '001' || auth()->user()->isAdmin == '010')
                            <li class="active"><a href="{{url('/home')}}"><span>หน้าแรก</span></a></li>
                            
                            <li ><a href="{{url('/ngg_work')}}"><span>ข้อมูลผู้สมัคร</span></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">แบบประเมินต่างๆ<span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                  <li ><a href="{{url('/interview') }}"><span>แบบประเมินผลสัมภาษณ์</span></a></li>
                                  <li class="divider"></li>
                                  <li ><a href="{{url('/operate_employf')  }}"><span>แบบประเมินผลการปฏิบัติงาน</span></a></li>
                                  <li class="divider"></li>
                                  <li ><a href="{{url('Operate/create')}}"><span>ประเมินทดลองงาน</span></a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">รายงานผลต่างๆ<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li ><a href="{{url('/summbti') }}"><span>รายงานผลทดสอบ MBTI</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/sumdisc') }}"><span>รายงานผลทดสอบ DISC</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/operate_report*')  }}"><span>รายงานทดลองงานปฏิบัติการ</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/operate_report**')  }}"><span>รายงานทดลองงานบังคับบัญชา</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/con_all') }}"><span>รายงานการทดสอบทั้งหมด</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/manpower') }}"><span>รายงานขอกำลังคน</span></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{url('/Operate') }}"><span>รายงานการประเมินทดลองงาน</span></a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">การจัดการแบบประเมิน<span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                      @if(auth()->user()->isAdmin == '010')
                                      <li ><a href="{{url('/summevav2') }}">สรุปผลประเมินv2</a></li>
                                      <li class="divider"></li>
                                      <li ><a href="{{url('/storeExcel') }}">ผลประเมินExcel</a></li>
                                      <li class="divider"></li>
                                      @endif
                                       <li><a href="{{url('/management') }}">จัดการผู้ประเมิน</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/timeattendant') }}">จัดการเวลาผู้ประเมิน</a></li>
                                     
                                  </ul>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">การจัดการโดยรวม<span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                      @if(auth()->user()->isAdmin == '010')
                                      <li ><a href="{{url('/user_setting') }}">การจัดการผู้ใช้</a></li>

                                      <li class="divider"></li>

                                      @endif
                                       <li><a href="{{url('/companysmanage') }}">จัดการบริษัท</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/departmentsmanage') }}">จัดการแผนก</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/positionsmanage') }}">จัดการตำแหน่ง</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/sectorsmanage') }}">จัดการsector</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/levelsmanage') }}">จัดการระดับ</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/nggemployee') }}">จัดการผนักงาน</a></li>
                                       <li class="divider"></li>
                                       <li><a href="{{url('/Email_HR') }}">จัดการการส่งอีเมลล์</a></li>
                                       
                                     
                                  </ul>
                                </li>
                            @endif
                           
                           @if( auth()->user()->isAdmin == '100' )
                           <li ><a href="{{url('/home') }}"><i class="fa fa-book"></i> <span>ตรวจสอบคำขอกำลังคน</span></a></li>
                           @endif
                           @if(auth()->user()->isAdmin == '000'|| auth()->user()->isAdmin == '100' )
                           <li class="active"  ><a href="{{url('/evatestversion') }}"><i class="fa fa-book"></i> <span>Evaluation Testing</span></a></li>
                          @endif
                          </ul>
                         
                        </div>
                        <!-- /.navbar-collapse -->
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                          <ul class="nav navbar-nav">
                            <li class="dropdown tasks-menu">
                              <ul class="dropdown-menu">
                              </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                              <!-- Menu Toggle Button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{URL::asset('dist/img/user2-160x160.png')}}" class="user-image" alt="User Image" >
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                              </a>
                              <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                
                                  <img src="{{URL::asset('dist/img/user2-160x160.png')}}" class="user-image" alt="User Image">
                                  <p>
                                    {{ Auth::user()->name }} - HR system
                                    <small>2018</small>
                                  </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                              
                                  <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-left">
                                   
                                  </div>
                                  <div class="pull-right">
                                   <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                                       document.getElementById('logout-form').submit();">
                                                          {{ __('Logout') }}
                                                      </a>
                  
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                        </form>
                                  </div>
                                </li>
                                
                              </ul>
                            </li>
          
          
                          
                          </ul>
                        </div>
                        <!-- /.navbar-custom-menu -->
                      </div>
                      <!-- /.container-fluid -->
                    </nav>
                  </header>
       

        <main >
            @yield('content')
        </main>
    </div>
</div>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
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
      $('#operate').DataTable()
      $('#emailhr').DataTable()
    });
  </script>
  
  
  <script type="text/javascript">
      $(document).ajaxStart(function() { Pace.restart(); }); 

 
  </script>
  

<script>
 
 $(document).ready(function() {
    $('.js-example-basic-single').select2();
   
});

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
