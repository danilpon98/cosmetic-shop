<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Список товаров</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
          <li class="breadcrumb-item active">Список товаров</li>
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
              <?php if ($products):?>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Категория</th>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Статус</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($products as $product): ?>
                            <tr>
                                <td><?=$product['id'];?></td>
                                <td><?=$product['cat'];?></td>
                                <td><?=$product['title'];?></td>
                                <td><?=$product['price'];?></td>
                                <td><?=$product['status'] ? 'On' : 'Off';?></td>
                                <td><a href="<?=ADMIN;?>/product/edit?id=<?=$product['id'];?>"><i class="fa fa-fw fa-eye"></i></a> <a class="delete" href="<?=ADMIN;?>/product/delete?id=<?=$product['id'];?>"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
              </div>
              <?php endif; ?>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <?php if ($pagination->countPages > 1): ?>
                  <?= $pagination; ?>
                <?php endif; ?>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->