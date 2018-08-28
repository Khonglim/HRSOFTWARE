<!DOCTYPE html>
<html lang="th">
  <head>
    <title>NGG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />
    
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Prompt">
<style>
body {
    font-family: 'Prompt', sans-serif;
  
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">NGG GROUP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="probootstrap-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link">หน้าแรก</a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item probootstrap-cta"><a href="{{route('login') }}" class="nav-link">เข้าระบบ</a></li>
            </ul>
           
          </div>
        </div>
      </nav>

   
      <main>
            @yield('content')
        </main>

    <footer class="probootstrap-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-lg mb-4"><h2 class="probootstrap-heading"><a href="#">Unlock</a></h2></div>
              <div class="col-lg">
                <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Company</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                    <li><a href="#" class="py-2 d-block">Press</a></li>
                    <li><a href="#" class="py-2 d-block">News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg">
                 <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Communities</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Support</a></li>
                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                    <li><a href="#" class="py-2 d-block">News</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg">
                 <div class="probootstrap-footer-widget mb-4">
                  <h2 class="probootstrap-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="probootstrap-footer-widget mb-4">
              <ul class="probootstrap-footer-social list-unstyled float-md-right float-lft">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md text-left">
            <ul class="list-unstyled footer-small-nav">
              <li><a href="#">Legal</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Cookies</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </div>
          <div class="col-md text-md-right text-left">
            <p><small>&copy; Unlock 2017. All Rights Reserved. <br> Made with <span class="icon-heart"></span> by <a href="https://uicookies.com/">uiCookies</a> Demo Images: Unsplash</small></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    
  </body>
</html>