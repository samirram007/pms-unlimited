<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('website/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('website/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('website/css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('website/css/global.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet">
  <script src="{{asset('website/js/jquery.js')}}"></script>
</head>
<body data-spy="scroll" data-target="#navbar-example" style="background:url({{asset('website/images/login.jpg')}});
 position: absolute;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;
    z-index: -1;">
      <div id="preloader"></div>
      @include('website.pages.login_as')
    <div class="" style="background-color:rgba(27,61,12,0.32);

    margin-top:0px; padding-top:0px; border-top:0px solid rgba(200,255,0,1.00); min-height:900px;">

@include('website.layouts.header')

@yield('content')

{{-- @include('website.pages.landing') --}}
@include('website.layouts.footer')


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('website/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('website/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('website/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('website/lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('website/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('website/lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('website/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('website/lib/nivo-slider/js/jquery.nivo.slider.js')}}"  ></script>
  <script src="{{asset('website/lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('website/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('website/js/main.js')}}"></script>
  <!-- Contact Form JavaScript File -->
</div>
</body>
</html>
