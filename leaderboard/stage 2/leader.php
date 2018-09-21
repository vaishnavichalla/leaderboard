
<?php

///* Done by both Vaishnavi and Ayush Singh together */
	$cont=mysqli_connect('localhost','root','','leaderboard');
	$query="select username,score from users order by score desc";
	$quer=mysqli_query($cont,$query);
	$arr=array();
	$count=0;
	$count1=3;
	$logout=0;
	$i=4;
	while($row=mysqli_fetch_assoc($quer))
	{
		$array[]=$row;
		$count=$count+1;
		
	}
	
	//echo $array[0]['username'];


?>