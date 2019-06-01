
<?php
 	session_start();
	$hello = (string)"user".$_SESSION['id'];

	require 'conn.php';
	if (!isset($_SESSION['id'])) {
		# code...
		header('Location: login.php');
	}

 ?>

 <?php 
 		if (isset($_POST['sout'])) {
 			# code...
 			header('Location: logout.php');
 		}

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
<link rel="stylesheet" href="css/customer.css" type="text/css">	 
<link rel="shortcut icon"  href="img/logo.png">
	 </head>

<body>
	
	<body style="background-image: url(bg.png) ;
			background-repeat: no-repeat;
    background-attachment: fixed;background-size: 100% 100%;		">
	

	  

  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>
	  
	 
<!--<div class="sdnv" style="position: fixed; height: 100%;">	
		
          <a href="home.php"><img id="logo" src="img/logo.png" alt="wolly's pizza"></a>
  <a id="A" href="menu.php" >Menu<span></a>
  <a id="A" href="promotion.php">Promotion</a>
  <a id="A" href="account.php" class="actv">Account</a>
  <a id="A" href="contact.php">Contact us</a>
</div> -->
<nav id="sidebar"style="position: fixed; height: 100%;">	
		
		
		
		
		 <ul class="list-unstyled components">
				<li><a href="home.php"><img id="logo" src="images/logo.png" alt="wolly's pizza"/></a></li>
				<li><a id="A" href="menu.php" >Menu</a></li>
				<li><a id="A" href="promotion.php">Promotion</a></li>
				<li><a id="A" href="account.php" class="actv">Account</a></li>
				<li><a id="A" href="contact.php">Contact us</a></li>
		 </ul>			
	</nav>   



<div class="detailsBox">
	
	<div class="imageAvt">
		<img src="img/avt.png">
	</div>
	<h1 style="position: fixed; top: 150px; left: 270px; "><?php echo $_SESSION['name']; ?></h1>
	<div class="avtDet">
		<fieldset id="avtD">
			<p>
				Phone Number: <?php echo $_SESSION['id']; ?>
			</p>
			<p>
				Email: <?php echo $_SESSION['echoEmail'];; ?>
			</p>
			<p>
				Address: <?php echo $_SESSION['echoAddress']; ?>
			</p>
			
		</fieldset>
	</div>
	<div class="detailBut">
	<form class="detC" action="account.php" method="post">
		<p>
			<button><a href ="chngedetails.php">Change Details</a></button>
		</p>
		<p>
			<button name="sout"><a>Sign Out</a></button>
		</p>
	</form>
	</div>
</div>


<div class="pend" >
	
		<fieldset id="pending">
			<h1>Pending oders</h1>
			<?php 
			if(isset($_SESSION['cart'])){	
			foreach( $_SESSION['cart'] as $row )
 		    {

     		   echo "Index: ".$row['index']."<br>ID = ".$row['Id']."<br>Quantity = ".$row['quantity']."<br><br>";
     		   $_SESSION['cartcart'] = $row['index'];

     		   ?>
    		



			
			<p>
				<div class="singleoder">
				
				
						
					
					
						

					<div class="butpend">
						<form method="post" action="cartAction.php">
							<?php echo "<input type='text' name = 'lab' value='".$row['index']."' style='width: 10px; display: none;'><br>"; ?>
							<input type="submit" name="ok" value="OK" class="oderOk">
							<input type="submit" name="no" value="NO" class="oderCancel">
						</form>
					
					</div>
					
				</div>	
			</p>	
		

		<?php }} ?>

		</fieldset>
	</div>
		

<!-- <div class="hitsoryOder">
	<div class="oderOne">
		<fieldset id="fieldOneOderHis">
			<h1>Oder history</h1>
			<div class="singO">
				<p>
					<div class="singleoderh">
						<fieldset id="hisOder">
							<p>Details of a single oder</p>

						</fieldset>
						<div class="hisbut">
							<form>
								<select>
									<option value="noVal">
										oder review
									</option>
									<option value="starOne">
										&#9733;
									</option>
									<option value="starTwo">
										&#9733;&#9733;
									</option>

									<option value="starThree">
										&#9733;&#9733;&#9733;
									</option>

									<option value="starFour">
										&#9733;&#9733;&#9733;&#9733;
									</option>

									<option value="starFive">
										&#9733;&#9733;&#9733;&#9733;&#9733;
									</option>


								</select>
							</form>
						</div>
					</div>
				</p>
				<p>
					<div class="singleoderh">
						<fieldset id="hisOder">
							<p>Details of a single oder</p>

						</fieldset>
						<div class="hisbut">
							<form>
								<select>
									<option value="noVal">
										oder review
									</option>
									<option value="starOne">
										&#9733;
									</option>
									<option value="starTwo">
										&#9733;&#9733;
									</option>

									<option value="starThree">
										&#9733;&#9733;&#9733;
									</option>

									<option value="starFour">
										&#9733;&#9733;&#9733;&#9733;
									</option>

									<option value="starFive">
										&#9733;&#9733;&#9733;&#9733;&#9733;
									</option>


								</select>
							</form>
						</div>
					</div>
				</p>
				<p>
					<div class="singleoderh">
						<fieldset id="hisOder">
							<p>Details of a single oder</p>

						</fieldset>
						<div class="hisbut">
							<form>
								<select>
									<option value="noVal">
										oder review
									</option>
									<option value="starOne">
										&#9733;
									</option>
									<option value="starTwo">
										&#9733;&#9733;
									</option>

									<option value="starThree">
										&#9733;&#9733;&#9733;
									</option>

									<option value="starFour">
										&#9733;&#9733;&#9733;&#9733;
									</option>

									<option value="starFive">
										&#9733;&#9733;&#9733;&#9733;&#9733;
									</option>


								</select>
							</form>
						</div>
					</div>
				</p>
			</div>
		</fieldset>
	</div>
	
</div> -->
	


</body>
</html>
<?php 
$conn = NULL; ?>