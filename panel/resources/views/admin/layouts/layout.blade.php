<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield("title")</title>

  {{--include styles--}}
  @include("admin.layouts.styles")

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  {{--include header--}}
  @include("admin.layouts.header")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{--include left sidebar panel--}}
  @include("admin.layouts.left_sidebar")

<!-- Content Wrapper. Contains page content -->
{{--dynamic content file--}}
@section("content")
@show

  <!-- /.content-wrapper -->
  {{--include footer file--}}
@include("admin.layouts.footer")

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{--include script file--}}
@include("admin.layouts.scripts")
</body>
</html>
