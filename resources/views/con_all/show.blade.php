@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">


<!---------------------------------------------------ทดสอบ MBTI -------------------------------------------------------->

 @foreach ($testdisc as $testdis )
 @if (	$testdis->id_personal == $personal->id)
   
    {{ $testdis->meaning }} <br>
 @endif
@endforeach





 <!----------------------------------------------------------------------------------------------------------------->


 <!---------------------------------------------------ทดสอบ DISC -------------------------------------------------------->

 @foreach ($testmbti as  $testmbtis )
 @if (	 $testmbtis->id_personal == $personal->id)
 {{ $testmbtis->conclude }} 
    {{  $testmbtis->meaning }} <br>
   
 @endif
@endforeach





 <!----------------------------------------------------------------------------------------------------------------->












  <!-------------------------------------------------ระดับปฏิบัติการ---------------------------------->
@foreach ($con_interview as $coni )
    @if (	$coni->id_personal == $personal->id)
       {{ $coni->chioce }} 
       {{ $coni->score }} <br>
    @endif
@endforeach


@foreach ($comment_interview as $conm )
    @if (	$conm->id_posinal == $personal->id)
       {{ $conm->chioce }} 
       {{ $conm->comment_interview }} <br>
    @endif
@endforeach
   <!----------------------------------------------------------------------------------------------------------->



 <!---------------------------------------------------ระดับบังคับบัญชา---------------------------------------->
@foreach ($inter_sup as $inter )
    @if (	$inter->id_personal == $inter->id)
       {{ $inter->chioce }} 
       {{ $inter->score }} <br>
    @endif
@endforeach
 


@foreach ($comment_sup as $conm )
    @if (	$conm->id_posinal == $personal->id)
       {{ $conm->chioce }} 
       {{ $conm->comment_interview }} <br>
    @endif
@endforeach
 <!------------------------------------------------------------------------------------------------------------------------>

 



        </div>
    </div>
   
    @endsection