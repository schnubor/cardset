<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cardset - @yield('title')</title>
  
  <?= stylesheet_link_tag() ?>
  <?= javascript_include_tag() ?>
  <link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
  @include('layout.partials.nav')
  @yield('content')

  <script src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>