
@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
            <?php $i=0 ?>
            @foreach($_POST as $choice => $answer)
               @if($choice != '_token')
                    
                 {{$choice}}ตอบ{{$answer}}<br>
                 @if($choice == '2' || $choice == '6' )
                 <?php    $i++ ?>
                  @endif 
               @endif
          
             @endforeach
        {{$i}}
</div>
  </div>
 
  @endsection
