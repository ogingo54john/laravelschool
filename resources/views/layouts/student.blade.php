<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("school/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("school/dist/css/adminlte.min.css") }}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> --}}

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("school/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> --}}
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> --}}
<link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.css") }}">
 @yield('styles')
{{-- @livewireStyles --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">




<div class="wrapper">
@include("layouts.studentNavbar")

  @include("layouts.studentSidebar")


@yield("content")



 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    {{-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> --}}
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="https://www.kadesea.co.ke">Kadesea.co.ke</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{ asset("school/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset("school/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("school/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- ChartJS -->
{{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
<script src="{{ asset("school/plugins/sparklines/sparkline.js") }}"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset("school/plugins/jqvmap/jquery.vmap.min.js") }}"></script> --}}
{{-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<!-- daterangepicker -->
{{-- <script src="plugins/moment/moment.min.js"></script> --}}
{{-- <script src="plugins/daterangepicker/daterangepicker.js"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
<!-- Summernote -->
{{-- <script src="plugins/summernote/summernote-bs4.min.js"></script> --}}
<!-- overlayScrollbars -->
<script src="{{ asset("school/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("school/dist/js/adminlte.js") }}"></script>
<script src="{{ asset("assets/fontawesome/css/all.js") }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset("school/dist/js/demo.js") }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="dist/js/pages/dashboard.js"></script> --}}





















@yield("scripts")
{{-- @livewireScripts --}}
</body>
</html>
