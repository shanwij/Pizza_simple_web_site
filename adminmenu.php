
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


<!-- --------------------------------------------------------------------------------------------- -->
<?php 

  if (isset($_POST['add']))
  {
    $errors = array();
    // submitt button is clicked

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];

    $upload_to = 'images/'; 
    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "images/".$unique_image;

    //variables of text boxes

    $foodId=$_POST['foodId'];
    $foodName = $_POST['foodName'];
    $foodType= $_POST['foodType'];
    $foodPrice = $_POST['foodPrice'];


    // checking file size
    if ($file_size > 20000000) 
    {
      $errors[] = 'File size should be less than 5mb.';
      echo "file too large";
    }
    
    if (empty($errors)) 
    {

      $file_uploaded = move_uploaded_file($temp_name,$uploaded_image);
      echo $uploaded_image."</br>";
      echo $temp_name;
    
        //uploading to the main server
      $sql = "INSERT INTO menu(id, foodName,foodType,image,price,promo) 
                 VALUES(NULL,'$foodName','$foodType','$uploaded_image','$foodPrice','no')";
      $inserted =  mysqli_query($conn, $sql);
      if ($inserted) 
      {
           # code...
            header('Location: admin-menu1.php');
       
      }
      else
      {
        header('Location: admin-menu1.php?error=yes');
      }
    }
    else
    {
      echo "error";
    }
       




  }
      
  ?>

  <!-- --------------------------------------------------------------------------------------------------- -->


<?php 

  if (isset($_POST['remove'])) {
    # code...
    $foodId = $_POST['foodId'];
    $sql = "DELETE FROM menu WHERE id='{$foodId}'";
    $set = mysqli_query($conn, $sql);

    if ($set) 
    {
      # code...
      header('Location: admin-menu1.php');
    }
    else
    {
       header('Location: admin-menu1.php?error=yes');
    }

  }

 ?>


 <!-- ------------------------------------------------------------------------------------------ -->



<?php 
  if (isset($_POST['update'])) 
  {
    # code...
    if(!(empty($_FILES['image']['size'])))
    {

                  $errors = array();
                // submitt button is clicked

                $file_name = $_FILES['image']['name'];
                $file_type = $_FILES['image']['type'];
                $file_size = $_FILES['image']['size'];
                $temp_name = $_FILES['image']['tmp_name'];

                $upload_to = 'images/'; 
                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "images/".$unique_image;

                //variables of text boxes

                $foodId=$_POST['foodId'];


                // checking file size
                if ($file_size > 20000000) 
                {
                  $errors[] = 'File size should be less than 5mb.';
                  echo "lokui";
                }
                
                if (empty($errors)) 
                {

                  $file_uploaded = move_uploaded_file($temp_name,$uploaded_image);
                  echo $uploaded_image."</br>";
                  echo $temp_name;
                
                    //uploading to the main server
                  $sql = "UPDATE menu SET image='$uploaded_image' WHERE id='{$foodId}'";
                  $inserted =  mysqli_query($conn, $sql);
                  if ($inserted) 
                  {
                       # code...
                        header('Location: admin-menu1.php');
                   
                  }
                  else
                  {
                    header('Location: admin-menu1.php?error=yes');
                  }
                }
                else
                {
                  echo "error";
                }


    }
  

   if (!(empty($_POST['foodName']) ))
    {
                # code...
                $foodName = $_POST['foodName'];
                $foodId=$_POST['foodId'];

                $sql = "UPDATE menu SET foodName='$foodName' WHERE id='{$foodId}'";
                $inserted =  mysqli_query($conn, $sql);
                if ($inserted) 
                {
                     # code...
                      header('Location: admin-menu1.php');
                 
                }
                else
                {
                  header('Location: admin-menu1.php?error=yes');
                }



   }
   if (!(empty($_POST['foodPrice']))) 
   {

                $foodPrice = $_POST['foodPrice'];
                $foodId=$_POST['foodId'];


                $sql = "UPDATE menu SET price='$foodPrice' WHERE id='{$foodId}'";
                $inserted =  mysqli_query($conn, $sql);
                if ($inserted) 
                {
                     # code...
                      header('Location: admin-menu1.php');
                 
                }
                else
                {
                  header('Location: admin-menu1.php?error=yes');
                }



  }
  if (!(empty($_POST['foodType']))) 
  {
    # code...
                $foodType = $_POST['foodType'];
                $foodId=$_POST['foodId'];


                $sql = "UPDATE menu SET foodType='$foodType' WHERE id='{$foodId}'";
                $inserted =  mysqli_query($conn, $sql);
                if ($inserted) 
                {
                     # code...
                      header('Location: admin-menu1.php');
                 
                }
                else
                {
                  header('Location: admin-menu1.php?error=yes');
                }
  }
  else
  {
                header('Location: admin-menu1.php?error=yes');
  }








  }

 ?>


  

