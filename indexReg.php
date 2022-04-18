<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-RLI-2022");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
	<div class="row">
		<!-- Левая колонка -->
		<div class="col-5 left-side">
			<div class="col-12" style="height: 10vh;">
				<div class="row" style="height: 10vh;">
					<div class="col-12" style="height: 100%; padding-top: 5vh;">
						<img class="main" src="asset/img/arrow.svg" id="arrowMain" alt="" style="height: 7vh; margin-left: 3vw;">
						<img class="main" src="asset/img/logos.svg" id="logoMain" alt="" style="height: 7vh; margin-left: 7vw;">
					</div>
				</div>
			</div>
			<!-- Проверка на правильность регстрации или авторизации -->
			<?php if ($_SESSION['RegAndSign'] == 1) { ?>
				<!-- Блок с регистрацией -->
				<div class="col-12" style="height: 90vh; padding-top: 10%;">
					<div class="col-10 mx-auto">
						<h3 class="pb-2">Регистрация</h3>
						<!-- Форма для переноса на страницу авторизации -->
						<form action="RegAndSign.php" method="post">
							<p style="color: #F6F8FB;">Уже есть аккаунт?<input type="text" name="reg" style="display: none;" value="1"></input><button  class="btn-submit">Войти</button></p>
						</form>
						<form action="regUser.php" method="post">
							<?php if ($_SESSION['tooLongPoL'] == 1) { ?>
								<p style="background: #24eded;" class="rounded">Логин не может быть короче 3 и длиннее 20, а пароль не может быть короче 5 и длиннее 20</p>
							<?php } ?>
							<input type="text" required name="login" class="form-control rounded-pill btn-out" id="login" placeholder="Логин"><br>
							<input type="text" required name="firstName" class="form-control rounded-pill btn-out" id="name" placeholder="Имя"><br>
							<input type="text" required name="lastName" class="form-control rounded-pill btn-out" id="pass" placeholder="Фамилия"><br>
							<input type="text" name="patronymic" class="form-control rounded-pill btn-out" id="login" placeholder="Отчество"><br>
							<input type="text" required name="mail" class="form-control rounded-pill btn-out" id="name" placeholder="Почта"><br>
							<input type="text" required name="phone" class="form-control rounded-pill btn-out" id="pass" placeholder="Телефон"><br>
							<input type="password" required name="password" class="form-control rounded-pill btn-out" id="pass" placeholder="Пароль"><br>
							<button class="btn rounded-pill mt-2" style="background: #FFFFFF">Зарегистрироваться</button><br>
							<a href="" style="text-decoration: none; color: gray">Забыли пароль?</a>
						</form>
					</div>
				</div>
			<?php } else {?>
				<!-- Блок с авторизацией -->
				<div class="col-12" style="height: 90vh; padding-top: 10%;">
					<div class="col-10 mx-auto">
						<h3 class="pb-2">Авторизация</h3>
						<!-- Форма для переноса на страницу регистрации -->
						<form action="RegAndSign.php" method="post">
							<p style="color:#F6F8FB;">Ещё не зарегестрировались?<input type="text" name="reg" style="display: none;" placeholder="0"></input><button  class="btn-submit">Зарегестрироваться</button></p></p>
						</form>
						<form action="signUser.php" method="post">
							<input type="text" required name="login" class="form-control rounded-pill btn-out" id="login" placeholder="Логин"><br>
							<input type="password" required name="password" class="form-control rounded-pill btn-out" id="pass" placeholder="Пароль"><br>
							<button class="btn rounded-pill mt-2" style="background: #FFFFFF">Войти</button><br>
							<a href="" style="text-decoration: none; color: gray;">Забыли пароль?</a>
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
		<!-- Правая колонка -->
		<div class="col-7 right-side">
			
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('logoMain').onclick = function() {
			window.location.href = 'index.php';
		};
		document.getElementById('arrowMain').onclick = function() {
			window.location.href = 'index.php';
		};
	</script>
</body>
</html>