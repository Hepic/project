<?php
	session_start();
	
	setcookie("username", $username, time()-3600, "/");
	setcookie("password", $password, time()+3600, "/");
	session_unset(); 
	session_destroy();
	
	header('Location: index.php');
?>