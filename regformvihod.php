<?php 
    session_start();
	echo $_SESSION['username'];
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_destroy();
	header('Location: /log.php');
?>
