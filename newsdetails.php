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
    margin: 4px 2px;
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
	<h2>News </h2>

	
	<?php
	$cinemaid=$_GET["cinema_id"];
	$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
	$rows = mysqli_num_rows($connection->query('SELECT * FROM news'));
	$connection->close();

	$limit=10;

	$total=ceil($rows/$limit);
	

	if($rows>10){
		
		$start=$rows-$limit;
		$gap = ($total*$limit)-$rows;
		

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$start=$rows-((($id+$gap+2)));
	}
	else{
		$id=1;
		
	}
	}
	else{
		$id=-1;
		$start=0;
		$limit=$rows;
		
		
	}
	
 
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from news where id=$cinemaid ";
			$cinemas = $connection->query($sql);
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5" width=100%>

				
					<?php
					
				while($cinema=mysqli_fetch_array($cinemas))
				{
				?>
				<div>
					<tr>
					<td>
					
					<div id="image" style="float:left;">
					
					<img height="240" width="230" src="assets/img/<?php echo $cinema['photoref']; ?>" align="left"> &nbsp;&nbsp;	
						<h1> &nbsp;&nbsp;&nbsp;<?php echo $cinema['title']; ?></h1>
						
						<p> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cinema['date']; ?></p>
						<br>						
						<h4 style= "margin-left: 7cm;"> <?php echo $cinema['details']; ?></h4>
					</div>
					</td>
					<br>
					</tr>
					</div>
					<br>
				<?php					
				}
				?>
				</table>




<?php


 if($id<$total && $id!==-1)
{
	
	echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
	
	//echo "<li><a href='?id=".($id+1)."' class='button'>"$id+$i"</a></li>";
	
}
if($id>=2 )
{
	
	echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
	
}


include_once("footer.html");
	
?>
</div>

</ul>
</div>
</body>
</html>