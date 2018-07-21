<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(function() {
$("#newModalFormC").validate({
  rules: {
    company_Name: {
      required: true,
        minlength: 8,
        maxlength: 100
    }
  },
  messages: {
    company_Name: {
      required: "กรุณากรอกข้อมูล", 
      minlength: "ข้อมูลต่ำกว่า 8 อักษร",
      maxlength: "ข้อมูลเกินกว่า 100 อักษร"
    }
  },
	highlight: function(element, errorClass) {
		$(element).closest(".form-group").addClass("has-error");
	},
	unhighlight: function(element, errorClass) {
		$(element).closest(".form-group").removeClass("has-error");
	}
});
});
  </script>
<script>
   $(function() {
    
    $("#addFormC").validate({
      rules: {
        company_Name: {
        required: true,
        minlength: 8,
        maxlength: 100
      }
    },
    messages: {
      company_Name: {
        required: "กรุณากรอกข้อมูล", 
        minlength: "ข้อมูลต่ำกว่า 8 อักษร",
       maxlength: "ข้อมูลเกินกว่า 100 อักษร"
      }
      
    },
	highlight: function(element, errorClass) {
		$(element).closest(".form-group").addClass("has-error");
	},
	unhighlight: function(element, errorClass) {
		$(element).closest(".form-group").removeClass("has-error");
	}
    });
    });
  </script>
  <script>
        $(function() {
        $("#newModalFormD").validate({
          rules: {
            department_name: {
              required: true,
                minlength: 8,
                maxlength: 20
                },
                company_id:{
                  required: true,
                  number: true
                }
          },
          messages: {
             department_name: {
              required: "กรุณากรอกข้อมูล", 
              minlength: "ข้อมูลต่ำกว่า 8 อักษร",
              maxlength: "ข้อมูลเกินกว่า 20 อักษร"
            },
            company_id: {
              required: "กรุณากรอกข้อมูล", 
              number: "ข้อมูลตัวเลขเท่านั้น"
            }
          },
          highlight: function(element, errorClass) {
            $(element).closest(".form-group").addClass("has-error");
          },
          unhighlight: function(element, errorClass) {
            $(element).closest(".form-group").removeClass("has-error");
          }
        });
        });
          </script>
        <script>
           $(function() {
            
            $("#addFormD").validate({
              rules: {
            department_name: {
              required: true,
                minlength: 8,
                maxlength: 20
                },
                company_id:{
                  required: true,
                  number: true
                }
          },
          messages: {
             department_name: {
              required: "กรุณากรอกข้อมูล", 
              minlength: "ข้อมูลต่ำกว่า 8 อักษร",
              maxlength: "ข้อมูลเกินกว่า 20 อักษร"
            },
            company_id: {
              required: "กรุณากรอกข้อมูล", 
              number: "ข้อมูลตัวเลขเท่านั้น"
            },
          },
          highlight: function(element, errorClass) {
            $(element).closest(".form-group").addClass("has-error");
          },
          unhighlight: function(element, errorClass) {
            $(element).closest(".form-group").removeClass("has-error");
          }
            });
            });
          </script>
           <script>
                $(function() {
                $("#newModalFormE").validate({
                  rules: {
                       name: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                        },
                        lastname:{
                          required: true,
                          minlength: 3,
                          maxlength: 20
                        },
                        nikname:{
                          required: true,
                          minlength: 3,
                          maxlength: 8
                        },
                        email:{
                          required: true,
                          email: true
                        },
                        sex:{
                          required: true
                        }
                  },
                  messages: {
                    name: {
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                    },
                    lastname: {
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                    },
                        nikname:{
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 8 อักษร"
                        },
          
                        email:{
                          email:"กรุณากรอก E-Mail"
                        }
                  },
                  highlight: function(element, errorClass) {
                    $(element).closest(".form-group").addClass("has-error");
                  },
                  unhighlight: function(element, errorClass) {
                    $(element).closest(".form-group").removeClass("has-error");
                  } 
                });
                });
                  </script>
                <script>
                   $(function() {
                    $("#addFormE").validate({
                      rules: {
                       name: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                        },
                        lastname:{
                          required: true,
                          minlength: 3,
                          maxlength: 20
                        },
                        nikname:{
                          required: true,
                          minlength: 3,
                          maxlength: 8
                        },
                        email:{
                          required: true,
                          email: true
                        },
                        sex:{
                          required: true
                        }
                  },
                  messages: {
                    name: {
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                    },
                    lastname: {
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                    },
                        nikname:{
                      required: "กรุณากรอกข้อมูล", 
                      minlength: "ข้อมูลต่ำกว่า 3 อักษร",
                      maxlength: "ข้อมูลเกินกว่า 8 อักษร"
                        },
          
                        email:{
                          email:"กรุณากรอก E-Mail"
                        },
                        
                  },
                  highlight: function(element, errorClass) {
                    $(element).closest(".form-group").addClass("has-error");
                  },
                  unhighlight: function(element, errorClass) {
                    $(element).closest(".form-group").removeClass("has-error");
                  }
                    });
                    });
                  </script>
          <script>
         $(function() {
            $("#newModalFormP").validate({
              rules: {
                position_name: {
                  required: true,
                    minlength: 8,
                    maxlength: 20
                },
                Department_ID:{
                  required: true,
                  number: true
                }
        
              }
              ,
              messages: {
                position_name: {
                  required: "กรุณากรอกข้อมูล", 
                  minlength: "ข้อมูลต่ำกว่า 8 อักษร",
                  maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                },
                Department_ID: {
                    required: "กรุณากรอกข้อมูล", 
                    number: "ข้อมูลตัวเลขเท่านั้น"
                  },
        
              },
              highlight: function(element, errorClass) {
                $(element).closest(".form-group").addClass("has-error");
              },
              unhighlight: function(element, errorClass) {
                $(element).closest(".form-group").removeClass("has-error");
              }
            });
            });
              </script>
            <script>
               $(function() {
                
                $("#addFormP").validate({
                  rules: {
                position_name: {
                  required: true,
                    minlength: 8,
                    maxlength: 20
                },
                Department_ID:{
                  required: true,
                  number: true
                }
        
              }
              ,
              messages: {
                position_name: {
                  required: "กรุณากรอกข้อมูล", 
                  minlength: "ข้อมูลต่ำกว่า 8 อักษร",
                  maxlength: "ข้อมูลเกินกว่า 20 อักษร"
                },
                Department_ID: {
                    required: "กรุณากรอกข้อมูล", 
                    number: "ข้อมูลตัวเลขเท่านั้น"
                  },
        
              },
              highlight: function(element, errorClass) {
                $(element).closest(".form-group").addClass("has-error");
              },
              unhighlight: function(element, errorClass) {
                $(element).closest(".form-group").removeClass("has-error");
              }
                });
                });
              </script>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
   
    <div id="main">
            <div class="wrapper">
        <header class="main-header">
            <a href="home" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>Admin</b>LTE</span>
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
                      <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- The user image in the menu -->
                      <li class="user-header">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        
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
              <li class="active"  ><a href="company" ><i class="glyphicon glyphicon-lock"></i> <span>รายชื่อบริษัท</span></a></li>
                <li class="active" ><a href="department"><i class="glyphicon glyphicon-equalizer"></i> <span>ชื่อแผนก</span></a></li>
                <li class="active" ><a href="position"><i class="glyphicon glyphicon-blackboard"></i> <span>ชื่อตำแหน่ง</span></a></li>
                <li class="active"  ><a href="employee"><i class="glyphicon glyphicon-user"></i> <span>ข้อมูลพนักงาน</span></a></li>
                <li class="treeview">
                  <a href="#"><i class="glyphicon glyphicon-eye-open"></i> <span>ดูแผนผัง HR บริษัท</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/orgchartcompany">แผนผังบริษัท</a></li>
                   <li><a href="/orgchartdepartment">แผนผังแผนก</a></li>
                    <li><a href="/orgchartposition">แผนผังตำแหน่ง</a></li>
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
    <script src="dist/js/adminlte.min.js"></script>
</body>
</html>
