@extends('layouts.home')
@section('content')

<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <section class="probootstrap-cover">
      <div class="container">
        <div class="row probootstrap-vh-100 align-items-center text-center">
          <div class="col-sm">
            <div class="probootstrap-text">
              <h1 class="probootstrap-heading text-white mb-4"> ยินดีตอนรับสู่ NGG GROUP.</h1>
              <div class="probootstrap-subheading mb-5">
                <p class="h4 font-weight-normal text-light"> Cien Sesto NGGTP TAI Xian  UW  Other</p>
              </div>
            <p><a href="{{url('/form')}}" class="btn btn-primary mr-2 mb-2">สมัครงาน</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
</header>  
@endsection