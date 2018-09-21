<?php
//Done by Ayush Singh
	$con=mysqli_connect('localhost','root','','leaderboard' );
	$errors =""; 
	$errorcount= 0;
	$_SESSION['welcome']="";
	$username = "";
	$password="";
	$email    = "";
	if(isset($_POST['reg']))
	{	session_start();
		
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password1=mysqli_real_escape_string($con,$_POST['pass_1']);
		$password2=mysqli_real_escape_string($con,$_POST['pass_2']);
		
		if(empty($username)|| empty($email)||empty($password1)||empty($password2))
		{
			echo "<h2>All blocks have to be filled<h2>";
			$errorcount=1;
		}
		if($password1!=$password2)
		{
			echo "<h2>Passwords do not match<h2>";
			$errorcount=1;
		}
		$check=mysqli_query($con,"select * from users where username='$username' or password='$password'");
			if(mysqli_num_rows($check)>0)
			{
				echo "<h2>Already registered info<h2>";
				$errorcount=1;
			}
		if($errorcount==0)
		{
			$password=$password1;
			$syn="insert into users(username,email,password) values('$username','$email','$password')";
			mysqli_query($con,$syn);
			$_SESSION['username']=$username;
			$_SESSION['welcome']="welcome";
			header('location: mainpage.php');
		}

	}
	
	if(isset($_POST['login']))
	{session_start();
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		if(empty($username)||empty($password))
				echo "<h2>Fill all blocks</h2>";
		if($errorcount==0) 
		{ 
			$check=mysqli_query($con,"select * from users where username='$username' and password='$password'");
			if(mysqli_num_rows($check)==1)
			{
				$_SESSION['username']=$username;
				$_SESSION['welcome']="welcome";
				header('location: mainpage.php');
			}
			else
				echo "<h3>Inavalid username and password<h3>";
		}
	}

?>