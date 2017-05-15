<?php
include_once("header.php");
	$success = -1;
	if ( isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['ylink']) && isset($_POST['imdb']) && isset($_POST['rdate']) && isset($_POST['catagory']) && isset($_POST['status']) && !empty($_POST['title']) && !empty($_POST['rdate']) ){
		
		$title 			= $_POST['title'];
		$ylink 			= $_POST['ylink'];
		$imdb 			= $_POST['imdb'];
		$r_date 		= $_POST['rdate'];
		$catagory 		= $_POST['catagory'];
		$status 		= $_POST['status'];
		$photoref		= 'default-book.jpg';
		$q2				= $_POST['q1'];
		$q1=implode(',', $_POST['q1']);
		$q	= 	sizeof($q1);
		$p[]=$q1;
		

		if (isset($_FILES['poster'])) {
			// echo '<pre>'; print_r($_FILES['book_photo']); die;
			$file_tmp_name 	= $_FILES['poster']['tmp_name'];
			$file_name 		= $_FILES['poster']['name'];

			move_uploaded_file($file_tmp_name,"assets/img/".$file_name);
			$photoref = $file_name;
		}

		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$sql4			='select max(hid) FROM cinema';
		$result4 		= $connection->query($sql4);
		$row = mysqli_fetch_row($result4);
			$result5		= $row[0]+1;
		$hid			= $result5;
		
		
		$sql 			= 'INSERT INTO cinema (`title`,`catagory_id`, `status`, `r_date`,`ylink`,`imdb`,`photoref`,`hid`) VALUES (\''.$title.'\',\''.$catagory.'\',\''.$status.'\',\''.$r_date.'\',\''.$ylink.'\',\''.$imdb.'\',\''.$photoref.'\',\''.$hid.'\')';
		$result 		= $connection->query($sql);	
		//$sql1 			='select count(id) FROM cinema';
		//$result1 		= $connection->query($sql1);
		
		foreach ($q2 as &$value) {
			$sql2			='INSERT INTO hallandcinema_id (cid,hid) VALUES(\''.$hid.'\',\''.$value.'\')';
			$result2 		= $connection->query($sql2);
		}
		
		for ($x = 0; $x <= $q; $x++) {
		//	$sql3			='INSERT INTO hallandcinema_id (cid) VALUES(\''.$result5.'\')';
		//	$result3 		= $connection->query($sql3);
		} 
		
		

		

		// echo '<pre>'; print_r($sql); print_r($result); die();
		$success = 0;
		if ($connection->insert_id > 0)
			$success = 1;
	}
	else
		echo "Plz insert carefully";
	

?>
<!-- SUCCESS / FAILURE message for new inserts -->
				<?php if( $success > 0 ): ?>
				<p class="alert bg-success">Cinema successfully saved in database.</p>
				<div>
					<a href="cinemauploadform.php">Go to Upload cinema</a>		
				</div>
				<br>
				<br>
				<?php elseif ($success == 0): ?>
				<p class="alert bg-danger">Failed to save in database!</p>
				<?php endif; ?>
				<?php
				include_once("footer.html");
				?>