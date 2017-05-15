<html 
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-top: 10px;
    margin-bottom: 40px;
	
    cursor: pointer;
}
h1 {
    color: blue;
    font-family: verdana;
    font-size: 120%;

}
h2 {
    color: #908000;
    font-family: verdana;
    font-size: 300%;

}

</style>
</head>
<body>

<?php

	include_once("header.php");
	?>
	<h2> Upcomming Cinema </h2>

	
	<?php
	$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
	$rows 	= mysqli_num_rows($connection->query('SELECT * FROM cinema where status=2'));
	$row	=	$connection->query('SELECT * FROM cinema where status=2');
	$connection->close();
	
	
	while($ro=mysqli_fetch_array($row))
				{
					$date = date('y-m-d');
					if($date==$ro['r_date'])
					{
						$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
						$connection->query($connection->query('update cinema set status=1 where r_date=$date'));
						$connection->close();
					}					
				}
				
				?>
	
	<?php

	$start=0;
$limit=9;


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else{
	$id=1;
}
 
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from cinema  where status=2 ORDER By r_date LIMIT $start, $limit";
			$cinemas = $connection->query($sql);
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5" width:100%S>

					
					<?php
					$c=0;
					$c1=0;$c2=0;
				while($cinema=mysqli_fetch_array($cinemas))
				{
				?>	
				<?php 
				$c1=$c1+1;
				$c2=$c2+1;
				if($c1==3 || $c==0){$c=1;$c1=0; ?>
					<tr>
					<?php
					}
					?>
					<td>
					<a href="cinemdetails.php?cinema_id= <?php echo $cinema['id']; ?> "</a>
					<img height="240" width="230" src="assets/img/<?php echo $cinema['photoref']; ?>"> &nbsp;&nbsp;
						
						<h1> &nbsp;<?php echo $cinema['title']; ?></h1>
						<br>
		
					</td>
					<?php if($c2==9){ 
	
						$c1=0; 
						
						?>
					</tr>
					<?php
					}
					?>
					
				<?php					
				}
				?>
				</table>




<?php


 $total=ceil($rows/$limit);?>

<?php if($id>1)
{
	
	echo "<li><a href='?id=".($id-1)."' class='button'>PREVIOUS</a></li>";
}
if($id!=$total)
{
	
	echo "<li><a href='?id=".($id+1)."' class='button'>NEXT</a></li>";
}

include_once("footer.html");
	
?>
</div>

</ul>
</div>
</body>
</html>