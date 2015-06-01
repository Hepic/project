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
	
	<form action='registerAction.php' method='post'>
		<div class='registerMain'>
			<h2 id='registerTag'>Register</h2>
			
			<span id='registerLine'></span>
			
			<div class='registerInputs'>
				<label for='username'>Username:</label>
				<input id='username' name='username' type='text' /><br/><br/><br/>
				
				<label for='pass'>Password:</label>
				<input id='pass' name='password' type='password' /><br/><br/><br/>
				
				<label for='rePass'>Retype Pass:</label>
				<input id='rePass' type='password' /><br/><br/><br/>
				
				<br/>
				
				<input id='registerSubmit' type="submit" value="Register"/>
			</div>
		</div>
	</form>
	
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$('form').submit(function()
	{
		var username = $('#username');
		var password = $('#pass');
		var rePass = $('#rePass');
		
		
		if(username.val() == ''  ||  password.val() == ''  ||  rePass.val() == '')
			return false;
			
		else if(password.val() != rePass.val())
			return false;
			
		else if(username.val().length < 4  ||  password.val().length < 4)
			return false;
		
		
		return true;
	});
</script>
	
<?php
	include("footer.html");
?>	