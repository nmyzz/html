<!DOCTYPE html>
<html>
<head>
	<title>Bouton</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="jquery.js"></script>
		<script type="text/javascript">
		function slide() {
			document.getElementById("click").style.display="none";
			$(".container").slideToggle('slow');
		}
	</script>
</head>
<body>
	<?php
		$username = "";
		$password = "";
	?>
	<br/>
	<div id="banner">
		SIP Gateway
	</div>
	<br/>
	<p id="click" onclick="slide();" style="font-size:1em;cursor:pointer;">Click here to start</p>
	<br/>
	<div class="container">
		<span style="font-size: 1.5em;">REGISTER - LOG IN</span>
		<br/><br/>
		<form method="post">
			Username : <input type="text" name="username" placeholder="Your id here ...">
			<br/><br/>
			Password : <input type="text" name="password" placeholder="Your pwd here ...">
			<br/><br/><br/>
			<input type="submit" onfocus="this.blur();" value="Register" class="btn" name="register">
			<br/><br/>
			<input type="submit" onfocus="this.blur();" value="Log in" class="btn" name="login">
		</form>
	</div>
	<?php 
  		$username = $_POST[username];
  		$password = $_POST[password];
  		exec('sudo su << EOF orbea5034+ EOF && sudo /var/www/html/test.sh "'.$username.'" "'.$password.'"'); exit;

	?>
</body>
</html>