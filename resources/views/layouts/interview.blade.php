<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
<style>
body {
  font-family: 'Prompt', sans-serif;
 
}
</style>
</head>
<body>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/') }}">กลับหน้าแรก</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">แบบประเมิน</a></li>
                    <li><a href="{{url('rate_sup/create') }}">1.ระดับบังคับบัญชา</a></li>
                    <li><a href="{{url('rate/create') }}">2.ระดับปฏิบัติการ</a></li>
                    
                  </ul>
                </div>
              </nav>
                


        <main>
                @yield('content')
            </main>

</body>
</html>