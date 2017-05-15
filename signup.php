<?php

	include_once("header.php");
	?>	
	<?php
	
	$success = -1; //initially assign this value
	$result = -1; //initially -1, result>0 then signup successful
	if(isset($_POST['fname']) && isset($_POST['user_name'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$user_type =$_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		$connection   = new mysqli('localhost', 'root', '', 'leisureguide');
		$sql ="INSERT INTO users(fname,lname,user_type,email,password) VALUES( '$fname','$lname','$user_type','$email','$password')";
		
		$result=$connection->query($sql);
		mysqli_close($connection);
		
	}
	
?>

<table width="810" bgcolor="#FFFFE8" border="1" style=" font-size:14px;">
		<div>
			<?php if( $result > 0 ): ?>
				<p> Successfully sign up.</p>
			<?php elseif ($result == 0): ?>
				<p>Failed to sign up!</p>
			<?php endif; ?>
		</div>
   <form method="POST" action="">
	
    	
        	<legend>Form Application</legend><br><br>
            
            <label>First Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="fname" value="" placeholder="First Name"><br><br>
			
            <label>Last Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lname" value="" placeholder="Last Name"><br><br>
			
            <label>User Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="user_name" value="" placeholder="designation"><br><br>
			
            <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="email" value=""><br><br>
			
            <label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password" value="" required=""><br><br><br><br>
             
            <input type="submit" value="submit" name="submit">
            
        </form>
</table>
</div>
	</div>			
</div>
			

</div>
</div>
	<?php

	include_once("footer.html");
	?>