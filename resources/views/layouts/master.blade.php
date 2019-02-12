<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ape safi">
    <meta name="keywords" content="safi">
    <meta name="author" content="ahmed gtaib">
    <link rel="stylesheet" href="{{asset('design/css/Bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/all.min.css')}}">
     <link rel="stylesheet" href="{{asset('design/css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('design/css/style.css')}}">
     <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <title>ape safi</title>
  </head>
  <body>
    @include('include.upper')
   @include('include.nav')
 
    @yield('content')
    
    @include('include.footer')
    <div class="load-s">
      <div class="spinner">
         <div class="rect1"></div>
         <div class="rect2"></div>
         <div class="rect3"></div>
         <div class="rect4"></div>
         <div class="rect5"></div>
      </div>
    </div>
    <a href="#" class="scroll-top">
      <i class="fas fa-chevron-up"></i>
    </a>
   <script src="{{asset('design/js/jq.js')}}" ></script>
    <script src="{{asset('design/js/Bootstrap.min.js')}}" ></script>
    <script src="{{asset('design/js/popper.min.js')}}" ></script>
    <script src="{{asset('design/js/wow.min.js')}}" ></script>
       <script src="{{asset('design/js/main.js')}}" ></script>
  </body>
</html>