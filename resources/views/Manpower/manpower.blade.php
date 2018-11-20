@extends('layouts.home')
@section('content')

<div class="container">
            <h3 class="tittle">คำขอกำลังคน/Manpower Requisition</h3>
          

            <iframe  id="some" onload="iframeHeight(this)" src="{{url('/manpower/create')}}"   width="100%"   frameborder="0"  style="padding:20px 0 0 0;" scrolling="yes"></iframe>
</div>


















@endsection