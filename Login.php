<?php

	include_once("header.php");
	?>	
	<?php
 if(isset($_POST['login']) && isset($_POST['login'])) {
      
      $user_name    = $_POST['user_name'];
      $password = $_POST['password'];
      $password = md5($password);
      $connection   = new mysqli('localhost', 'root', '', 'leisureguide');
      $sql          = 'SELECT * FROM users WHERE password=\''.$password.'\' AND user_type=\''.$user_name.'\'';
      $result       = $connection->query($sql);

      $connection->close();
	  $row = $result->fetch_assoc();
      if ($result->num_rows == 1) {
        $_SESSION['password'] = $password;
		$_SESSION['utype'] = $row['user_type'];
        $_SESSION['login_error'] = 0;
        header('Location: index.php');
        exit;
      } else {
        $_SESSION['login_error'] = 1;
      }
  }
	
?>

<table width="810" bgcolor="#FFFFE8" border="1" style=" font-size:14px;">
	
		<?php if( isset($_SESSION['login_error']) && $_SESSION['login_error'] == 1 ): ?>
		  <div >
			<p>Could not log in! Email/password mismatch.</p>
		  </div>
		<?php endif; ?>
	
    <form method="post" action="">
    

            <label>User Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="user_name" value="" placeholder="User Name"><br><br>
  
			<label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="password" value="" required=""><br><br>
           
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Login" name="login">
        
    	
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