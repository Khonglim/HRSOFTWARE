
@extends('layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="content container-fluid">


<!---------------------------------------------------ทดสอบ MBTI -------------------------------------------------------->

 


<ul class="list-group">
        @foreach ($testmbti as  $testmbtis )
        @if (	 $testmbtis->id_personal == $personal->id)
    <li class="list-group-item">


        <label for="con">ผลสรุปการทดสอบ MBTI</label><br>
       
           {{ $testmbtis->conclude }} 
           {{  $testmbtis->meaning }} <br>
       




    </li>
       
    @endif
    @endforeach

  



 <!----------------------------------------------------------------------------------------------------------------->


 <!---------------------------------------------------ทดสอบ DISC -------------------------------------------------------->


 @foreach ($testdisc as $testdis )
    @if (	$testdis->id_personal == $personal->id)
    <li class="list-group-item">

            <label for="con">ผลสรุปการทดสอบ DISC</label><br>
            {{ $testdis->meaning }} <br>

    </li>

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

 
</ul>


        </div>
    </div>
   
    @endsection

    @endsection
