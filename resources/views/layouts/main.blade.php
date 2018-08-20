<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 2 | Starter</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
   
    <div id="main">
            <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/home') }}" class="logo">
                <span class="logo-mini"></span>
                <span class="logo-lg">HR Software</span>
              </a>
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
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
                      <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image" >
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                      
                        <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <p>
                          {{ Auth::user()->name }} - Web Developer
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
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


                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <aside class="main-sidebar">
          
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="sidebar">
              <!-- Sidebar Menu -->
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header"><center>เมนู</center></li>
               
                <!-- Optionally, you can add icons to the links -->
                <li class="active"  ><a href="{{url('/home') }}" ><i class="  fa fa-tachometer"></i> <span>หน้าแรก</span></a></li>
              <li class="active"  ><a href="{{url('/company')}}" ><i class="glyphicon glyphicon-lock"></i> <span>รายชื่อบริษัท</span></a></li>
                <li class="active" ><a href="{{url('/department')}}"><i class="glyphicon glyphicon-equalizer"></i> <span>ชื่อแผนก</span></a></li>
                <li class="active" ><a href="{{url('/position')}}"><i class="glyphicon glyphicon-blackboard"></i> <span>ชื่อตำแหน่ง</span></a></li>
                <li class="active"  ><a href="{{url('/employee')}}"><i class="glyphicon glyphicon-user"></i> <span>ข้อมูลพนักงาน</span></a></li>
                <li class="active"  ><a href="{{url('/mbti') }}"><i class="fa fa-book"></i> <span>ทดสอบ MBTI</span></a></li>
                <li class="active"  ><a href="{{url('/disc') }}"><i class="fa fa-book"></i> <span>ทดสอบ DISC</span></a></li>
                <li class="active"  ><a href="{{url('/evatesting') }}"><i class="fa fa-book"></i> <span>Evaluation Testing</span></a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-book"></i> <span>ผลการทดสอบ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{url('/summbti') }}">SumMBTI</a></li>
                    <li><a href="{{url('/disc') }}">DISC</a></li>
                    <li><a href="/evatesting">Evaluation Testing</a></li>
                 </ul>
                </li>
                <li class="treeview">
                  <a href="#"><i class="glyphicon glyphicon-eye-open"></i> <span>ดูแผนผัง HR บริษัท</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/iframe">แผนผังบริษัท</a></li>
                 </ul>
                </li>
               
              </ul>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}" defer></script>
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
      
    });
  </script>
  
  
  <script type="text/javascript">
      $(document).ajaxStart(function() { Pace.restart(); }); 

 
  </script>
    <script>
       $(function () {
        $("#showTime").startTimer({
         
          onComplete:function(){
            alert("หมดเวลาทำแบบทดสอบแล้วค่ะ.")
            $("#test1").submit();
          }
        })


 $("#showTimeDisc").startTimer({
         
         onComplete:function(){
           alert("หมดเวลาทำแบบทดสอบแล้วค่ะ.")
           $("#testdisc").submit();
         }
       })

    });
  
</script>

<style>
.jst-hours {
  float: left;
}
.jst-minutes {
  float: left;
}
.jst-seconds {
  float: left;
}
.jst-clearDiv {
  clear: both;
}
  </style>

  <!-- แก้ไขรูปแบบของกรอบข้อความได้ที่ด้านล่างนี้ครับ -->
<style type="text/css">
  #topbar{
  position:absolute;
  border: 1px solid black;
  padding: 2px;
  background-color: lightyellow;
  width: 99px;
  visibility: hidden;
  z-index: 100;
  }
  </style>
  <!-- สิ้นสุดการแก้ไขรูปแบบของกรอบข้อความ --> 
  <script type="text/javascript">
  
  var persistclose=0 // ให้ใส่เป็น 0 หรือไม่ก็ 1 (โดย 0 หมายถึง เมื่อกดปิดแล้ว กด REFRESH กรอบข้อความจะขึ้นมาอีก แต่ถ้า 1 กรอบข้อความจะไม่ขึ้นมาอีกแล้ว)
  var startX = 550 // ตำแหน่งแสดงกรอบข้อความ นับจากด้านซ้าย
  var startY = 4 // ตำแหน่งแสดงกรอบข้อความ นับจากด้านบน
  
  function iecompattest(){
  return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
  }
  
  function get_cookie(Name) {
  var search = Name + "="
  var returnvalue = "";
  if (document.cookie.length > 0) {
  offset = document.cookie.indexOf(search)
  if (offset != -1) {
  offset += search.length
  end = document.cookie.indexOf(";", offset);
  if (end == -1) end = document.cookie.length;
  returnvalue=unescape(document.cookie.substring(offset, end))
  }
  }
  return returnvalue;
  }
  
  var verticalpos="fromtop"
  
  function closebar(){
  if (persistclose)
  document.cookie="remainclosed=1"
  document.getElementById("topbar").style.visibility="hidden"
  }
  
  function staticbar(){
  
    var ns = (navigator.appName.indexOf("Netscape") != -1);
    var d = document;
    function ml(id){
      var el=d.getElementById(id);
      if (!persistclose || persistclose && get_cookie("remainclosed")=="")
      el.style.visibility="visible"
      if(d.layers)el.style=el;
      el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
      el.x = startX;
      if (verticalpos=="fromtop")
      el.y = startY;
      else{
      el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
      el.y -= startY;
      }
      return el;
    }
    window.stayTopLeft=function(){
      if (verticalpos=="fromtop"){
      var pY = ns ? pageYOffset : iecompattest().scrollTop;
      ftlObj.y += (pY + startY - ftlObj.y)/8;
      }
      else{
      var pY = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
      ftlObj.y += (pY - startY - ftlObj.y)/8;
      }
      ftlObj.sP(ftlObj.x, ftlObj.y);
      setTimeout("stayTopLeft()", 10);
    }
    ftlObj = ml("topbar");
    stayTopLeft();
  }
  
  if (window.addEventListener)
  window.addEventListener("load", staticbar, false)
  else if (window.attachEvent)
  window.attachEvent("onload", staticbar)
  else if (document.getElementById)
  window.onload=staticbar
  </script>
</body>
</html>
