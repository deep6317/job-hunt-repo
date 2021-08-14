<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Job Hunt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <script src="https://cdn.tiny.cloud/1/y6qjew2jzs4ujowkpujh3j44ymqo2teiao1dly51kf0tbkfn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                       selector:'.editor',
                       menubar: false,
                       statusbar: false,
                       plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
                       toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
                       skin: 'bootstrap',
                       toolbar_drawer: 'floating',
                       min_height: 200,           
                       autoresize_bottom_margin: 16,
                       setup: (editor) => {
                           editor.on('init', () => {
                               editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
                           });
                           editor.on('focus', () => {
                               editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
                               editor.getContainer().style.borderColor="#80bdff"
                           });
                           editor.on('blur', () => {
                               editor.getContainer().style.boxShadow="",
                               editor.getContainer().style.borderColor=""
                           });
                       }
                   });
           </script>
        @yield('script')

   </body>

</html>
