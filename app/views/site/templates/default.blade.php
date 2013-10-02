<!DOCTYPE HTML>
<html>
  <head>
    <title>
    @yield('title')
    </title>
   <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/shared.css') }}">
  </head>
  <body>
    <div id="header">
      <div id="carousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="Carousel" data-slide-to="0" class="active"></li>
          <li data-target="Carousel" data-slide-to="1"></li>
          <li data-target="Carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="//placehold.it/1300x450" class="img-responsive">
          </div>
          <div class="item">
            <img src="//placehold.it/1300x400/EEEEEE" class="img-responsive">
          </div>
          <div class="item">
            <img src="//placehold.it/1300x400/FEFEFE" class="img-responsive">
        </div>
      </div>
    </div>
    <div class="container" id="content">
      @yield('content')
    </div>
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
