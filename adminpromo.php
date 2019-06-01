
<?php
  session_start();
  if($_SESSION['charType'] == '3' || $_SESSION['charType'] == '3')
  {
    header('Location: logoutS.php');
  }

  require 'conn.php';
  if (!isset($_SESSION['id'])) {
    # code...
    header('Location: login.php');
  }

 ?>



 <?php 
 				if (isset($_POST['add'])) {
 					# code...
 					$foodId= $_POST['foodID'];

 					$sql = "UPDATE menu SET promo='yes' WHERE id='{$foodId}'";
                	$inserted =  mysqli_query($conn, $sql);

                	if ($inserted) 
                	{
                		# code...
                		header('Location: admin-promo1.php');

                	}
                	else
                	{
                		header('Location: admin-promo1.php?error=yes');
                	}


 				}

 				if (isset($_POST['remove'])) {
 					# code...
 					$foodId= $_POST['foodID'];

 					$sql = "UPDATE menu SET promo='no' WHERE id='{$foodId}'";
                	$inserted =  mysqli_query($conn, $sql);

                	if ($inserted) 
                	{
                		# code...
                		header('Location: admin-promo1.php');

                	}
                	else
                	{
                		header('Location: admin-promo1.php?error=yes');
                	}


 				}



  ?>