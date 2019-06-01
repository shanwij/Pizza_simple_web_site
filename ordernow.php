<!DOCTYPE html>
<html>
<head>
<title>wolly's pizza</title>
     
	 
<style>
body {
	margin: 0;
    font-family: Arial ,"Lato" ,sans-serif;
}

.sdnv {
    height: 700px;
    width: 249px;
    background-color: #373535;
	float:left;
	padding-top: 10px;
}

#A {
    padding: 20px 10px 10px 70px;
    text-decoration: none;
    font-size: 20px;
    color: #ffffff;
    display: block;	
}

#A:hover {
    color: #8b8686;
}

#logo{
	float: left;
	padding-left: 10px;
	width:220px;
	padding-bottom: 20px;
	/*opacity: 2;*/
	}

.sdbtn{
	background-color: #4cf50;
	border:none;
	padding: 2px 20px;
	text-decoration: none;
	color: white;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	margin: 2px 1px;
	transition-duration: 0.4s;
	cursor: pointer;
	float: right;
	border-radius: 12px;
}

.sdbtn1{
	background-color: white;
	border: 2px solid #adaaaa;
	color: black;
}

.sdbtn1:hover{
	color:white;
	background-color: #555;
}

.sdbtn2{
	background-color: white;
	border: 2px solid #adaaaa;
	color: black;
}

.sdbtn2:hover{
	color: white;
	background-color: #555;
}
	
.hdr {
	
	background-color: #ffffff;
	opacity: 0.6;
	filter: alpha( opacity = 50);
	padding: 5px 10px 5px 5px;
	float:right;
	width:1100px;

}


* {
  box-sizing: border-box;
}

 /*----------------form---------------*/
.ordr{
	float: left;
	width: 500px;
	padding:30px;
	margin:30px 250px;
	background: #FFF;
	border-radius: 10px;
	filter: alpha( opacity= 60);
	opacity: 0.7;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.ordr.frm{
	padding: 100px;
	background: #F8F8F8;
	border-radius: 6px;
}
.ordr h4{
	background: #555;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font: normal  sans-serif, helvetica;

}
.ordr label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: black;
	margin-bottom: 10px;
	
}
.ordr input[type="text"],
.ordr input[type="number"],
.ordr input[type="password"],
.ordr select {
	display: block;
	box-sizing: border-box;
	width: 80%;
	padding: 6px;
	border-radius: 6px;
	border: 2px solid #fff;
	box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.9);
}


.ordr input[type="button"] {
	background: #555;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 'Bitter', serif;
	font-size: 15px;
}

.ordr input[type="button"]:hover{
	background: #2A6881;
}

#alertbox {
	background-color: white;
	text-align: center;
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	margin-left: 50px;
	margin-top: 275px;
	width: calc(100% - 100px);
	height: calc(100% - 550px);
}

/* footer  */
.ftr{
   float:left;
   width: 100%;
   background-color: #17202A  ;
   color: #D5DBDB;
   text-align: right;
   
}
.ftr p{
	float:left;
    margin-left: 20px; 
	margin-top: 20px;
	font-size: 10px;
}
.socil{
	width: 30px;
	margin: 20px;
}


</style> 
</head>


<!------------------------body area-------------------------------->
<body>
	
	<body background="bg.png" style="background-repeat: no-repeat; width: 100%">
	
	
	
<!-----------------------navigation bar-------------------->	
	<div class="sdnv">	
		
          <a href="home.php"><img id="logo" src="images/logo.png" alt="wolly's pizza"></a>
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
	

<div style="float:left;" class="ordr">
<h4>ORDER ME <br>Pickup your flavors Enjoy your life <br> Fill Your Details</h4>

	<form name="odr">	  
	       
			<div class="frm">
            <label for="firstname"><i class="user"></i> Full Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="first name">
            <label for="number"><i class="user-number"></i> Mobile Number</label>
            <input type="number" id="number" name="number" placeholder="mobile number">
            <label for="adr"><i class="user-address"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="no*** *** Rd, sl">
            <label for="district"><i class="user-city"></i> District</label>
            <input type="text" id="district" name="district" placeholder="Colombo">
			<label for="city">City</label>
             <input type="text" id="city" name="city" placeholder="malabe">
              </div>
		
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Delivering address is same as billing
        </label>
        <input type="button" value="Add" class="button" onclick="check()">
        <input type="button" value="Cancel" class="button">
	   
  
</form>
</div>

<div id="alertbox">
	<p>Your Order have been placed.</p>
</div>

  <script>
    function check()
	{
		var firstname = document.forms["odr"]["firstname"].value;
		var number = document.forms["odr"]["number"].value;
		var address = document.forms["odr"]["address"].value;
		var district = document.forms["odr"]["district"].value;
		var city = document.forms["odr"]["city"].value;
	    if (firstname != "" && number != "" && address != "" && district != "" && city != "")
		{
            var alertbox = document.getElementById("alertbox");
			alertbox.style.display = "block";
			setTimeout(function () {
				 window.location = "card details.html";
			}, 2000);
		}
        else
		{ 
            alert("Invalid Input");
        }
    }
   </script>


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
