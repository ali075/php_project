
	<?php

	include_once("header.php");
	?>
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
    color: #908000;
    font-family: verdana;
    font-size: 300%;

}

</style>
</head>
<body>
	<td>
	<h2> Cinema Upload</h2>		
			<div >
				
				<br>		
				
				<form action="cinemaupload.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="book_title">Cinema Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Cinema Title">
					</div>
					<br>
					<br>
					<div class="form-group">
						<label for="book_title">Triler's Youtube Embedded link</label>
						<input type="text" class="form-control" id="ylink" name="ylink" placeholder="Youtube link">
					</div>
					<br>
					<br>
					<div class="form-group">
						<label for="book_title">IMDB Embedded Rating</label>
						<input type="text" class="form-control" id="imdb" name="imdb" placeholder="IMDB Rating">
					</div>
					<br>
					<br>
					<div class="form-group">
						<label for="book_title">Realese Date</label>
						<input type="date" class="rdate" name="rdate">
					</div>
					<br>
					<br>
					<div class="form-group">
					<label for="book_author">Catagory  </label>
					<?php
					$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
					$author = $connection->query('SELECT id,cname FROM catagory');
					$connection->close();
					
					echo "<select name = 'catagory'>";
						
					while($row = mysqli_fetch_array($author)){
							echo "<option value = '". $row['id'] ."'> " . $row['cname'] ."</option>";
							
					}
					echo "</select>";
					?>
					</div>
					<br>
					<br>
					<div class="form-group">
					<label for="book_author">Status </label>
					<select name = 'status'>
							<option value = "1"> "Running Cinema"</option>
							<option value = "2"> "Upcoming Cinema"</option>
					</select>
					</div>
					<br>
					<br>
					<br>
					<br>
					
					<div class="form-group">
						<p class="help-block">Upload a poster </p>
						<input type="file" id="poster" name="poster" accept="image/*">
						
					</div>
					<br>
					<br>
					<br>
					</td>
					<td>
					
					<div class="form-group">
					<label for="book_author">Hall list  </label>
					<br>
					
					<?php
					$connection 	= new mysqli('localhost', 'root', '', 'leisureguide');
					$hall = $connection->query('SELECT id,hname FROM halls');
					$connection->close();
					
					
						
					while($row = mysqli_fetch_array($hall)){
							echo "<input type='checkbox' name='q1[]'  value='". $row['id'] ."'>". $row['hname'] ."<br>";
							//qid[]=count(id)+1;
							
					}
					
					?>	
					</div>
					</td>
					
					<td>
						<button type="submit" name="submit" class="button">Upload</button>
						
							<br>
							<br>
							<div>
								<a href="addhall.php">ADD Cinema Hall</a>		
							</div>
							
							<div>
								<a href="addcinemacatagory.php">ADD Catagory</a>
							</div>
							<br>
					
				</form>
				
			</div>
			</td>
			
		
	
	
	
	<?php
	include_once("footer.html");
	
?>
</body>
</html>
