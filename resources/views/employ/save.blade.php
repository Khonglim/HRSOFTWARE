@extends('layouts.new')
@section('content')
<div class="banner-inner">
        <br> 
    <center> <img src="{{URL::asset('img/NGGlogo.jpg')}}"  width="80px" height="80px"></center>
      </div>   
   <br>   <br>   <br>

   <div class="container">
       
        <center> <h2>บันทึกเรียบร้อย!!</h2>  
        <p>   <a href="{{url('/') }}" class="btn btn-info" >กลับสู่หน้าหลัก</a></p>
       </div>
     </center>
 
   </div>


   @endsection