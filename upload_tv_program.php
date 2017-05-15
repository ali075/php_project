<?php
	ini_set("display_errors",1);
	//require('classes/library.php');
	//$library = new Library();
	$success = 0;
	$count = 0;
	$pid = 0;
	$result = -1;
	$result2 = -1;
	if(isset($_POST['date']) && ($_POST['time'])){
		$date = $_POST['date'];
		$time 		= $_POST['time'];
		$pname 	= $_POST['pname'];
		$cname 		= $_POST['cname'];
		$category 	= $_POST['category'];
		$photoref	= 'default-book.jpg';
		if (isset($_FILES['photo'])) {
			// echo '<pre>'; print_r($_FILES['book_photo']); die;
			$file_tmp_name 	= $_FILES['photo']['tmp_name'];
			$file_name 		= $_FILES['photo']['name'];

			move_uploaded_file($file_tmp_name,"assets/img/".$file_name);
			$photoref = $file_name;
		}
		$connection   = new mysqli('localhost', 'root', '', 'leisureguide');
		$sql  = "SELECT * FROM tv_program_date";
		$result1 = $connection->query($sql);
		$connection->close();
		while($row = $result1->fetch_assoc()){
			if($row['date']===$date){
				$pid = $row['id'];
				$count = 0;
				break;
			}
			$count = $count+1;
		}
		
		
		if($count>0){
			$connection   = new mysqli('localhost', 'root', '', 'leisureguide');
			$sql ="INSERT INTO tv_program_date(date) VALUES( '$date')";
			$result2=$connection->query($sql);
			$connection->close();
			$pid = $count+1;
		}
		$connection   = new mysqli('localhost', 'root', '', 'leisureguide');
		$sql1 ="INSERT INTO tv_program(pid,time,program_name,channel_name_id,category_id,photo) VALUES( '$pid','$time','$pname','$cname','$category','$photoref')";
		$result=$connection->query($sql1);
		$connection->close();
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.form{width:300px;height:30px;}
			.nav {background-color:rgb(118, 183, 152);line-hight:10px; width:200px;height:450px; float:left;}
			 .nav ul {margin:15px; list-style-type:none;padding:10px;line-height:40px;}
		</style>
	</head>
	<body style="background-color:rgb(118, 183, 152);">
		<div>
			<div class ="nav" > 
				<ul >
					<li><h2><a href ="add_tv_channel_name.php" style="text-decoration:none;">Add channel</a></h2></li>
					
					<li><h2><a href ="add_tv_program_category.php" style="text-decoration:none;">Add category</a></h2></li>
					
				</ul>
			</div>
			<div>
			<?php if( $result > 0 ): ?>
				<p style="text-color:green">Program information successfully saved in database.</p>
				<?php elseif ($result == 0): ?>
				<p style="text-color:red">Failed to save in database!</p>
				<?php endif; ?>
			</div>
			<div>
				<form action="" method="POST" enctype="multipart/form-data">
					<div>
						<label>Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
						<input type="date" class="form" id="date" name="date" placeholder="">
					</div>
					<div>
						<label>Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
						<input type="time" class="form" id="time" name="time" placeholder="">
					</div>
					<div >
						<label>Program Name</label></br>
						<input type="text" class="form" id="pname" name="pname" placeholder="">
						<?php
					/*$connection 	= new mysqli('localhost', 'root', '', 'uiu_library');
					$results = 'SELECT * FROM tv_program';
					$connection->close();
					
					echo "<select name = 'pname' id='pname' class='form'>";
						
					while($row = mysqli_fetch_array($results)){
							echo "<option value = '". $row['id'] ."'> " . $row['name'] ."</option>";
							
					}
					echo "</select>";
					*/
					?>
					</div>
					<div>
						<label>Channel Name</label>&nbsp;</br>
						<!--<input type="text" class="form" id="cname" name="cname" placeholder="">-->
					<?php
						$connection 	= new mysqli('localhost', 'root', '', 'leisure');
						$sql = 'SELECT * FROM tv_channel';
						$result = $connection->query($sql);
						mysqli_close($connection);
						
						echo "<select name = 'cname' class='form'>";
							
						while($row1 = mysqli_fetch_array($result)){
								echo "<option value = '". $row1['id'] ."'> " . $row1['channel_name'] ."</option>";
								
						}
						echo "</select>";
					?>
					</div>
					<div>
						<label>Category</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
						<!--<input type="text" class="form" id="category" name="category" placeholder="">-->
						<?php
						$connection 	= new mysqli('localhost', 'root', '', 'leisure');
						$sql = 'SELECT * FROM tv_category';
						$results = $connection->query($sql);
						mysqli_close($connection);
						
						echo "<select name = 'category' id='category' class='form'>";
							
						while($row2 = mysqli_fetch_array($results)){
								echo "<option value = '". $row2['id'] ."'> " . $row2['category_name'] ."</option>";
								
						}
						echo "</select>";
					?>
					</div>
					
					<div>
						<label >Photo</label></br>
						<input type="file" id="photo" name="photo" accept="image/*">
						<p class="help-block">Upload of program photo.</p>
					</div>
					</br>
					<button type="submit" name="submit">Submit</button>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>