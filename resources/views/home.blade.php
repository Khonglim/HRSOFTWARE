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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
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
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active" data-toggle="modal" data-target="#myModal1" id="open1"  ><a href="#"><i class="glyphicon glyphicon-lock"></i> <span>เพิ่มบริษัท</span></a></li>





        <li class="active" data-toggle="modal" data-target="#myModal2" id="open2"><a href="#"><i class="glyphicon glyphicon-equalizer"></i> <span>เพิ่มแผนก</span></a></li>




        

        <li class="active" data-toggle="modal" data-target="#myModal3" id="open3"><a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>เพิ่มตำแหน่ง</span></a></li>






        <li class="active" data-toggle="modal" data-target="#myModal4" id="open4" ><a href="#"><i class="glyphicon glyphicon-user"></i> <span>เพิ่มข้อมูลพนักงาน</span></a></li>
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
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content container-fluid">
      <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
         บริษัท
         </div>
     <div class="table-responsive">
          <div class="container">
              <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                       <th>ID</th>
                       <th>ชื่อบริษัท</th>
                       <th>หมายเหตุ</th>
                       <th>เพิ่มเติ่ม</th>
                    </tr>
                  </thead>
                  <tbody>
                          @forelse($company as $l)
                             @if($l['enable']==1)
                            <tr>
                          <td> {{$l['id']}} </td>
                          <td> {{$l['company_Name']}} </td>
                          <td> {{$l['remark']}} </td>
                          <td>  
                              {{ Form::open(['route' => ['company.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                              <input type="hidden" name="_method" value="delete" />
                              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#company{{$l['id']}}">แก้ไข</button>
                              {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                              {{ Form::close() }}   
                      
        <div id="company{{$l['id']}}" class="modal fade" role="dialog">
         <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">แก้ไข</h4>
                </div>
                <div class="modal-body">
            {{Form::open(['route'=>['company.update',$l['id']],'method'=>'PUT','files' => true])}}
            <div class="row">
                <div class="col-md-2">
                  {{Form::label('company','ชื่อบริษัท')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {{Form::text('company_Name',$l['company_Name'],['class'=>'form-control'])}}
                      <span class="text-danger">{{ $errors->first('company') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('remark','หมายเหตุ')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                          {{Form::text('remark',$l['remark'],['class'=>'form-control'])}}
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
            </div>
            <div class="col-sm-7 text-right text-center-xs">
              <ul class="pagination pagination-sm m-t-none m-b-none">
                
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
           แผนก
           </div>
          <div class="table-responsive">
            <div class="container">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                     <th>ID</th>
                     <th>ชื่อแผนก</th>
                     <th>ID เริ่มต้นแผนก</th>
                     <th>ID บริษัท</th>
                     <th>หมายเหตุ</th>
                     <th>เพิ่มเติ่ม</th>
                  </tr>
                </thead>
                <tbody>
                        @forelse($department as $l)
                           @if($l['enable']==1)
                          <tr>
                        <td> {{$l['id']}} </td>
                        <td> {{$l['department_name']}} </td>
                        <td> {{$l['department_head_id']}} </td>
                        <td> {{$l['company_id']}} </td>
                        <td> {{$l['remark']}} </td>
                        <td>  
                            {{ Form::open(['route' => ['department.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                            <input type="hidden" name="_method" value="delete" />
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#department{{$l['id']}}">แก้ไข</button>
                            {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                            {{ Form::close() }}   
                    
    <div id="department{{$l['id']}}" class="modal fade" role="dialog">
       <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">แก้ไข</h4>
              </div>
              <div class="modal-body">
          {{Form::open(['route'=>['department.update',$l['id']],'method'=>'PUT','files' => true])}}
          <div class="row">
              <div class="col-md-2">
                {{Form::label('department_name','ชื่อแผนก')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                      {{Form::text('company_Name',$l['department_name'],['class'=>'form-control'])}}
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('department_head_id','ID เริ่มต้นแผนก')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {{Form::text('department_head_id',$l['department_head_id'],['class'=>'form-control'])}}
                      <span class="text-danger">{{ $errors->first('company') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('company_id','ID บริษัท')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                          {{Form::text('company_id',$l['company_id'],['class'=>'form-control'])}}
                        <span class="text-danger">{{ $errors->first('company') }}</span>
                        </div>
                    </div>
                  </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('remark','หมายเหตุ')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                        {{Form::text('remark',$l['remark'],['class'=>'form-control'])}}
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
               
              </div>
              <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                
                </ul>
              </div>
            </div>
          </footer>
        </div>
      </div>


      <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading"> ตำแหน่ง</div>
          <div class="table-responsive">
              <div class="container">
                <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                       <th>ID</th>
                       <th>ชื่อตำแหน่ง</th>
                       <th>ID เริ่มต้นแผนก</th>
                       <th>หมายเหตุ</th>
                       <th>เพิ่มเติ่ม</th>
                    </tr>
                  </thead>
                  <tbody>
                          @forelse($position as $l)
                             @if($l['enable']==1)
                            <tr>
                          <td> {{$l['id']}} </td>
                          <td> {{$l['position_name']}} </td>
                          <td> {{$l['Department_ID']}} </td>
                          <td> {{$l['remark']}} </td>
                          <td>  
                              {{ Form::open(['route' => ['position.destroy',$l['id'], 'method' => "DELETE"] ]) }}
                              <input type="hidden" name="_method" value="delete" />
                              <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#position{{$l['id']}}">แก้ไข</button>
                              {{ Form::submit('ลบ',array('class' => 'btn btn-danger btn-xs')) }}
                              {{ Form::close() }}                      
      <div id="position{{$l['id']}}" class="modal fade" role="dialog">
         <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">แก้ไข</h4>
                </div>
                <div class="modal-body">
            {{Form::open(['route'=>['position.update',$l['id']],'method'=>'PUT','files' => true])}}
            <div class="row">
                <div class="col-md-2">
                  {{Form::label('position_name','ชื่อตำแหน่ง')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {{Form::text('position_name',$l['position_name'],['class'=>'form-control'])}}
                      <span class="text-danger">{{ $errors->first('company') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('Department_ID','ID ตำแหน่ง')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                          {{Form::text('Department_ID',$l['Department_ID'],['class'=>'form-control'])}}
                        <span class="text-danger">{{ $errors->first('company') }}</span>
                        </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('remark','หมายเหตุ')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                          {{Form::text('remark',$l['remark'],['class'=>'form-control'])}}
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
                 
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                  <ul class="pagination pagination-sm m-t-none m-b-none">
                  
                  </ul>
                </div>
              </div>
            </footer>
          </div>
        </div>




        <div class="col-md-6">
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
                   
                  </div>
                  <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                    
                    </ul>
                  </div>
                </div>
              </footer>
            </div>
          </div>



      <div class="container">
        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="myModal1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="alert alert-danger" style="display:none"></div>
            <div class="modal-header">
                {{Form::open(['url'=>'company','files' => true,'enctype'=>'multipart/form-data'])}}
             
              <h5 class="modal-title">เพิ่มบริษัท</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('company','ชื่อบริษัท')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {{Form::text('company_Name','',['class'=>'form-control'])}}
                      <span class="text-danger">{{ $errors->first('company') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('remark','หมายเหตุ')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                          {{Form::text('remark','',['class'=>'form-control'])}}
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
    </div>

    <div class="container">
      <!-- Modal -->
      <div class="modal" tabindex="-1" role="dialog" id="myModal2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="alert alert-danger" style="display:none"></div>
          <div class="modal-header">
              {{Form::open(['url'=>'department','files' => true,'enctype'=>'multipart/form-data'])}}
            <h5 class="modal-title">เพิ่มแผนก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-2">
                {{Form::label('department','ชื่อแผนก')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                      {{Form::text('department_name','',['class'=>'form-control'])}}
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('department_head_id','ID แผนก')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                        {{Form::select('department_head_id',['0'=>'แพนก1','1'=>'แพนก2'])}}
                      <span class="text-danger">{{ $errors->first('remark') }}</span>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('company_id','ID บริษัท')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                          {{Form::text('company_id','',['class'=>'form-control'])}}
                        <span class="text-danger">{{ $errors->first('remark') }}</span>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('Remark','หมายเหตุ')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                            {{Form::text('Remark','',['class'=>'form-control'])}}
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
  </div>
  <div class="container">
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal3">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="alert alert-danger" style="display:none"></div>
        <div class="modal-header">
            {{Form::open(['url'=>'position','files' => true,'enctype'=>'multipart/form-data'])}}
         
          <h5 class="modal-title">เพิ่มตำแหน่ง</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-2">
              {{Form::label('position_name','ตำแหน่ง')}}
            </div>
              <div class="col-md-5">
                <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                    {{Form::text('position_name','',['class'=>'form-control'])}}
                  <span class="text-danger">{{ $errors->first('company') }}</span>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                {{Form::label('Department_ID','ID ตำแหน่ง')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                      {{Form::text('Department_ID','',['class'=>'form-control'])}}
                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                    </div>
                </div>
              </div>

           <div class="row">
              <div class="col-md-2">
                {{Form::label('Remark','หมายเหตุ')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group {{ $errors->has('remark') ? 'has-error' : '' }}">
                      {{Form::text('Remark','',['class'=>'form-control'])}}
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
<div class="container">
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="myModal4">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
          {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data'])}} 
        <h5 class="modal-title">เพิ่มข้อมูลพนักงาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
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
        <!-- /.control-sidebar-menu -->

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
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
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
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>