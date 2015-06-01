<?php
	if(session_id() == '')
		session_start();
	
	include("connectDB.php");
	
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
	
	$res = mysql_query("SELECT * FROM accountinfo
					   WHERE username='$username' 
					   AND  password='$password' LIMIT 1") or die(mysql_error());
	
	
	if(mysql_num_rows($res) == 1)
	{
		setcookie("username", $username, time()+3600, "/");
		setcookie("password", $password, time()+3600, "/");
		$_SESSION['username'] = $username;
		
		header("Location: login.php");
	}
	
	else
		header("Location: login.php?error=yes");
?>