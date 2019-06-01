
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

	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phoneNumber = $_POST['phoneNumber'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];




	if (isset($_POST['Submit1'])) 
	{
		# code...

		if (!(empty($fname)))
		{
			# code...
			$sql = "UPDATE users SET name='$fname' WHERE phoneNum='{$_SESSION['id']}'";
			$set = mysqli_query($conn, $sql);
			if ($set) 
			{
				# code...

				$sql = "SELECT * from users where  phoneNum = '{$_SESSION['id']}' ";
				$set = mysqli_query($conn,$sql);
				$user = mysqli_fetch_assoc($set);
				$_SESSION['name'] = $user['name'];
				$_SESSION['echoEmail'] = $user['email'];
				$_SESSION['echoAddress'] = $user['address'];
				$_SESSION['id'] = $user['phoneNum'];
				header('Location: account.php');




			}//end of if set





		}//end of validation

		if (!(empty($email))) 
		{
			# code...
			$sql = "UPDATE users SET email='$email' WHERE phoneNum='{$_SESSION['id']}'";
			$set = mysqli_query($conn, $sql);
			if ($set) 
			{
				# code...

				$sql = "SELECT * from users where  phoneNum = '{$_SESSION['id']}' ";
				$set = mysqli_query($conn,$sql);
				$user = mysqli_fetch_assoc($set);
				$_SESSION['name'] = $user['name'];
				$_SESSION['echoEmail'] = $user['email'];
				$_SESSION['echoAddress'] = $user['address'];
				$_SESSION['id'] = $user['phoneNum'];
				header('Location: account.php');




			}//end of if set
		}
		if (!(empty($address))) 
		{
			# code...
			$sql = "UPDATE users SET  address = '$address' WHERE phoneNum='{$_SESSION['id']}'";
			$set = mysqli_query($conn, $sql);
			if ($set) 
			{
				# code...

				$sql = "SELECT * from users where  phoneNum = '{$_SESSION['id']}' ";
				$set = mysqli_query($conn,$sql);
				$user = mysqli_fetch_assoc($set);
				$_SESSION['name'] = $user['name'];
				$_SESSION['echoEmail'] = $user['email'];
				$_SESSION['echoAddress'] = $user['address'];
				$_SESSION['id'] = $user['phoneNum'];
				header('Location: account.php');




			}//end of if set
		}
		


		



	}//end of checking the button submit1
	if(isset($_POST['Submit2']))
	{
		if($password == '' && $repassword == '')
		{
			header('Location: chngedetails.php');
			echo "input password";

		}
		else
		{
					if($password === $repassword)
					{
						$sql = "UPDATE users SET password='$password' WHERE phoneNum='{$_SESSION['id']}'";
						$set = mysqli_query($conn, $sql);

						if($set)
						{
							header('Location: logout.php');
						}//end of set

					}//checking password
		}
	}//end of submit 2


?>