<div class="bgc">
		<div class="enter">
			<div class="vhod">
				<h1>ВХОД</h1>
			</div>
			<div class="windavt">
			<form action="" method="post">
				<div class="log">
					<div class="form-log">
						<input type="text" name="login" placeholder="Email">
					</div>
				</div>
				<div class="pass">
					<div class="form-pass">
						<input type="text" name="password" placeholder="Пароль">
					</div>
				</div>	
				<div class="authorize">
					<div class="form-authorize">
						<input Value="Авторизироваться" type="submit">
					</div>
				</div>	
				<div class="sign-up">
					<div class="registr">
						<a href="#">Регистрация </a>
					</div>
				</div>
				</form>	
			</div>
			
		</div>
	</div>
<?php extract($data); ?>
<?php echo $login_status;?>

