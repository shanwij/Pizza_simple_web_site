
<?php
  session_start();
  if($_SESSION['charType'] == '3' || $_SESSION['charType'] == '2')
  {
    header('Location: logoutS.php');
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
	<title>Admin-promotions</title>
	<link rel="shortcut icon"  href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="cssNew/admin_promo.css">
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
	$sql = "SELECT * FROM menu WHERE promo='yes'";
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

<form id="menuform" action="adminpromo.php" method="post" style="position: fixed;top: 200px;">
	
	<select id="li" name="foodID">
		<option>
			Food ID
		</option>

		<?php 
			$sql = "SELECT * FROM menu";
			$set = mysqli_query($conn,$sql);


			if ($set) {
				# code...
				while ($rowopotion = mysqli_fetch_assoc($set)) {
					# code...
		
		 ?>

		<option value="<?php echo $rowopotion['id']; ?>">
			<?php echo $rowopotion['id']; ?>
		</option>
		<?php 
					}
			}

		 ?>
	</select><br>
	<input type="submit" name="add" value="Add">
	<input type="submit" name="remove" value="Remove">
</form>

</body>
</html>