<?php
	include("connectDB.php");

	$query = "SELECT * FROM upload";
	$result = mysql_query($query) or die(mysql_error());
					
	while($row = mysql_fetch_array($result))
		echo "<option value='".$row['id']."'> User:". $row['user_name'] ." - File:". $row['name'] ."</option>";
?>