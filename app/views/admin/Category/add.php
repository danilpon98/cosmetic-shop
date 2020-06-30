<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Добавления категории</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
          <li class="breadcrumb-item"><a href="<?=ADMIN;?>/category">Список категорий</a></li>
          <li class="breadcrumb-item active">Добавления категории</li>
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
          <form action="<?=ADMIN;?>/category/add" method="post" data-toggle="validator" novalidate="true">
            <div class="card-body">
              <div class="form-group has-feedback">
                <label for="title">Наименование категории</label>
                <input type="text" name="titlecat" class="form-control" id="title" placeholder="Наименование категории" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group">
                <label for="parent_id">Родительская категория</label>
                <?php new \app\widgets\menu\Menu([
                    'tpl' => WWW . '/menu/select.php',
                    'container' => 'select',
                    'cache' => 0,
                    'cacheKey' => 'admin_select',
                    'class' => 'form-control',
                    'attrs' => [
                        'name' => 'parent_id',
                        'id' => 'parent_id',
                    ],
                    'prepend' => '<option value="0">Самостоятельная категория</option>',
                ]) ?>
              </div>
              <div class="form-group">
                <label for="keywords">Ключевые слова</label>
                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">
              </div>
              <div class="form-group">
                <label for="description">Описание</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-success">Добавить</button>
            </div>
          </form>
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