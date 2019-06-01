<?php
// Start the session
session_start();
?>

<?php 

require 'conn.php';
 ?>

<?php
	//checking
	if (isset($_SESSION['id'])) {
		# code...
		header('Location: account.php');
	}



	if (isset($_POST['lin']))
	 {
		
		$email = $_POST['email'];
		$password = $_POST['pass'];

		 $sql = "SELECT * FROM users WHERE email = '{$email}'AND password = '{$password}' LIMIT 1";
		 $result = mysqli_query($conn, $sql); 

		if ($result) 
		{

			//add session here
			if (mysqli_num_rows($result) == 1)
			{
				# code...
				$user = mysqli_fetch_assoc($result);
				$_SESSION['id'] = $user['phoneNum'];
				$_SESSION['charType'] = $user['charType'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['echoEmail'] = $user['email'];
				$_SESSION['echoAddress'] = $user['address'];
				$_SESSION['index'] = 0;

				if($user['charType'] == '2')
				{
					
					header('Location: cashir.php');
				}
				else if($user['charType'] == '3')
				{
					header('Location: account.php');
				}
				else if($user['charType'] == '1')
				{
					header('Location: admin-menu1.php');
				}



				
			}
			
		
		}



		

	}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="shortcut icon"  href="img/logo.png">
</head>
<body>



<body style="background-image: url(bg.png);background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;">
	
	

  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>
	  
	 
<div class="sdnv">	
		
  <a href="home.php"><img id="logo" src="img/logo.png" alt="wolly's pizza"></a>
  <a id="A" href="menu.php" >Menu<span></a>
  <a id="A" href="promotion.php">Promotion</a>
  <a id="A" href="account.php">Account</a>
  <a id="A" href="contact.php">Contact us</a>
</div>  



	<div class="formOne">
		<form name="myForm" onsubmit="return validateForm()"  action="login.php" method="post">
		<fieldset class="formOneField">
			<h1 class="hOne">
				LogIn
			</h1>
			
				<label>Email:</label>
			<input type="email" name="email" placeholder="email">
			</p>
			
			<p>
				
				<label>Password:</label>
			<input type="password" name="pass" placeholder="password">
			</p>
			
			<input class="submit" type="submit" name="lin" value="Log in">
  			<a href="Register.php" style="position: relative; top: 20px; left: 450px;">Sign in</a>

			




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


<script src="scripts/login.js">

</script>



</body>
</html>

<?php 
$conn = NULL;

 ?>