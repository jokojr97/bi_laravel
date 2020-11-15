<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="@yield('metadeskription')" name="descriptison">
  <meta content="@yield('metakeywords')" name="keywords">

  <!-- Favicons -->
  <link href="/img/home/icon-kecil.png" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    hr {
      margin-top:0px;
    }
  </style>
</head>
<body class="sidebar-mini layout-fixed text-sm">
  
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-secondary text-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/img/home/icon-kecil.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-light"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bojonegoro Institute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Page</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/page" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class=" nav-icon"></i>
                  <p>All Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/page/create" class="nav-link" style="padding-top: 0px;">
                  <i class=" nav-icon"></i>
                  <p>Add Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/post" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class=" nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/post/create" class="nav-link" style="padding-top: 0px;">
                  <i class=" nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kegiatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.kegiatan.index') }}" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class=" nav-icon"></i>
                  <p>All Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.kegiatan.create') }}" class="nav-link" style="padding-top: 0px;">
                  <i class=" nav-icon"></i>
                  <p>Add Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/category" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/category" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class="nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/category/create" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class="nav-icon"></i>
                  <p>New Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/category" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Post Type
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/type" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class="nav-icon"></i>
                  <p>All Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/type/create" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class="nav-icon"></i>
                  <p>New Type</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/contact" class="nav-link" style="padding-top: 0px;padding-bottom: 0px">
                  <i class="nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/comments" class="nav-link" style="padding-top: 0px;">
                  <i class="nav-icon"></i>
                  <p>Comments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Control</li>

          <li class="nav-item has-treeview menu-open">
            <a href="/admin/site" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Site Setting
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/menu" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/menu" class="nav-link" style="padding-bottom: 0px;padding-top: 0px">
                  <i class="nav-icon"></i>
                  <p>Show Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/menu/create" class="nav-link" style="padding-bottom: 0px;padding-top: 0px">
                  <i class="nav-icon"></i>
                  <p>Add Menu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user" class="nav-link" style="padding-bottom: 0px;padding-top: 0px">
                  <i class="nav-icon"></i>
                  <p>Show Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/user/create" class="nav-link" style="padding-bottom: 0px;padding-top: 0px">
                  <i class="nav-icon"></i>
                  <p>Add Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/password" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          <li class="nav-header">Logout</li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="myfunction()">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
            <form id="logout-form" action="/logout" method="POST" style="display: none">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('container')

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="">Bojonegoro Institute</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
  function myfunction(){
    var r = confirm('Are you sure want to logout?');
    if (r == true) {
        event.preventDefault();document.getElementById('logout-form').submit();
    }else {
        console.log('cancel');
    }
  }
  function deletefunc(){   
    var r = confirm('Are you sure want to delete this item?');
    if (r == true) {
        event.preventDefault();document.getElementById('del-form').submit();
    }else {
        console.log('cancel');
    } 
  }
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
@yield('script_tambahan');
</body>
</html>
