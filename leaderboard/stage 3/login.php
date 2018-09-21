<?php include('server.php') ?>
<html>
<head>
<!--Done by Vaishnavi -->
<title>login</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/1F841744-980F-1F45-BE9C-F68ECC3EBDB8/main.js" charset="UTF-8"></script>
</head>
<body>
	<div class="login-page" >
		<div class="form">
		
		<form class="Login-form" method="post" action="login.php">
		<input type="text" name="username" placeholder="user name"/>
		<input type="password" name="password" placeholder="password"/>
		<button type="submit" name="login">login</button>
		<p class="message">Not Registered? <a href="register.php">Register</a>
		</p>
		</form>
		<script src='https://code.jquery.com/jquery-3.2.1.mi.js'</script>
		<script>
		$('.message a').click(function(){
		$('form').animate({height "toggle", opacity: "toggle"}, "slow");
		});
		</script>
		</div>
	</div>
	
</body>
</html>