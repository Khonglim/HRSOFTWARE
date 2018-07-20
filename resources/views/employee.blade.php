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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script>
      $(function() {
      $("#newModalForm").validate({
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
          $("#addForm").validate({
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
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
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">พนักงาน</div>
               <div class="table-responsive">
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
                                       {{Form::open(['route'=>['employee.update',$l['id']],'method'=>'PUT','files' => true,'id' => 'newModalForm'])}}
                                       <div class="row">
                                           <div class="col-md-2">
                                             {{Form::label('name','ชื่อ')}}
                                           </div>
                                             <div class="col-md-5">
                                               <div class="form-group ">
                                                   {{Form::text('name',$l['name'],['class'=>'form-control','id' => 'name'])}}
                                                 <span class="text-danger"></span>
                                                 </div>
                                             </div>
                                           </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('lastname','นามสกุล')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group">
                                                     {{Form::text('lastname',$l['lastname'],['class'=>'form-control','id' => 'lastname'])}}
                                                   <span class="text-danger"></span>
                                                   </div>
                                               </div>
                                             </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('nikname','ชื่อเล่น')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group ">
                                                     {{Form::text('nikname',$l['nikname'],['class'=>'form-control','id' => 'nikname'])}}
                                                   <span class="text-danger"></span>
                                                   </div>
                                               </div>
                                             </div>  
                                             <div class="row">
                                               <div class="col-md-2">
                                                 {{Form::label('birthday','วันเกิด')}}
                                               </div>
                                                 <div class="col-md-5">
                                                   <div class="form-group ">
                                                       {{Form::date('birthday',$l['birthday'],['class'=>'form-control','id' => 'birthday'])}}
                                                     <span class="text-danger"></span>
                                                     </div>
                                                 </div>
                                               </div>   
                         
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('sex','Sex')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group ">
                                                       {{ Form::radio('sex', 'Male') }}Male
                                                       {{ Form::radio('sex', 'Female') }}Female
                                                         <span class="text-danger"></span>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('email','อีเมล')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group">
                                                         {{Form::email('email',$l['email'],['class'=>'form-control','id' => 'email'])}}
                                                       <span class="text-danger"></span>
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
              <td colspan="9" > No data !!</td>
               </tr>
                             @endforelse
                    </tbody>
              </table> 
         
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
             <h4 class="modal-title">แก้ไข</h4>
              </div>
              <div class="modal-body">
                  {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data','id' => 'addForm'])}}
          <div class="row">
              <div class="col-md-2">
                {{Form::label('name','ชื่อ')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group ">
                      {{Form::text('name','',['class'=>'form-control','id' => 'name'])}}
                    <span class="text-danger"></span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('lastname','นามสกุล')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group">
                        {{Form::text('lastname','',['class'=>'form-control','id' => 'lastname'])}}
                      <span class="text-danger"></span>
                      </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('nikname','ชื่อเล่น')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                        {{Form::text('nikname','',['class'=>'form-control','id' => 'nikname'])}}
                      <span class="text-danger"></span>
                      </div>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('birthday','วันเกิด')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group ">
                          {{Form::date('birthday','',['class'=>'form-control','id' => 'birthday'])}}
                        <span class="text-danger"></span>
                        </div>
                    </div>
                  </div>   

                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('sex','Sex')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group" >
  
                          {{ Form::radio('sex', 'Male') }}Male
                          {{ Form::radio('sex', 'Female') }}Female
                          

                          
                            </span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('email','อีเมล')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            {{Form::email('email','',['class'=>'form-control','required'])}}
                          <span class="text-danger"></span>
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
   </div>
   
    
   
    </div>
              </footer>
          </div>
      </div>
</div>

<script src="dist/js/adminlte.min.js"></script>
</body>
</html>