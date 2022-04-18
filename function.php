<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-RLI-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$_SESSION['RegAndSign'] = 1;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="asset/css/style2.css">
	<link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css" />
	<style>

	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},0);
		});
		$('#toDi').click(function() {
			$('body,html').animate({scrollTop:1100},0);
		});
		$('#close').click(function() {
			$('body,html').animate({scrollTop:0},0);
		});
	});

	</script>
</head>
<body>
	
	<div>
	<!-- ======= Banner and Header ======= -->
	<div class="col-12" style="height: 80vh; padding-top: 15vh;">
		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top" style="height: 8vh; background: #C4C4C4">
			<div class="col-9 mx-auto pl-0 pr-0">
				<div class="row">
					<div class="col-2" style="height: 8vh; padding-top: 1vh;">
						<img id="logo" class="" src="asset/img/logos2.svg" id="logoMain" alt="" style="height: 6vh">
					</div>
					<div class="col-8" style="height: 8vh; padding-top: 2vh;">
						<h4 class="text-center"><a class="get-started-btn text-dark" style="text-decoration: none; font-size: 2vw; font-weight: bold;">Твоё здоровье</a></h4>
					</div>
					<div class="col-2 d-flex" style="height: 8vh; padding-top: 3vh">
						<h4><a href="indexReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Редакт.профиля</a></h4>
						<h4 style="margin-left: 2vw;"><a href="logOut.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Выйти</a></h4>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		<!-- ======= Main ======= -->
		<div class="col-9 mx-auto" style="height: 110vh;">
			<div class="row">
				<div class="col-6" style="height: 100vh;">
					<!-- Heart -->
					<div class="col-11 mx-auto rounded heart" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Сердцебиение</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#Пульс #Кардиолог</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!--Breath -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Дыхание</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#коронавирус #курение #пульмонолог</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- liver -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Печень</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#алкоголь #гастроэнтерологом</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Bones -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Кости</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#кальций #травматолог #ортопед</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Mental condition -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Психическое состояние</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#психолог #психиатр</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- kidneys -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Почки</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#вторая почка #нефролог</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Immunity -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Иммунитет</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#мифы #антибиотики</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
					<!-- muscles -->
					<div class="col-11 mx-auto rounded" style="height: 10vh; margin-top: 2vh;">
						<div class="row">
							<div class="col-2">
								<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4	; margin-top: 1vh;"></div>
							</div>
							<div class="col-10" style="padding-top: 1vh">
								<div class="d-flex">
									<h1 style="font-size: 1.5vw; font-weight: bold; ">Мышцы</h1>
									<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
								</div>
								<div class="d-flex">
									<p style="font-size: 1vw;">#тренировка #физическая культура</p>
									<button id="toDi" class="btn button" style="height: 4vh; margin-left: auto; background: #e6efff;">Показать</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6" style="height: 100vh;">
					<div style="padding-top: 3vh; margin-left: 20vh;">
						<img src="asset/img/body.svg" alt="" style="height: 90vh;">
					</div>
				</div>
			</div>
		</div>
		<div class="col-9 mx-auto diagnostic" style="height: 120vh; display: none;">
			<div class="col-12 shadow-lg rounded" style="padding-top: 2vh; padding-bottom: 2vh;">
				<div class="row" style="margin-left: 0; margin-right: 0;">
					<div class="col-4" style="height: 50vh; background-image: url(asset/img/heart.jpg);background-size: 100% 100%; "></div>
					<div class="col-8" style="height: 50vh;">
						<button id="close" class="btn close" style="position: absolute; right: 13vw;">X</button>
						<h1 style="font-size: 1.5vw; font-weight: bold">Сердце <p style="font-size: 1vw; font-weight: bold; margin-top: 2vh ">полый фиброзно-мышечный орган, обеспечивающий посредством повторных ритмичных сокращений ток крови по кровеносным сосудам. Сердце человека, сокращаясь в среднем 72 раза в минуту, на протяжении 66 лет совершит около 2,5 миллиардов сердечных циклов.</p></h1>
						<div class="d-flex">
							<h1 style="font-size: 1.5vw; font-weight: bold; ">Процесс проверки здоровья</h1>
							<h1 style="font-size: 1.5vw; font-weight: bold; margin-left: auto;">0%</h1>
						</div>
						<div class="col-12" style="background: #C4C4C4; height: 2vh;"></div>
						<p style="font-size: 1vw; font-weight: bold; margin-top: 2vh ">Средний пульс</p>
						<h1 style="font-size: 1.5vw; font-weight: bold; ">74</h1>
					</div>
				</div>
			</div>
			<div class="shadow-lg" style="margin-top: 5vh; padding-top: 1vh; padding-bottom: 3vh;">
				<!-- 1 -->
				<div class="col-11 mx-auto rounded heart" style="height: 10vh; margin-top: 1vh;">
					<div class="row">
						<div class="col-1">
							<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4; margin-top: 1vh;"></div>
						</div>
						<div class="col-11" style="padding-top: 1vh">
							<h1 style="font-size: 1.5vw">Сходить к врачу</h1>
							<div class="d-flex">
								<p style="font-size: 1vw;">Описание описание описание описание описание описание описание описаниеописание</p>
								<button id="toDi" class="btn button rounded-pill" style="height: 4vh; margin-left: auto; background: #e6efff;">Завершить этап</button>
							</div>
						</div>
					</div>
				</div>
				<!-- 2 -->
				<div class="col-11 mx-auto rounded heart" style="height: 10vh; margin-top: 2vh;">
					<div class="row">
						<div class="col-1">
							<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4; margin-top: 1vh;"></div>
						</div>
						<div class="col-11" style="padding-top: 1vh">
							<h1 style="font-size: 1.5vw">Сходить к врачу</h1>
							<div class="d-flex">
								<p style="font-size: 1vw;">Описание описание описание описание описание описание описание описаниеописание</p>
								<button id="toDi" class="btn button rounded-pill" style="height: 4vh; margin-left: auto; background: #e6efff;">Завершить этап</button>
							</div>
						</div>
					</div>
				</div>
				<!-- 3 -->
				<div class="col-11 mx-auto rounded heart" style="height: 10vh; margin-top: 2vh;">
					<div class="row">
						<div class="col-1">
							<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4; margin-top: 1vh;"></div>
						</div>
						<div class="col-11" style="padding-top: 1vh">
							<h1 style="font-size: 1.5vw">Сходить к врачу</h1>
							<div class="d-flex">
								<p style="font-size: 1vw;">Описание описание описание описание описание описание описание описаниеописание</p>
								<button id="toDi" class="btn button rounded-pill" style="height: 4vh; margin-left: auto; background: #e6efff;">Завершить этап</button>
							</div>
						</div>
					</div>
				</div>
				<!-- 4 -->
				<div class="col-11 mx-auto rounded heart" style="height: 10vh; margin-top: 2vh;">
					<div class="row">
						<div class="col-1">
							<div class="col-10 rounded-circle mx-auto" style="height: 7.5vh; background: #C4C4C4; margin-top: 1vh;"></div>
						</div>
						<div class="col-11" style="padding-top: 1vh">
							<h1 style="font-size: 1.5vw">Сходить к врачу</h1>
							<div class="d-flex">
								<p style="font-size: 1vw;">Описание описание описание описание описание описание описание описаниеописание</p>
								<button id="toDi" class="btn button rounded-pill" style="height: 4vh; margin-left: auto; background: #e6efff;">Завершить этап</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main -->
		<!-- ======= Footer ======= -->
		<div class="col-12 footer" style="height: 20vh; background: #000000; margin-top: 3vh;">
			<div class="col-9 mx-auto" style="padding-top: 5vh;">
				<div class="row">
					<div class="col-2" style="height: 8vh; padding-top: 1vh;">
						<img id="logo1" class="" src="asset/img/logos.svg" id="logoMain" alt="" style="height: 8vh">
					</div>
					<div class="col-9" style="height: 8vh; padding-top: 4vh;">
						<p style="font-size: 1vw; color: white; font-weight: lighter;" class="">2022 © Все права защищены</p>
					</div>
					<div class="col-1" style="height: 8vh; padding-top: 2vh;">
						<img id="toTop" src="asset/img/arrowUp.svg" alt="" style="height: 5vh;">
					</div>
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
		let close = document.querySelector(".close");
		let button = document.querySelector(".button");
		let diagnos = document.querySelector(".diagnostic");
		button.onclick = function(){
			diagnos.style.display = 'block';
		}
		close.onclick = function(){
			diagnos.style.display = 'none';
		}
	</script>
</body>
</html>