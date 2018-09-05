 @extends('layouts.main')
@section('title','| แบบประเมินการสัมภาษณ์')
@section('content')
<div class="content-wrapper">
  <div class="content container-fluid">
    <br>  <br>  <br>
<center>
        <p>    <h3> โปรดเลือกแบบประเมินการสัมภาษณ์. </h3> </p>
<p>   <a href="{{url('rate_sup/create') }}" class="btn btn-primary" >ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</a></p>
  <p>   <a href="{{url('rate/create') }}" class="btn btn-info" >ระดับปฎิบัติการ (Operational Level)</a></p>
</center>
</div>
</div>
@endsection