<?php 

//session start
session_start();




	
	//connection starting
	require 'conn.php';
	

	
	 if (isset($_POST['Submit']))
	  {
	// 	# code...
	 	$_SESSION['sizeCart'] = (integer)$_POST['sizee'];
	 	$_SESSION['crustCart']  = (integer)$_POST['crustt'];
	 	$_SESSION['cheeseCart']  = (integer)$_POST['x'];
	 	$_SESSION['toppingCart']  = (integer)$_POST['topp'];
	 	$_SESSION['instCart']  = $_POST['instructions'];
		$_SESSION['quantityCart']  = (integer)$_POST['quantity'];
	 	$_SESSION['payCart']  = (integer)$_POST['pay'];
	 	$_SESSION['foodIdForDatabase'] = $_POST['forwardId'];





	 	header('Location: carddetails.php?user=no');



	  }




	if (isset($_POST['SubmitCart']))
	{
		echo $_SESSION['foodIdForDatabase'];
	   	if (isset($_SESSION['id'])) 
	   	{

	   		# code...
	   	
	  	# code...
		  	$_SESSION['sizeCart'] = (integer)$_POST['sizee'];
		 	$_SESSION['crustCart']  = (integer)$_POST['crustt'];
		 	$_SESSION['cheeseCart']  = (integer)$_POST['x'];
		 	$_SESSION['toppingCart']  = (integer)$_POST['topp'];
		 	$_SESSION['instCart']  = $_POST['instructions'];
			$_SESSION['quantityCart']  = (integer)$_POST['quantity'];
		 	$_SESSION['payCart']  = (integer)$_POST['pay'];
		 	$_SESSION['foodIdForDatabase'] = $_POST['forwardId'];

		 	$foodIdForDatabase = $_SESSION['foodIdForDatabase'];
		 	echo $foodIdForDatabase;
			
		 	if($_POST['pay'] == 2)
		 	{
		 		header('Location: carddetails.php?user=yes');
		 	}
		 	else
		 	{
			 		if (isset($_SESSION['cart']))
	                            $cart =  $_SESSION['cart'];
	    
	                if (!(empty($cart)))
	            {      
	                $_SESSION['index'] = $_SESSION['index'] + 1;
	                array_push( $cart , array('index' => $_SESSION['index'],'Id' => $foodIdForDatabase , 'size' => $_SESSION['sizeCart'], 'crust' => $_SESSION['crustCart']  , 'cheese' =>$_SESSION['cheeseCart']   , 'toppin' =>$_SESSION['toppingCart'] ,'instructions' => $_SESSION['instCart'] ,'quantity' =>$_SESSION['quantityCart']  ,'payMethod' => $_SESSION['payCart'],'fname' =>$_SESSION['name'], 'address' => NULL , 'card' => NULL, 'code' => NULL ,'month' => NULL, 'year' => NULL,'phoneNumber' => $_SESSION['id']));
	                  $_SESSION['cart'] = $cart;


	                  header('Location: menu.php');
	                    
	            }else
	            {
	            $_SESSION['index'] = $_SESSION['index'] + 1;
	            $cart[] =array('index' => $_SESSION['index'],'Id' => $foodIdForDatabase, 'size' => $_SESSION['sizeCart'], 'crust' => $_SESSION['crustCart']  , 'cheese' =>$_SESSION['cheeseCart']   , 'toppin' =>$_SESSION['toppingCart'] ,'instructions' => $_SESSION['instCart'] ,'quantity' =>$_SESSION['quantityCart']  ,'payMethod' => $_SESSION['payCart'],'fname' => $_SESSION['name'], 'address' => NULL , 'card' => NULL, 'code' => NULL ,'month' => NULL, 'year' => NULL,'phoneNumber' => $_SESSION['id']);
	            $_SESSION['cart'] = $cart;
	            header('Location: menu.php');
	                   
	            }






		 	}


	 	}
	 	else
	 	{
	 		header('Location: login.php');
	 	}
	 }
	  


 ?>




<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/menu_customze.css" type="text/css">
	 
	 
</head>


<!------------------------body area-------------------------------->
<body>
	
	<body background="bg.png" style="background-repeat: no-repeat; width: 100%">
	
	
	
<!-----------------------navigation bar-------------------->	
<nav id="sidebar">	
		
		
		
		
		 <ul class="list-unstyled components">
				<li><a href="home.php"><img id="logo" src="images/logo.png" alt="wolly's pizza"/></a></li>
				<li><a id="A" href="menu.php" >Menu</a></li>
				<li><a id="A" href="promotion.php">Promotion</a></li>
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

<div id = "but">

  <a href="#pizza"><button class="button"> Pizza</button></a>
  <a href="#drinks"><button class="button">Drinks</button></a>
  <a href="#pasta"><button class="button">Pasta</button></a>
  <a href="#burgers"><button class="button">Burgers</button></a>
  <a href="#desserts"><button class="button">Desserts</button></a>
</div>
<div class="display">
<img id="selected" src="<?php echo $_GET['forwardImage'];?>" style="width: 300px; height: 300px;" />
</div>
<!--form-->

<div class="form"  >
		<form name="details" method="post" action="customize.php">
		<div class="relative">
			<?php echo "<input type='text' name='forwardId' value='".$_GET['forwardId']."' style='display: none;'>" ?>
			<?php echo "<input type='text' name='forwardImage' value='".$_GET['forwardImage']."' style='display: none;'>" ?>

		<lable>Size:</lable><br><div class="drpdn.1" class="li">
				<select required name="sizee">
				<?php 
					 	$sql = "SELECT * FROM size";
		 				$result = mysqli_query($conn, $sql); 

		 				while ($row = mysqli_fetch_assoc($result)) {
		 					# code...
		 				
				 ?>
				  <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
				  <!-- <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
				  <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option> -->
				<?php } ?>
				</select><br><br></div>
		
		<lable>Crust:</lable><br><div class="drpdn.2" class="li">
				



				<select name="crustt" required >
					<?php 
					 	$sql = "SELECT * FROM crust";
		 				$result = mysqli_query($conn, $sql); 

		 				while ($row = mysqli_fetch_assoc($result)) {
		 					# code...
		 				
				 ?>
				  <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
				  <!-- <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
				  <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option> -->
				<?php } ?>


				 
				</select><br><br></div>
		
		    Extra:
		   <select name="x">
		   		<option value="1">mayo</option>
		   		<option value="2">cheese</option>
		   </select>
		
		<lable>Extra topping:</lable>
		<div class="drpdn.3" class="li">
				<select name="topp">
				  <option value="1">Select</option>
				  <option value="2">BBQ Chicken</option>
				  <option value="3">BBQ Bacon</option>
				  <option value="4">BBQ mutton</option>
				  <option value="5">Black Olives</option>
				  <option value="6">Onion</option>
				  <option value="7">Pineapple</option>
				  <option value="8">Prawns</option>
				  <option value="9">Tomato</option>
				  <option value="10">Mushrooms</option>
				</select><br><br></div>
		
		<lable>Special Instructions:</lable><br>
		<input type="text" name="instructions" id="instructions" style="width: 70s%; height: 20px;">


		<br><br>
		
		<lable style="position: relative; top : -25px;" >Quantity:</lable>
		<input type="text" name="quantity" id="qtity" required style="position: relative; top : -25px;">
		</div>
		
		<div class="pm" style="position: relative; top : -50px;">
		<lable>Paying method:</lable>
		<div class="dbx1">
		<select required name="pay">
		<option value="1">Select</option>
		<option value="1">Cash</option>
		<option value="2">Card</option>
		</select>
		</div>
		</div>
		</div>

		<div class="submit">
		<input type="submit" name="SubmitCart" value="Add to cart" >
		</div>
		
		<div class="submit1">
		<input type="submit" name="Submit" value="buy now" >
		</div>
<!--form-->

<div class="form1">
	<form>
	<div id="f1">
	<lable>Price:</lable><input type="number1" name="price" id="price" >
	<input type="number" style="display: none;" name="price1" id="priceHide" value="<?php echo $_GET['forwardPrice']; ?>" ">
	</div>
	</form>
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

<script type="text/javascript">
	setTimeout(function myFunction()
	{
		 
		   var qty = document.getElementById("qtity").value;
		   var prc= document.getElementById("priceHide").value;
		  var ans = 1;
		  ans = qty * prc;
		    document.getElementById("price").value = ans;

		    setTimeout(myFunction,100);

		}, 100);






	


</script>



</body>
</html>