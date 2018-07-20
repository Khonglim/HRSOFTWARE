<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

      <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
    

    <!-- Header Navbar -->
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
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
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">พนักงาน</div>
               <div class="table-responsive">
                <div class="container">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                         <th>ชื่อ</th>
                         <th>นามสกุล</th>
                         <th>ชื่อเล่น</th>
                         <th>วันเกิด</th>
                         <th>เพศ</th>
                         <th>อีเมล</th>
                         <th>เพิ่มเติ่ม</th>
                      </tr>
                    </thead>
                    <tbody>
                            @forelse($employee as $l)
                               @if($l['enable']==1)
                              <tr>
                            <td> {{$l['name']}} </td>
                            <td> {{$l['lastname']}} </td>
                            <td> {{$l['nikname']}} </td>
                            <td> {{$l['birthday']}} </td>
                            <td> {{$l['sex']}} </td>
                            <td> {{$l['email']}} </td>
                            <td>  
                                {{ Form::open(['route' => ['employee.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                                <input type="hidden" name="_method" value="delete" />
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#employee{{$l['id']}}">แก้ไข</button>
                                {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                                {{ Form::close() }}                      
                                <div id="employee{{$l['id']}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                     <!-- Modal content-->
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">แก้ไข</h4>
                                           </div>
                                           <div class="modal-body">
                                       {{Form::open(['route'=>['employee.update',$l['id']],'method'=>'PUT','files' => true])}}
                                       <div class="row">
                                           <div class="col-md-2">
                                             {{Form::label('name','ชื่อ')}}
                                           </div>
                                             <div class="col-md-5">
                                               <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                                                   {{Form::text('name',$l['name'],['class'=>'form-control'])}}
                                                 <span class="text-danger">{{ $errors->first('company') }}</span>
                                                 </div>
                                             </div>
                                           </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('lastname','นามสกุล')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                                                     {{Form::text('lastname',$l['lastname'],['class'=>'form-control'])}}
                                                   <span class="text-danger">{{ $errors->first('company') }}</span>
                                                   </div>
                                               </div>
                                             </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('nikname','ชื่อเล่น')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                                     {{Form::text('nikname',$l['nikname'],['class'=>'form-control'])}}
                                                   <span class="text-danger">{{ $errors->first('remark') }}</span>
                                                   </div>
                                               </div>
                                             </div>  
                                             <div class="row">
                                               <div class="col-md-2">
                                                 {{Form::label('birthday','วันเกิด')}}
                                               </div>
                                                 <div class="col-md-5">
                                                   <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                                       {{Form::date('birthday',$l['birthday'],['class'=>'form-control'])}}
                                                     <span class="text-danger">{{ $errors->first('remark') }}</span>
                                                     </div>
                                                 </div>
                                               </div>   
                         
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('sex','Sex')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                                                       {{ Form::radio('sex', 'Male') }}Male
                                                       {{ Form::radio('sex', 'Female') }}Female
                                              
                                                         <span class="text-danger">{{ $errors->first('sex') }}</span>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('email','อีเมล')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                                                         {{Form::email('email',$l['email'],['class'=>'form-control'])}}
                                                       <span class="text-danger">{{ $errors->first('remark') }}</span>
                                                       </div>
                                                   </div>
                                                 </div> 
                                           </div>
                                           <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                                              </div>
                                              {{ Form::close() }}  
                                        </div>
                                     </div>
                                  </div>
               
                    </td>
                   </tr>
                @endif
             @empty
             <tr>
              <td colspan="6" > No data !!</td>
               </tr>
                             @endforelse
                    </tbody>
              </table> 
          </div>
      </div>
              <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เพิ่ม</button>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">เพิ่มข้อมูลพนักงาน</h4>
        </div>
        <div class="modal-body">
            {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}} 
          <div class="row">
            <div class="col-md-2">
              {{Form::label('name','Name')}}
            </div>
              <div class="col-md-5">
                  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                
                    {{Form::text('name','',['class'=>'form-control'])}}
               
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
              </div>
            </div>
          <br>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('lastname','Lastname')}}
              </div>
                <div class="col-md-5">
                    <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                      {{Form::text('lastname','',['class'=>'form-control'])}}
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    </div>
                </div>
            </div>
                <br>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('nikname','Nikname')}}
              </div>
                <div class="col-md-5">
                       <div class="form-group {{ $errors->has('nikname') ? 'has-error' : '' }}">
                      {{Form::text('nikname','',['class'=>'form-control'])}}
                      <span class="text-danger">{{ $errors->first('nikname') }}</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('birthday','Birthday')}}
              </div>
                <div class="col-md-5">
                   <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    {{Form::date('birthday','',['class'=>'form-control','id' => 'datepicker'])}}
                    <span class="text-danger">{{ $errors->first('birthday') }}</span>
                    </div>
                </div>
            </div>
              <br>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('sex','Sex')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                    {{ Form::radio('sex', 'Male') }}Male
                    {{ Form::radio('sex', 'Female') }}Female
           
                      <span class="text-danger">{{ $errors->first('sex') }}</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('email','Email')}}
              </div>
                <div class="col-md-5">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  
                      {{Form::text('email','',['class'=>'form-control'])}}
                    
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
          </div>
          {{ Form::close() }}
      </div>
        </div>
      </div>
    </div>
      </div>
                </div>
              </footer>
            </div>
          </div>
</div>
  </div>
  <footer class="footer">
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
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
        </form>
      </div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>

<script src="dist/js/adminlte.min.js"></script>
</body>
</html>