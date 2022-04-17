<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
	<div class="row">
		<div class="col-5 left-side">
			<div class="col-12" style="height: 10vh;">
				<div class="row" style="height: 10vh;">
					<div class="col-5" style="height: 100%;"></div>
					<div class="col-7 pl-0 pr-0" style="height: 100%">
						<button class="btn btn-reg">Регистрация организатора</button>
					</div>
				</div>
			</div>
			<div class="col-12" style="height: 90vh; padding-top: 10%;">
				<div class="col-10 mx-auto">
					<h3 class="pb-2">Регистрация</h3>
					<p style="color: #9E9495;">Уже есть аккаунт?<a href="" style="text-decoration: none;">Войти</a></p>
					<form action="check.php" method="post">
						<input type="text" name="login" class="form-control radius btn-out" id="login" placeholder="Логин"><br>
						<input type="text" name="firstName" class="form-control radius btn-out" id="name" placeholder="Имя"><br>
						<input type="text" name="lastName" class="form-control radius btn-out" id="pass" placeholder="Фамилия"><br>
						<input type="text" name="patronymic" class="form-control radius btn-out" id="login" placeholder="Отчество"><br>
						<input type="text" name="mail" class="form-control radius btn-out" id="name" placeholder="Почта"><br>
						<input type="text" name="phone" class="form-control radius btn-out" id="pass" placeholder="Телефон"><br>
						<input type="password" name="password" class="form-control radius btn-out" id="pass" placeholder="Пароль"><br>
						<button class="btn radius mt-2" style="background: #F8D7E3">Зарегистрироваться</button><br>
						<a href="" style="text-decoration: none;">Забыли пароль?</a>
					</form>
				</div>
			</div>
		</div>
		<div class="col-7 right-side">
			
		</div>
	</div>
</body>
</html>