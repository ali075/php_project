<?php

	include_once("iheader.php");
	?>
	

   
   		 </table>	
<div>				
	<div >
	
	 
		<div style="background-color:#BAD2FC; width:795px;padding-left:20px; min-height:35px;">
			<table width="810" border="0"  style="font-size:16px">
 <tr>
	
		
  	<td width="220"><a href=""><img src="Leisure Guide TV and Cinema/arrows.png" height="20" width="20"></a></td>  
   	<td width="380">7.00 am</td>
    <td width="400">8.00 am</td>
    <td width="360">9.00 am</td>
	<td width="350">10.00 am</td>
	<td width="80"><a href="index1.php?idp=''"><img src="Leisure Guide TV and Cinema/right arrow.png" height="20" width="20"></a></td>
  </tr>
  
  </table>
		</div>
<div>		
<table width="810" bgcolor="#FFFFE8" border="1" style=" font-size:14px;">
  <tr>
	<?php
	
	if(isset($_POST['time']) && isset($_POST['submit']) || && isset($_GET['idp']))
	{
		
		$date = $_POST['time'];
		echo "$date";
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$d = $connection->query("SELECT * FROM tv_program_date WHERE date='$date' ");
		$ds=mysqli_fetch_array($d);
		$dd=$ds['id'];
		echo "$dd";
		$rows = $connection->query("SELECT *FROM tv_program WHERE pid=$dd and time BETWEEN ('07:00:00' and '10:50:00') and channel_name_id=1 order by time");
		
		$connection->close();
		
	
	?>
		
   	<td width=120px ><img src="Leisure Guide TV and Cinema/channel logo/27347_100001125099202_7419_n.jpg" width="70" height="70"><br>
    <a href="http://www.jagobd.com/banglavision.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
	<?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	
  </tr>
 
  <tr>
   <?php
		
		$date = $_POST['time'];
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=2 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/atn.png" width="70" height="70"><br>
	<a href="http://www.jagobd.com/atn-bangla.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
  

  <tr>
   <?php
		
		$date = $_POST['time'];
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=3 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/channel i.png" width="70" height="70"><br>
	<a href="http://www.jagobd.com/channeli.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>

  <tr>
   <?php
		
		$date = $_POST['time'];
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=4 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/ntv-lgo.jpg" width="70" height="70"><br>
    <a href="http://www.ntvbd.com/livetv" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
 
 
  <tr>
   <?php
		
		$date = $_POST['time'];
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=5 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/ekator-tv.png" width="70" height="70"><br>
    <a href="http://www.jagobd.com/ekattortv.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>

  <tr>
   <?php
		
		$date = $_POST['time'];
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=6 order by time");
		$connection->close();
		
	
	?>
		
   <td><img src="Leisure Guide TV and Cinema/channel logo/24.jpg" width="70" height="70"><br>
    <a href="http://www.jagobd.com/mohonatv.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
  
 
  <?php
	}
	if(!isset($_POST['time']) && !isset($_POST['submit'])){
		
		$date = date("Y-m-d");
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=1 order by time");
		$connection->close();
		
	
	?>
		
   	<td width=120px ><img src="Leisure Guide TV and Cinema/channel logo/27347_100001125099202_7419_n.jpg" width="70" height="70"><br>
    <a href="http://www.jagobd.com/banglavision.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
	<?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	
  </tr>
 
  <tr>
   <?php
		
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=2 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/atn.png" width="70" height="70"><br>
	<a href="http://www.jagobd.com/atn-bangla.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
  

  <tr>
   <?php
		
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=3 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/channel i.png" width="70" height="70"><br>
	<a href="http://www.jagobd.com/channeli.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>

  <tr>
   <?php
		
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=4 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/ntv-lgo.jpg" width="70" height="70"><br>
    <a href="http://www.ntvbd.com/livetv" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
 
 
  <tr>
   <?php
		
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=5 order by time");
		$connection->close();
		
	
	?>
		
   	<td><img src="Leisure Guide TV and Cinema/channel logo/ekator-tv.png" width="70" height="70"><br>
    <a href="http://www.jagobd.com/ekattortv.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>

  <tr>
   <?php
		
		
		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$rows = $connection->query("SELECT *FROM tv_program WHERE time BETWEEN '07:00:00' and '10:50:00' and channel_name_id=6 order by time");
		$connection->close();
		
	
	?>
		
   <td><img src="Leisure Guide TV and Cinema/channel logo/24.jpg" width="70" height="70"><br>
    <a href="http://www.jagobd.com/mohonatv.html" style="color:#FF0000">Watch Live</a></td>
	
	<?php	
		$c=1;
	while($row=mysqli_fetch_array($rows))
	{
		if($c>3)
		{
	?>
	
	
    <td >
		<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="center"> &nbsp;&nbsp;
 <?php
		}
		else
			{$c=$c+1;
		?>
			<td >
			<img height="80" width="60" src="assets/img/<?php echo $row['photo']; ?>" align="left"> &nbsp;&nbsp;
			<?php
		}
	?>		
			<h3> <?php echo $row['program_name']; ?></h3>
						
			<p>Time: <?php echo $row['time']; ?></p>	
			<?php	
			$catagory= $row['category_id'];
			$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
			$sql				="select * from tv_category  where $catagory=id ";
			$rows2 = $connection->query($sql);
			if(!empty($rows2))
			{
			$row2=mysqli_fetch_array($rows2);
			
				?>
			<h4 >category:<?php echo $row2['category_name']; ?></h4>
			<?php
			}
			?>
	</td>
	
	
	<?php
	}
	?>
	</tr>
	<?php
	}
	?>
</table>
</div>
	</div>			
</div>
			

</div>
</div>
	<?php

	include_once("footer.html");
	?>