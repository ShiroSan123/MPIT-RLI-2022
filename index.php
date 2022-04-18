<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-RLI-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css" />
	<style>
		
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	
	<div>
		<!-- ======= Banner and Header ======= -->
		<div class="col-12" style="height: 80vh; background: #14C9C9; padding-top: 15vh;">
			<!-- ======= Header ======= -->
			<header id="header" class="fixed-top" style="height: 8vh; background: #14C9C9;">
				<div class="col-9 mx-auto">
					<div class="row">
						<div class="col-2" style="height: 8vh; padding-top: 1vh;">
							<img id="logo" class="" src="asset/img/logos2.svg" id="logoMain" alt="" style="height: 6vh">
						</div>
						<div class="col-9" style="height: 8vh; padding-top: 2vh;">

						</div>
						<div class="col-1 d-flex" style="height: 8vh; padding-top: 2vh;">
							<?php if ($_SESSION['id']!=null) { ?>
								<h4 style="margin-left: 1vw;"><a href="function.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Данные</a></h4>
								<h4 style="margin-left: 1vw;"><a href="function.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;"><?php echo $stroka['Login'] ?></a></h4>
							<?php } else {?>
								<h4 style="margin-left: 1vw;"><a href="checkReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Зарегестрироваться</a></h4>
								<h4 style="margin-left: 1vw;"><a href="checkSign.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Войти</a></h4>
							<?php } ?>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header -->
			<!-- ======= Banner ======= -->
			<div class="col-9 mx-auto" style="height: 65vh">
				<dov class="row">
					<div class="col-5">
						<h1 style="font-size: 2vw; font-weight: bold; ">Твоё здоровье в наглядном цифровом виде</h1>
						<p style="font-size: 1vw; ">Онлайн-платформа для введения медицинской карты позволит упорядочить образ здоровой жизни.</p>
						<button class="btn rounded-pill col-4 shadow-lg" style="background: #FF111A; color: white; height: 25%;">Оформить карту</button>
					</div>
				</dov>
			</div>
			<!-- End Banner -->
		</div>
		<!-- End Banner and Header -->
		<!-- ======= Main content ======= -->
		<div class="col-12" style="height: 60vh;">
			<div class="col-9 mx-auto" style="height: 100%; padding-top: 5%;">
				<h1 class="col-4" style="font-size: 2vw; font-weight: bold;">Какой функционал платформы</h1>
				<div class="row" style="margin-top: 8vh; ">
					<div class="col-4 mx-auto d-flex" style="height: 20vh;">
						<img src="asset/img/1.svg" alt="" style="height: 10vh;">
						<div class="col-8" style="margin-left: 2vw;">
							<h1 style="font-size: 1.5vw; font-weight: bold; ">Процесс проверки</h1>
							<p style="font-size: 1vw; ">Поэтапная проверка здоровья</p>
						</div>
					</div>
					<div class="col-4 mx-auto d-flex" style="height: 20vh;">
						<img src="asset/img/2.svg" alt="" style="height: 10vh;">
						<div class="col-8" style="margin-left: 2vw;">
							<h1 style="font-size: 1.5vw; font-weight: bold; ">Эффективная запись</h1>
							<p style="font-size: 1vw; ">Помощь при записи на приём к врачу</p>
						</div>
					</div>
					<div class="col-4 mx-auto d-flex" style="height: 20vh;">
						<img src="asset/img/3.svg" alt="" style="height: 10vh;">
						<div class="col-8" style="margin-left: 2vw;">
							<h1 style="font-size: 1.5vw; font-weight: bold; ">Курсы улучшения</h1>
							<p style="font-size: 1vw; ">Программы по улучшению здоровья</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main content -->
	</div>
	<!-- ======= Footer ======= -->
	<div class="col-12" style="height: 20vh; background: #000000; ">
		<div class="col-9 mx-auto" style="padding-top: 5vh;">
			<div class="row">
				<div class="col-2" style="height: 8vh; padding-top: 1vh;">
					<img id="logo1" class="" src="asset/img/logos.svg" id="logoMain" alt="" style="height: 8vh">
				</div>
				<div class="col-9" style="height: 8vh; padding-top: 4vh;">
					<p style="font-size: 1vw; color: white; font-weight: lighter;">2022 © Все права защищены</p>
				</div>
				<div class="col-1" style="height: 8vh; padding-top: 2vh;">
					<img id="toTop" src="asset/img/arrowUp.svg" alt="" style="height: 5vh;">
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/path/to/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		document.getElementById('logo').onclick = function() {
			window.location.href = 'index.php';
		};
		document.getElementById('logo1').onclick = function() {
			window.location.href = 'index.php';
		};
	</script>
</body>
</html>