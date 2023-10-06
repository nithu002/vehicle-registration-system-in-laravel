<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}>
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href={{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('assets/dist/css/adminlte.min.css') }}>
   {{-- @vite(['assets/plugins/fontawesome-free/css/all.min.css','assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css','assets/dist/css/adminlte.min.css']) --}}
</head>



@yield('main-contant')






<!-- jQuery -->
<script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('assets/dist/js/adminlte.min.js') }}></script>
</body>
</html>
