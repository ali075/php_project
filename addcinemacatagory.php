<?php
	$success = -1;
	if (isset($_POST['submit']) && isset($_POST['catagory']) && !empty($_POST['catagory']) ){
		
		$title 		= $_POST['catagory'];

		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$sql 			= 'INSERT INTO catagory (`cname`) VALUES (\''.$title.'\')';
		$result 		= $connection->query($sql);

		// echo '<pre>'; print_r($sql); print_r($result); die();
		$success = 0;
		if ($connection->insert_id > 0)
			$success = 1;
	}
	
	else
		echo "Plz insert a title";
include_once("header.php");
?>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
			
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
					<br>					
					<button type="submit" name="submit" class="button">ADD</button>
				</form>
				<br>
				<br>
					<td>
						<div>
							<a href="cinemauploadform.php">Go to Upload cinema</a>		
						</div>
					</td>
			</div>
		<?php	
		include_once("footer.html");
		?>