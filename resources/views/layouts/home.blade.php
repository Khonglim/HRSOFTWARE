<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ngg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<link href="{{ asset('new/css/bootstrap.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/style.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/prettyPhoto.css') }}"   rel='stylesheet' type='text/css' />
	<link href="{{ asset('new/css/owl.carousel.css') }}"   rel='stylesheet' type='text/css'  media="all" />
	<link href="{{ asset('new/css/owl.theme.css') }}"   rel='stylesheet' type='text/css' media="all" />
	<link href="{{ asset('new/css/fontawesome-all.css') }}"   rel='stylesheet' />
	







  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
  <style>
  body {
    font-family: 'Prompt', sans-serif;
   
  }
  </style>


</head>

<body>
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts_agile">
	
			<div class="log">
		
				<h5>
					<a class="sign" href="{{url('/login') }}" >
						<i class="fas fa-user"></i> Login</a>
				</h5>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="{{url('/') }}">
					<img src="{{URL::asset('img/NGGlogo.jpg')}}"  width="80px" height="80px"> </a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
							<li class="nav-item active">
									<a class="nav-link cool" href="{{url('/') }}">หน้าแรก</a>
								</li>
						<li class="nav-item ">
							<a class="nav-link cool" href="{{url('employee/create') }}">สมัครงาน
							
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="{{url('/testto') }}">ทำแบบทดสอบ MBTI</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="{{url('/testtoo') }}">ทำแบบทดสอบ DISC</a>
						</li>
			
						<li class="nav-item">
								<a class="nav-link cool" href="{{url('/userlogin') }}">ทำแบบประเมิน360</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle cool" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									แบบประเมินผลการปฏิบัติงาน
									<i class="fas fa-angle-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="{{url('Operate/create') }}">ระดับปฏิบัติการ </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{url('Operate_sup/create') }}">ระดับผู้บังคับบัญชา </a>
	
								</div>
							</li> 
					</ul>

				</div>
				
			</nav>

		</div>
	</header>
	<main>
		@yield('content')
	</main>


<br><br><br>
<div class="modal-footer">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2018 NGG:
			  <a href="#"> version1.0</a>
			 
			  <p class="text-danger">ทางบริษัทกำลังพัฒนา(ขออภัยในความไม่สะดวกหากเกิดผิดพลาดของเว็บค่ะ)</p>
			</div>
			<!-- Copyright -->
		
		  </footer>
	<script src="new/js/jquery-2.2.3.min.js"></script>
	<script src="new/js/bootstrap.js"></script>
	
</body>

</html>