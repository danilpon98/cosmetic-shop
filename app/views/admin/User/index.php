    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Пользователи</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная</a></li>
              <li class="breadcrumb-item active">Пользователи</li>
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
                <h3 class="card-title float-left">Таблица зарегистрированных пользователей</h3>
              </div>
              <!-- /.card-header -->
              <?php if ($users):?>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Логин</th>
                        <th>Email</th>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Роль</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?=$user->id;?></td>
                            <td><?=$user->login;?></td>
                            <td><?=$user->email;?></td>
                            <td><?=$user->name;?></td>
                            <td><?=$user->phone;?></td>
                            <td><?=$user->role;?></td>
                            <td><a href="<?=ADMIN;?>/user/edit?id=<?=$user->id;?>"><i class="fa fa-fw fa-eye"></i></a></td>
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