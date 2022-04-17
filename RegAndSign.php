<?php 
	session_start();
	if ($_SESSION['RegAndSign']==1) {
		$_SESSION['RegAndSign'] = 0;
		header("Location: index.php?");
	} else {
		$_SESSION['RegAndSign'] = 1;
		header("Location: index.php?");
	}
?>