
<?php
  session_start();


  require 'conn.php';
  

 ?>


<!DOCTYPE html>



<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/menu1.css" type="text/css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 </head>

<body>
	<body background="bg.png" style="background-repeat: no-repeat; width: 100%">

	
<!-----------------------navigation bar-------------------->	
	<div class="sdnv">	
		
 <a href="home.php"><img id="logo" src="images/logo.png" alt="wolly's pizza"/></a>
  <a id="A" href="menu.php" class="actv">Menu</a>
  <a id="A" href="promotion.php">Promotion</a>
  <a id="A" href="account.php">Account</a>
  <a id="A" href="contact.php">Contact us</a>
</div>  
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
	  
	 <div id = "but">

  <a href="#pizza"><button class="button"> Pizza</button></a>
  <a href="#drinks"><button class="button">Drinks</button></a>
  <a href="#pasta"><button class="button">Pasta</button></a>
  <a href="#burgers"><button class="button">Burgers</button></a>
  <a href="#desserts"><button class="button">Desserts</button></a>
</div>
<div>
<!-- menu all -->
<?php 
		$sql = "SELECT * FROM menu";
		$set = mysqli_query($conn,$sql);

		if($set) {
			$foodLink = array();
			$foodId = array();
			$foodName = array();
			$foodPrice = array();
			$i = 0;
			while ($rowTable = mysqli_fetch_assoc($set)) 
			{
				$foodLink[]=$rowTable['image'];
				$foodId[] = $rowTable['id'];
				$foodName[] = $rowTable['foodName'];
				$foodPrice[] = $rowTable['price'];
			}
			
			
			
		
	

	 ?>




				<div class="menu" align="left">

					



					<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					
					
				
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button>
					</form>
					

				</div>

				<div class="menu" align="left">

					<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					
					

			
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					

				</div>

				<div class="menu" align="left">

				
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					
				
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					
					</div>
					

				<div class="menu" align="left">

				
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					

				
						<img src="<?php echo $foodLink[$i];?>" style="width:100%; border-radius: 12px">
					

					<form name="formAAA" action="customize.php" method="get"> 
						<h4><b><?php echo $foodName[$i]." Rs: ".$foodPrice[$i]; ?></b></h4>
						<?php echo "<input type='text' name='forwardId' value='$foodId[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardPrice' value='$foodPrice[$i]' style='display: none;'>";  ?>
						<?php echo "<input type='text' name='forwardImage' value='$foodLink[$i]' style='display: none;'>";  $i=$i+1; ?>
						<button class="cusbtn">Customize</button></a>
					</form>
					
					
				</div>


			<?php } ?>


</div>

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
