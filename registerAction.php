<?php
	include("connectDB.php");

	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";

	mysql_query("INSERT INTO 
				accountinfo(username,password) 
				VALUES('$username','$password');") or die(mysql_error());
				
	header("Location: index.php");
?>