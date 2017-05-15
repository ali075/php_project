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
    color: blue;
    font-family: natcasesort;
    font-size: 80%;

}


</style>
</head>
<body>

<?php


	include_once("header.php");
	
			$cinemaid=$_GET["cinema_id"];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from cinema  where id=$cinemaid";
			$cinemas = $connection->query($sql);
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5">

					<tr>
					<td>
					<?php
					
				while($cinema=mysqli_fetch_array($cinemas))
				{
				?>	
									
					<img height="300" width="280" src="assets/img/<?php echo $cinema['photoref']; ?>">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						<h1> &nbsp;<?php echo $cinema['title']; ?></h1>
						<br>
						<?php
						$catagoryid=$cinema['catagory_id'];
						$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
						$sql1			="select cname from catagory where id=$catagoryid";
						$catagorys = $connection->query($sql1);
						$catagory=mysqli_fetch_array($catagorys)
						?>
						<div>
							<h2>&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;<?php echo $cinema['imdb']; ?></h2>
						</div>
						<div>
							<h2>&nbsp;&nbsp;&nbsp;&nbsp; Realese Date: &nbsp;<?php echo $cinema['r_date']; ?></h2>
						</div>
						<div>
							<h2>&nbsp;&nbsp;&nbsp;&nbsp; Catagory: &nbsp;<?php echo $catagory['cname']; ?></h2>
						</div>	
						<div>
							<a href="halllist.php?cinema_id=<?php echo $cinema['hid']; ?>" class="button">Cinema Hall List</a>
							
						</div>
					<td>
						<?php echo $cinema['ylink']; ?>		
					</td>
					
	
				<?php					
				}
				include_once("footer.html");
				?>
				</td>
				</tr>
				</table>



