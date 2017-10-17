<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>测试</title>

    <link rel="shortcut icon" href="{{ asset('icon.png') }}">
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap-v3.3.7.min.css') }}">

    @yield('styles')
  </head>

  <body>
    @include('back.comps.header')

    @include('back.comps.leftNav')

    @yield('rightCont')

    @include('back.comps.footer')


    <script src="{{ asset('back/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('back/js/bootstrap-v3.3.7.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>