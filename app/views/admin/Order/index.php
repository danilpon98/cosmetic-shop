    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Список заказов</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
              <li class="breadcrumb-item active">Список заказов</li>
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
              <div class="card-header clearfix">
                <h3 class="card-title float-left">Таблица заказов</h3>
              </div>
              <!-- /.card-header -->
              <?php if (!empty($orders)): ?>
              <div class="card-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Покупатель</th>
                    <th>Статус</th>
                    <th>Сумма</th>
                    <th>Дата создания</th>
                    <th>Дата изменения</th>
                    <th style="width: 40px">Действия</th>
                  </tr>
                  <?php foreach($orders as $order): ?>
                        <?php $class = $order['status'] ? 'success' : ''; ?>
                        <tr class="<?=$class;?>">
                            <td><?=$order['id'];?></td>
                            <td><?=$order['name'];?></td>
                            <td><?=$order['status'] ? 'Завершен' : 'Новый';?></td>
                            <td><?=$order['sum'];?></td>
                            <td><?=$order['date'];?></td>
                            <td><?=$order['update_at'] ? $order['update_at'] : '-';?></td>
                            <td><a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><i class="fa fa-fw fa-eye"></i></a> <a class="delete" href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>"><i class="fa fa-fw fa-close text-danger"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
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