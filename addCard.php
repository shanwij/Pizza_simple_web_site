<?php 
	session_start();
	require 'conn.php';
	if (!isset($_SESSION['sizeCart'])) {
		# code...
		header('Location: customize.php');
	}

	//checking user
	if ($_GET['user'] == 'yes') {
		

		# code...
		if (!isset($_SESSION['id']))
		{
		# code...
			header('Location: login.php');
		}
		else
		{
			$checkUser = 1;
			echo $checkUser;
		}
	}
	else
	{

		$checkUser = 2;
		echo $checkUser;
	}



	if (isset($_POST['confirm'])) {
		# code...

		

		//inserting
	 	if ($checkUser == '2') 
	 	{
		 	$size = (integer)$_SESSION['sizeCart'];
			$crust  = (integer)$_SESSION['crustCart'];
			$cheese = (integer)$_SESSION['cheeseCart'];
			$topping = (integer)$_SESSION['toppingCart'];
			$instruction = $_SESSION['instCart'];
			$quantity  =(integer)$_SESSION['quantityCart'];
			$payM = (integer)$_SESSION['payCart'];

			$name = $_POST['fname'];
			$_SESSION['fname'] = $name;

			$address= $_POST['address'];
			$_SESSION['address'] = $address;

			$card= $_POST['pswd'];
			$_SESSION['card'] = $card;

			$code= $_POST['scode'];
			$_SESSION['code'] = $code;

			$month = $_POST['selectMonth'];
			$_SESSION['month'] = $month;

			$year= $_POST['expy'];
			$_SESSION['year'] = $year;
	 		$sql = "INSERT INTO orders 
	 			(id,foodId,size,crust,cheese,toppin,instruction,quantity,payMethod,name,address,card,code,month,year,phoneNumber) 
	 			VALUES
	 			(NULL,'1',	'$size','$crust', '$cheese', '$topping', '$instruction' , '$quantity' , '$payM','$name', '$address', '$card' , '$code', '$month', '$year','$phoneNumber') ";
	 		$results = mysqli_query($conn, $sql);
	 	 	# code...
	 	 

	 		if ($results) 
	 		{
	 		# code...
	 		

	 			header('Location: menu.php');
	 		}
	 	} 








		
	}
	if(isset($_POST['addToCart']))
	{
			$size = (integer)$_SESSION['sizeCart'];
			$crust  = (integer)$_SESSION['crustCart'];
			$cheese = (integer)$_SESSION['cheeseCart'];
			$topping = (integer)$_SESSION['toppingCart'];
			$instruction = $_SESSION['instCart'];
			$quantity  =(integer)$_SESSION['quantityCart'];
			$payM = (integer)$_SESSION['payCart'];

			$name = $_POST['fname'];
			$_SESSION['fname'] = $name;

			$address= $_POST['address'];
			$_SESSION['address'] = $address;

			$card= $_POST['pswd'];
			$_SESSION['card'] = $card;

			$code= $_POST['scode'];
			$_SESSION['code'] = $code;

			$month = $_POST['selectMonth'];
			$_SESSION['month'] = $month;

			$year= $_POST['expy'];
			$_SESSION['year'] = $year;

			$_SESSION['countCart'] = $_SESSION['countCart'] + 1;
			$counter = $_SESSION['countCart'];
			// $_SESSION['cartArray']=array();
			// $cartTest = array();
			 $_SESSION['cartArrayTest']=array();
			
			if (isset($_SESSION['cart']))
	                            $cart =  $_SESSION['cart'];
	    
	                if (!(empty($cart)))
	            {      
	                $_SESSION['index'] = $_SESSION['index'] + 1;
	                array_push( $cart , array('index' => $_SESSION['index'],'Id' => '1' , 'size' => $_SESSION['sizeCart'], 'crust' => $_SESSION['crustCart']  , 'cheese' => $_SESSION['cheeseCart']   , 'toppin' =>$_SESSION['toppingCart'] ,'instructions' => $_SESSION['instCart'] ,'quantity' =>$_SESSION['quantityCart']  ,'payMethod' => $_SESSION['payCart'],'fname' =>$_SESSION['fname'], 'address' =>$_SESSION['address'] , 'card' =>$_SESSION['card'] , 'code' => $_SESSION['code'] ,'month' =>$_SESSION['month'], 'year' => $_SESSION['year'],'phoneNumber' => $_SESSION['id']));
	                  $_SESSION['cart'] = $cart;


	                  header('Location: menu.php');
	                    
	            }else
	            {
	            $_SESSION['index'] = $_SESSION['index'] + 1;
	            $cart[] = array('index' => $_SESSION['index'],'Id' => '1' , 'size' => $_SESSION['sizeCart'], 'crust' => $_SESSION['crustCart']  , 'cheese' => $_SESSION['cheeseCart']   , 'toppin' =>$_SESSION['toppingCart'] ,'instructions' => $_SESSION['instCart'] ,'quantity' =>$_SESSION['quantityCart']  ,'payMethod' => $_SESSION['payCart'],'fname' =>$_SESSION['fname'], 'address' =>$_SESSION['address'] , 'card' =>$_SESSION['card'] , 'code' => $_SESSION['code'] ,'month' =>$_SESSION['month'], 'year' => $_SESSION['year'] ,'phoneNumber' => $_SESSION['id']);
	            $_SESSION['cart'] = $cart;
	            header('Location: menu.php');
	                   
	            }


			  		


			

	}

	

 ?>



<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/formcss.css" type="text/css">
	<script src="scripts/vali.js"></script>
	 
</head>


<!------------------------body area-------------------------------->
<body>
	
	<body background="bg.png" style="background-repeat: no-repeat; width: 100%">
	
	
	
<!-----------------------navigation bar-------------------->	
	<div class="sdnv">	
		
 <a href="home.html"><img id="logo" src="images/logo.png" alt="wolly's pizza"/></a></a>
  <a id="A" href="menu.php" >Menu<span></a>
  <a id="A" href="promotion.php">Promotion</a>
  <a id="A" href="account.php">Account</a>
  <a id="A" href="contact.php">Contact us</a>
</div>  



<!---------------------header button----------------------->
	<div class="hdr">
	<a href="login.php"><button class="sdbtn sdbtn1"><b>Log in</b></button></a>
	<a href="register.php"><button class="sdbtn sdbtn2"><b>Sign in</b></button></a>
	</div>	


  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>

<!--form-->
<div class="form"  >
		<h2> Credit Card Or Debit Card Details</h2>
		<form name="details" method="post" action="carddetails.php">
		<div class="relative">
		<lable>First Name:</lable><br><input type="text" name="fname" id="fname" placeholder="Enter First Name Here" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['name'];} ?>" >
		<br><br>
		
		<lable>Address:</lable><br><input type="text" name="address" id="lname" placeholder="Enter Last address Here">
		<br><br>
		
		<lable>Card Number:</lable><br><input type="text" name="pswd" id="pswd" placeholder="Enter The Card Number" > 
		<br><br>
		
		<lable>Security Code:</lable><br><input type="password" name="scode" id="scode" placeholder="Enter The Security Code" required>
		<br><br>
		
		Master Card<input type="radio" name="card" value="Mcard" id="card" required>
		Visa Card<input type="radio" name="card" value="Vcard" id="card" required>
		<br><br>
		
		
		<div id= "b1">
		<lable>Expiration:</lable>
			<div id="dbox">
			<select required name="selectMonth">
			<option value="">Select</option>
			<option value="january">January</option>
			<option value="february">February</option>
			<option value="march">March</option>
			<option value="april">April</option>
			<option value="may">May</option>
			<option value="june">June</option>
			<option value="july">July</option>
			<option value="august">August</option>
			<option value="september">September</option>
			<option value="october">October</option>
			<option value="november">November</option>
			<option value="december">December</option>
			</div>
		</div>
		</div>
		</div>
		
		
		<div class= "b1">
		<input type="number" name="expy" id="expy" placeholder="Year" required>
		</div>
		
		<br><br>
		
		<input type="submit" name="<?php  if($_GET['user']=='yes'){echo "addToCart";}else{echo "confirm";} ?>" value="<?php if($_GET['user']=='yes'){echo "add To Cart";}else{echo "confirm payment";} ?>" onclick="formValidate()">
		</form>
	<!-- end of form-->	
	
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