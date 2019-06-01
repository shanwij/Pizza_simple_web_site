<?php
	session_start();
	require 'conn.php';
	
	if (isset($_POST['no'])) {
		# code...
		

			// $cartID = $_SESSION['cartNum'];
			// echo $cartID;
			echo $_POST['lab'];

			$cart = $_SESSION['cart'];   
                foreach ($cart as $key => $val )
                {
                    if ( $cart[$key]['index'] == $_POST['lab'])
                    {    
                        unset($cart[$key]);
                         $_SESSION['cart'] = $cart;
                         header('Location: account.php');
                    }
                }



	}
	else if (isset($_POST['ok'])) {
		# code...
		echo $_POST['lab'];

		foreach( $_SESSION['cart'] as $row )
 		    {
 		    	if($row['index']==$_POST['lab'])
 		    	{
 		    			echo "alo alo";
 		    			$id = (integer)$row['Id'];
 		    			$size = (integer)$row['size'];
 		    			$crust = (integer)$row['crust'];
 		    			$cheese = (integer)$row['cheese'];
 		    			$topping = (integer)$row['toppin'];
 		    			$instruction = $row['instructions'];
 		    			$quantity =(integer) $row['quantity'];
 		    			$payM =(integer) $row['payMethod'];
 		    			$name = $row['fname'];
 		    			$address = $row['address'];
 		    			$card =(integer) $row['card'];
 		    			$code =(integer) $row['code'];
 		    			$month =(integer) $row['month'];
 		    			$year =(integer) $row['year'];
 		    			$phoneNumber = $row['phoneNumber'];


 		    			$sql = "INSERT INTO orders 
	 							(id,foodId,size,crust,cheese,toppin,instruction,quantity,payMethod,name,address,card,code,month,year,PhoneNumber,pending) 
	 							VALUES
	 							(NULL,'$id','$size','$crust', '$cheese', '$topping', '$instruction' , '$quantity' , '$payM','$name', '$address', '$card' , '$code', '$month', '$year','$phoneNumber','yes') ";
	 					$results = mysqli_query($conn, $sql);

	 					if ($results) {
	 						# code...
	 						echo "amboooooooooooooo";

	 						$cart = $_SESSION['cart'];   
               				foreach ($cart as $key => $val )
              				{
                  				if ( $cart[$key]['index'] == $_POST['lab'])
                  				{    
                     				unset($cart[$key]);
                       				$_SESSION['cart'] = $cart;
                      				header('Location: account.php');
                   				}
                			}
	 						
	 					}






 		    	}

 		    }


	}
	else
	{
		header('Location: account.php');
	}




 ?>