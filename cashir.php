
<?php
  session_start();
  if($_SESSION['charType'] == '3')
  {
    header('Location: logout.php');
  }

  require 'conn.php';
  if (!isset($_SESSION['id'])) {
    # code...
    header('Location: login.php');
  }

 ?>


<?php 
  
  $sql = "SELECT * from orders where pending = 'yes'";
  $set = mysqli_query($conn, $sql);

  if($set)
  {
    $details = array();
    
    while ($row = mysqli_fetch_assoc($set)) 
    {
      # code...
     
      array_push($details,array('index' => $row['id'] ,'id' =>$row['foodId'], 'size' => $row['size'], 'crust' => $row['crust'] , 'cheese' => $row['cheese'], 'toppin' =>$row['toppin'],'instructions' => $row['instruction'] ,'quantity' =>$row['quantity'],'payMethod' => $row['payMethod'],'fname' =>$row['name'], 'address' =>$row['address'] ,'phoneNumber' => $row['phoneNumber']));

      $_SESSION['det'] = $details;

    }//end of fetchc assic while loop

  }//end of set query


?>








<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
body{
	font-style: sans-serif, helvetica;
  background-image: url("images/woody2.jpg");
  background-repeat: no-repeat;
  background-size: 100% ;
}
.image{

    height: 100%;
    background-position: center;
    background-repeat:no-repeat;
    background-size: cover;
}	
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 30px;
  margin-top:8px;
  padding: 0 8px;
}
@media screen and (max-width: 650px) {
  .column {
    width: auto;
    display: block;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
 }
.overlay {
  background: rgba(0, 0, 0, 0.7); 
  color: #f1f1f1; 
  width: auto;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 25px;
  padding: 20px;
  text-align: center;
}
.container:hover .overlay {
  opacity: 1;
}
.container {
  padding: 0 16px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: white;
}
.button {
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {
  background-color: #555;
}

</style>
</head>
<body>


<div class="image">
  <h2>WOLLY'S PIZZA</h2>

<a href="logout.php"><h6>LOG OUT</h6>
</a>
<h1 style="font-family: sans-serif , helvetica">Spend Less And Eat Well</h1>
<br>

<div class="row">

  <!-- one set starts -->



  <?php 
    foreach ($details as $det) {
      # code...

   
   ?>


  <form action="cashir1.php" method="get">

  <div class="column">
    <div class="card">
      <img src="images/pro6.gif" alt="pro6" style="width:100%">
	  <div class="container">
        <h2>PENDING ORDERS</h2>
        <p class="title">Wait 15 min</p>
        <p>Name: <?php echo $det['fname']; ?></p>
		<p>Address <?php echo $det['address']; ?></p>
		<p>Tel:  <?php echo $det['phoneNumber']; ?></p>
       <?php echo "<input type='text' style='display: none;'  name = 'send' value='".$det['index']."''>"; ?>
        <p><input type="submit" class="button" value="DONE" name="ok"></p>
	  </div>	
    </div>
  </div>
  </form>
<?php  } ?>



</div>

</body>
</html>