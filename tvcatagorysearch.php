<html 
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: #FF5733;
    border: none;
    color: white;
    padding: 8px 32px;
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
	<h2> Catagorized Tv program </h2>

			<form action="tvcatagorysearch.php" method="POST" enctype="multipart/form-data">
		<?php
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows1 = $connection->query('SELECT category_name,id FROM tv_category');
		$rows2 = $connection->query('SELECT date,id FROM tv_program_date');
		$connection->close();
		
		?>
		
		<?php
					
					echo "<select name = 'catagory'  class='button'>";
						
					while($row = mysqli_fetch_array($rows1)){
							echo "<option value = '". $row['id'] ."'> " . $row['category_name'] ."</option>";
							
					}
					echo "</select>";
					?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
					
					echo "<select name = 'dat'  class='button'>";
						echo "<option value = ''>  All-date</option>";
					while($row1 = mysqli_fetch_array($rows2)){
							echo "<option value = '". $row1['id'] ."'> " . $row1['date'] ."</option>";
							
					}
					echo "</select>";
					?>
					&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" name="submit" class="button1">Go</button>
		</form>
					
	<?php
	if ( isset($_POST['submit']) && isset($_POST['catagory']) && isset($_POST['dat']) && !empty($_POST['dat'])){
		
	$catagory = $_POST['catagory'];
	$dat = $_POST['dat'];
	$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$ro				="select * from tv_program  where $catagory=category_id and pid=$dat ";
			
			$cin = $connection->query($ro);
			$rows= mysqli_num_rows($cin);
			if($rows==0)
			{
				echo "<h1> No Result Found! </h1>";
			}
	

	$start=0;
$limit=10;


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else{
	$id=1;
}
			
			
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$ro				="select * from tv_program  where $catagory=category_id ";
			$sql				="select * from tv_program  where $catagory=category_id and pid=$dat order by time LIMIT $start, $limit";
			$cinemas = $connection->query($sql);
			$cin = $connection->query($ro);
			$rows= mysqli_num_rows($cin);
			
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5" width=100%>

					
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
					
					<img height="240" width="230" src="assets/img/<?php echo $cinema['photo']; ?>"> &nbsp;&nbsp;
						<h1> &nbsp;<?php echo $cinema['program_name']; ?></h1>
						
						<h4>Time:&nbsp;<?php echo $cinema['time']; ?></h4>
						
						<?php
						$tid= $cinema['channel_name_id'];
						$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
						$sql1				="select channel_name from tv_channel  where $tid=id ";
						$tvs = $connection->query($sql1);
						$tv=mysqli_fetch_array($tvs)
						?>
						<h3>Channel:&nbsp;<?php echo $tv['channel_name']; ?></h3>
						
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
if($id>$total+1)
{
	
	echo "<li><a href='?id=".($id+1)."' class='button'>NEXT</a></li>";
}
}
	
	else if ( isset($_POST['submit'])){
		
	$catagory = $_POST['catagory'];
	$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$ro				="select * from tv_program  where $catagory=category_id ";
			
			
			$cin = $connection->query($ro);
			$rows= mysqli_num_rows($cin);
			if($rows==0)
			{
				echo "<h1> No Result Found! </h1>";
			}
	

	$start=0;
$limit=10;


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else{
	$id=1;
}
			
			
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$ro				="select * from tv_program  where $catagory=category_id ";
			$sql				="select * from tv_program  where $catagory=category_id order by time LIMIT $start, $limit";
			$cinemas = $connection->query($sql);
			$cin = $connection->query($ro);
			$rows= mysqli_num_rows($cin);
			
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5" width=100%>

					
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
					
					<img height="240" width="230" src="assets/img/<?php echo $cinema['photo']; ?>"> &nbsp;&nbsp;
						<h1> &nbsp;<?php echo $cinema['program_name']; ?></h1>
						
						<h4>Time:&nbsp;<?php echo $cinema['time']; ?></h4>
						
						<?php
						$tid= $cinema['channel_name_id'];
						$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
						$sql1				="select channel_name from tv_channel  where $tid=id ";
						$tvs = $connection->query($sql1);
						$tv=mysqli_fetch_array($tvs)
						?>
						<h3>Channel:&nbsp;<?php echo $tv['channel_name']; ?></h3>
						
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
if($id>$total+1)
{
	
	echo "<li><a href='?id=".($id+1)."' class='button'>NEXT</a></li>";
}
}

	
?>


</div>
<?php
include_once("footer.html");
?>
</ul>
</div>
</body>
</html>