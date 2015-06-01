<?php
	include("connectDB.php");
	
	mysql_query("CREATE TABLE accountinfo(
				 id INT NOT NULL AUTO_INCREMENT,
				 PRIMARY KEY(id),
				 username VARCHAR(50) NOT NULL,
				 password VARCHAR(50) NOT NULL
				 )") or die(mysql_error());
	
	
	mysql_query("CREATE TABLE upload(
				 id INT NOT NULL AUTO_INCREMENT,
				 PRIMARY KEY(id),
				 name VARCHAR(30) NOT NULL,
				 type VARCHAR(30) NOT NULL,
				 size INT NOT NULL,
				 content MEDIUMBLOB NOT NULL,
				 user_name VARCHAR(30) NOT NULL
				 )") or die(mysql_error());
?>