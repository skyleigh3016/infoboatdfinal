<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>InfoBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}" >


        <!-- Favicons -->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CDMI INFOBOARD</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image/logo.png" rel="icon">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
        

        <script src="https://kit.fontawesome.com/3a4d1d45d1.js" crossorigin="anonymous"></script>
        <!-- norman CSS File home -->
  <link href="{{ asset('frontend/assets/css/style1.css')}}" rel="stylesheet">
  <!--norman welcome-css links-->
<link href="{{ asset('frontend/assets/css/welcome.css')}}" rel="stylesheet">

<!--norman Bottom-Slider-css links-->
<link href="{{ asset('frontend/assets/css/jquery.flipster.min.css')}}" rel="stylesheet">

<script src="https://kit.fontawesome.com/3a4d1d45d1.js" crossorigin="anonymous"></script>
  
<style>

</style>
        
    </head>
    <body>
    @include('layouts.body.header')

    @include('layouts.body.slider')
       
 <!-- Vendor JS Files -->
 <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
  @yield('content')  
        
  @include('layouts.body.down_slider')
  @include('layouts.body.footer')

        
                    
    </body>
    
  
 


<!-- <div class="footer">
<img src="images/cmdilogo.jpg" alt="" style="width:45px;">
<p class="p1"> CARD-MRI Development Institute Inc.</p>
<p class="p2">Poverty eradication through education</p>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="#">About Us </a>|
<a href="#">Contacts </a>|
<a href="#">Campus Map </a>|
<a href="#">External Links </a>|
<a href="#">Privacy Policy </a>|
<a href="#">Terms</a>  
    
<p class="p3">Created by Mr. Herber Mangubat | all rights reserved</p>
</div> -->

<!--js link-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="{{ asset('frontend/assets/js/jquery.flipster.min.js') }}"></script>
      
</html>
