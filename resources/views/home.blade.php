@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      @foreach ($choice as $c)
      {{$c->id}}
@endforeach    
</div>
  </div>
 
  @endsection