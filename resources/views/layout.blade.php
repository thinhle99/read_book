<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogs Du lịch</title>
        <link rel="icon" href="{{asset('public/image/logo3.png')}}" type="image/gif" sizes="32x32">
        <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Styles -->
     
    </head> 
    <body>
        <div class="container-fluid">

            @include('pages.header')
            @include('pages.nav')
            @yield('content')
            
        </div>

       
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript">
            // When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the navbar
            var navbar = document.getElementById("sticky-sidebar");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
        </script>
    </body>
</html>
