<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Management</title>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
      href="/admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin_assets/dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <div class="preloader flex-column justify-content-center
        align-items-center">
        <img class="animation__shake" src="/admin_assets/dist/img/AdminLTELogo.png"
          alt="AdminLTELogo" height="60" width="60">
      </div>

      @include('admin/partials/topbar/topbar')

      @include('admin/partials/sidebar/sidebar')

      <div class="content-wrapper">
       
        @yield('content')
       
      </div>
    
      @include('admin/partials/footer/footer')

    </div>

    <!-- jQuery -->
    <script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin_assets/dist/js/adminlte.js"></script>

  </body>
</html>
