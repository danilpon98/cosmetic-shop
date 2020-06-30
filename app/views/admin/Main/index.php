<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Админ панель</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $countNewOrders; ?></h3>

                <p>Новых заказов</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-basket"></i>
              </div>
              <a href="<?= ADMIN ?>/order" class="small-box-footer">Все заказы <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $countProducts; ?></h3>

                <p>Товаров</p>
              </div>
              <div class="icon">
                <i class="fa fa-archive"></i>
              </div>
              <a href="<?= ADMIN ?>/product" class="small-box-footer">Все товары <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $countUsers; ?></h3>

                <p>Пользователей</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-circle"></i>
              </div>
              <a href="<?= ADMIN ?>/user" class="small-box-footer">Все пользователи <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $countCategories; ?></h3>

                <p>Категорий</p>
              </div>
              <div class="icon">
                <i class="fa fa-object-group"></i>
              </div>
              <a href="<?= ADMIN ?>/category" class="small-box-footer">Все категории <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->