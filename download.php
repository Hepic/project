<?php
	include("connectDB.php");

	$file_id = isset($_POST['downloadFile']) ? $_POST['downloadFile'] : '';

	$query = "SELECT name,type,size,content
			  FROM upload where id = '$file_id'";

	$result = mysql_query($query) or die(mysql_error());
	list($name, $type, $size, $content) = mysql_fetch_array($result);


	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.$name);
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length:' . $size);
	header('Content-type:'. $type);
	echo $content;
	
	exit;
?>