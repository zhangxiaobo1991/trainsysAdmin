<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>测试</title>

    <link rel="shortcut icon" href="{{ asset('icon.png') }}">
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap-v3.3.7.min.css') }}">

    <link rel="stylesheet" href="{{ asset('back/css/back.css') }}">
    @yield('styles')
  </head>

  <body>
    @include('back.comps.header')
    <div class="container-fluid">
      @include('back.comps.leftNav')
      @include('back.comps.main')
    </div>
    <script src="{{ asset('back/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap-v3.3.7.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>