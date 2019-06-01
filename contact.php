<?php session_start(); ?>



<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/contact.css" type="text/css">	 
	 
	 
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
				<li><a id="A" href="contact.php" class="actv" >Contact us</a></li>
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
	  
	<div class="abt">
	 <h1 style="text-align: center">About Us</h1>
	 
	 <p>wolly's pizzeria is one of Sri Lankan's <b>Pizza delivery</b> shops founded in 1996.It has made pizza ordering and delivery more convenient with its <b>online ordering</b> platform.
	 Not just Pizza, but we specialize in all kinds of mouthwatering, scrumptious Italian eats that can be the talking point for you, your family, your friends and even your next get together or party.
	 Feel like ordering? Our friendly customer service department operates from 8.30 Am till 10 PM on weekdays and from 9 AM to 11 PM during weekends.</p>	
	</div>

	<!-- contact detail 4 boxes ------------------->
	 <div class="numbox">
	 
		<p>COLOMBO CENTER <br>
		+94 76 586 6978
		</p></div>
	
	 <div class="numbox">
	 
		<p>KANDY CENTER <br>
		+94 76 586 6978
		</p></div>
	
	 <div class="numbox">
	 
		<p>GALLE CENTER <br>
		+94 76 586 6978
		</p></div>
	
	 <div class="numbox">
	 
		<p>MATARA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	
	<div class="numbox">
	 
		<p>BANDARAWELA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	<div class="numbox">
	 
		<p>AMPARA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	<div class="numbox">
	 
		<p>ANURADAPPURA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	<div class="numbox">
	 
		<p>PANADURA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	<div class="numbox">
	 
		<p>KALUTHARA CENTER <br>
		+94 76 586 6978
		</p></div>
	
	 <!------------------map ------------------------>
        	<iframe class="slde" style="float: left" width="81%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012516.5162876383!2d80.55959660722752!3d7.5533638455937595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri+Lanka!5e0!3m2!1sen!2slk!4v1533547979126"></iframe>
			<iframe class="slde" style="float: left" width="81%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.430034710495!2d80.59076184392424!3d7.294543952147563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1533650011383"></iframe>
		    <iframe class="slde" style="float: left" width="81%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585958437!2d79.78616414163585!3d6.922003946889596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1533650137825"></iframe>
		    <iframe class="slde" style="float: left" width="81%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63383.198004100464!2d80.95996355200829!3d6.836542207652103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae470011c243a85%3A0xd94f7b8a6c4e9867!2sBandarawela!5e0!3m2!1sen!2slk!4v1533650202685"></iframe>
		    <iframe class="slde" style="float: left" width="81%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012516.5162876383!2d80.55959660722752!3d7.5533638455937595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri+Lanka!5e0!3m2!1sen!2slk!4v1533547979126"></iframe>
	<!-----------------------fotter----------->
<div class="ftr">

	<a href="#"><img src="fb.png" class="socil"></a>
	<a href="#" ><img src="twt.png" class="socil"></a>
	<a href="#" ><img src="inst.png" class="socil"></a>
	<a href="#" ><img src="ggle.png" class="socil"></a>
  <p>- All Rights Reserved -<br>
 <a href="/terms.html" rel="terms">Terms</a> | <a href="/privacypolicy.html" rel="Privacy">Privacy</a></p>

</div>

	<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slde");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000); 
}
</script>

</body>
</html>
