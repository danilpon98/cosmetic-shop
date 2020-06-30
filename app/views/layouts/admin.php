<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <base href="/adminlte/">
  <?= $this->getMeta(); ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../images/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon-180x180.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <link rel="stylesheet" href="dist/css/adminltecustom.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="plugins/morris/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="plugins/datepicker/datepicker3.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= ADMIN; ?>" class="nav-link">Главная</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= PATH; ?>" target="_blank" class="nav-link">На сайт</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= PATH ?>/user/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= ADMIN ?>/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= ADMIN ?>/user/edit?id=<?= $_SESSION['user']['id']; ?>" class="d-block"><?= $_SESSION['user']['name']; ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= ADMIN ?>/" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>Главная</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ADMIN ?>/order" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>Заказы</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-navicon"></i>
              <p>
                Категории
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= ADMIN ?>/category" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Список категорий</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= ADMIN ?>/category/add" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Добавить категорию</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cubes"></i>
              <p>
                Товары
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= ADMIN ?>/product" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Список товаров</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= ADMIN ?>/product/add" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Добавить товар</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= ADMIN ?>/cache" class="nav-link">
              <i class="nav-icon fa fa-database"></i>
              <p>Кэширование</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Пользователи
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= ADMIN ?>/user" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Список пользователей</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= ADMIN ?>/user/add" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Добавить пользователя</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php if(isset($_SESSION['error'])): ?>
      <div class="alert alert-danger alert-dismissible alert-margin">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-ban"></i> Ошибка!</h5>
        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
      </div>    
    <?php endif; ?>
    <?php if(isset($_SESSION['success'])): ?>
      <div class="alert alert-success alert-dismissible alert-margin">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> Успех!</h5>
        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
      </div>
    <?php endif; ?>
    <?= $content; ?>
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
    var path = '<?=PATH;?>',
        adminpath = '<?=ADMIN;?>';
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.maskedinput.min.js"></script>
<script>
$(function () {
  $("input[name=phone]").mask("8 (999) 999-99-99");
});
</script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- jvectormap -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="plugins/knob/jquery.knob.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- datepicker -->
<!-- <script src="plugins/datepicker/bootstrap-datepicker.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- CKEditor5 -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<script src="plugins/select2/select2.full.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/validator.min.js"></script>
<script src="/js/ajaxupload.js"></script>
<script src="dist/js/adminltecustom.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
</body>
</html>
