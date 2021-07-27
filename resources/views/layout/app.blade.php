<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Job-Seeker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/LineIcons.2.0.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{asset('assets/css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
    </head>
        @yield('styles')
        
   <body>
            @include('common._nav')
            @yield('content')
            @include('common._footer')

        <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/js/jquery-3.5.1.js') }}"></script>
        <script src="{{asset('assets/js/wow.min.js') }}"></script>
        <script src="{{asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{asset('assets/js/glightbox.min.js') }}"></script>
        <script src="{{asset('assets/js/main.js') }}"></script>

        @yield('script')

   </body>

</html>
