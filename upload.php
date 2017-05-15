
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
				<h1>Uploads Page</h1>
								
					<a href="cinemauploadform.php"  class="button">cinema upload</a>
					<a href="uploadnews.php"   class="button">news upload</a>
					<a href="upload_tv_program.php"   class="button">Tv Program Upload</a>
					<a href="add_tv_program_category.php"   class="button">Add Tv category</a>
					<a href="add_tv_channel_name.php"  class="button">Add Tv channel</a>
					<a href="addcinemacatagory.php"  class="button">Add cinema catagory</a>
					<a href="addhall.php"   class="button">Add cinema hall</a>
					
					
					
					
				
			</div>
		<?php	
		include_once("footer.html");
		?>