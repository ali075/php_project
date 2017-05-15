<html 
<head>
<style>
table {
    width: 40%;
}



tr:nth-child(even){background-color: #4CAF50}
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
	?>
<?php
			$cinemaid=$_GET["cinema_id"];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select hname,tlink from halls,hallandcinema_id  where hallandcinema_id.cid=$cinemaid and hallandcinema_id.hid=halls.id ";
			$halls = $connection->query($sql);
			
			
			$connection->close();
			//echo "$cinemas";
			
			
		//////displaying
				 	?>
					<table  BORDER="30" CELLPADDING="10" CELLSPACING="3" BORDERCOLOR="AD4CF5">

					
					<?php
					
				while($hall=mysqli_fetch_array($halls))
				{
					
				?>	
						
						
						<tr>
							<td><h1>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $hall['hname']; ?></h1> <a href="<?php echo $hall['tlink']?>" class="button" target="_blank">Book Ticket</a></td>
							
						</tr>
				
					
					
	
				<?php					
				}
				include_once("footer.html");
				?>
			
				
				</table>



