<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Новый товар</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
          <li class="breadcrumb-item"><a href="<?= ADMIN; ?>/product">Список товаров</a></li>
          <li class="breadcrumb-item active">Новый товар</li>
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
              <form action="<?=ADMIN;?>/product/add" method="post" data-toggle="validator" id="add">
                <div class="card-body">
                  <div class="form-group has-feedback">
                      <label for="title">Наименование товара</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null; ?>" required>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  </div>

                  <div class="form-group">
                      <label for="category_id">Родительская категория</label>
                      <?php new \app\widgets\menu\Menu([
                          'tpl' => WWW . '/menu/select.php',
                          'container' => 'select',
                          'cache' => 0,
                          'cacheKey' => 'admin_select',
                          'class' => 'form-control',
                          'attrs' => [
                              'name' => 'category_id',
                              'id' => 'category_id',
                          ],
                          'prepend' => '<option>Выберите категорию</option>',
                      ]) ?>
                  </div>

                  <div class="form-group">
                      <label for="keywords">Ключевые слова</label>
                      <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?php isset($_SESSION['form_data']['keywords']) ? h($_SESSION['form_data']['keywords']) : null; ?>">
                  </div>

                  <div class="form-group">
                      <label for="description">Описание</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?php isset($_SESSION['form_data']['description']) ? h($_SESSION['form_data']['description']) : null; ?>">
                  </div>

                  <div class="form-group has-feedback">
                      <label for="price">Цена</label>
                      <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="<?php isset($_SESSION['form_data']['price']) ? h($_SESSION['form_data']['price']) : null; ?>" required data-error="Допускаются цифры и десятичная точка">
                      <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group has-feedback">
                      <label for="content">Контент</label>
                      <textarea name="content" id="editor1" cols="80" rows="10"><?php isset($_SESSION['form_data']['content']) ? $_SESSION['form_data']['content'] : null; ?></textarea>
                  </div>

                  <div class="form-group">
                      <label>
                          <input type="checkbox" name="status" checked> Статус
                      </label>
                  </div>

                  <div class="form-group">
                      <label>
                          <input type="checkbox" name="hit"> Хит
                      </label>
                  </div>

                  <div class="form-group">
                     <label for="related">Связанные товары</label>
                     <select name="related[]" class="form-control select2" id="related" multiple></select>
                  </div>
                  
                  <div class="form-group">
                    <div class="card card-success card-outline file-upload">
                        <div class="card-header">
                            <h4 class="box-title">Загрузка изображения</h4>
                        </div>
                        <div class="card-body">
                            <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                            <p><small>Рекомендуемые размеры: 700х612</small></p>
                            <div class="single"></div>
                        </div>
                        <div class="overlay">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <button type="submit" class="btn btn-success">Добавить</button>
                </div>
              </form>
              <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->