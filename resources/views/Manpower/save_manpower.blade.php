<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>NGG</title>
</head>
<body>
            <div class="container">

                        @if(Session::has('flash_message') )
      
                        <div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
                    
                        @endif
            </div>
</body>
</html>