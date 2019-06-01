
<?php
  session_start();


  require 'conn.php';
  

 ?>
<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/promotioncss.css" type="text/css">	
	
	 </head>

<body>
	<body background="bg.png" style="background-repeat: no-repeat; width: 100%">
	
	
<!-----------------------navigation bar-------------------->	
<nav id="sidebar">	
		
		
		
		
		 <ul class="list-unstyled components">
				<li><a href="home.php"><img id="logo" src="images/logo.png" alt="wolly's pizza"/></a></li>
				<li><a id="A" href="menu.php" >Menu</a></li>
				<li><a id="A" href="promotion.php" class="actv">Promotion</a></li>
				<li><a id="A" href="account.php">Account</a></li>
				<li><a id="A" href="contact.php">Contact us</a></li>
		 </ul>			
	</nav> 


<!---------------------header button----------------------->
	<div class="hdr">
		<?php
			if (isset($_SESSION['id'])) 
			{
				echo "<label class='sdbtn sdbtn1'>Hello ".$_SESSION['name']."</label>";
		
			}
			else
			{
			echo	"<a href='login.php'><button class='sdbtn sdbtn1'>Log in</button></a>
					<a href='register.php'><button class='sdbtn sdbtn2'>Sign in</button></a>";
			}

		?>	
	</div>	


  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>
	  
	 

<!-- prmotion ads all -->
<?php 
	$sql = "SELECT * FROM menu where promo='yes'";
		$set = mysqli_query($conn,$sql);

		if($set) {
			$foodLink = array();
			$foodId = array();
			$foodName = array();
			$i = 4;
			while ($rowTable = mysqli_fetch_assoc($set)) 
			{
				$foodLink[]=$rowTable['image'];
				$foodId[] = $rowTable['id'];
				$foodName[] = $rowTable['foodName'];
			}
 ?>

<div class="prpzza" align="left">
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="<?php echo $foodLink[$i];  ?>" alt="offer" style="width:100%; border-radius: 12px"></a>

	
	<p><?php echo $foodName[$i];  $i=$i+1;  ?></p>
	
<!-- <a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">	
<img src="images/promot/pr2.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>30% off</b></h4>
	<p>Gooey Chocolate Brownie</p>

<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">	
<img src="images/promot/pr3.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>20% off</b></h4>
	<p>Hot Garlic Prawn</p> -->

</div>

<div class="prpzza" align="left">
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">	
<img src="<?php echo $foodLink[$i]; ?>" alt="offer" style="width:100%; border-radius: 12px"></a>
<p><?php echo $foodName[$i];  $i=$i+1;  ?></p>

	
<!-- <a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="images/promot/pr5.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>10% off</b></h4>
	<p>Margherita</p>

<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">	
<img src="images/promot/pr6.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>30% off</b></h4>
	<p>Meat Lovers</p> -->
	
</div>

<div class="prpzza" align="left">
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="<?php echo $foodLink[$i];  ?>" alt="offer" style="width:100%; border-radius: 12px"></a>
<p><?php echo $foodName[$i];  $i=$i+1;  ?></p>
<!-- <a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="images/promot/pr11.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>20% off</b></h4>
	<p>Fanta Portello 750ml</p>

<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="images/promot/pr12.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>20% off</b></h4>
	<p>Double Chocolate Milk Shake (300ml)</p> -->
	
	</div>
	

<div class="prpzza" align="left">
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">	
<img src="<?php echo $foodLink[$i]; ?>" alt="offer" style="width:100%; border-radius: 12px"></a>
<p><?php echo $foodName[$i];  $i=$i+1;  ?></p>
<!-- 
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="images/promot/pr8.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>50% off</b></h4>
	<p>Spicy Cheese Balls</p>

<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png">
<img src="images/promot/pr9.png" alt="offer" style="width:100%; border-radius: 12px"></a>

	<h4><b>30% off</b></h4>
	<p>Spicy Veggie with Paneer</p> -->
	
</div>
		<?php } ?>

	<!-----------------------fotter----------->
<div class="ftr">

	<a href="#"><img src="fb.png" class="socil"></a>
	<a href="#" ><img src="twt.png" class="socil"></a>
	<a href="#" ><img src="inst.png" class="socil"></a>
	<a href="#" ><img src="ggle.png" class="socil"></a>
  <p>- All Rights Reserved -<br>
 <a href="/terms.html" rel="terms">Terms</a> | <a href="/privacypolicy.html" rel="Privacy">Privacy</a></p>

</div>


</body>
</html>
