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
    <label for="name">Print your name</label>
    <input type="text" name="name" id="name" class="name">
    <p class="drawItDesc">Draw your signature</p>
    <ul class="sigNav">
      <li class="drawIt"><a href="#draw-it" >Draw It</a></li>
      <li class="clearButton"><a href="#clear">Clear</a></li>
    </ul>
    <div class="sig sigWrapper">
     
      <canvas class="pad" width="198" height="55"></canvas>
      <input type="hidden" name="output" class="output">
    </div>


    
	
	<textarea class="output" cols="30" rows="10"></textarea>
  </div>
  <div class="sig sigWrapper">
     
    <canvas class="pad" width="198" height="55"></canvas>
    <input type="hidden" name="output" class="output">
  </div>
  <button id="json2">I accept the terms of this agreement.</button>
</div>
  </div>
  <script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
	 		
    });
  </script>
  @endsection




 
  