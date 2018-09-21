
<?php include('server.php') ?>
<?php include('leader.php') ?>
<?php 
// Done by Ayush Singh
	//error_reporting(E_ALL ^ E_NOTICE); 
	session_start();
	if(!isset($_SESSION['username'])|| $_SESSION['welcome']!="welcome") 
	{ 
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if(isset($_GET['logout'])) 
	{	
		session_destroy(); 
		header('location: login.php');
	}
?>			
<html>
<head>
<title>Leaderboard page</title>
	<link rel="stylesheet" type="text/css" href="stylemain.css" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>
<body>
		<!--?php echo $array[$count-1]['score']; ?-->
		<div id="heading">
			<div id="mainhead"><div id="edit"><img src="gn1.png" style="width:90px;height:90px"/></div>
				<li id="select"><img src="imgg.png" style="width:70px;height:70px"/>&ensp;LEADERBOARD&ensp;<img src="imgg.png" style="width:70px;height:70px;"/></li>
				<form>
				<!--input class="MyButton" type="button" value="Log Out" onclick="?logout=1" /-->
				<a href="?logout=1"><input class="MyButton" type="button" value="Log Out"/></a>
				</form>
				<!--p> <a href="login.php">Log out</a> </p-->
			</div >
		</div>
		<div class="container-fluid">
			<div class="text-center">
				<p><h2><strong>Welcome&ensp;-&ensp;"<?php echo $_SESSION['username']; ?>!"</strong></h2></p>
				<hr style color="#003366" ><br>
			</div>
			<?php
				if($count>=1)
				{
			?>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h1>1.&ensp;<?php echo $array[0]['username']; ?></h1>
						</div>
						<div class="panel-body">
							<img src ="https://mycaptain-web.herokuapp.com/static/media/5.de94bbff.svg" style="width:350px;height:350px;" >
						</div>
						<div class="panel-footer">
							<p><strong> SCORE:&ensp;&ensp; <?php echo $array[0]['score']; ?></strong></p>
							<img src ="https://mycaptain-web.herokuapp.com/static/media/gold-medal.b4881dbc.svg" style="width:40px;height:50px;" >
						</div>
					</div> 
				</div>
				<?php
				}
				?>
			<?php
				if($count>=2)
				{
			?>	
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h1>2.&ensp;<?php echo $array[1]['username']; ?></h1>
						</div>
						<div class="panel-body">
							<img src ="https://mycaptain-web.herokuapp.com/static/media/1.76be5ab1.svg" style="width:350px;height:350px;" >
						</div>
						<div class="panel-footer">
							<p><strong> SCORE:&ensp;&ensp; <?php echo $array[1]['score']; ?></strong></p>
							<img src ="https://mycaptain-web.herokuapp.com/static/media/silver-medal.36e3597e.svg" style="width:40px;height:50px;" >
						</div>
					</div> 
				</div>
				<?php
				}
				?>
			<?php
				if($count>=3)
				{
			?>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h1>3.&ensp;<?php echo $array[2]['username']; ?></h1>
						</div>
						<div class="panel-body">
							<img src ="https://mycaptain-web.herokuapp.com/static/media/3.f193fc2d.svg" style="width:350px;height:350px;" >
						</div>
						<div class="panel-footer">
							<p><strong> SCORE:&ensp;&ensp; <?php echo $array[2]['score']; ?></strong></p>
							<img src ="https://mycaptain-web.herokuapp.com/static/media/bronze-medal.5e393420.svg" style="width:40px;height:50px;" >
						</div>
					</div> 
				</div>
				<?php
				}
				?>
			</div>
		</div>
		
			
	<div class="container">
		<?php
			if($count>3)
			{
		?>
		<h2>Other Toppers</h2>
			<?php
				}
			?>	
		<ul class="list-group">
			
			<?php
				while($count1!=$count && $count>=3)
				{
			?>	
			<li class="list-group-item"><?php echo $i ?>. &ensp;<?php echo $array[$count1]['username']; ?><span class="badge">Score: <?php echo $array[$count1]['score']; ?></span></li>
			
			<?php
				$i++;
				$count1++;
				}
			?>
		</ul>
	</div>
	
</body>
</html>