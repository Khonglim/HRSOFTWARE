@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        {{Form::open(['url'=>'answer','method'=>'POST'])}}
      @foreach ($choice as $c)
      {{$c->question}} <br>
    <input type="radio" name="{{$c->id}}" id="choice1" value="1" />{{$c->choice1}}<br>
    <input type="radio" name="{{$c->id}}" id="choice2" value="2" />{{$c->choice2}}<br><br><br>
@endforeach    

{{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}

{{Form::close()}}
</div>
  </div>
 
  @endsection