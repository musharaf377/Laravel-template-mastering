<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href=" {{ asset('/') }} ">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}-@yield('title')</title>

     <!-- Favicon  -->
     <link rel="icon" href="img/core-img/favicon.ico">

     <!-- Style CSS -->
     <link rel="stylesheet" href="asset/frontend/css/style.css">

    @stack('styles')
    
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('frontend.include.header')
    <!-- ##### Header Area End ##### -->


    <!-- ##### body content Area Start ##### -->
   
    @yield('content')

    <!-- ##### body content Area End ##### -->



    <!-- ##### Footer Area Start ##### -->
    @include('frontend.include.footer')
    <!-- ##### Footer Area End ##### -->

  <!-- ##### Script Area Start ##### -->
  @include('frontend.include.scripts')
  <!-- ##### Script Area End ##### -->


</body>

</html>
