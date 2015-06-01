<?php
	if(session_id() == '')
		session_start();

	include("connectDB.php");

	$file_name = isset($_FILES['uploadFile']) ? $_FILES['uploadFile']['name'] : '';
	$file_tmp = isset($_FILES['uploadFile']) ? $_FILES['uploadFile']['tmp_name'] : '';
	$file_size = isset($_FILES['uploadFile']) ? $_FILES['uploadFile']['size'] : '';
	$file_type = isset($_FILES['uploadFile']) ? $_FILES['uploadFile']['type'] : '';
	$file_error = isset($_FILES['uploadFile']) ? $_FILES['uploadFile']['error'] : '';
	$shownUser = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';	  
	
	
	if(!$file_error && $file_size<1000000)
	{
		$fp = fopen($file_tmp, 'r');
		$content = fread($fp, filesize($file_tmp));
		$content = addslashes($content);
		fclose($fp);
	
		$query = "INSERT INTO upload(name, size, type, content, user_name)
				  VALUES('$file_name', '$file_size', '$file_type', '$content', '$shownUser')";

		mysql_query($query) or die(mysql_error());	

		
		header("Location: index.php");
	}

	else
		header("Location: index.php?error=yes");
?>
