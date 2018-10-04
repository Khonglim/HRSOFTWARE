@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
     
    @if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
	@endif

<<<<<<< HEAD
	
  
=======
>>>>>>> cc682608a2b549e1f0820f1b89c889c380b99608

</div>
  </div>
 
  @endsection