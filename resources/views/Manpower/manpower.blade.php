@extends('layouts.home')
@section('content')

<div class="container">
            <h3 class="tittle">คำขอกำลังคน/Manpower Requisition</h3>
           

            <iframe  name="iframeid" id="iframeid" src="{{url('/manpower')}}"  height="200%"  width="100%"   frameborder="0"  style="padding:20px 0 0 0;"></iframe>
</div>


















@endsection