
<?php
 	session_start();
	$hello = (string)"user".$_SESSION['id'];
	require 'conn.php';
	if (!isset($_SESSION['id'])) {
		# code...
		header('Location: login.php');
	}

 ?>



<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/chng.css" type="text/css">	 
	
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
				<li><a id="A" href="account.php" class="actv">Account</a></li>
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
	  
	
	
<!------------------------------form-------------------------------------------->  
	  
<div class="changeDet" style="float:left;">
<h1>Change Details</h1>
<form name ="chngg" action="change.php" method="post">
    <div class="form">
        <label >Your First Name <input type="text" name="fname" ></label>
        <label>Address <textarea name="address"></textarea></label>
    

    
        <label>Email Address <input type="email" name="email" ></label>
       
    	<input type="submit" name="Submit1" value="submit"  onclick="check()">

        
        <label >New Password <input  type="password" name="password" ></label>
        <label >Confirm Password <input type="password" name="repassword" ></label>

        <input type="submit" name="Submit2" value="submit"  onclick="check()" >
    </div>
   
   
	   
 <!--<input id="fileSelect" type="file" multiple>
  <img style="float: right; width: 20% ; border-radius: 12px;" src="images/des.png">
  <p id="itemSelected">click browse to change the picture</p>
  <button type="submit">Upload</button>  --->
 
  
  

   
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

<div id="alertbox">
	<p>Details change successful</p>
</div>


<script>

 function check()
	{
		
		var number1 = document.forms.chngg.submit2.value;
		var number2 = document.forms.chngg.submit2.value;
	    if (number1 != number2)
		{
           
			 alert("Password doesn't match");
			
		}
        else if( number1 != "" && number2 != "" && number1 == number2 )
		{ 
		    var alertbox = document.getElementById("alertbox");
            alertbox.style.display = "block";
				setTimeout(function () {
				alertbox.style.display = "";
			}, 2000);
        }
		else
		{
		   alert("Input password");
		}
    }




</script>



</body>

</html>
