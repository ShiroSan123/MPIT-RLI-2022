<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-RLI-2022");
$login = '{$_POST["login"]}';
$pass = '{$_POST["password]}';
$log = '1';
$bog = '1';
$ide = '1';

if ($login == null || $pass == null) {
	header("Location: index.php? ide=".$ide."&log=".$log);
	die();
} else {
	$query = "SELECT * FROM Users WHERE Login = '{$_POST["login"]}'";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);

	if($num == 0){
		$query1 = "INSERT INTO User (Login,FirstName,LastName,Patronomyic,Mail,Phone,Password) Values ('{$_POST['login']}','{$_POST['firstName']}','{$_POST['lastName']}','{$_POST['patronymic']}','{$_POST['mail']}','{$_POST['phone']}','{$_POST['password']}')";
		$Reg_insert = mysqli_query($connect, $query1);
		header("Location: index.php");
	} else {
		header("Location: index.php? ide=".$ide."&bog=".$bog);
	}
}
?>