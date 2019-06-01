<?php 
	//session starts
	 session_start();

	 //making the connection
	require 'conn.php';
	if (isset($_SESSION['id'])) {
		# code...
		header('Location: account.php');
	}

 ?>


<?php 
	
	if (isset($_POST['ok'])) 
	{
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$phoneNum  = $_POST['phn'];

		//checking valid new user
		$sql = "SELECT * FROM users WHERE email = '$email'OR phoneNum = '$phoneNum' ";
		 $result = mysqli_query($conn, $sql); 

		if ($result) 
		{

			//add session here
			if (mysqli_num_rows($result) > 0) 
			{
				# code...
		
				header('Location: register.php?error=yes');
			}
			else
			{
				# code...
				//inserting to the database
				$sql = "INSERT INTO users (phoneNum, name, email,password,charType,address)
						VALUES ('$phoneNum', '$name', '$email','$password ','3','test')";
						 $result = mysqli_query($conn, $sql); 


						 if ($result)
						  {
						 	# code...
			// 			 	$sql1 = "SELECT * FROM users WHERE email = '{$email}'OR phoneNum = '{$phoneNum}' ";
			// 				 $result1 = mysqli_query($conn, $sql); 

			// 				 if ($result1) {

			// //add session here
			// 					if (mysqli_num_rows($result1) == 1) {
			// 						# code...
			// 						$user = mysqli_fetch_assoc($result1);
			// 						$_SESSION['id'] = $user['phoneNum'];
			// 						$_SESSION['name'] = $user['name'];
			// 						header('Location: account.php');
			// 					}
								$_SESSION['id'] = $phoneNum;
								$_SESSION['name'] = $name;


								$_SESSION['charType'] = '3';
								
								$_SESSION['echoEmail'] = $email;
								$_SESSION['echoAddress'] = $address;
								$_SESSION['index'] = 0;

								header('Location: account.php');
		
							}

			}

		}
			
		
	}

	


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="shortcut icon"  href="img/logo.png">
</head>
<body>



<body style="background-image: url(bg.png);
					background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;">
	
	

  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>
	  
	 
<div class="sdnv">	
		
  <a href="home.php"><img id="logo" src="img/logo.png" alt="wolly's pizza"></a>
  <a id="A" href="menu.php" >Menu<span></a>
  <a id="A" href="promotion.php">Promotion</a>
  <a id="A" href="login.php">Account</a>
  <a id="A" href="contact.php">Contact us</a>
</div>  



	<div class="formOne">
		<form name="signinForm" action="register.php" method="post">
		<fieldset class="formOneField">
			<h1 class="hOne">
				Register
			</h1>
			
				
			<p>
				<label >Name:</label>
				<input type="text" name="name" placeholder="Name" autofocus >	
				<select>
 					 <option value="mr">Mr</option>
 					 <option value="ms">Ms</option>
  
			</select>
			</p>
			<p>
				<label>Phone Number:</label>
				<input type="text" name="phn" placeholder="phone Number" >
			</p>
			<p>
				<label>Email:</label>
			<input type="email" name="email" placeholder="email" >
			</p>
			
			<p>
				
				<label>Password:</label>
			<input type="password" name="pass" placeholder="password" >
			</p>
			<p>
				<label>Re enter Password:</label>
			<input type="password" name="repass" placeholder="password" >
			</p>
			<input class="submit" type="submit" name="ok" value="Sign in" onclick=" return myFunction()">
			<p  style="position: relative; top: 0px;left: 400px;">back to <a href="login.php">Log in</a></p>

			




		</fieldset>
		</form>
	</div>

<div class="ftr">

	<a href="#"><img src="fb.png" class="socil"></a>
	<a href="#" ><img src="twt.png" class="socil"></a>
	<a href="#" ><img src="inst.png" class="socil"></a>
	<a href="#" ><img src="ggle.png" class="socil"></a>
  <p>- All Rights Reserved -<br>
 <a href="/terms.html" rel="terms">Terms</a> | <a href="/privacypolicy.html" rel="Privacy">Privacy</a></p>

</div>

<script src="scripts/register.js"></script>
</body>
</html>