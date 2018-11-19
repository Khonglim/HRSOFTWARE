@extends('layouts.home')
@if(Session::has('flash_message') )
<div class="alert alert-success d-flex align-items-center"> {!! session('flash_message') !!}</div>
@endif
@section('content')
<div class="banner-inner">
</div>


  
     

</section>


@endsection