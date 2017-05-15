<?php
	$success = -1;
	if (isset($_POST['submit']) && isset($_POST['catagory']) && !empty($_POST['catagory']) ){
		
		$category_name 		= $_POST['catagory'];

		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$sql 			= 'INSERT INTO tv_category (`category_name`) VALUES (\''.$category_name.'\')';
		$result 		= $connection->query($sql);

		// echo '<pre>'; print_r($sql); print_r($result); die();
		$success = 0;
		if ($connection->insert_id > 0)
			$success = 1;
	}
	
	else
		echo "Plz insert a title";

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
						<label for="Subject_title">Catagory</label>
						<input type="text" class="form-control" id="catagory" name="catagory" placeholder="Title">
					</div>			
					<button type="submit" name="submit" class="btn btn-primary">ADD</button>
				</form>
			</div>
		<?php	
		
		?>