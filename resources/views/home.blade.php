@extends('layouts.main') 
@section('content')

<div class="content-wrapper">
  <div class="content container-fluid">
    <div class="alert alert-danger">
      <h3><strong>โปรดทราบ!</strong> แถบเมนูบ้างหัวข้อยังไม่สาราถใช้งานได้อยู่ระหว่างการดำเนินการ.</h3>
    </div>
    @if(Session::has('flash_message') )

    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>

    @endif



    <div class="sigPad">
      <ul class="sigNav">
        <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
        <li class="clearButton"><a href="#clear">Clear</a></li>
      </ul>
      <div class="sig sigWrapper">
        <div class="typed"></div>
        <canvas class="pad" width="198" height="55"></canvas>
        <input type="hidden" name="signa1" class="output">

      </div>
    </div>
        
    <div class="sigPad">
      <ul class="sigNav">
        <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
        <li class="clearButton"><a href="#clear">Clear</a></li>
      </ul>
      <div class="sig sigWrapper">
        <div class="typed"></div>
        <canvas class="pad" width="198" height="55"></canvas>
        <input type="hidden" name="signa2" class="output">
      </div>
    </div>

    <div class="sigPad">
      <ul class="sigNav">
        <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
        <li class="clearButton"><a href="#clear">Clear</a></li>
      </ul>
      <div class="sig sigWrapper">
        <div class="typed"></div>
        <canvas class="pad" width="198" height="55"></canvas>
        <input type="hidden" name="signa3" class="output">
        
      </div>
    </div>



    <div class="sigPad">
        <ul class="sigNav">
          <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
          <li class="clearButton"><a href="#clear">Clear</a></li>
        </ul>
        <div class="sig sigWrapper">
          <div class="typed"></div>
          <canvas class="pad" width="198" height="55"></canvas>
          <input type="hidden" name="signa4" class="output">
        
        </div>
      </div>
  
























  </div>
  <script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
	 		
    });
  </script>
@endsection