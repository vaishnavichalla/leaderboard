<?php include('server.php') ?>
<!DOCTYPE html>

<!--Done by Vaishnavi-->
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/1F841744-980F-1F45-BE9C-F68ECC3EBDB8/main.js" charset="UTF-8"></script>
</head>
<body>
<div class="login-page">
	<div class="form">

	<form class="login-form" method="post" action="register.php">
		<input type="text" name="username" placeholder="user name" value="<?php echo $username;?>"/>
		<input type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>"/>
		<input type="password"  name="pass_1" placeholder="Password"/>
		<input type="password" name="pass_2" placeholder="confirm password" >
		<button type="submit" name="reg">Create</button>
		<p class="message">Already Registered? <a href="login.php">Login</a>
		</p>
	</form>
	</div>
</div>
</body>
</html>
