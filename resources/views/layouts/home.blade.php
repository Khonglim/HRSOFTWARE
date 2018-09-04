<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>ngg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="new/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="new/css/style.css" rel='stylesheet' type='text/css' />
	<link href="new/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="new/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="new/css/owl.theme.css" type="text/css" media="all">
	<link href="new/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
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
					<i class="far fa-gem"></i>NGG</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link cool" href="{{url('employee/create') }}">สมัครงาน
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="{{url('/testto') }}">ทำแบบทดสอบ MBTI</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="{{url('/testtoo') }}">ทำแบบทดสอบ DICSC</a>
						</li>
			
					
					</ul>

				</div>
				
			</nav>

		</div>
	</header>
 

	
	<script src="new/js/jquery-2.2.3.min.js"></script>
	<script src="new/js/bootstrap.js"></script>

</body>

</html>