<?php
	if(session_id() == '')
		session_start();
		

	$shownUser = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
	$cookieName = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
	$cookiePass = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";
	
	if(!empty($cookieName) && !empty($cookiePass))
	{
		setcookie("username", $cookieName, time()+3600, "/");
		setcookie("password", $cookiePass, time()+3600, "/");
		$_SESSION['username'] = $cookieName;
	}
	
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
	
	<form action='loginAction.php' method='post'>
		<div class='loginMain'>
			<h2 id='loginTag'>Log In</h2>
			
			<span id='loginLine'></span>
			
			<div class='loginInputs'>
				<label for='username'>Username:</label>
				<input id='username' name='username' type='text' /><br/><br/><br/>
				
				<label for='pass'>Password:</label>
				<input id='pass' name='password' type='password' /><br/><br/><br/><br/>
				
				<input id='loginSubmit' type="submit" value="Log In"/>
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
		
		
		if(username.val() == ''  ||  password.val() == '')
			return false;
			
		
		return true;
	});
</script>

<?php
	include("footer.html");
?>	