<?php
	if(session_id() == '')
		session_start();
	
	$shownUser = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
	
	
	include("header.html");
?>	

<div class="everything">
	<?php
		include("userBar.html");
	?>	
	
	<ul id="nav">
		<li> <a href='login.php'> Login <a/> </li>
		<li> <a href='register.php'> Register <a/> </li>
	</ul>
		
	<div class="main">
		<?php 
			if(isset( $_GET['error'] ))
				echo "File did not upload.";
		?>	
		
		<form class="upl" action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="uploadFile" />
			<br/><br/>
			<input type="submit" value="Upload" />
		</form>
		
		<form class="downl" action="download.php" method="post">
			<select name="downloadFile">
				<?php include("read_folder.php"); ?>
			</select>
			<br/><br/>
			<input type="submit" value="Download" />
		</form>
	</div>
</div>

<?php
	include("footer.html");
?>		