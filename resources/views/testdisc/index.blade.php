@extends('layouts.test')
@yield('title',' แบบประเมินบุคลิกภาพ DISC.')
@section('content')


<div class="container">
        <br>  <br>  <br>
    <center>
            <p><h3>แบบประเมินบุคลิกภาพ DISC.</h3></p>
    <p><a href="{{url('/disc') }}" class="btn btn-primary" >แบบทดสอบ DISC (คลิกเพื่อเริ่มทำ)  </a></p>
     
    </center>
    </div>
    
@endsection