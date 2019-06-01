
<?php
  session_start();


  require 'conn.php';
  

 ?>

<?php 
		$sql = "SELECT * FROM menu where promo='yes'";
		$set = mysqli_query($conn,$sql);

		if($set) {
			$foodLink = array();
			$foodId = array();
			$foodName = array();
			$i = 0;
			while ($rowTable = mysqli_fetch_assoc($set)) 
			{
				$foodLink[]=$rowTable['image'];
				$foodId[] = $rowTable['id'];
				$foodName[] = $rowTable['foodName'];
			}
			
			
			
		
	

	 ?>

<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 <link rel="stylesheet" href="stylesheets/homecss.css" type="text/css">	 
	
	 
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
	
<!--------------------Slideshow----------------------------->

 <img  class="slde" src="images/sld1.jpg" >
 <img  class="slde" src="images/sld2.jpg" >
 <img  class="slde" src="images/sld3.jpg" >


  <a href="https://Wolly'sPizza.com" title="Wolly's Pizza">
	  </a>
	  
	 

<!-------------------------slide show javaScript--------------->

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
    setTimeout(carousel, 4000); 
}
</script>

<!--------------------Promotion 4 photos-------------------------->
<a href="customize.php?forwardId=1&forwardImage=images%2Fabe10a12fb.png
">

	<img  class="prpzza" src="<?php echo $foodLink[$i]; $i=$i+1;?>" alt="offer" >
	<img  class="prpzza" src="<?php echo $foodLink[$i]; $i=$i+1;?>" alt="offer" >
	<img  class="prpzza" src="<?php echo $foodLink[$i]; $i=$i+1;?>" alt="offer" >
	<img  class="prpzza" src="<?php echo $foodLink[$i]; $i=$i+1;?>" alt="offer" >
	<?php  ?>
</a>
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
