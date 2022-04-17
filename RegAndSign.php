<?php 
	session_start();
	if ($_SESSION['RegAndSign']==1) {
		$_SESSION['RegAndSign'] = 0;
		header("Location: indexReg.php?");
	} else {
		$_SESSION['RegAndSign'] = 1;
		header("Location: indexReg.php?");
	}
?>