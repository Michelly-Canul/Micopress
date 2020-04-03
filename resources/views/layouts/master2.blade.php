<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
  <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    @yield('contenido')



    @stack('scripts')
    <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
  <script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
  <script src="js/main.js"></script>


  </body>
</html>