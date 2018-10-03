@extends('layouts.test')

@section('content')

<div class="container">
    <br>  <br>  <br>
<center>
        <p><h3>ทำตามลำดับขั้นตอนดังนี้</h3></p>
        <p><h4>ขั้นตอนที่ 1 แบบประเมินบุคลิกภาพตามตัวบ่งชี้ของมายเออร์-บริกส์(MBTI).</h4></p>
<p><a href="{{url('/mbti') }}" class="btn btn-primary" >แบบทดสอบ MBTI (คลิกเพื่อเริ่มทำ)  </a></p>
<p><h4>ขั้นตอนที่  2 แบบประเมินบุคลิกภาพ DISC.</h4></p>
<p><a href="{{url('/disc') }}" class="btn btn-warning" >แบบทดสอบ DISC (คลิกเพื่อเริ่มทำ)  </a></p>
 
</center>
</div>


@endsection