<div class="login-box">
  <div class="login-logo">
    <b>Admin</b>LTE
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Войдите, чтобы начать сеанс</p>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fa fa-ban"></i> Ошибка!</h5>
          <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
      <?php endif; ?>
      <form action="<?= ADMIN; ?>/user/login-admin" method="post">
        <div class="form-group has-feedback position-relative">
          <input name="login" type="text" class="form-control" placeholder="Логин">
          <span class="fa fa-user form-control-feedback form-ico"></span>
        </div>
        <div class="form-group has-feedback position-relative">
          <input name="password" type="password" class="form-control" placeholder="Пароль">
          <span class="fa fa-key form-control-feedback form-ico"></span>
        </div>
        <div class="row justify-content-end">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Вход</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->