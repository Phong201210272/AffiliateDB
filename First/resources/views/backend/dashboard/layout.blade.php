
<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.dashboard.component.header')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
    @include('backend.dashboard.component.navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    @include('backend.dashboard.component.sidebar')
  <!-- Content Wrapper. Contains page content -->
    @include($template)
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('backend.dashboard.component.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
 @include('backend.dashboard.component.script')
</body>
</html>
