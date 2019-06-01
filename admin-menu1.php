
<?php
  session_start();
  if($_SESSION['charType'] == '3' || $_SESSION['charType'] == '2')
  {
    header('Location: logout.php');
  }

  require 'conn.php';
  if (!isset($_SESSION['id'])) {
    # code...
    header('Location: login.php');
  }

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin-menu</title>
	<link rel="shortcut icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="cssNew/admin_menu.css">
</head>
<body style="background-image: url(bg.png) ;
			background-repeat: no-repeat;
    background-attachment: fixed;background-size: 100% 100%;">
<div >
  <a href="admin-menu1.php"><button class="but"> Menu</button></a>
  <a href="admin-promo1.php"><button class="but"> Promotions</button></a>
 
  <a href="logout.php"><button class="but"> Log out</button></a>
</div>

<table style="width: 681px; height: 332px;" border="2" cellpadding="20">
<tbody>
<tr>
<th style="width: 161.6px;">ID</td>
<th style="width: 161.6px;">Food Name</td>
<th style="width: 161.6px;">Food Type</td>
<th style="width: 194.4px;">Image</td>
<th style="width: 194.4px;">Price</td>
</tr>
<?php 
	$sql = "SELECT * FROM menu";
	$set = mysqli_query($conn,$sql);

	if($set) {
		while ($rowTable = mysqli_fetch_assoc($set)) {
			# code...
		
	

 ?>


<tr>
<td style="width: 161.6px;"><?php echo $rowTable['id']; ?></td>
<td style="width: 161.6px;"><?php echo $rowTable['foodName']; ?></td>
<td style="width: 161.6px;"><?php echo $rowTable['foodType']; ?></td>
<td style="width: 194.4px;"><img width="100" height="100" src="<?php echo $rowTable['image']; ?>" ></td>
<td style="width: 194.4px;"><?php echo $rowTable['price']; ?></td>

</tr>

<?php } }?>
</tbody>
</table>

<form id="menuform" action="adminmenu.php" method="post" enctype="multipart/form-data" style="position:fixed; top: 250px; right: -500px;">
	<label>Food Id:     </label><input type="text" name="foodId" placeholder="food Id"><br/>
	<label>Food name: </label><input type="text" name="foodName" placeholder="food name">
	<select name="foodType">
		<option >
			food type
		</option >
		<option value="drinks">
			drinks
		</option >
		<option value="pizza">
			pizza
		</option>
	</select><br>
	
	<label>Food price: </label><input type="text" name="foodPrice" placeholder="food price"><br/>
	<label>img: </label><input type="file" name="image"><br>
	<input type="submit" name="add" value="add">
	<input type="submit" name="update" value="update">
	<input type="submit" name="remove" value="remove">
</form>

</body>
</html>