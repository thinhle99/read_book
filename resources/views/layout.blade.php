<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Books to read online for free</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- <link rel="icon" href="{{asset('public/image/book.png')}}" type="image/gif" sizes="32x32"> -->
  <link rel="icon" href="https://purepng.com/public/uploads/large/purepng.com-booksbookillustratedwrittenprintedliteratureclipart-1421526451843dou0k.png" type="image/gif" sizes="32x32">

  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

  <!-- <link rel="stylesheet" href="public/css/nav.css" />
  <link rel="stylesheet" href="../public/css/nav.css" /> -->
  
  <link rel="stylesheet" href="public/assets/fonts/themify-icons/themify-icons.css" />
  <link rel="stylesheet" href="../public/assets/fonts/themify-icons/themify-icons.css" />

  <style>
    /* @media (max-width: 760px) {
      html,
    body {
      padding: 0;
    margin: 0;
    box-sizing: border-box;
    background-color: #e9ecef;

    }
    } */
    /* @media (max-width: 760px) {
      body {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      } */

    /* body#body_padding {
      font-family: Arial, Helvetica, sans-serif;
      padding: 20px;

    } */

    body#body_padding {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      background-color: #e9ecef;

    }


    /* } */
  </style>

</head>

<body id="body_padding">
  @include('pages.nav')
    @yield('content')
  @include('pages.footer')



  <!-- <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
      myFunction()
    };

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
  </script> -->
</body>

</html>