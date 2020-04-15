<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('svg/favicon-16x16.png')}}">
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('svg/apple-touch-icon.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('svg/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('svg/favicon-16x16.png')}}">
      <link rel="manifest" href="{{ asset('svg/site.webmanifest')}}">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="{{ asset('css/fontrules.css')}}">
      <link rel="stylesheet" href="{{ asset('css/master3.css')}}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- This reference is for boostrap  -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
      <style media="screen">
          body{
            background:#FAF9F5;
          }
      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145176170-1"></script>
      <script>

          window.dataLayer = window.dataLayer || [];
          function gtag(){ dataLayer.push(arguments); }
          gtag('js', new Date());

          gtag('config', 'UA-145176170-1');
          
      </script>
  </head>
  <body>
    {{--  --}}
        @yield('content')
    {{--  --}}
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
