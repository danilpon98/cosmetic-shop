	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="<?= PATH; ?>">Главная</a></li>
					<li class="active">Вход</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--register-starts-->
	<div class="register">
		<div class="container">
			<div class="register-top heading">
				<h2>Вход</h2>
			</div>
				<div class="register-main">
					<div class="col-md-6 col-md-offset-3">
						<form method="post" action="user/login" id="login" role="form" data-toggle="validator">
              <div class="form-group has-feedback">
                <label for="login">Логин</label>
                <input type="text" name="login" class="w-100 form-control" id="login" placeholder="Логин" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="form-group has-feedback">
                <label for="pasword">Пароль</label>
                <input type="password" name="password" class="w-100 form-control" id="pasword" placeholder="Пароль" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              </div>
              <button type="submit" class="btn btn-default">Вход</button>
            </form>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--register-end-->