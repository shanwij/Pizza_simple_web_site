
<?php
//config
  session_start();
  $hello = (string)"user".$_SESSION['id'];

  require 'conn.php';
  if (!isset($_SESSION['id'])) {
    # code...
    header('Location: login.php');
  }

 ?>

<?php 
	
	if(isset($_GET['ok']))
	{
		echo $_GET['send'];	
		
		foreach ($_SESSION['det'] as $key) {
			# code...
			if ($key['index'] == $_GET['send']) 
			{
				# code...
				 		$sql = "UPDATE orders SET pending='no' WHERE id='{$_GET['send']}'";
				 		$set = mysqli_query($conn, $sql);

				 		if ($set) 
				 		{
				 			# code...
				 			header('Location: cashir.php');
				 		}

	 		}



			}
		













	}//end of button ok
	else
	{
		header('Location: cashir.php');
	}//enf of else for redirecting
?>