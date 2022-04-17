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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css" />
	<style>
		
	</style>
</head>
<body>
	
	<div>
		<!-- ======= Banner and Header ======= -->
		<div class="col-12" style="height: 80vh; background: #14C9C9; padding-top: 8vh;">
			<!-- ======= Header ======= -->
			<header id="header" class="fixed-top border border-dark" style="height: 8vh; background: #14C9C9;">
				<div class="col-9 mx-auto align-items-center d-flex">
					<div class="col-2" style="height: 8vh; padding-top: 1vh;">
						<img class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh">
					</div>
					<div class="col-9" style="height: 8vh; padding-top: 2vh;">
						<h4 style="margin-left: 1vw;"><a href="indexReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw">Главная</a></h4>
					</div>
					<div class="col-1" style="height: 8vh; padding-top: 2vh;">
						<h4 style="margin-left: 1vw;"><a href="indexReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw;">Вход</a></h4>
					</div>
				</div>
			</header>
			<!-- End Header -->
			<!-- ======= Banner ======= -->
			<div class="col-9 mx-auto bg-success" style="height: 72vh">
				<h1 style="font-size: 2vw;">Main text</h1>
			</div>
			<!-- End Banner -->
		</div>
		<!-- End Banner and Header -->
		<!-- ======= Main content ======= -->
		<div class="col-12" style="height: 200vh;">
			
		</div>
		<!-- End Main content -->
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/path/to/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>

	</script>
</body>
</html>