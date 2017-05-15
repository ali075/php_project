<?php 
session_start();

?>

<!DOCTYPE html>
<style>
.footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   background:#999;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: #FF5733;
    border: none;
    color: white;
    padding: 7px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link href="./Leisure Guide TV and Cinema/style.css" rel="stylesheet" type="text/css">
	<title>Leisure Guide TV & Cinema- Home</title>
	<script async="" src="./Leisure Guide TV and Cinema/analytics.js"></script><script type="text/javascript" src="./Leisure Guide TV and Cinema/jquery.min.js"></script>
	<script type="text/javascript" src="./Leisure Guide TV and Cinema/jquery-1.2.6.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./Leisure Guide TV and Cinema/main_dropdown.css">
	<link rel="stylesheet" type="text/css" href="./Leisure Guide TV and Cinema/notification.css">
	<link rel="stylesheet" type="text/css" href="./Leisure Guide TV and Cinema/module.css">
	<script type="text/javascript">$(document).ready(function(){$(".hideit").click(function(){$(this).hide(700);});});</script>
	<link type="text/css" rel="stylesheet" href="./Leisure Guide TV and Cinema/main.css">
	<link type="text/css" rel="stylesheet" href="./Leisure Guide TV and Cinema/side_nav.css">
    

	<!--Slide scroller-->
	<link href="./Leisure Guide TV and Cinema/amazon_scroller.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./Leisure Guide TV and Cinema/amazon_scroller.js"></script>  
	<!--Slide scroller-->



	<link rel="shortcut icon" href="#" type="image/x-icon">

	<!--Font Link-->
	<link href="./Leisure Guide TV and Cinema/css" rel="stylesheet" type="text/css">
	<!--Font Link-->
	
	<script type="text/javascript" src="./Leisure Guide TV and Cinema/fluidtextresizer.js">


	</script>

	<script type="text/javascript">

		var mytextsizer=new fluidtextresizer({
			controlsdiv: "sizecontroldiv", //id of special div containing your resize controls. Enter "" if not defined
			targets: ["body"], //target elements to resize text within: ["selector1", "selector2", etc]
			levels: 3, //number of levels users can magnify (or shrink) text
			persist: "session", //enter "session" or "none"
			animate: 200 //animation duration of text resize. Enter 0 to disable
		})

	</script>

	<script type="text/javascript">


		function slideSwitch() {
			var $active = $('#slideshow DIV.active');

			if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

	
			var $next =  $active.next().length ? $active.next(): $('#slideshow DIV:first');


			$active.addClass('last-active');

			$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				$active.removeClass('active last-active');
			});
		}

		$(function() {
			setInterval( "slideSwitch()", 3000 );
		});

	</script>

	<!--Marque-->
	
	<!--Marque-->
</head>

<body style="background-color: #F5F5F5;">

<!--<font face="SolaimanLipi" color="#000" size="3">-->
<div id="header-box"><!-- Header Box -->

<div class="Top-Header">
	
	<div class="login-box">
	<?php if(isset($_SESSION['utype'])){?>	
			<div style="float: left; margin: 0px 0px 0px 850px; line-height: 25px;">
			<a href="Logout.php" style="color: rgb(255, 255, 255); font-size: 14px ! important;">Logout</a>
			</div>
	<?php } else{ ?>
			<div style="float: left; margin: 0px 0px 0px 850px; line-height: 25px;">
			<a href="Login.php" style="color: rgb(255, 255, 255); font-size: 14px ! important;">Login</a>
			</div>
	 <?php }  ?>
	 
		<div style="float:right;">
		<div style="float: left; margin: 2px 0px 0px 0px; line-height: 25px;"><img src="Leisure Guide TV and Cinema/watchlist.png" height="12" width="12">&nbsp;<a style="color: rgb(255, 255, 255); font-size: 14px ! important;">My Wathclist</a></div>	
		</div>
	</div>
</div>
<div class="header">
	<div class="header-top">
		<div class="logo">
			<a href="Leisure Guide TV and Cinema.html"><img src="Leisure Guide TV and Cinema/logo.png" width="282" height="80"></a>
		</div>
		<div > 
			<?php if(isset($_SESSION['utype']) && $_SESSION['utype'] == "admin"){?>
				<a href="upload.php" class="button" style="float: right;">upload</a>
			<?php }  ?>
		</div>

		<div class="bottom-top">
			
			<div class="search-box">
				
				<form method="post" action="">
					
					<input type="text" name="q" class="search" maxlength="30" id="searchfield" title="searchfield" value="" placeholder="Search Listing">

					<!--<input type="submit" name="Search" value="Search" alt="Search" class="sear-submit" title="Search" />-->
				<!--</form>
				<form action="" method="">
					<input class="search" type="text" name="search" placeholder="Search"  />-->
					<input class="btn" type="submit" value="" name="Search">
				</form>
			</div>
			
			<div class="daytime">
			<table>
			<tr>
			
			<td>
			<form action="index.php" method="POST" enctype="multipart/form-data">
				<select name="time" class="button">
				<?php
						$m= date("m");

						$de= date("d");

						$y= date("Y");
						
						

						for($i=0; $i<=16; $i++){
						
						 $today= date('y-m-d',mktime(0,0,0,$m,($de+$i),$y));

						 ?>
							<option value=" <?php echo $today ?>"> <?php echo $today ?></option>
						  <?php
						
							echo "<br>";

						}
				?>
				</select>
				</td>
				<td>
				<button type="submit" name="submit" style="float: right" class="button1">Go</button>
				</td>
				</form >
				</tr>
				</table>
			</div>
			
		</div>
	</div><br>
	<div class="header-bottom">
	<div class="bottom-menu">
		<ul id="csdrp">
				
				 <li><a href="index.php">TV Schedule </a>
			      <li><a href="tvcatagorysearch.php">TV Program Catagory </a>


                    <ul>
            			<li><a href="tvcatagorysearch.php">More option</a></li>
                        
                        </ul>
            


                </li>
                <li><a href="javascript:void();">Popular Program</a>                </li>
                 <li><a href="javascript:void();">Cinema</a>


                    <ul>
            
                            <li>
                            <a href="runningcinema.php">
                            <span>Running Cinema</span>
                            <span class="icon">&nbsp;</span></a>
                            <ul>
            
                        <li>
                       

                        
                        </ul>
            </li>
                    
                            <li>
                            <a href="upcomingcinema.php">
                            <span>Upcomming Cinema</span>
                            <span class="icon">&nbsp;</span></a>
                            <ul>
            
                            <li>
                            <a href="javascript:void">
                            
                            <span class="icon">&nbsp;</span></a>
                            <ul>
                        </ul>
            </li>
                    <li></li>
                        <li></li>
                        </ul>
            </li>
                    </ul>
                </li>
                   <li><a href="javascript:void();">News And Features</a>


                    <ul>
            
                            <li>
                            <a href="news.php">
                            <span>News                            </span>
                            <span class="icon">&nbsp;</span>                            </a>            </li>
                    
                    
                            <li>
                            <a href="javascript:void">
                            <span>Academic Awards                            </span>
                            <span class="icon">&nbsp;</span>                            </a>
                            <ul>
                        </ul>
            </li>
                    <li><a href="#">National Awards</a></li>
                        <li><a href="#">Meril Prothom Alo Awards</a></li>
                    </ul>
                </li>
                                <li><a href="javascript:void();">Gallery</a>


                   <ul>
            
                            <li>
                            <a href="Photo Gallery.php">
                            <span>Photo Gallery</span>
                            <span class="icon">&nbsp;</span></a>
							</li>
                    
                            <li>
                            <a href="#">
                            <span>Video Gallery</span>
                            <span class="icon">&nbsp;</span></a>
							</li>
                    </ul>
                </li>
                                <li><a href="signup.php">Sign Up </a>
                <li><a href="javascript:void();">About Us </a></li>
                <li><a href="#">Contact Us</a>
				
				
				</li>
		</ul>
	</div>
	<!-- End Header Box -->
<div id="main-content"><!-- Main Content -->
		
<div>				
	<div style="padding-top:50px; width:810px; ">
		
<table  bgcolor="#FFFFE8" border="0" style=" font-size:14px;">
 