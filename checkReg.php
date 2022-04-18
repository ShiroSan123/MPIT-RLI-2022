<?php 
	session_start();
	$_SESSION['RegAndSign'] = 1;
	header("Location: indexReg.php?");
?>