<?php
	$success = -1;
	if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['details']) && !empty($_POST['title']) && !empty($_POST['details']) ){
		
		

		$date = date("Y-m-d");
		$title 		= $_POST['title'];
		$tlink 		= $_POST['details'];
		$photoref		= 'default-book.jpg';
		
		if (isset($_FILES['poster'])) {
			// echo '<pre>'; print_r($_FILES['book_photo']); die;
			$file_tmp_name 	= $_FILES['poster']['tmp_name'];
			$file_name 		= $_FILES['poster']['name'];

			move_uploaded_file($file_tmp_name,"assets/img/".$file_name);
			$photoref = $file_name;
		}

		$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
		$sql 			= 'INSERT INTO news (`title`,`details`,`date`,`photoref`) VALUES (\''.$title.'\',\''.$tlink.'\',\''.$date.'\',\''.$photoref.'\')';
		$result 		= $connection->query($sql);

		// echo '<pre>'; print_r($sql); print_r($result); die();
		$success = 0;
		if ($connection->insert_id > 0)
			$success = 1;
	}
	
	else
		echo "Plz insert a title";

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
<?php

	include_once("header.php");
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
						<label for="Subject_title">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Title">
					</div>
					<br>
					<div class="form-group">
						<label for="Subject_title">Details</label>
						<input type="text" class="form-control" id="details" name="details" placeholder="Title">
					</div>	
					<br>
					<div class="form-group">
						<p class="help-block">Upload a poster </p>
						<input type="file" id="poster" name="poster" accept="image/*">	
					</div>
					
					<br>					
					<button type="submit" name="submit" class="button">Upload</button>
					
				</form>
				
			</div>
		<?php	
		include_once("footer.html");
		?>