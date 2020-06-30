	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="<?= PATH; ?>">Главная</a></li>
					<li class="active">Регистрация</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--register-starts-->
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>Регистрация</h2>
			</div>
				<div class="register-main">
					<div class="col-md-6 col-md-offset-3">
						<form method="post" action="user/signup" id="signup" role="form" data-toggle="validator">
              <div class="form-group has-feedback">
                  <label for="login">Логин</label>
                  <input type="text" name="login" class="w-100 form-control" id="login" placeholder="Логин" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group has-feedback">
                  <label for="pasword">Пароль</label>
                  <input type="password" name="password" class="w-100 form-control" id="pasword" placeholder="Пароль" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group has-feedback">
                  <label for="name">Имя</label>
                  <input type="text" name="name" class="w-100 form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group has-feedback">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="w-100 form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group has-feedback">
                  <label for="address">Адрес</label>
                  <input type="text" name="address" class="w-100 form-control" id="address" placeholder="Адрес" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group has-feedback">
                  <label for="phone">Телефон</label>
                  <input type="phone" name="phone" class="w-100 form-control" id="phone" placeholder="8 (___) ___-____" value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '';?>" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <button type="submit" class="btn btn-default">Зарегистрировать</button>
          </form>
          <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--register-end-->