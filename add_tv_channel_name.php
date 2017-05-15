<?php
	$success = -1;
	if (isset($_POST['submit']) && isset($_POST['channel']) && !empty($_POST['channel']) && isset($_FILES['photo'])){
		
		$channel_name 		= $_POST['channel'];
		$photoref	= 'default-book.jpg';
		if (isset($_FILES['photo'])) {
			// echo '<pre>'; print_r($_FILES['book_photo']); die;
			$file_tmp_name 	= $_FILES['photo']['tmp_name'];
			$file_name 		= $_FILES['photo']['name'];

			move_uploaded_file($file_tmp_name,"assets/images/channel logo".$file_name);
			$photoref = $file_name;
		}

		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$sql 			= "INSERT INTO tv_channel (channel_name,channel_logo) VALUES ('$channel_name','$photoref')";
		$result 		= $connection->query($sql);

		// echo '<pre>'; print_r($sql); print_r($result); die();
		$success = 0;
		if ($connection->insert_id > 0)
			$success = 1;
	}
	
	else
		echo "Plz insert a title and channel logo";

?>
			
			<div class="col-md-6">
				<h1>Add catagory</h1>
				<br>
				<!-- SUCCESS / FAILURE message for new inserts -->
				<?php if( $success > 0 ): ?>
				<p class="alert bg-success">Subject successfully Added in database.</p>
				<?php elseif ($success == 0): ?>
				<p class="alert bg-danger">Failed to save in database!</p>
				<?php endif; ?>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Subject_title">Channel Name</label>
						<input type="text" class="form-control" id="channel" name="channel" placeholder="">
					</div >	
					<div class="form-group">
						<label >Photo</label></br>
						<input type="file" id="photo" name="photo" accept="image/*">
						<p class="help-block">Upload of channel logo.</p>
					</div>
					</br>
					<button type="submit" name="submit" class="btn btn-primary">ADD</button>
				</form>
			</div>
		<?php	
		
		?>