<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Список категорий</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
          <li class="breadcrumb-item active">Список категорий</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <?php new \app\widgets\menu\Menu([
                'tpl' => WWW . '/menu/category_admin.php',
                'container' => 'div',
                'cache' => 0,
                'cacheKey' => 'admin_cat',
                'class' => 'list-group list-group-root well',
            ]) ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->