<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- Required meta tags -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/responsive.css') }}">
      


      <title>@yield('title')</title>
      
   </head>
   <body>
<body>
    <div id="app">
        @section('header')
            @include('layouts.header')
        @show
        <main>
            @yield('content')
        </main>
         @section('footer')
            @include('layouts.footer')
         @show
         @yield('app-js')
    </div>
      
</body>

</html>
